<script setup>
  import DefaultLayout from '@/Layouts/DefaultLayout.vue'
  import dayjs from 'dayjs'
  
  defineOptions({ layout: DefaultLayout })

  const props = defineProps({
    notes: Object
  })
</script>

<template>
  <v-table 
    height="580px"
    fixed-header
    class="rounded-t-xl rounded-b-xl pr-3"
    v-if="notes.data && notes.data.length"
  >
    <thead>
      <tr>
        <th class="text-center">Cód. Grupo</th>
        <th class="text-center">Grupo</th>
        <th class="text-center">Número</th>
        <th class="text-center">Título</th>
        <th class="text-center">Descrição</th>
        <th class="text-center" style="width: 100px;">Criação</th>
        <th class="text-center" style="width: 100px;">Atualização</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="note in notes.data" :key="note.id">
        <td class="text-center">{{ note.group.id ? String(note.group.id).padStart(2, '0') : '' }}</td>
        <td class="text-center">
          <v-chip 
            v-if="note.group.id"
            :color="note.group.color ? note.group.color : 'default'" 
            :variant="note.group.color ? 'flat' : 'outlined'"
            size="small"
          >
            {{ note.group.title_group }}
          </v-chip>
        </td>
        <td class="text-center">{{ String(note.id).padStart(3, '0') }}</td>
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
