import axios from '@axios'
import { getCond } from '@/utils/helpers';

export default {
  namespaced: false,
  state: {
      order : null,
      orders : []
  },
  getters: {
        getOrder(state) {
                return state.order;
        },
        getOrders(state) {
                return state.orders;
        }
  },
  mutations: {
    UPDATE_ORDER(state, val) {
      state.order = val
    },
    UPDATE_ORDERS(state, val) {
      state.orders = val
    },
  },
  actions: {
    _STORE_ORDER({ commit},params){
        // const cond = getCond(params);

         return new Promise((resolve, reject) => {
            axios
              .post('/order',params)
              .then(response => {
                  // commit("UPDATE_ROLES",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
    _UPDATE_ORDER({ commit},params){
        // const cond = getCond(params);

         return new Promise((resolve, reject) => {
            axios
              .patch('/order/'+params.id,params)
              .then(response => {
                  // commit("UPDATE_ROLES",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
    _GET_ORDER({ commit},params){
        // const cond = getCond(params);

         return new Promise((resolve, reject) => {
            axios
              .get('/order/'+params.id)
              .then(response => {
                  commit("UPDATE_ORDER",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
    _UPDATE_ORDERS({ commit},params){
        const cond = getCond(params);

         return new Promise((resolve, reject) => {
            axios
              .get('/order'+cond)
              .then(response => {
                  commit("UPDATE_ORDERS",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
  },
}
