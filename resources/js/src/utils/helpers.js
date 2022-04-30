export function getCond(params){
    let cond = "?"
        if(params)
        Object.entries(params).map(item => {
                const key = item[0]
                const value = item[1]
                if(value!==null){
                    if(!Array.isArray(value))
                    cond +=`${key}=${value}&&`
                    else {
                        cond += `${key}=${JSON.stringify(value)}&&`;
                    }
                }
        });

    return cond;
}


export function getWhereDoesntHave(whereDoesntHaveCond,whereDoesntHaveMorphCond){
    return {
        relation : whereDoesntHaveCond.relation,
        value : {
            whereDoesntHaveMorph : [
              {
              relation : whereDoesntHaveMorphCond.relation,
              'class' :  whereDoesntHaveMorphCond.class,
              value : {
                key : whereDoesntHaveMorphCond.value.key,
                value : [whereDoesntHaveMorphCond.value.value],
              }
            }
            ]
        }
    }
}