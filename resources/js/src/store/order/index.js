import axios from '@axios'

export default {
  namespaced: false,
  state: {
      // roles : []
  },
  getters: {
        // getRoles(state) {
        //         return state.roles;
        // }
  },
  mutations: {
    // UPDATE_ROLES(state, val) {
    //   state.roles = val
    // },
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
  },
}
