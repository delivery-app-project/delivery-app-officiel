import Vue from 'vue'

// axios
import axios from 'axios'

const userData = JSON.parse(localStorage.getItem('userData'));

// let headers = {};

// if(getUserData)
// headers = {
//   'Authorization': 'Bearer '+getUserData.refreshToken, 
// }
const axiosIns = axios.create({
  // You can add your headers here
  // ================================
  // baseURL: 'https://some-domain.com/api/',
  baseURL: 'http://localhost:8000/api/',
  // timeout: 1000,
  headers: {
    // 'X-Custom-Header': 'foobar'
    // 'Authorization': userData!=null ? `Bearer ${userData.accessToken}` : null
    
  }  
})

Vue.prototype.$http = axiosIns




export default axiosIns
