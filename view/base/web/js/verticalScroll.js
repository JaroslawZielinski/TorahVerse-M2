define([
    'jquery',
    'timeFrameManager'
], function($, timeFrameManager) {
    'use strict';

    const rowsOfGoodScroll = 20;

    $.widget('verses.verticalScroll', {
        defaults: {
            'parent_html_id': '#',
            'sweep_time': 1000,
            'content_shown_rows': 3,
            'onFinish': function (verticalScroll, vParentHtmlId, vHtmlId) {}
        },
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
            const htmlId = '#' + $(element).attr('id');
            const listHtmlID = htmlId + ' .list';
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
                    .addClass('empty-wagon')
                    .appendTo($(listHtmlID));
            }
            //clear intervals
            timeFrameManager.unRegister(htmlId);
            //start vertical slider
            timeFrameManager.register(htmlId, function () {
                const $list = $(htmlId + ' .list');
                const slideHeight = $list.find('div:first').outerHeight(true);
                const pixelsPerSecond = 10;
                const duration = (slideHeight / pixelsPerSecond) * 1000;
                function scrollNext() {
                    // Immediately continue scrolling
                    $list.animate({scrollTop: slideHeight}, {
                        duration: duration,
                        easing: 'linear',
                        complete: function () {
                            // Move element
                            $list.find('div:last').after($list.find('div:first'));
                            $list.scrollTop(0);
                            const $lastDiv = $list.find('div.empty-wagon:first');
                            const $lastDivNumber = parseInt($lastDiv.attr('class'));
                            const $firstDiv = $list.find('div:first');
                            const currentSlide = parseInt($firstDiv.attr('class'));
                            if ($lastDivNumber <= currentSlide) {
                                $(element).html(self.previousHtml);
                                self.options.onFinish(self, self.parentHtmlID, htmlId);
                            } else {
                                scrollNext();
                            }
                        }
                    });
                }
                scrollNext();
            }, self.options.sweep_time);
        }
    });

    return $.verses.verticalScroll;
});
