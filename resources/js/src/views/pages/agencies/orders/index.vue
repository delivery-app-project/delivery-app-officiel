<template>
  <b-row>
       <b-col md="12" v-if="modelData">
        <b-card-actions
          title="Orders accepted "
          action-collapse
          >
          <orders-index :forAccepted="true" :agency="modelData"/>
         </b-card-actions>
      </b-col>
       <b-col md="12" v-if="modelData">
        <b-card-actions
          title="Orders waiting "
          action-collapse
          >
          <orders-index :forAccepted="false" :agency="modelData" />
         </b-card-actions>
      </b-col>
  </b-row>
</template>

<script>
import { BRow, BCol ,BCollapse } from 'bootstrap-vue'
import ordersIndex from './ordersindex.vue'
import store from '@/store'
import router from '@/router'
import { ref, onUnmounted } from '@vue/composition-api'

import invoiceStoreModule from './invoiceStoreModule'
import BCardActions from '@core/components/b-card-actions/BCardActions.vue'

export default {
  components: {
    BRow,
    BCol,
    ordersIndex,
    
    BCollapse,
    BCardActions,
  },

  setup() {
    const modelData = ref(null)

    const USER_APP_STORE_MODULE_NAME = 'app-order'

    // Register module
    if (!store.hasModule(USER_APP_STORE_MODULE_NAME)) store.registerModule(USER_APP_STORE_MODULE_NAME, invoiceStoreModule)

    // UnRegister on leave
    onUnmounted(() => {
      if (store.hasModule(USER_APP_STORE_MODULE_NAME)) store.unregisterModule(USER_APP_STORE_MODULE_NAME)
    })

    const refetchAgency = () => {
      
      store.dispatch('app-order/fetchAgency', { id: router.currentRoute.params.id })
      .then(response => { 
        // console.log("check");
        modelData.value = response.data; 
        
        })
      .catch(error => {
        if (error.response.status === 404) {
          modelData.value = undefined
        }
      })
    }


    refetchAgency();




    return {
      modelData,
      refetchAgency
    }
  },
}
</script>

<style lang="scss">
@import '~@core/scss/vue/libs/vue-wizard.scss';
@import '~@core/scss/vue/libs/vue-select.scss';
</style>
