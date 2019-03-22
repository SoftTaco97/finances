<template>
    <div id="app">
      <appMain></appMain>
    </div>
</template>

<script>
  // Main Page
  import appMain from './components/Main.vue';

  // Login Page
  import appLoginScreen from './components/LoginScreen.vue';

  export default {
    name: 'app',
    components: {
      appMain,
      appLoginScreen
    }
  }
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
