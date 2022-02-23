<script setup>
import { RouterLink, RouterView } from "/assets/js/vue-router-4.0.12/dist/vue-router.global.js";
</script>

<template>
  <div class="">
    Dari App.vue nich
    <nav>
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/about">About</RouterLink>
    </nav>
      
  <RouterView />
  </div>
</template>

