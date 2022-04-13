
import axios from '@axios'

export default {
  state: {
      
      morph_types : [],
      morph_trade_types : [],

      wilayas : [],
      employees : [],
      stocks : []
  },
  getters: {
      getMorphTypes (state){
          return state.morph_types;
      },
      getMorphTradeTypes (state){
          return state.morph_trade_types;
      },
      getWilayas(state) {
          return state.wilayas;
      },
      getEmployees(state) {
          return state.employees.map(item => {
            item.name = item.user.name
            return item;
          });
      },
      getStocks(state){
          return state.stocks;
      }
  },    
  mutations: {
      UPDATE_MORPH_TYEPS(state,val){
          state.morph_types = val;
      },
      UPDATE_MORPH_TRADE_TYEPS(state,val){
          state.morph_trade_types = val;
      },
      UPDATE_WILAYAS(state,val){
          state.wilayas = val;
      },
      UPDATE_EMPLOYEES(state,val){
          state.employees = val;
      },
      UPDATE_STOCKS(state,val){
          state.stocks = val;
      },
    // UPDATE_VERTICAL_MENU_COLLAPSED(state, val) {
    //   state.isVerticalMenuCollapsed = val
    // },
  },
  actions: {
      _UPDATE_MORPH_TYEPS({ commit},params){
        let cond = "?"
        Object.entries(params).map(item => {
                const key = item[0]
                const value = item[1]
                cond +=`${key}=${value}&&`

        });

         return new Promise((resolve, reject) => {
            axios
              .get('/type-morph'+cond)
              .then(response => {
                  commit("UPDATE_MORPH_TYEPS",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
      _UPDATE_MORPH_TRADE_TYEPS({ commit},params){
        let cond = "?"
        Object.entries(params).map(item => {
                const key = item[0]
                const value = item[1]
                cond +=`${key}=${value}&&`

        });

         return new Promise((resolve, reject) => {
            axios
              .get('/type-morph'+cond)
              .then(response => {
                  commit("UPDATE_MORPH_TRADE_TYEPS",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
      _UPDATE_WILAYAS({ commit},params){
        // let cond = "?"
        // Object.entries(params).map(item => {
        //         const key = item[0]
        //         const value = item[1]
        //         cond +=`${key}=${value}&&`

        // });

         return new Promise((resolve, reject) => {
            axios
              .get('/wilaya')
              .then(response => {
                  commit("UPDATE_WILAYAS",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
      _UPDATE_EMPLOYEES({ commit},params){
        // let cond = "?"
        // Object.entries(params).map(item => {
        //         const key = item[0]
        //         const value = item[1]
        //         cond +=`${key}=${value}&&`

        // });

         return new Promise((resolve, reject) => {
            axios
              .get('/employee')
              .then(response => {
                  commit("UPDATE_EMPLOYEES",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      },
      _UPDATE_STOCKS({ commit},params){
        let cond = "?"
        Object.entries(params).map(item => {
                const key = item[0]
                const value = item[1]
                cond +=`${key}=${value}&&`

        });

         return new Promise((resolve, reject) => {
            axios
              .get('/stocks'+cond)
              .then(response => {
                  commit("UPDATE_STOCKS",response.data);
                  resolve(response);
              })
              .catch(error => reject(error))
          })
      }
  },
}
