
import axios from '@axios'
export default {
  state: {
      agency : null,
  },
  getters: {
      getAgency(state){
          return state.agency;
      }
  },
  mutations: {
      UPDATE_AGENCY(state,val){
          state.agency = val;
      }
  },
  actions: {

    _GET_AGENCY({ commit},params){

         return new Promise((resolve, reject) => {
            axios
              .get('/agency/'+params.id)
              .then(response => {
                  commit("UPDATE_AGENCY",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },

    _UPDATE_AGENCY({ commit},params){

         return new Promise((resolve, reject) => {
            axios
              .patch('/agency/'+params.id,params)
              .then(response => {
                const { error } = response.data;
                  if(!error)
                  commit("UPDATE_AGENCY",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },


  },
}
