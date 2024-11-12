define([
    'jquery',
    'prototype'
], function($) {
    'use strict';
    let internalSlidersIndexes = {};
    let suppressIndexes = {};
    const TIME_FRAME_MANAGER_DEBUG = false;
    return {
        reset: function () {
            const iDs = Object.keys(internalSlidersIndexes);
            for (let index = 0; index < iDs.length; ++index) {
                const iD = iDs[index];
                const isExist = $(iD).length > 0;
                if (!isExist) {
                    this.unRegister(iD);
                } else {
                    this.unSuppress(iD);
                }
            }
        },
        unRegister: function (ID) {
            try {
                const suppressID = internalSlidersIndexes[ID];
                clearInterval(suppressID);
            } catch (e) {}
            try {
                delete internalSlidersIndexes[ID];
                delete suppressIndexes[ID];
            } catch (e) {}
        },
        register: function (ID, callBack, delay) {
            const suppressID = internalSlidersIndexes[ID];
            if (undefined !== suppressID) {
                this.unRegister(ID);
            }
            let self = this;
            internalSlidersIndexes[ID] = setInterval(function() {
                if (!suppressIndexes[ID]) {
                    callBack();
                }
                if (TIME_FRAME_MANAGER_DEBUG) {
                    self.debug(ID);
                }
            }, delay);
        },
        suppress: function (ID) {
            suppressIndexes[ID] = true;
        },
        unSuppress: function (ID) {
            suppressIndexes[ID] = false;
        },
        debug: function (ID) {
            console.log('%cPING[' + ID + ']', 'color:green;font-weight:bold;');
            console.log('indexes', internalSlidersIndexes);
            console.log('supress', suppressIndexes);
        }
    };
});
