
define([
    'jquery',
    'underscore',
    'text!JaroslawZielinski_TorahVerse/template/form/element/buttons/multiButtons.html',
    'mage/translate',
    'verseUtils'
], function($, _, multiButtons, $t, utils) {
    'use strict';

    function empty(str) {
        return (!str || str.length === 0 );
    }

    $.widget('verses.inputTorah', {
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
            initialState: 1,
            service_link_enable: true
        },
        _value: null,
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
        },
        /**
         * Init Element
         * @protected
         * @param {Object} element
         */
        _initElement: function (element) {
            this.updateState(this.options.initialValue);
            this.updateUi(true);
            let self = this;
            $('#translations').off().on('change', function (event) {
                const translation = event.target.value;
                if ('' !== translation) {
                    self.options.parts.translation = translation;
                    self.updateUi();
                }
            });
        },
        updateState: function (value) {
            const parts = value.split('/');
            try {
                this.options.parts.translation = parts[0];
                this.options.parts.book = parts[1];
                this.options.parts.chapter = parts[2];
                const verseArray = parts[3].split('-');
                this.options.parts.verseStart = verseArray[0];
                this.options.parts.verseStop = undefined !== verseArray[1] ? verseArray[1] : verseArray[0];
                this.options.parts.group = this.findGroupByBook(this.options.parts.book);
            } catch (e) {}
        },
        findGroupByBook: function (book) {
            return utils.findIt(Object.entries(this.options.division), book).pop()[0];
        },
        previewSiglum: function () {
            var self = this,
                ajaxUrl = self.options.previewUrl,
                value = self.value(),
                codeData = value.split('/'),
                translationCode = codeData[0],
                siglumCode = value.replace(translationCode + '/', ''),
                resultId = self.options.resultSelector;
            if (undefined !== translationCode && undefined !== siglumCode) {
                let formKey = window.FORM_KEY || $('input[name="form_key"]').val();
                return utils.ajaxGetItJson(ajaxUrl, {
                    isAjax: true,
                    form_key: formKey,
                    translation: translationCode,
                    siglum: siglumCode
                }, function (data) {
                    $(resultId).html(data['result']);
                });
            }
            return null;
        },
        renderDivisionArray: function () {
            if (utils.inArray(this.options.parts.translation, ['eib', 'sz', 'tnp'])) {
                const keys = Object.keys(this.options.divisionTranslation);
                let result = {};
                for (let index = 0; index < keys.length; ++index) {
                    const newIndex = keys[index];
                    if (!utils.inArray(newIndex, ['Old Testament', 'Tanakh', 'Nevi\'im ketuvim'])) {
                        result[newIndex] = this.options.divisionTranslation[newIndex];
                    }
                }
                return result;
            }
            return this.options.divisionTranslation;
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
                service_link_enable: this.isServiceLinkEnable(),
                disabled: 'true',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        renderSetBook: function () {
            const booksByTranslation = this.options.structure[this.options.parts.translation];
            let booksSelected = [];
            switch (this.options.divisionType) {
                case 'two-division':
                    const map = utils.getGroupsMap();
                    const groups = map[this.options.parts.group];
                    for (let i = 0; i < groups.length; i++) {
                        let foundBooks = Object.keys(booksByTranslation[groups[i]]);
                        for (let j = 0; j < foundBooks.length; j++) {
                            booksSelected.push(foundBooks[j]);
                        }
                    }
                    break;
                case 'three-division':
                    booksSelected = Object.keys(booksByTranslation[this.options.parts.group]);
                    break;
            }
            let self = this;
            let buttons = booksSelected.reduce(
                    function (result, key) {
                        result[key] = self.options.division[self.options.parts.group][key][self.options.language];
                        return result;
                    },
                    {}
                ),
                m = 4,
                n = Object.keys(buttons).length / m;
            const data = {
                m: m,
                n: n,
                label: $t('Choose book:'),
                isFinished: 'false',
                service_link_enable: self.isServiceLinkEnable(),
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        getCurrentChapters: function () {
            const selectedTorah = this.options.structure[this.options.parts.translation];
            let selectedTorah2 = Object.entries(selectedTorah);
            // remove exceptions
            delete selectedTorah2[3];
            const selectedGroup = utils
                .findIt(selectedTorah2, this.options.parts.book).pop()[0];
            return selectedTorah[selectedGroup][this.options.parts.book]['chapters'];
        },
        renderSetChapter: function () {
            const chapters = utils.fixArray(this.getCurrentChapters());
            let buttons = Object
                    .keys(chapters)
                    .reduce(
                        function (result, key) {
                            result[key] = key;
                            return result;
                        },
                        {}
                    ),
                m = 4,
                n = Object.keys(buttons).length / m;
            const data = {
                m: m,
                n: n,
                label: $t('Choose chapter:'),
                isFinished: 'false',
                service_link_enable: this.isServiceLinkEnable(),
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        renderSetVerseStart: function () {
            let buttons = {},
                m = 1,
                n = 1;
            const data = {
                m: m,
                n: n,
                label: $t('Choose verse start:'),
                isFinished: 'false',
                service_link_enable: this.isServiceLinkEnable(),
                disabled: 'false',
                buttons: buttons
            };
            // Parallel calling Verse Start - start
            const ajaxUrl = this.options.structureUrl;
            let self = this;
            let formKey = window.FORM_KEY || $('input[name="form_key"]').val();
            const resultId = '#buttons';
            utils.ajaxGetItJson(ajaxUrl, {
                isAjax: true,
                form_key: formKey,
                translation: self.options.parts.translation,
                book: self.options.parts.book,
                chapter: self.options.parts.chapter
            }, function (ajaxData) {
                let ajaxButtons = JSON.parse(ajaxData['result']),
                    m = 4,
                    n = Object.keys(ajaxButtons).length / m;
                const ajaxTemplateData = {
                    m: m,
                    n: n,
                    label: $t('Choose verse start:'),
                    isFinished: 'false',
                    service_link_enable: self.isServiceLinkEnable(),
                    disabled: 'false',
                    buttons: ajaxButtons
                };
                const result = _.template(multiButtons)(ajaxTemplateData);
                $(resultId).html(result);
                self.handleButtons();
            }, true);
            // Parallel calling Verse Start - stop
            return _.template(multiButtons)(data);
        },
        renderSetVerseStop: function () {
            let buttons = {},
                m = 1,
                n = 1;
            const data = {
                m: m,
                n: n,
                label: $t('Choose verse stop:'),
                isFinished: 'false',
                service_link_enable: this.isServiceLinkEnable(),
                disabled: 'false',
                buttons: buttons
            };
            // Parallel calling Verse Stop - start
            const ajaxUrl = this.options.structureUrl;
            let self = this;
            let formKey = window.FORM_KEY || $('input[name="form_key"]').val();
            const resultId = '#buttons';
            utils.ajaxGetItJson(ajaxUrl, {
                isAjax: true,
                form_key: formKey,
                translation: self.options.parts.translation,
                book: self.options.parts.book,
                chapter: self.options.parts.chapter,
                verse: self.options.parts.verseStart
            }, function (ajaxData) {
                let ajaxButtons = JSON.parse(ajaxData['result']),
                    m = 4,
                    n = Object.keys(ajaxButtons).length / m;
                const ajaxTemplateData = {
                    m: m,
                    n: n,
                    label: $t('Choose verse stop:'),
                    isFinished: 'false',
                    service_link_enable: self.isServiceLinkEnable(),
                    disabled: 'false',
                    buttons: ajaxButtons
                };
                const result = _.template(multiButtons)(ajaxTemplateData);
                $(resultId).html(result);
                self.handleButtons();
            }, true);
            // Parallel calling Verse Stop - stop
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
                service_link_enable: this.isServiceLinkEnable(),
                baseUrl: this.options.baseUrl,
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        reduceToInitialState: function () {
            switch (parseInt(this.options.initialState)) {
                case 1:
                    this.options.parts.group = '';
                case 2:
                    this.options.parts.book = '';
                case 3:
                    this.options.parts.chapter = '';
                case 4:
                    this.options.parts.verseStart = '';
                case 5:
                    this.options.parts.verseStop = '';
                    this.options.progressPointer = parseInt(this.options.initialState);
                    this.options.initialState = '6';
                    this.updateUi(false);
                default:
                case 6:
            }
        },
        updateValue: function() {
            let verse = '' !== this.options.parts.verseStop &&
            this.options.parts.verseStart !== this.options.parts.verseStop
                ? this.options.parts.verseStart + '-' + this.options.parts.verseStop : this.options.parts.verseStart;
            return this.options.parts.translation + '/' + this.options.parts.book + '/' +
                this.options.parts.chapter + '/' + verse;
        },
        value: function (val) {
            if (undefined !== val) {
                this._value = val;
            }
            return !empty(this._value) ? this._value : '';
        },
        /**
         * Callback that fires when 'value' property is updated.
         */
        onUpdate: function () {
            $('input[name="' + this.options.name + '"]').attr('value', this._value);
            $('#indicator').text(this._value);
            this.previewSiglum();
        },
        updateIndicator: function () {
            $('.siglum-indicator').show();
            if (6 === this.options.progressPointer) {
                $('.siglum-indicator').hide();
            }
        },
        updateUi: function (handling) {
            handling = undefined !== handling ? handling : true;
            try {
                this.value(this.updateValue());
                this.onUpdate();
                $('#buttons').html(this.renderButtons());
                if (handling) {
                    this.handleButtons();
                }
            } catch (e) {}
        },
        handleButtons: function () {
            this.reduceToInitialState();
            let self = this;
            $('.btn-torah').off().on('click', function (event) {
                const dataId = event.target.dataset.id;
                const item = dataId.split('item_').pop();
                if (utils.isEmpty(self.options.parts.translation)) {
                    return;
                }
                if (0 === self.options.progressPointer || self.options.progressPointer > 6) {
                    self.options.progressPointer = 6;
                }
                switch (self.options.progressPointer) {
                    default:
                    case 1:
                        self.options.parts.group = dataId;
                        break;
                    case 2:
                        self.options.parts.book = dataId;
                        break;
                    case 3:
                        self.options.parts.chapter = dataId;
                        break;
                    case 4:
                        self.options.parts.verseStart = item;
                        break;
                    case 5:
                        self.options.parts.verseStop = item;
                        if ('.' === item) {
                            self.options.parts.verseStop = '';
                        }
                        break;
                    case 6:
                        break;
                }
                self.options.progressPointer++;
                self.updateUi();
            });
            $('.btn-back').off().on('click', function (event) {
                if (self.options.progressPointer > 1) {
                    self.options.progressPointer--;
                }
                switch (self.options.progressPointer) {
                    case 1:
                        self.options.parts.group = '';
                    case 2:
                        self.options.parts.book = '';
                    case 3:
                        self.options.parts.chapter = '';
                    case 4:
                        self.options.parts.verseStart = '';
                    case 5:
                        self.options.parts.verseStop = '';
                        self.updateUi();
                    default:
                    case 6:
                }
            });
        },
        renderButtons: function () {
            let result = '';
            switch (this.options.progressPointer) {
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
            this.updateIndicator();
            return result;
        },
        isServiceLinkEnable: function () {
            return this.options.service_link_enable ? 'true' : 'false';
        }
    });

    return $.verses.inputTorah;
});
