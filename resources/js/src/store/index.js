import Vue from 'vue'
import Vuex from 'vuex'

// Modules
import app from './app'
import appConfig from './app-config'
import verticalMenu from './vertical-menu'
import common from './common';

// moduls 
import agency from './agency';
import stock from './stock'; 

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    app,
    appConfig,
    verticalMenu,
    common,
    stock,

    agency
  },
  strict: process.env.DEV,
})
