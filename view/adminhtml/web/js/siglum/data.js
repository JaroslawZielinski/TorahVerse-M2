let SiglumData = {
    previous: '',
    createLedger: function (translation, siglum) {
        return translation + '/' + siglum;
    },
    setPrevious: function (translation, siglum) {
        this.previous = this.createLedger(translation, siglum);
    },
    compareToCurrent: function (translation, siglum) {
        const current = this.createLedger(translation, siglum);
        return this.previous === current;
    }
};
