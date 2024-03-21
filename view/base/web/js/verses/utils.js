define([
    'prototype'
], function() {
    'use strict';

    const softBreakWords = ['a', 'i', 'o', 'u', 'w', 'z'];

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
        }
    };
});
