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
            initialState: 1,
            service_link_enable: true
        },
        initialize: function () {
            this._super();
            this.updateState(this.initialValue);
            this.previewSiglum();
            return this;
        },
        validate: function () {
            this._super();

            let value = this.value(),
                message = '',
                isValid = true;

            const results = this.previewSiglum();
            const status = null !== results ? results['status'] : 'error';
            if (status !== 'ok' || 6 !== parseInt(this.progressPointer)) {
                isValid = false;
                message = $t("Sigla are not valid or '.' button not pressed yet.") + '[' + value + ']';
            }

            this.error(message);
            this.error.valueHasMutated();
            this.bubble('error', message);

            //TODO: Implement proper result propagation for form
            if (this.source && !isValid) {
                this.source.set('params.invalid', true);
            }

            return {
                valid: isValid,
                target: this
            };
        },
        /**
         * Callback that fires when 'value' property is updated.
         */
        onUpdate: function () {
            this.bubble('update', this.hasChanged());
            this.validate();
        },
        /**
         * Refresh buttons and add onclick handling
         */
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
        updateState: function (value) {
            const parts = value.split('/');
            try {
                this.parts.translation = parts[0];
                this.parts.book = parts[1];
                this.parts.chapter = parts[2];
                const verseArray = parts[3].split('-');
                this.parts.verseStart = verseArray[0];
                this.parts.verseStop = undefined !== verseArray[1] ? verseArray[1] : verseArray[0];
                this.parts.group = this.findGroupByBook(this.parts.book);
            } catch (e) {}
        },
        updateValue: function() {
            let verse = '' !== this.parts.verseStop && this.parts.verseStart !== this.parts.verseStop
                ? this.parts.verseStart + '-' + this.parts.verseStop : this.parts.verseStart;
            return this.parts.translation + '/' + this.parts.book + '/' +
                this.parts.chapter + '/' + verse;
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
                const item = dataId.split('item_').pop();
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
                        self.parts.verseStart = item;
                        break;
                    case 5:
                        self.parts.verseStop = item;
                        if ('.' === item) {
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
                    this.progressPointer = parseInt(this.initialState);
                    this.initialState = '6';
                    this.updateUi(false);
                default:
                case 6:
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
            if (utils.inArray(this.parts.translation, ['eib', 'sz', 'tnp'])) {
                const keys = Object.keys(this.divisionTranslation);
                let result = {};
                for (let index = 0; index < keys.length; ++index) {
                    const newIndex = keys[index];
                    if (!utils.inArray(newIndex, ['Old Testament', 'Tanakh', 'Nevi\'im ketuvim'])) {
                        result[newIndex] = this.divisionTranslation[newIndex];
                    }
                }
                return result;
            }
            return this.divisionTranslation;
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
            const booksByTranslation = this.structure[this.parts.translation];
            let booksSelected = [];
            switch (this.divisionType) {
                case 'two-division':
                    const map = utils.getGroupsMap();
                    const groups = map[this.parts.group];
                    for (let i = 0; i < groups.length; i++) {
                        let foundBooks = Object.keys(booksByTranslation[groups[i]]);
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
            const selectedTorah = this.structure[this.parts.translation];
            let selectedTorah2 = Object.entries(selectedTorah);
            // remove exceptions
            delete selectedTorah2[3];
            const selectedGroup = utils
                .findIt(selectedTorah2, this.parts.book).pop()[0];
            return selectedTorah[selectedGroup][this.parts.book]['chapters'];
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
            const ajaxUrl = this.structureUrl;
            let self = this;
            let formKey = window.FORM_KEY || $('input[name="form_key"]').val();
            const resultId = '#buttons';
            utils.ajaxGetItJson(ajaxUrl, {
                isAjax: true,
                form_key: formKey,
                translation: self.parts.translation,
                book: self.parts.book,
                chapter: self.parts.chapter
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
            const ajaxUrl = this.structureUrl;
            let self = this;
            let formKey = window.FORM_KEY || $('input[name="form_key"]').val();
            const resultId = '#buttons';
            utils.ajaxGetItJson(ajaxUrl, {
                isAjax: true,
                form_key: formKey,
                translation: self.parts.translation,
                book: self.parts.book,
                chapter: self.parts.chapter,
                verse: self.parts.verseStart
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
                baseUrl: this.baseUrl,
                disabled: 'false',
                buttons: buttons
            };
            return _.template(multiButtons)(data);
        },
        findGroupByBook: function (book) {
            return utils.findIt(Object.entries(this.division), book).pop()[0];
        },
        translationBinding: function (obj, event) {
            const translation = event.target.value;
            if ('' !== translation) {
                this.parts.translation = translation;
                this.updateUi();
            }
        },
        isServiceLinkEnable: function () {
            return this.service_link_enable ? 'true' : 'false';
        }
    });
});
