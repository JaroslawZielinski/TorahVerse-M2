define([
    'jquery'
], function($) {
    'use strict';
    /**
     * @see https://stackoverflow.com/questions/377961/efficient-javascript-string-replacement#answer-50545691
     */
    function replaceMe(template, data) {
        const pattern = /{\s*(\w+?)\s*}/g; // {property}
        return template.replace(pattern, (_, token) => data[token] || '');
    };

    $.widget('verses.slider', {
        defaults: {
            'sweep_time': 100,
            'verses_ordered': true,
            'text_colour': '#ff0000',
            'mode': 'autoplayinf'
        },
        nIntervalID: null,
        max: null,
        current: 0,
        /**
         * Merge global options with options passed to widget invoke
         * @protected
         */
        _create: function() {
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
            this.max = this.options.items.length;
            switch (this.options.mode) {
                default:
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
        _moveInfiniteAutoPlayMode: function (element) {
            let self = this;
            //initial Swipe;
            self._moveRandomMode(element);
            self.nIntervalID = setInterval(function () {
                if (self.current + 1 < self.max) {
                    self.current++;
                } else {
                    self.current = 0;
                }
                self._moveSlide(element);
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
            const html = this.options.verse_template;
            const item = this.options.items[this.current];
            const data = $.extend({}, item, {
                'textColour': this.options.text_colour,
                'content': this.options.verses_ordered ? item.content : item.unordered
            });
            const hydratedHtml = replaceMe(html, data);

            $(element).hide();
            $(element).html(hydratedHtml);
            $(element).show();
        }
    });

    return $.verses.slider;
});
