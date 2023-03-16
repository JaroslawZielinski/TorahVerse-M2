define([
    'jquery',
    'ko'
], function($, ko) {
    var isDisabled = function(config) {
        if (false === config.enabled) {
            return true;
        }
        return false;
    };
    /**
     * @see https://stackoverflow.com/questions/377961/efficient-javascript-string-replacement#answer-50545691
     */
    return function(config, element) {
        if (isDisabled(config)) {
            return;
        }



        $(element).html(config.template);
    }
});
