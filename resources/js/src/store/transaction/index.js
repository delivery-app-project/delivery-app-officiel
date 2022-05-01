
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
    _UPDATE_TRANSACTION({ commit},params){
      // const cond = getCond(params);

       return new Promise((resolve, reject) => {
          axios
            .patch('/transaction/'+params.id,params)
            .then(response => {
                // commit("UPDATE_ROLES",response.data);
                resolve(response);
            })
            .catch(error => reject(error))
        })
    },
  },
}
