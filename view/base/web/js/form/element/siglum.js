/**
 * @api
 */
define([
    'jquery',
    'underscore',
    'Magento_Ui/js/form/element/abstract',
    'domReady!'
], function ($, _, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            resultSelector: '#preview-result',
            state: {
                translation: '',
                part: '',
                book: '',
                chapter: '',
                verse: ''
            }
        },
        updateState: function (value) {
            const parts = value.split('/');
            try {
                this.state.translation = parts[0];
                this.state.book = parts[1];
                this.state.chapter = parts[2];
                this.state.verse = parts[3];
            } catch (e) {}
        },
        updateValue: function() {
            return this.state.translation + '/' + this.state.book + '/' +
                this.state.chapter + '/' + this.state.verse;
        },
        initialize: function () {
            this._super();
            this.updateState(this.initialValue);
            this.previewSiglum();
            return this;
        },
        translationBinding: function (obj, event) {
            const translation = event.target.value;
            if (translation !== '') {
                this.state.translation = translation;
                this.value(this.updateValue());
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
