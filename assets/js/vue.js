import Vue from 'vue';

new Vue({
    el: '#app',
    delimiters: ['${','}'],
    data: {
        message: 'HELLO VUE',
        messages: [
            {text: 'ruby'},
            {text: 'php'},
            {text: 'python'}
        ]
    },
    methods: {
        addMessage: function () {
            this.messages.push({text: this.message})
        }
    }
})