

import { initialAbility } from '@/libs/acl/config'
import useJwt from '@/auth/jwt/useJwt'
import ability from '@/libs/acl/ability'
import router from '@/router'
import { getUserData } from '@/auth/utils'

export const setLang = (val) => {
  
     localStorage.setItem('lang',val)
}

export const getLang = () => {

    // return localStorage.getItem('lang')
    
    const userData = getUserData();

    return userData && userData.lang ? userData.lang : 'en';
}



export const setLocale = (val) => {
  
     localStorage.setItem('dir',val)
}

export const getLocale = () => {

    // return localStorage.getItem('dir')
    const userData = getUserData();
    
    return userData && userData.lang != 'ar' ? 'ltr' : 'rtl'
}

export const isRtl = () => {
    return getLocale() === 'rtl'; 
}


  
// redirect and logout 

export const redirectToLogin = () => {
    // Remove userData from localStorage
       // ? You just removed token from localStorage. If you like, you can also make API call to backend to blacklist used token
       localStorage.removeItem(useJwt.jwtConfig.storageTokenKeyName)
       localStorage.removeItem(useJwt.jwtConfig.storageRefreshTokenKeyName)
 
       // Remove userData from localStorage
       localStorage.removeItem('userData')
 
       // Reset ability
       ability.update(initialAbility)
 
       // Redirect to login page
       router.push({ name: 'login' }).catch(error => error);
 }