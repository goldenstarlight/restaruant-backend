const { default: Echo } = require('laravel-echo');

require('./bootstrap');
window.Vue = require('vue').default;

import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import ChatMessages from './components/ChatMessages.vue';
import ChatForm from './components/ChatForm.vue';

let vueApp=createApp({});
vueApp.component('example-component' , ExampleComponent);
vueApp.component('chat-messages' , ChatMessages);
vueApp.component('chat-form' , ChatForm);

vueApp.mount("#app");

const app = createApp({
  el: '#app',
  data: () => ({
    messages: []
  }),
  created() {
      this.fetchMessages();

      window.Echo.private('chat')
          .listen('MessageSent', (e) => {
              this.messages.push({
                  message: e.message.message,
                  user: e.user
              });
          });
  },

  methods: {
      fetchMessages() {
          axios.get('/messages').then(response => {
              this.messages = response.data;
          });
      },

      addMessage(message) {
          this.messages.push(message);

          axios.post('/messages', message).then(response => {
              console.log(response.data);
          });
      }
  }
});
app.mount('#app');
