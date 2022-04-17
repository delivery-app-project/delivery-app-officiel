<template>
  <div>

    <!-- Alert: No item found -->
    <b-alert
      variant="danger"
      :show="modelData === undefined"
    >
      <h4 class="alert-heading">
        Error fetching user data
      </h4>
      <div class="alert-body">
        No user found with this user id. Check
        <b-link
          class="alert-link"
          :to="{ name: 'apps-users-list'}"
        >
          User List
        </b-link>
        for other users.
      </div>
    </b-alert>

    <template v-if="modelData">
      <!-- First Row -->
      <b-row>
        <b-col
          cols="12"
          xl="9"
          lg="8"
          md="7"
        >
          <user-view-user-info-card :model-data="modelData" />
        </b-col>
        <b-col
          cols="12"
          md="5"
          xl="3"
          lg="4"
        >
          <user-view-user-plan-card :model-data="modelData" />
        </b-col>
      </b-row>

      <!-- <b-row>
        <b-col
          cols="12"
          lg="6"
        >
          <user-view-user-timeline-card />
        </b-col>
        <b-col
          cols="12"
          lg="6"
           >
          <user-view-user-permissions-card />
        </b-col>
      </b-row> -->

      <b-col md="12">
        <b-card-actions
          title="Employees of the Stock"
          action-collapse
          >
         <employees-list :stock="modelData" @refetchStock="refetchStock"/>
         </b-card-actions>
      </b-col>
      

      <b-col md="12">
        <b-card-actions
          title="Agencies of the Stock"
          action-collapse
          >
          <agencies-list :stock="modelData" @refetchStock="refetchStock"/>
         </b-card-actions>
      </b-col>

    </template>

  </div>
</template>

<script>
import store from '@/store'
import router from '@/router'
import { ref, onUnmounted } from '@vue/composition-api'
import {
  BRow, BCol, BAlert, BLink,BCollapse
} from 'bootstrap-vue'
import employeesList from '@/views/pages/employees/employees-list/index.vue'
import agenciesList from '@/views/pages/agencies/index.vue'
import userStoreModule from '../invoiceStoreModule'
import BCardActions from '@core/components/b-card-actions/BCardActions.vue'
import UserViewUserInfoCard from './UserViewUserInfoCard.vue'
import UserViewUserPlanCard from './UserViewUserPlanCard.vue'
// import UserViewUserTimelineCard from './UserViewUserTimelineCard.vue'
// import UserViewUserPermissionsCard from './UserViewUserPermissionsCard.vue'

export default {
  components: {
    BRow,
    BCol,
    BAlert,
    BLink,
    BCollapse,
    BCardActions,
    agenciesList,
    // Local Components
    UserViewUserInfoCard,
    UserViewUserPlanCard,
    employeesList,
    // UserViewUserTimelineCard,
    // UserViewUserPermissionsCard,

    // InvoiceList,
  },
  // created() {
  // },
  setup() {
    const modelData = ref(null)

    const USER_APP_STORE_MODULE_NAME = 'app-invoice'

    // Register module
    if (!store.hasModule(USER_APP_STORE_MODULE_NAME)) store.registerModule(USER_APP_STORE_MODULE_NAME, userStoreModule)

    // UnRegister on leave
    onUnmounted(() => {
      if (store.hasModule(USER_APP_STORE_MODULE_NAME)) store.unregisterModule(USER_APP_STORE_MODULE_NAME)
    })

    const refetchStock = () => {
      
      store.dispatch('app-invoice/fetchInvoice', { id: router.currentRoute.params.id })
      .then(response => { 
        console.log("check");
        modelData.value = response.data; 
        
        })
      .catch(error => {
        if (error.response.status === 404) {
          modelData.value = undefined
        }
      })
    }


    refetchStock();


    return {
      modelData,
      refetchStock
    }
  },
}
</script>

<style>

</style>
