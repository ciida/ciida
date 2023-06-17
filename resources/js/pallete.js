export default () => ({
    options: [],

    init() {
        this.loadOptions()
    },

    loadOptions() {
        console.log($refs.palleteOption);
    }
})