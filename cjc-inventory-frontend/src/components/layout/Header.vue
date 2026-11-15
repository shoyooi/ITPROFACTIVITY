<template>
  <v-app-bar
      color="primary"
  >
    <template v-slot:prepend>
      <v-app-bar-nav-icon @click="navBarClicked"></v-app-bar-nav-icon>
    </template>

    <v-app-bar-title>Inventory</v-app-bar-title>

    <template v-slot:append>
      <v-btn icon="mdi-dots-vertical"></v-btn>
    </template>
  </v-app-bar>
</template>

<script setup lang="ts">
  import { useLayoutStore } from '@/stores/layout.ts'

  const layout = useLayoutStore()

  function navBarClicked() {
    layout.navDraw = !layout.navDraw
  }
</script>