export function getCond(params){
    let cond = "?"
        if(params)
        Object.entries(params).map(item => {
                const key = item[0]
                const value = item[1]
                if(value!==null)
                cond +=`${key}=${value}&&`

        });

    return cond;
}