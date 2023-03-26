define([
    'jquery'
], function($) {
    'use strict';

    $.widget('verses.verticalScroll', {
        defaults: {
            'sweep_time': 100,
            'character_trigger': 500,
            'onFinish': function (verticalScroll) {}
        },
        _create: function() {
            this.options = $.extend(
                this.defaults,
                this.options
            );

            this._initScroll(this.element);
        },
        /**
         * Init Verses Slider
         * @protected
         * @param {Object} element
         */
        _initScroll: function (element) {
            //TODO: start of the event...
            //@see https://stackoverflow.com/questions/55873215/how-to-create-vertically-scrolling-divs-in-jquery#answer-55917640
            const preparedStructure = this._prepareStructure($(element).text());
            $(element).html(preparedStructure);
            this.options.onFinish(this);
        },
        _prepareStructure: function (text) {
            return $('<div>', {class: 'vertical-scroll'}).html(text)
        },
        unScroll: function () {
            console.log('Vertical Scroll destroyed:)');
        }
    });

    return $.verses.verticalScroll;
});
