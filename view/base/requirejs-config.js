var config = {
    map: {
        '*': {
            verseSlider: 'JaroslawZielinski_TorahVerse/js/verseSlider',
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
        }
    }
};
