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
      
      <employees-list :stock="modelData"/>

    </template>

  </div>
</template>

<script>
import store from '@/store'
import router from '@/router'
import { ref, onUnmounted } from '@vue/composition-api'
import {
  BRow, BCol, BAlert, BLink,
} from 'bootstrap-vue'
import employeesList from '@/views/pages/employees/employees-list/index.vue'
import userStoreModule from '../invoiceStoreModule'
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

    store.dispatch('app-invoice/fetchInvoice', { id: router.currentRoute.params.id })
      .then(response => { 
        modelData.value = response.data; 
        
        })
      .catch(error => {
        if (error.response.status === 404) {
          modelData.value = undefined
        }
      })

    return {
      modelData,
    }
  },
}
</script>

<style>

</style>
