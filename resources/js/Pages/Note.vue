<script setup>
  import DefaultLayout from '@/Layouts/DefaultLayout.vue'
  import dayjs from 'dayjs'
  
  defineOptions({ layout: DefaultLayout })

  const props = defineProps({
    notes: Object
  })
</script>

<template>
  <h1 class="title-principal">Anotações</h1>
  
  <v-btn color="primary" class="mb-4">
    Adicionar
  </v-btn>
  
  <v-table 
    height="550px"
    fixed-header
    class="rounded-t-xl pr-5"
    v-if="notes.data && notes.data.length"
  >
    <thead>
      <tr>
        <th class="text-center">Código</th>
        <th class="text-center">Título</th>
        <th class="text-center">Descrição</th>
        <th class="text-center">Criação</th>
        <th class="text-center">Atualização</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="note in notes.data" :key="note.id">
        <td class="text-center">{{ String(note.id).padStart(4, '0') }}</td>
        <td class="text-center">{{ note.title }}</td>
        <td>{{ note.description }}</td>
        <td class="text-center">{{ dayjs(note.created_at).format('DD/MM/YYYY HH:mm:ss') }}</td>
        <td class="text-center">{{ dayjs(note.updated_at).format('DD/MM/YYYY HH:mm:ss') }}</td>
      </tr>
    </tbody>
  </v-table>
  <p v-else>
    Nenhuma anotação encontrada.
  </p>
</template>
