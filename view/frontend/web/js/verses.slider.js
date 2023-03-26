define([
    'jquery',
    'verticalScroll'
], function($, verticalScroll) {
    'use strict';

    /**
     * Hydrate template with key vars by given values (f.e. {variable} to 'test')
     * @see https://stackoverflow.com/questions/377961/efficient-javascript-string-replacement#answer-50545691
     */
    function replaceMe (template, data) {
        const pattern = /{\s*(\w+?)\s*}/g; // {property}
        return template.replace(pattern, (_, token) => data[token] || '');
    };

    /**
     * Randomize array element order in-place.
     * Using Durstenfeld shuffle algorithm.
     * @see https://stackoverflow.com/questions/2450954/how-to-randomize-shuffle-a-javascript-array/12646864#12646864
     * @protected
     * @param {array} array
     */
    function shuffleArray (array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            const temp = array[i];
            array[i] = array[j];
            array[j] = temp;
        }
        return array;
    };

    $.widget('verses.slider', {
        defaults: {
            'sweep_time': 100,
            'is_vertical_sweep_possible': true,
            'vertical_sweep_time': 5,
            'vertical_characters_trigger': 100,
            'is_group_colours': true,
            'verses_ordered': true,
            'text_colour': '#ff0000',
            'mode': 'autoplayinf'
        },
        nIntervalID: null,
        htmlId: null,
        max: null,
        current: 0,
        suppress: false,
        /**
         * Merge global options with options passed to widget invoke
         * @protected
         */
        _create: function () {
            this.options = $.extend(
                this.defaults,
                this.options
            );

            this._initSlider(this.element);
        },
        /**
         * Init Verses Slider
         * @protected
         * @param {Object} element
         */
        _initSlider: function (element) {
            //count of items
            this.max = this.options.items.length;
            //add html ID
            this.htmlId = 'vs_';
            this.htmlId += Date.now();
            $(element).attr('id', this.htmlId);
            //add Pause on hover
            $(element).on('mouseenter', function (event) {
                $(element).addClass('paused-slider');
            });
            $(element).on('mouseleave', function (event) {
                $(element).removeClass('paused-slider');
            });
            //switch slider mode
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
            this.options.items = shuffleArray(this.options.items);
            //move infite auto play mode
            this._moveInfiniteAutoPlayMode(element);
        },
        /**
         * @protected
         * @param {Object} element
         */
        _moveInfiniteAutoPlayMode: function (element) {
            let self = this;
            //initial Swipe;
            self._moveRandomMode(element);
            self.nIntervalID = setInterval(function () {
                const isPaused = $(element).hasClass('paused-slider');
                if (!this.suppress && !isPaused) {
                    if (self.current + 1 < self.max) {
                        self.current++;
                    } else {
                        self.current = 0;
                    }
                    self._moveSlide(element);
                }
            },self.options.sweep_time);
        },
        /**
         * @protected
         * @param {Object} element
         */
        _moveRandomMode: function (element) {
            this.current = Math.floor(Math.random() * this.max);
            this._moveSlide(element);
        },
        /**
         * Move Single Verse Slide
         * @protected
         * @param {Object} element
         */
        _moveSlide: function (element) {
            const item = this.options.items[this.current];
            let html = '';
            if (this.options.is_group_colours) {
                html = item.group_colours_template;
            } else {
                html = item.template;
            }
            const data = $.extend({}, item.data, {
                'textColour': this.options.text_colour,
                'content': this.options.verses_ordered ? item.data.content : item.data.unordered
            });
            const hydratedHtml = replaceMe(html, data);
            $(element).hide();
            $(element).html(hydratedHtml);
            if (this.options.vertical_characters_trigger <= data.content.length) {
                //event that content is too big (requires vertical scroll)
                let self = this;
                self.suppress = true;
                $('#' + self.htmlId + ' a .item .content').verticalScroll({
                    'sweep_time': self.vertical_sweep_time,
                    'character_trigger': self.vertical_characters_trigger,
                    'onFinish': function (verticalScroll) {
                        self.suppress = false;
                        verticalScroll.unScroll();
                    }
                });
            }
            $(element).show();
        }
    });

    return $.verses.slider;
});
