<template>
    <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
    <div>Title: {{title}}</div>
    <input type="text" ref="name">
    <button @click="alertInput">Alert Your Input</button>
    <button @click="clear">Clear</button>
    <br><br>
    <RegistrationComp/>
  </template>
  
  <script>
  //this is only need when im importing HelloWorld component
  // import HelloWorld from './components/HelloWorld.vue'
//   import RegistrationComp from './components/RegistrationComp';
  
  export default {
    // name: 'App',
    // components: {
    //   HelloWorld
    // }
    name: 'App',
    // components: {RegistrationComp},
    data(){
      return{
        title: 'The litle Giant',
        author: 'Bulfo Macaren',
        age: 25,
        condition: true,
        books: [
            {title: 'Unconditional love', author: 'kim soo', isFave: true},
            {title: 'love the way you are', author: 'pawarit', isFave: false},
            {title: 'life is hard', author: 'vincent lancough', isFave: true},
        ]
      }
    },
    methods: {
      alertInput(){
        alert(this.$refs.name.value);
        console.log(this.$refs.name);
        this.$refs.name.classList.add('active');
        this.$refs.name.focus();
      },
      clear(){
        this.$refs.name.value = '';
      }
    }
  }
  </script>
  
  <style>
  #app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
  </style>
  