import Vue from 'vue';


Vue.component('plan-picker', {
    delimiters: ['${','}'],
    template: '#plan-picker-template',
    data() {
        return {
            plans: ['plan 1', 'plan 2', 'plan 3']}
    }
})


Vue.component('plan', {

    delimiters: ['${','}'],
    template: '#plan-template',
    props: ['name']
})

new Vue({
    el: "#app-plan",
})