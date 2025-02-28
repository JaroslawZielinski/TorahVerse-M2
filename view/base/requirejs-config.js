var config = {
    map: {
        '*': {
            verseSlider: 'JaroslawZielinski_TorahVerse/js/verseSlider',
            verticalScroll: 'JaroslawZielinski_TorahVerse/js/verticalScroll',
            siglumInput: 'JaroslawZielinski_TorahVerse/js/form/element/siglum',
            verseUtils: 'JaroslawZielinski_TorahVerse/js/verses/utils',
            inputTorah: 'JaroslawZielinski_TorahVerse/js/inputTorah'
        }
    },
    paths: {
        verseUtils: 'JaroslawZielinski_TorahVerse/js/verses/utils',
        timeFrameManager: 'JaroslawZielinski_TorahVerse/js/verses/timeFrameManager'
    },
    shim: {
        verticalScroll: {
            deps: ['jquery']
        },
        verseSlider: {
            deps: ['jquery']
        },
        siglumInput: {
            deps: ['verseUtils']
        },
        inputTorah: {
            deps: ['jquery']
        }
    }
};
