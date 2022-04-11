import axios from '@axios'
import { getCond } from '@/utils/helpers';

export default {
  namespaced: false,
  state: {
      roles : []
  },
  getters: {
        getRoles(state) {
                return state.roles;
        }
  },
  mutations: {
    UPDATE_ROLES(state, val) {
      state.roles = val
    },
  },
  actions: {
    _UPDATE_ROLES({ commit},params){
        const cond = getCond(params);

         return new Promise((resolve, reject) => {
            axios
              .get('/role'+cond)
              .then(response => {
                  commit("UPDATE_ROLES",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
  },
}
