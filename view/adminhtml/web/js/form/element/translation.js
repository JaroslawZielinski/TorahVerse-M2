/**
 * @api
 */
define([
    'jquery',
    'underscore',
    'Magento_Ui/js/form/element/select',
    'domReady!'
], function ($, _, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            resultSelector: '#preview-result',
            imports: {
                siglum: '${ $.parentName }.siglum:value'
            }
        },

        initialize: function () {
            this._super();

            this.previewSiglum();

            return this;
        },

        /**
         * Initializes observable properties of instance
         *
         * @returns {Abstract} Chainable.
         */
        initObservable: function () {
            this._super();

            /**
             * equalityComparer function
             *
             * @returns boolean.
             */
            this.value.equalityComparer = function (oldValue, newValue) {
                return !oldValue && !newValue || oldValue === newValue;
            };

            return this;
        },
        previewSiglum: function () {
            var self = this,
                ajaxUrl = self.previewUrl,
                translationCode = self.value._latestValue,
                siglumCode = self.siglum,
                resultId = self.resultSelector;
            if (undefined !== translationCode && undefined !== siglumCode &&
                !SiglumData.compareToCurrent(translationCode, siglumCode)) {
                let formKey = window.FORM_KEY;
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
                    SiglumData.setPrevious(translationCode, siglumCode);
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
        },
    });
});
