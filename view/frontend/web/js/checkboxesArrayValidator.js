define([
    'jquery',
    'mage/translate',
    'jquery/validate'
], function ($, $t) {
    'use strict';
    return function () {
        $.validator.addMethod(
            'validate-at-least-one-checked',
            function (value, element) {
                const name = $(element).attr('name');
                const className = name.split('[')[0];
                const checkBoxes = $('input.' + className);
                let error = false;
                checkBoxes.each(function (index, element) {
                    error = error || $(element).is(':checked');
                });
                return error;
            },
            $t('Select at least one checkbox.')
        );
    }
});
