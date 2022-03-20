


export const setLocale = (val) => {
  
     localStorage.setItem('isRtl',val)
}

export const getLocale = () => {
  
    return localStorage.getItem('isRtl')
}


  