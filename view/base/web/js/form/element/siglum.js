/**
 * @api
 */
define([
    'jquery',
    'underscore',
    'Magento_Ui/js/form/element/abstract',
    'text!JaroslawZielinski_TorahVerse/template/form/element/buttons/multiButtons.html',
    'mage/translate',
    'verseUtils'
], function ($, _, Component, multiButtons, $t, utils) {
    'use strict';

    return Component.extend({
        defaults: {
            resultSelector: '#preview-result',
            parts: {
                translation: '',
                group: '',
                book: '',
                chapter: '',
                verseStart: '',
                verseStop: ''
            },
            progressPointer: 6,
            initialState: 1
        },
        renderDivisionArray: function () {
            if (utils.inArray(this.parts.translation, ['eib', 'sz', 'tnp'])) {
                return Object
                    .keys(this.division)
                    .reduce(
                        function (result, key) {
                            if (!utils.inArray(key, ['Old Testament', 'Tanakh', 'Nevi\'im ketuvim'])) {
                                result[key] = $t(key);
                            }
                            return result;
                        },
                        {}
                    );
            }
            return Object
                .keys(this.division)
                .reduce(
                    function (result, key) {
                        result[key] = $t(key);
                        return result;
                    },
                    {}
                );
        },
        renderSetGroup: function () {
            let buttons = this.renderDivisionArray(),
                m = Object.keys(buttons).length,
                n = 1;
            const data = {
                m: m,
                n: n,
                label: $t('Choose group:'),
                isFinished: 'false',
                disabled: 'true',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        renderSetBook: function () {
            const booksByTranslation = this.structure[this.parts.translation];
            let booksSelected = [];
            switch (this.divisionType) {
                case 'two-division':
                    const map = utils.getGroupsMap();
                    const groups = map[this.parts.group];
                    for (let i = 0; i < groups.length; i++) {
                        const foundBooks = Object.keys(booksByTranslation[groups[i]]);
                        for (let j = 0; j < foundBooks.length; j++) {
                            booksSelected.push(foundBooks[j]);
                        }
                    }
                    break;
                case 'three-division':
                    booksSelected = Object.keys(booksByTranslation[this.parts.group]);
                    break;
            }
            let self = this;
            let buttons = booksSelected.reduce(
                    function (result, key) {
                        result[key] = self.division[self.parts.group][key][self.language];
                        return result;
                    },
                    {}
                ),
                m = 5,
                n = Object.keys(buttons).length / m;
            const data = {
                m: m,
                n: n,
                label: $t('Choose book:'),
                isFinished: 'false',
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        getCurrentChapters: function () {
            const selectedTorah = this.structure[this.parts.translation];
            const selectedGroup = utils
                .findIt(Object.entries(selectedTorah), this.parts.book)
                .pop()[0];
            return selectedTorah[selectedGroup][this.parts.book]['chapters'];
        },
        renderSetChapter: function () {
            const chapters = this.getCurrentChapters();
            let buttons = Object
                    .keys(chapters)
                    .reduce(
                        function (result, key) {
                            result[key] = key;
                            return result;
                        },
                        {}
                    ),
                m = 5,
                n = Object.keys(buttons).length / m;
            const data = {
                m: m,
                n: n,
                label: $t('Choose chapter:'),
                isFinished: 'false',
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        renderSetVerseStart: function () {
            const chapters = this.getCurrentChapters();
            const versesMax = chapters[this.parts.chapter];
            let buttons = {};
            for (let i = 1; i <= versesMax; i++) {
                buttons[i] = i;
            }
            let m = 5,
                n = Object.keys(buttons).length / m;
            const data = {
                m: m,
                n: n,
                label: $t('Choose verse start:'),
                isFinished: 'false',
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        renderSetVerseStop: function () {
            const chapters = this.getCurrentChapters();
            const versesMax = chapters[this.parts.chapter];
            let buttons = {};
            for (let i = this.parts.verseStart; i <= versesMax; i++) {
                buttons[i] = i;
            }
            buttons['.'] = '.';
            let m = 5,
                n = Object.keys(buttons).length / m;
            const data = {
                m: m,
                n: n,
                label: $t('Choose verse stop:'),
                isFinished: 'false',
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        renderSetFinished: function () {
            let buttons = {},
                m = 1,
                n = 1;
            const data = {
                m: m,
                n: n,
                label: this.value(),
                isFinished: 'true',
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        renderButtons: function () {
            let result = '';
            switch (this.progressPointer) {
                default:
                case 1:
                    result = this.renderSetGroup();
                    break;
                case 2:
                    result = this.renderSetBook();
                    break;
                case 3:
                    result = this.renderSetChapter();
                    break;
                case 4:
                    result = this.renderSetVerseStart();
                    break;
                case 5:
                    result = this.renderSetVerseStop();
                    break;
                case 6:
                    result = this.renderSetFinished();
                    break;
            }
            return result;
        },
        handleButtons: function () {
            this.reduceToInitialState();
            let self = this;
            $('.btn-torah').off().on('click', function (event) {
                const dataId = event.target.dataset.id;
                if (utils.isEmpty(self.parts.translation)) {
                    return;
                }
                if (0 === self.progressPointer || self.progressPointer > 6) {
                    self.progressPointer = 6;
                }
                switch (self.progressPointer) {
                    default:
                    case 1:
                        self.parts.group = dataId;
                        break;
                    case 2:
                        self.parts.book = dataId;
                        break;
                    case 3:
                        self.parts.chapter = dataId;
                        break;
                    case 4:
                        self.parts.verseStart = dataId;
                        break;
                    case 5:
                        self.parts.verseStop = dataId;
                        if ('.' === dataId) {
                            self.parts.verseStop = '';
                        }
                        break;
                    case 6:
                        break;
                }
                self.progressPointer++;
                self.updateUi();
            });
            $('.btn-back').off().on('click', function (event) {
                if (self.progressPointer > 1) {
                    self.progressPointer--;
                }
                switch (self.progressPointer) {
                    case 1:
                        self.parts.group = '';
                    case 2:
                        self.parts.book = '';
                    case 3:
                        self.parts.chapter = '';
                    case 4:
                        self.parts.verseStart = '';
                    case 5:
                        self.parts.verseStop = '';
                        self.updateUi();
                    default:
                    case 6:
                }
            });
        },
        /**
         * Refresh buttons and add onclick handling
         */
        updateUi: function () {
            try {
                this.value(this.updateValue());
                $('#buttons').html(this.renderButtons());
                this.handleButtons();
            } catch (e) {}
        },
        findGroupByBook: function (book) {
            return utils.findIt(Object.entries(this.division), book).pop()[0];
        },
        updateState: function (value) {
            const parts = value.split('/');
            try {
                this.parts.translation = parts[0];
                this.parts.book = parts[1];
                this.parts.chapter = parts[2];
                const verseArray = parts[3].split('-');
                this.parts.verseStart = verseArray[0];
                this.parts.verseStop = undefined !== verseArray[1] ? verseArray[1] : verseArray[0];
                this.parts.group = this.findGroupByBook(this.parts.book)
            } catch (e) {}
        },
        updateValue: function() {
            let verse = '' !== this.parts.verseStop && this.parts.verseStart !== this.parts.verseStop
                ? this.parts.verseStart + '-' + this.parts.verseStop : this.parts.verseStart;
            return this.parts.translation + '/' + this.parts.book + '/' +
                this.parts.chapter + '/' + verse;
        },
        reduceToInitialState: function () {
            switch (parseInt(this.initialState)) {
                case 1:
                    this.parts.group = '';
                case 2:
                    this.parts.book = '';
                case 3:
                    this.parts.chapter = '';
                case 4:
                    this.parts.verseStart = '';
                case 5:
                    this.parts.verseStop = '';
                    this.value(this.updateValue());
                    this.progressPointer = parseInt(this.initialState);
                    this.initialState = '6';
                    $('#buttons').html(this.renderButtons());
                default:
                case 6:
            }
        },
        initialize: function () {
            this._super();
            this.updateState(this.initialValue);
            this.previewSiglum();
            return this;
        },
        translationBinding: function (obj, event) {
            const translation = event.target.value;
            if ('' !== translation) {
                this.parts.translation = translation;
                this.updateUi();
            }
        },
        previewSiglum: function () {
            var self = this,
                ajaxUrl = self.previewUrl,
                codeData = self.value._latestValue.split('/'),
                translationCode = codeData[0],
                siglumCode = self.value._latestValue.replace(translationCode + '/', ''),
                resultId = self.resultSelector;
            if (undefined !== translationCode && undefined !== siglumCode) {
                let formKey = window.FORM_KEY || $('input[name="form_key"]').val();
                $.ajax({
                    showLoader: false,
                    url: ajaxUrl,
                    data: {
                        isAjax: true,
                        form_key: formKey,
                        translation: translationCode,
                        siglum: siglumCode
                    },
                    type: 'GET',
                    dataType: 'json'
                }).done(function (data) {
                    $(resultId).html(data['result']);
                });
            }
        },
        /**
         * Callback that fires when 'value' property is updated.
         */
        onUpdate: function () {
            this.bubble('update', this.hasChanged());
            this.validate();
            this.previewSiglum();
        }
    });
});
