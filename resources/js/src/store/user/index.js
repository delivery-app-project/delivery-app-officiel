import { $themeConfig } from '@themeConfig'
import axios from '@axios'

export default {
  state: {
      
        user : null,
    },
  getters: {
    getUser(state){
      return state.user;
  },
  },
  mutations: {
    UPDATE_USER(state,val){
      state.user = val;
  },
  },
  actions: {
  //   _UPDATE_USER({ commit},params){
  //     return new Promise((resolve, reject) => {
  //        axios
  //          .patch('/user/'+params.id,params)
  //          .then(response => {
  //            const { error } = response.data;
  //              if(!error)
  //              commit("UPDATE_USER",response.data);
  //              resolve(response);
  //          })
  //          .catch(error => reject(error))
  //      })
  //  },
  //   _GET_USER({ commit},params){

  //     return new Promise((resolve, reject) => {
  //        axios
  //          .get('/stocks/'+params.id)
  //          .then(response => {
  //              commit("UPDATE_USER",response.data);
  //              resolve(response);
  //          })
  //          .catch(error => reject(error))
  //      })
  //  },
  },
}
