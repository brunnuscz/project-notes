<script setup>
  defineProps({
    title: String,
  })
</script>

<template>
  <v-app>
    <v-main class="bg-custom">
      <v-container>
        <slot />
      </v-container>
    </v-main>
  </v-app>
</template>