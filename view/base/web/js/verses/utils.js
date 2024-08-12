define([
    'prototype'
], function() {
    'use strict';

    const softBreakWords = ['a', 'i', 'o', 'u', 'w', 'z'];

    const groupsMap = {
        'Old Testament': ['Tanakh', 'Nevi\'im ketuvim'],
        'New Testament': ['Brit Hadasha']
    };

    return {
        stringToLinesByChunkSize: function (string, chunkSize) {
            const words = string.split(' ');
            let measure = '';
            let lines = [];
            words.forEach(function (word, index) {
                if (measure.length + word.length + 1 <= chunkSize) {
                    measure += word + ' ';
                } else {
                    let lineToBeAdded = measure.trim();
                    // Reset/Empty measure
                    measure = '';
                    const lastIfSoftBreakWord = lineToBeAdded.slice(-2);
                    if (softBreakWords.includes(lastIfSoftBreakWord.trim().toLowerCase())) {
                        // Move 'i' or 'I' character from the end of a line to the beginning of another
                        measure = lastIfSoftBreakWord + ' ';
                        // Correct the line to be added (remove ' i' or ' I' from the end)
                        lineToBeAdded = lineToBeAdded.slice(0, -2);
                    }
                    lines.push(lineToBeAdded);
                    measure += word + ' ';
                }
            });
            // Add to lines if something has left in measure
            const end = measure.trim();
            if (end.length > 0) {
                if (end.length <= 3) {
                    //the last 3 characters add to the last line instead of creating new line
                    let lastLine = lines.pop();
                    lastLine += ' ' + end;
                    lines.push(lastLine);
                } else {
                    lines.push(end);
                }
            }
            return lines;
        },
        stringToSliderStructure: function (string, characterTrigger) {
            const lines = this.stringToLinesByChunkSize(string, characterTrigger);
            let preparedHtml = document.createElement('div');
            preparedHtml.classList.add('list');
            for (let i = 0; i < lines.length; i++) {
                let div = document.createElement('div');
                div.classList.add(i);
                div.innerHTML = lines[i];
                preparedHtml.appendChild(div);
            }
            let transformed = document.createElement('div');
            transformed.classList.add('transformed');
            transformed.appendChild(preparedHtml);
            return transformed.outerHTML;
        },
        /**
         * Hydrate template with key vars by given values (f.e. {variable} to 'test')
         * @see https://stackoverflow.com/questions/377961/efficient-javascript-string-replacement#answer-50545691
         */
        replaceMe: function (template, data) {
            const pattern = /{\s*(\w+?)\s*}/g; // {property}
            return template.replace(pattern, (_, token) => data[token] || '');
        },
        /**
         * Randomize array element order in-place.
         * Using Durstenfeld shuffle algorithm.
         * @see https://stackoverflow.com/questions/2450954/how-to-randomize-shuffle-a-javascript-array/12646864#12646864
         * @param {array} array
         */
        shuffleArray: function (array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                const temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
            return array;
        },
        /**
         * Search for value in object
         * @see https://stackoverflow.com/questions/8517089/js-search-in-object-values#answer-40890687
         * @see https://stackoverflow.com/questions/4059147/check-if-a-variable-is-a-string-in-javascript#answer-4059166
         * @param haystack
         * @param needle
         * @returns {*}
         */
        findIt: function (haystack, needle) {
            return haystack.filter(function(obj) {
                return Object.keys(obj).some(function(key) {
                    switch (typeof obj[key]) {
                        default:
                        case 'string':
                            return obj[key].includes(needle);
                        case 'object':
                            return undefined !== obj[key][needle];
                    }
                })
            });
        },
        getGroupsMap: function () {
            return groupsMap;
        },
        /**
         * Equivalent of PHP in_array
         *
         * @see https://stackoverflow.com/questions/784012/javascript-equivalent-of-phps-in-array#answer-784015
         */
        inArray: function (needle, haystack) {
            const length = haystack.length;
            for (let i = 0; i < length; i++) {
                if (haystack[i] === needle) {
                    return true;
                }
            }
            return false;
        }
    };
});
