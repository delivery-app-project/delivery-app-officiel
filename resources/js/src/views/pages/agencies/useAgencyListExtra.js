import { ref, watch, computed } from '@vue/composition-api'
import store from '@/store'

import { useToast } from 'vue-toastification/composition'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'
import {  getUserData } from '@/auth/utils'

export default function useAgencyExtraList() {

  
  // Use toast
  const toast = useToast()
  const stocks = ref(0)

  

const fetchStocks = () => {
    const userData = getUserData()

    store
      .dispatch('app-agency/fetchStocks', {
        paginated: false,
        status: 'central',
      })
      .then(response => {
        const {data} = response.data;
        stocks.value = data;
      })
      .catch((err) => {
        toast({
          component: ToastificationContent,
          props: {
            title: "Error fetching stocks list",
            icon: 'AlertTriangleIcon',
            variant: 'danger',
          },
        })
      })
  }


  return {
      fetchStocks,
      stocks
  }

}