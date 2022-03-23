import axios from '@axios'

export default {
  namespaced: true,
  state: {},
  getters: {},
  mutations: {},
  actions: {
    updateLang(ctx, queryParams) {
      console.log(queryParams);
      return new Promise((resolve, reject) => {
        axios
          .patch('/user/'+queryParams.id, { lang : queryParams.lang })
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    // fetchStatuses(ctx,queryParams){
    //   return new Promise((resolve, reject) => {
    //     axios
    //       .get('/order-status', { params: queryParams })
    //       .then(response => resolve(response))
    //       .catch(error => reject(error))
    //   })
    // },
    // fetchInvoice(ctx, { id }) {
    //   return new Promise((resolve, reject) => {
    //     axios
    //       .get(`/apps/invoice/invoices/${id}`)
    //       .then(response => resolve(response))
    //       .catch(error => reject(error))
    //   })
    // },
    // fetchClients() {
    //   return new Promise((resolve, reject) => {
    //     axios
    //       .get('/apps/invoice/clients')
    //       .then(response => resolve(response))
    //       .catch(error => reject(error))
    //   })
    // },
    // addUser(ctx, userData) {
    //   return new Promise((resolve, reject) => {
    //     axios
    //       .post('/apps/user/users', { user: userData })
    //       .then(response => resolve(response))
    //       .catch(error => reject(error))
    //   })
    // },
  },
}
