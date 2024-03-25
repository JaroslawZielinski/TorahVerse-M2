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
                //TODO: split translation and abstract siglum
                translationCode = self.value._latestValue,
                siglumCode = self.value._latestValue,
                resultId = self.resultSelector;
            if (undefined !== translationCode && undefined !== siglumCode) {
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
