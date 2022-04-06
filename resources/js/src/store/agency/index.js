
import axios from '@axios'
import { getCond } from '@/utils/helpers';
export default {
  state: {
      agency : null,
      agencies : [],
  },
  getters: {
      getAgency(state){
          return state.agency;
      },
      getAgencies(state){
          return state.agencies;
      }
  },
  mutations: {
      UPDATE_AGENCY(state,val){
          state.agency = val;
      },
      UPDATE_AGENCIES(state,val){
          state.agencies = val;
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
    _UPDATE_AGENCIES({ commit},params){
        const cond = getCond(params);
         return new Promise((resolve, reject) => {
            axios
              .get('/agency'+cond)
              .then(response => {
                const { error } = response.data;
                  if(!error)
                  commit("UPDATE_AGENCIES",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },


  },
}
