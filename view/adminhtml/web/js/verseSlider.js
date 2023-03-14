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

    return function(config, element) {
        if (isDisabled(config)) {
            return;
        }
        //TODO:
        $(element).show();
        console.log(element);
    }
});
