define([
    'jquery'
], function($) {
    'use strict';

    const rowsOfGoodScroll = 20;

    $.widget('verses.verticalScroll', {
        defaults: {
            'parent_html_id': '#',
            'sweep_time': 1000,
            'content_shown_rows': 3,
            'onFinish': function (verticalScroll, vParentHtmlId, vHtmlId) {}
        },
        nIntervalIDs: [],
        htmlID: null,
        parentHtmlID: null,
        previousHtml: null,
        lastLine: 0,
        _create: function() {
            this.options = $.extend(
                this.defaults,
                this.options
            );
            this._initElement(this.element);
            this._initScroll(this.element);
        },
        /**
         * Init Element
         * @protected
         * @param {Object} element
         */
        _initElement: function (element) {
            //add html ID
            let htmlId = 'vsc_';
            htmlId += Date.now();
            htmlId += '_' + Math.floor(Math.random() * 1000);
            $(element).attr('id', htmlId);
            this.htmlID = htmlId;
            this.parentHtmlID = this.options.parent_html_id;
            this.previousHtml = $(element).html();
        },
        /**
         * Init Vertical Scroll
         *
         * @see https://stackoverflow.com/questions/55873215/how-to-create-vertically-scrolling-divs-in-jquery#answer-55917640
         * @protected
         * @param {Object} element
         */
        _initScroll: function (element) {
            const self = this;
            const htmlId = $(element).attr('id');
            const listHtmlID = '#' + htmlId + ' .list';
            self.lastLine = parseInt($('div:last', $(listHtmlID)).attr('class'));
            let emptyWagonsCount = 0;
            if (self.lastLine < rowsOfGoodScroll) {
                emptyWagonsCount = rowsOfGoodScroll - self.lastLine;
            } else {
                emptyWagonsCount = self.options.content_shown_rows;
            }
            for (let i = 0; i < emptyWagonsCount; i++) {
                $('<div>', {class: i + self.lastLine + 1})
                    .html('&nbsp;')
                    .appendTo($(listHtmlID));
            }
            //clear intervals
            self.unScroll(htmlId);
            //start vertical slider
            self.nIntervalIDs[htmlId] = setInterval(function () {
                $('#' + htmlId + ' .list')
                    .animate({scrollTop: 40}, 400, 'swing', function () {
                        $(this)
                            .find('div:last')
                            .after($('div:first', this));
                        const currentSlide = parseInt($('div:first', this).attr('class'));
                        if (self.lastLine === currentSlide) {
                            $(element).html(self.previousHtml);
                            self.options.onFinish(self, self.parentHtmlID, htmlId);
                        }
                    });
            }, self.options.sweep_time);
        },
        unScroll: function (htmlId) {
            const nInternalID = this.nIntervalIDs[htmlId];
            if (nInternalID) {
                clearInterval(nInternalID);
            }
            return nInternalID;
        }
    });

    return $.verses.verticalScroll;
});
