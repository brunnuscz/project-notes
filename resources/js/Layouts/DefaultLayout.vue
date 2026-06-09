<script setup>
  defineProps({
    title: String,
  })
</script>

<template>
  <v-app>
    <v-main style="background-color: #b5d4e0;">
      <v-container>
        <slot />
      </v-container>
    </v-main>
  </v-app>
</template>