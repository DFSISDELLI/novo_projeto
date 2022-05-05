<template>
  <v-card
  :disabled="loading"
  :loading="loading"
  >

    <v-card-title>
      Lista de Cadastros
    </v-card-title>

    <v-card-title>
      <v-spacer/>
      <v-btn
        color="primary"
        text
        to="/register"
        >
       <v-icon left>mdi-plus</v-icon>
        adicionar
      </v-btn>
    </v-card-title>
    <v-data-table
      :headers="headers"
      :items="items"
    >
      <template #[`item.actions`]="{ item }">
        <v-btn
          class="mr-2"
          icon
          x-small
          @click.stop="$router.push(`register/${item.id}`)"
          >
          <v-icon>
            mdi-pencil
          </v-icon>
        </v-btn>
       <v-btn
          icon
          x-small
        >
          <v-icon>
            mdi-delete
          </v-icon>
        </v-btn>
      </template>
    </v-data-table>
  </v-card>
</template>

<script>
export default {
  name: 'IndexPage',

  data: () => ({
    loading: false,
    headers: [{
      text: 'Clientes',
      value: 'client'
    }, {
      text: 'Ações',
      value: 'actions'
    }],
    items: []
  })


  /* async mounted(){
    this.loading = true

    try{
      this.items = (await this.$axios.get('register')).data
    } catch (e) {
      console.log (e)
    }

    this.loading = false
  } */

}
</script>
