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
            resultSelector: '#preview-result'
        },
        initialize: function () {
            this._super();
            
            this.previewSiglum();

            return this;
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
