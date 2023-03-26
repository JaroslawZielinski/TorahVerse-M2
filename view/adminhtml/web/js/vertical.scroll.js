define([
    'jquery'
], function($) {
    'use strict';

    /**
     * @see https://stackoverflow.com/questions/6259515/how-can-i-split-a-string-into-segments-of-n-characters#answer-70415465
     *
     * @param myString
     * @param chunkSize
     * @returns {*[]}
     */
    function stringSplitter(myString, chunkSize) {
        let splitString = [];
        for (let i = 0; i < myString.length; i = i + chunkSize) {
            splitString.push(myString.slice(i, i + chunkSize));
        }
        return splitString;
    }

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
            const preparedStructure = this._prepareStructure($(element).text());
            $(element).html(preparedStructure);
            //TODO: start of the event...
            //@see https://stackoverflow.com/questions/55873215/how-to-create-vertically-scrolling-divs-in-jquery#answer-55917640
            this.options.onFinish(this);
        },
        /**
         * Prepares html structure for vertical scroll slider
         * @param text
         * @returns {*|jQuery}
         * @protected
         */
        _prepareStructure: function (text) {
            const lines = stringSplitter(text, this.options.character_trigger);
            let preparedHtml = $('<div>', {class: 'list'});
            for (let i = 0; i < lines.length; i++) {
                $(preparedHtml).append($('<div>', {class: i}).html(lines[i]));
            }
            return $('<div>', {class: 'transformed'}).html($(preparedHtml))
        },
        unScroll: function () {
            console.log('Vertical Scroll destroyed:)');
        }
    });

    return $.verses.verticalScroll;
});
