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
            'verse_colour': 'red'
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
            let self = this;
            self.max = self.options.items.length;
            //initial Swipe;
            self._moveSlide(element);
            self.nIntervalID = setInterval(function () {
                self._moveSlide(element);
            },self.options.sweep_time);
        },
        /**
         * Move Single Verse Slide
         * @protected
         * @param {Object} element
         */
        _moveSlide: function (element) {
            const html = this.options.template;
            const data = $.extend(this.options.items[this.current], {
                'verseColour': this.options.verse_colour
            });
            const hydratedHtml = replaceMe(html, data);

            $(element).hide();
            $(element).html(hydratedHtml);
            $(element).show();

            if (this.current + 1 < this.max) {
                this.current++;
            } else {
                this.current = 0;
            }
        }
    });

    return $.verses.slider;
});
