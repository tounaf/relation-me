import Vue from 'vue';

Vue.component('todo-item', {
    props: ['todo'],
    template: '<li> this is my todo {{todo.text}}</li>'
})

var app  = new Vue({
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
    },
    created: function () {
        console.log("show value of e: ");
    },
    mounted: function () {
      console.log("is mounted thos");
    },
    computed: {
        reverseMessage() {
            return this.message.split('').reverse().join('');
        }
    }
})