import { $themeConfig } from '@themeConfig'
import axios from '@axios'

export default {
  state: {
      
        stock : null
    },
  getters: {
    getStock(state){
      return state.stock;
  },
  },
  mutations: {
    UPDATE_STOCK(state,val){
      state.stock = val;
  },
  },
  actions: {
    storeStock(ctx,queryParams){
      return new Promise((resolve, reject) => {
        axios
          .post('/stocks', queryParams )
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    _UPDATE_STOCK({ commit},params){

      return new Promise((resolve, reject) => {
         axios
           .patch('/stocks/'+params.id,params)
           .then(response => {
             const { error } = response.data;
               if(!error)
               commit("UPDATE_STOCK",response.data);
               resolve(response);
           })
           .catch(error => reject(error))
       })
   },
    _GET_STOCK({ commit},params){

      return new Promise((resolve, reject) => {
         axios
           .get('/stocks/'+params.id)
           .then(response => {
               commit("UPDATE_STOCK",response.data);
               resolve(response);
           })
           .catch(error => reject(error))
       })
   },
  },
}
