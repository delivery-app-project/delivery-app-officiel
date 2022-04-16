import axios from '@axios'

export default {
  namespaced: true,
  state: {},
  getters: {},
  mutations: {},
  actions: {
    fetchUsers(ctx, queryParams) {
      return new Promise((resolve, reject) => {
        axios
          .get('/employee', { params: queryParams })
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    fetchUser(ctx, { id }) {
      return new Promise((resolve, reject) => {
        axios
          .get(`/employee/${id}`)
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    addUser(ctx, userData) {
      return new Promise((resolve, reject) => {
        axios
          .post('/user', userData )
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    updateUser(ctx, userData) {
      return new Promise((resolve, reject) => {
        axios
          .patch('/user/'+userData.id, userData )
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    attachUserAgency(ctx, data) {
      return new Promise((resolve, reject) => {
        axios
          .patch('/agency/'+data.agency_id, data )
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
    attachUserStock(ctx, data) {
      return new Promise((resolve, reject) => {
        axios
          .patch('/stocks/'+data.stock_id, data )
          .then(response => resolve(response))
          .catch(error => reject(error))
      })
    },
  },
}
