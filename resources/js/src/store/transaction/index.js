
import axios from '@axios'

export default {
  state: {
      
    },
  getters: {
  },
  mutations: {
  },
  actions: {
    storeTransaction(ctx,queryParams){
      return new Promise((resolve, reject) => {
        axios
          .post('/transaction', queryParams )
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
  },
}
