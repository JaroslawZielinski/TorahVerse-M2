var config = {
    map: {
        '*': {
            chosen: 'JaroslawZielinski_TorahVerse/js/chosen/chosen.jquery',
            verseSlider: 'JaroslawZielinski_TorahVerse/js/slider',
            verticalScroll: 'JaroslawZielinski_TorahVerse/js/verticalScroll'
        }
    },
    paths: {
        verseUtils: 'JaroslawZielinski_TorahVerse/js/verses/utils'
    },
    shim: {
        verticalScroll: {
            deps: ['jquery']
        },
        verseSlider: {
            deps: ['jquery']
        },
        verseUtils: {
            deps: ['jquery']
        }
    }
};
