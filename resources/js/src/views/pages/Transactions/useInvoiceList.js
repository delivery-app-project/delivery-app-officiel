import { ref, watch, computed } from '@vue/composition-api'
import store from '@/store'
import router from '@/router'
import i18n from '@/libs/i18n/index.js'
// Notification
import { useToast } from 'vue-toastification/composition'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'
import {  getUserData } from '@/auth/utils'

export default function useInvoicesList() {

  // Use toast
  const toast = useToast()

  const refInvoiceListTable = ref(null)

  // Table Handlers
  const tableColumns = [
    { key: 'id', label: '#', sortable: true },
    { key: 'send_date', label: i18n.t('Send Date'), sortable: true },
    { key: 'time_send_date', label: i18n.t('Time send Date'), sortable: true },
    { key: 'receive_date', label: i18n.t('Receive date'), sortable: true },
    { key: 'actions' , label: i18n.t('actions')},

  ]
  const perPage = ref(10)
  const totalInvoices = ref(0)
  const currentPage = ref(1)
  const perPageOptions = [10, 25, 50, 100]
  const searchQuery = ref('')
  const sortBy = ref('id')
  const isSortDirDesc = ref(true)
  const statusFilter = ref(null)

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
    const possibleTypes = [
      'source',
      'destination'
    ];

    const indexFor = router.currentRoute.params.stock_id ? router.currentRoute.params.stock_id : (router.currentRoute.params.agency_id ? router.currentRoute.params.agency_id : null);
    const type = router.currentRoute.params.type;


    if(type && !possibleTypes.includes(type)) router.push({
      name : "not-authorized"
    })
    let conds = {
      search: searchQuery.value,
      perPage: perPage.value,
      page: currentPage.value,
      sortBy: sortBy.value,
      sortDesc: isSortDirDesc.value,
      etat_id : statusFilter.value.value,
      employee_id : null,
      stock_id : null,
      agency_id : null,
      paginated : true
    };

    if(!indexFor){
    const userData = getUserData()
    conds.employee_id = userData.employee.id;
    }
    else if(indexFor && router.currentRoute.params.stock_id) {
      if(type==="source")
      conds.source = router.currentRoute.params.stock_id;
      else 
      conds.destination = router.currentRoute.params.stock_id;
      
      conds.for = 'stock'
    }
    else if(indexFor && router.currentRoute.params.agency_id) {
      if(type==="source")
      conds.source = router.currentRoute.params.agency_id;
      else 
      conds.destination = router.currentRoute.params.agency_id;
    }

    // console.log(conds);
    store
      .dispatch('app-transactions/fetchInvoices', conds)
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
  }
}
