//! indirizzo dell'api
// http://localhost/php-dischi-json/database/server.php
console.log('sono js')
const { createApp } = Vue

  createApp({
    data() {
      return {
        api: 'http://localhost/php-dischi-json/database/server.php',
      }
    }
  }).mount('#app')