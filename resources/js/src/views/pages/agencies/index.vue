<template>

  <!-- Table Container Card -->
  <b-card
    no-body
      >

    <div class="m-2">

       <user-list-attach-stock-new
      v-if="stock"
      :is-add-new-user-sidebar-stock-active.sync="isAddNewUserSidebarStockActive"
      :stock="stock"
      @refetch-data="refetchData"
      @refetch-stock="$emit('refetchStock')"
    />

      <!-- Table Top -->
      <b-row>

        <!-- Per Page -->
        <b-col
          cols="12"
          md="6"
          class="d-flex align-items-center justify-content-start mb-1 mb-md-0"
        >
          <label>Entries</label>
          <v-select
            v-model="perPage"
            :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
            :options="perPageOptions"
            :clearable="false"
            class="per-page-selector d-inline-block ml-50 mr-1"
          />
          <b-button
            v-if="!stock"
            variant="primary"
            :to="{ name: 'agency-add'}"
          >
            Add record
          </b-button>
          <b-button
            v-else-if="stock"
            @click="isAddNewUserSidebarStockActive = true"
            variant="primary"
          >
            Add Agency to Stock
          </b-button>
        </b-col>



        <!-- Search -->
        <b-col
          cols="12"
          md="6"
        >
          <div class="d-flex align-items-center justify-content-end">
            <b-form-input
              v-model="searchQuery"
              class="d-inline-block mr-1"
              placeholder="Search..."
            />
            <!-- <v-select
              v-model="statusFilter"
              :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
              :options="stOptions"
              class="invoice-filter-select"
              placeholder="Select Status"
            >
              <template #selected-option="{ label }">
                <span class="text-truncate overflow-hidden">
                  {{ label }}
                </span>
              </template>
            </v-select> -->
          </div>
        </b-col>
      </b-row>

    </div>

    <b-table
      ref="refInvoiceListTable"
      :items="fetchInvoices"
      responsive
      :fields="tableColumns"
      primary-key="id"
      :sort-by.sync="sortBy"
      show-empty
      empty-text="No matching records found"
      :sort-desc.sync="isSortDirDesc"
      class="position-relative"
    >

      <template #head(invoiceStatus)>
        <feather-icon
          icon="TrendingUpIcon"
          class="mx-auto"
        />
      </template>

      <!-- Column: Id -->
      <template #cell(id)="data">
        <b-link
          :to="{ name: 'apps-invoice-preview', params: { id: data.item.id }}"
          class="font-weight-bold"
        >
          #{{ data.value }}
        </b-link>
      </template>

       <!-- Column: Balance -->
      <template #cell(director)="data">
        <template v-if="data.value.name === userData.name">
          <b-badge
            pill
            variant="light-success"
            >
            {{data.value.name}}
          </b-badge>
        </template>
        <template v-else>
          {{ data.value.name }}
        </template>
      </template>

      <!-- Column: Invoice Status -->
      <template #cell(invoiceStatus)="data">
        <b-avatar
          :id="`invoice-row-${data.item.id}`"
          size="32"
          :variant="`light-${resolveInvoiceStatusVariantAndIcon(data.item.invoiceStatus).variant}`"
        >
          <feather-icon
            :icon="resolveInvoiceStatusVariantAndIcon(data.item.invoiceStatus).icon"
          />
        </b-avatar>
        <b-tooltip
          :target="`invoice-row-${data.item.id}`"
          placement="top"
        >
          <p class="mb-0">
            {{ data.item.invoiceStatus }}
          </p>
          <p class="mb-0">
            Balance: {{ data.item.balance }}
          </p>
          <p class="mb-0">
            Due Date: {{ data.item.dueDate }}
          </p>
        </b-tooltip>
      </template>

      <!-- Column: Client -->
      <template #cell(client)="data">
        <b-media vertical-align="center">
          <template #aside>
            <b-avatar
              size="32"
              :src="data.item.avatar"
              :text="avatarText(data.item.client.name)"
              :variant="`light-${resolveClientAvatarVariant(data.item.invoiceStatus)}`"
            />
          </template>
          <span class="font-weight-bold d-block text-nowrap">
            {{ data.item.client.name }}
          </span>
          <small class="text-muted">{{ data.item.client.companyEmail }}</small>
        </b-media>
      </template>

      <!-- Column: Issued Date -->
      <template #cell(issuedDate)="data">
        <span class="text-nowrap">
          {{ data.value }}
        </span>
      </template>

      <!-- Column: Balance -->
      <template #cell(balance)="data">
        <template v-if="data.value === 0">
          <b-badge
            pill
            variant="light-success"
          >
            Paid
          </b-badge>
        </template>
        <template v-else>
          {{ data.value }}
        </template>
      </template>

      <!-- Column: Actions -->
      <template #cell(actions)="data">

        <div class="text-nowrap">
          <feather-icon
            :id="`invoice-row-${data.item.id}-send-icon`"
            icon="EditIcon"
            class="cursor-pointer"
            size="16"
            @click="$router.push({ name: 'agency-update', params: { id: data.item.id }})"
          />
          <!-- <b-tooltip
            title="Edit Agency"
            class="cursor-pointer"
            :target="`invoice-row-${data.item.id}-send-icon`"
          /> -->

          <feather-icon
            :id="`invoice-row-${data.item.id}-preview-icon`"
            icon="EyeIcon"
            size="16"
            class="mx-1"
            @click="$router.push({ name: 'agency-preview', params: { id: data.item.id }})"
          />
          <!-- <b-tooltip
            title="Preview Agency"
            :target="`invoice-row-${data.item.id}-preview-icon`"
          /> -->

          <feather-icon
            :id="`invoice-row-${data.item.id}-delete-icon`"
            icon="DeleteIcon"
            size="16"
            class="mx-1"
          
           @click="showMsgBoxOne(data.item.id)"
          />
          <!-- <b-tooltip
            title="Delete Agency"
            :target="`invoice-row-${data.item.id}-delete-icon`"
          /> -->
            <!-- for the modal  -->

        </div>
      </template>

    </b-table>
    <div class="mx-2 mb-2">
      <b-row>

        <b-col
          cols="12"
          sm="6"
          class="d-flex align-items-center justify-content-center justify-content-sm-start"
        >
          <span class="text-muted">Showing {{ dataMeta.from }} to {{ dataMeta.to }} of {{ dataMeta.of }} entries</span>
        </b-col>
        <!-- Pagination -->
        <b-col
          cols="12"
          sm="6"
          class="d-flex align-items-center justify-content-center justify-content-sm-end"
        >

          <b-pagination
            v-model="currentPage"
            :total-rows="totalInvoices"
            :per-page="perPage"
            first-number
            last-number
            class="mb-0 mt-1 mt-sm-0"
            prev-class="prev-item"
            next-class="next-item"
          >
            <template #prev-text>
              <feather-icon
                icon="ChevronLeftIcon"
                size="18"
              />
            </template>
            <template #next-text>
              <feather-icon
                icon="ChevronRightIcon"
                size="18"
              />
            </template>
          </b-pagination>

        </b-col>

      </b-row>
    </div>
  </b-card>

</template>

<script>
import {
  BCard,
  BRow,
  BCol,
  BFormInput,
  BButton,
  BTable,
  BMedia,
  BAvatar,
  BLink,
  BBadge,
  BDropdown,
  BDropdownItem,
  BPagination,
  BTooltip,
} from 'bootstrap-vue'

import {getUserData} from '@/auth/utils';
import BCardCode from '@core/components/b-card-code'
import { avatarText } from '@core/utils/filter'
import vSelect from 'vue-select'
import { onUnmounted,ref } from '@vue/composition-api'
import store from '@/store'
import useInvoicesList from './useInvoiceList'
// import { Can } from '@casl/vue';
import UserListAttachStockNew from './UserListAttachStockNew.vue'
import invoiceStoreModule from './invoiceStoreModule'

// import { codeMessageBox } from './code'

export default {
  components: {
    BCard,
    BCardCode,
    BRow,
    BCol,
    BFormInput,
    UserListAttachStockNew,
    BButton,
    BTable,
    BMedia,
    BAvatar,
    BLink,
    BBadge,
    BDropdown,
    BDropdownItem,
    BPagination,
    BTooltip,

    vSelect,
  },
  methods: {
     showMsgBoxOne(id) {
      this.boxOne = ''
      this.$bvModal
        .msgBoxConfirm('Are you sure?', {
          cancelVariant: 'outline-secondary',
        })
        .then(value => {
          this.boxOne = value

        })

        console.log(id);
    },
  },
  
  created() {
    // this.fetchStatuses();
    
    store.dispatch('_UPDATE_AGENCIES',{
      paginated : false
    });
  },
  data() {
    return {
    //   statusOptions : []
    }
  },
  computed: {
    userData(){
      return getUserData();
    }
    // stOptions(){
    //   return this.statusOptions.map(item => {
    //     return item.name
    //   });
    // }
  },
    props: {
    stock: {
      type: Object,
      required: false
    }
  },
  setup(props) {

    const isAddNewUserSidebarStockActive = ref(false)

    const INVOICE_APP_STORE_MODULE_NAME = 'app-agency'
    
    // Register module
    if (!store.hasModule(INVOICE_APP_STORE_MODULE_NAME))
      store.registerModule(INVOICE_APP_STORE_MODULE_NAME, invoiceStoreModule)

    // UnRegister on leave
    onUnmounted(() => {
      if (store.hasModule(INVOICE_APP_STORE_MODULE_NAME)) store.unregisterModule(INVOICE_APP_STORE_MODULE_NAME)
    })

    
    const {
      fetchInvoices,
      tableColumns,
      perPage,
      currentPage,
      totalInvoices,
      dataMeta,
      perPageOptions,
      searchQuery,
      sortBy,
      isSortDirDesc,
      refInvoiceListTable, 

      statusFilter,
 
      refetchData,

      resolveInvoiceStatusVariantAndIcon,
      resolveClientAvatarVariant,
      
      stock_id,
    } = useInvoicesList()
    console.log(props.stock);
    if(props.stock) stock_id.value = props.stock.id;
    // const statusOptions = ['Downloaded', 'Draft', 'Paid', 'Partial Payment', 'Past Due']

    // const  fetchInvoices = [
    //     {
    //       id : 5036,
    //       client : "Andrew Burns",
    //       total : "3171",
    //       issuedDate : "19 Apr 2019",
    //       balance : "205"
    //     }
    // ] ; 

    return {
      fetchInvoices,
      tableColumns,
      perPage,
      currentPage,
      totalInvoices,
      dataMeta,
      perPageOptions,
      searchQuery,
      sortBy,
      isSortDirDesc,
      refInvoiceListTable,
      statusFilter,
      refetchData,
      // statusOptions,
      avatarText,
      resolveInvoiceStatusVariantAndIcon,
      resolveClientAvatarVariant,
      isAddNewUserSidebarStockActive,
    }
  },
}
</script>

<style lang="scss" scoped>
.per-page-selector {
  width: 90px;
}

.invoice-filter-select {
  min-width: 190px;

  ::v-deep .vs__selected-options {
    flex-wrap: nowrap;
  }

  ::v-deep .vs__selected {
    width: 100px;
  }
}
</style>

<style lang="scss">
@import '~@core/scss/vue/libs/vue-select.scss';
</style>
