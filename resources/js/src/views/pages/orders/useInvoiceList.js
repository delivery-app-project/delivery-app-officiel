import { ref, watch, computed } from '@vue/composition-api'
import store from '@/store'

// Notification
import { useToast } from 'vue-toastification/composition'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'
import {  getUserData } from '@/auth/utils'
import router from '@/router'
export default function useInvoicesList() {
  
  // Use toast
  const toast = useToast()

  const refInvoiceListTable = ref(null)

  // Table Handlers
  const tableColumns = [
    { key: 'id', label: '#', sortable: true },
    { key: 'receiver', sortable: true },
    { label : 'Reveiver type' ,key: 'receiver_type.name', sortable: true },
    { key: 'phone', sortable: true, formatter: val => `$${val}` },
    { key: 'code_postal', sortable: true },
    // { key: 'weight', sortable: true },
    // { key: 'height' },
    // { key: 'length' },
    // { key: 'width' },
    { key: 'quatity' },
    { label : 'Etat' ,key: 'etat.name' },
    { key: 'actions' },
  ]
  const perPage = ref(10)
  const totalInvoices = ref(0)
  const currentPage = ref(1)
  const perPageOptions = [10, 25, 50, 100]
  const searchQuery = ref('')
  const sortBy = ref('id')
  const isSortDirDesc = ref(true)
  const statusFilter = ref(null)
  const transaction_id = ref(null)

  const dataMeta = computed(() => {
    const localItemsCount = refInvoiceListTable.value ? refInvoiceListTable.value.localItems.length : 0
    return {
      from: perPage.value * (currentPage.value - 1) + (localItemsCount ? 1 : 0),
      to: perPage.value * (currentPage.value - 1) + localItemsCount,
      of: totalInvoices.value,
    }
  })

  const refetchData = () => {
    refInvoiceListTable.value.refresh()
  }

  watch([currentPage, perPage, searchQuery, statusFilter], () => {
    refetchData()
  })

  const fetchInvoices = (ctx, callback) => {
    
    const userData = getUserData()
    const data = transaction_id.value ? {
      search: searchQuery.value,
      perPage: perPage.value,
      page: currentPage.value,
      sortBy: sortBy.value,
      sortDesc: isSortDirDesc.value,
      status: statusFilter.value,
      transaction_id : transaction_id.value
    } : 
    {
      search: searchQuery.value,
      perPage: perPage.value,
      page: currentPage.value,
      sortBy: sortBy.value,
      sortDesc: isSortDirDesc.value,
      status: statusFilter.value,
      id : router.currentRoute.params.id ? router.currentRoute.params.id : userData.marchent.id  
    }

    store 
      .dispatch('app-order/fetchInvoices', data)
      .then(response => {
        const { data, total } = response.data

        callback(data)
        totalInvoices.value = total
      })
      .catch(() => {
        toast({
          component: ToastificationContent,
          props: {
            title: "Error fetching invoices' list",
            icon: 'AlertTriangleIcon',
            variant: 'danger',
          },
        })
      })
  }

  // *===============================================---*
  // *--------- UI ---------------------------------------*
  // *===============================================---*

  const resolveInvoiceStatusVariantAndIcon = status => {
    if (status === 'Partial Payment') return { variant: 'warning', icon: 'PieChartIcon' }
    if (status === 'Paid') return { variant: 'success', icon: 'CheckCircleIcon' }
    if (status === 'Downloaded') return { variant: 'info', icon: 'ArrowDownCircleIcon' }
    if (status === 'Draft') return { variant: 'primary', icon: 'SaveIcon' }
    if (status === 'Sent') return { variant: 'secondary', icon: 'SendIcon' }
    if (status === 'Past Due') return { variant: 'danger', icon: 'InfoIcon' }
    return { variant: 'secondary', icon: 'XIcon' }
  }

  const resolveClientAvatarVariant = status => {
    if (status === 'Partial Payment') return 'primary'
    if (status === 'Paid') return 'danger'
    if (status === 'Downloaded') return 'secondary'
    if (status === 'Draft') return 'warning'
    if (status === 'Sent') return 'info'
    if (status === 'Past Due') return 'success'
    return 'primary'
  }

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

    resolveInvoiceStatusVariantAndIcon,
    resolveClientAvatarVariant,

    refetchData,
    transaction_id
  }
}
