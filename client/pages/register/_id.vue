<template>
   <div>
    <v-data-table
   :headers="headers"
   :items="desserts"
    item-key="name"
    class="elevation-1"
    >
    </v-data-table>
  </div>
</template>

//no botao @click.stop="save"
<script>
export default {
  data() {
    return {
      headers: [
        {
          text: 'Cadastro',
          aling: 'start',
          sortable: false,
          value: 'name',
        },
        {text: 'name', value: 'name'},
        {text: 'phone', value: 'phone'},
        {text: 'email', value: 'email'},
      ],
    }
  }
}
</script>
