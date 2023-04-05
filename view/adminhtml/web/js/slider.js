define([
    'jquery',
    'verticalScroll',
    'verseUtils'
], function($, verticalScroll, verseUtils) {
    'use strict';

    // Value related to Arial 14pt
    const wWidth = 6.5;

    $.widget('verses.slider', {
        defaults: {
            'sweep_time': 100,
            'is_vertical_sweep_possible': true,
            'vertical_sweep_time': 5,
            'is_group_colours': true,
            'verses_ordered': true,
            'text_colour': '#ff0000',
            'mode': 'autoplayinf',
            'content_shown_rows': 3
        },
        htmlID: null,
        max: null,
        wMax: 255,
        current: 0,
        nIntervalIDs: [],
        suppress: [],
        /**
         * Merge global options with options passed to widget invoke
         * @protected
         */
        _create: function () {
            this.options = $.extend(
                this.defaults,
                this.options
            );
            this._initElement(this.element);
            this._initSlider(this.element);
            this._addResizeWindowEvent(this.element);
        },
        /**
         * Init Element
         * @protected
         * @param {Object} element
         */
        _initElement: function (element) {
            //add html ID
            let htmlId = 'vs_';
            htmlId += Date.now();
            htmlId += '_' + Math.floor(Math.random() * 1000);
            $(element).attr('id', htmlId);
            this.htmlID = htmlId;
        },
        /**
         * Init Verses Slider
         * @protected
         * @param {Object} element
         */
        _initSlider: function (element) {
            //count of items
            this.max = this.options.items.length;
            //format width of an element
            let words = '';
            for (let i = 0; i < 160; i++) {
                words += 'w';
            }
            $(element).html(words);
            //determine parent width
            this._determineWMax(element);
            //add Pause on hover
            $(element).off('mouseenter').on('mouseenter', function (event) {
                $(element).addClass('paused-slider');
            });
            $(element).off('mouseleave').on('mouseleave', function (event) {
                $(element).removeClass('paused-slider');
            });
            //switch slider mode
            this._dispatchSliders(element);
        },
        /**
         * Determine wMax
         * @protected
         */
        _determineWMax: function (element) {
            const htmlId = $(element).attr('id');
            const slider = document.getElementById(htmlId);
            const width = slider.clientWidth;
            this.wMax = Math.round(width/wWidth);
        },
        /**
         * resize Window
         * @protected
         */
        _addResizeWindowEvent: function (element) {
            let self = this;
            $(window).resize(function() {
                const htmlId = $(element).attr('id');
                if (self.nIntervalIDs[htmlId]) {
                    clearInterval(self.nIntervalIDs[htmlId]);
                }
                self.suppress[htmlId] = false;
                //switch slider mode
                self._initSlider(element);
            });
        },
        /**
         * Dispatch Slider mode
         * @protected
         * @param {Object} element
         */
        _dispatchSliders: function (element) {
            switch (this.options.mode) {
                default:
                case 'randomautoplayinf':
                    this._moveRandomInfiniteAutoPlayMode(element);
                    break;
                case 'autoplayinf':
                    this._moveInfiniteAutoPlayMode(element);
                    break;
                case 'random':
                    this._moveRandomMode(element);
                    break;
            }
        },
        /**
         * @protected
         * @param {Object} element
         */
        _moveRandomInfiniteAutoPlayMode: function (element) {
            //randomize item elements
            this.options.items = verseUtils.shuffleArray(this.options.items);
            //move infite auto play mode
            this._moveInfiniteAutoPlayMode(element);
        },
        /**
         * @protected
         * @param {Object} element
         */
        _moveInfiniteAutoPlayMode: function (element) {
            const self = this;
            const htmlId = $(element).attr('id');
            //initial Swipe;
            self._moveSingleRandomMode(element);
            self.nIntervalIDs[htmlId] = setInterval(function () {
                if (!self.suppress[htmlId]) {
                    const isPaused = $(element).hasClass('paused-slider');
                    if (!isPaused) {
                        if (self.current + 1 < self.max) {
                            self.current++;
                        } else {
                            self.current = 0;
                        }
                    }
                    self._moveSlide(element);
                }
            },self.options.sweep_time);
        },
        /**
         * @protected
         * @param {Object} element
         */
        _moveSingleRandomMode: function (element) {
            this.current = Math.floor(Math.random() * this.max);
            this._moveSlide(element);
        },
        /**
         * @protected
         * @param {Object} element
         */
        _moveRandomMode: function (element) {
            const self = this;
            const htmlId = $(element).attr('id');
            //initial Swipe;
            self._moveSingleRandomMode(element);
            self.nIntervalIDs[htmlId] = setInterval(function () {
                if (!self.suppress[htmlId]) {
                    const isPaused = $(element).hasClass('paused-slider');
                    if (isPaused) {
                        self._moveSlide(element);
                    }
                }
            },self.options.sweep_time);
        },
        /**
         * Move Single Verse Slide
         * @protected
         * @param {Object} element
         */
        _moveSlide: function (element) {
            const self = this;
            const item = self.options.items[self.current];
            let html = '';
            if (self.options.is_group_colours) {
                html = item.group_colours_template;
            } else {
                html = item.template;
            }
            const data = $.extend({}, item.data, {
                textColour: self.options.text_colour,
                content: '"' + (self.options.verses_ordered ? item.data.content : item.data.unordered) + '"'
            });
            const hydratedHtml = verseUtils.replaceMe(html, data);
            $(element).hide();
            $(element).html(hydratedHtml);
            const htmlSliderContent = verseUtils.stringToSliderStructure(data.content, self.wMax);
            const htmlContentSelector = '#' + self.htmlID + ' a .item .content';
            $(htmlContentSelector).html(htmlSliderContent);
            if (self.options.is_vertical_sweep_possible && self.options.content_shown_rows * self.wMax <= data.content.length) {
                //event that content is too big (requires vertical scroll - more than 2 rows)
                self.suppress[self.htmlID] = true;
                $(htmlContentSelector).verticalScroll({
                    'parent_html_id': self.htmlID,
                    'sweep_time': self.options.vertical_sweep_time,
                    'content_shown_rows': self.options.content_shown_rows,
                    'onFinish': function (verticalScroll, vParentHtmlId, vHtmlId) {
                        self.suppress[vParentHtmlId] = false;
                        verticalScroll.unScroll(vHtmlId);
                    }
                });
            }
            $(element).show();
        }
    });

    return $.verses.slider;
});
