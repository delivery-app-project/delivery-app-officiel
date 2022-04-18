import { getUserData } from "@/auth/utils"

  let routes = getUserData().employee ? [
    {
      title: 'Transactions',
      icon: 'HomeIcon',
      route: 'transactions',
      resource : 'Transactions',
      action : 'read'
    },
    {
      title: 'Employee agencies',
      icon: 'HomeIcon',
      route: { name: 'employee-agencies', params: { id: getUserData().employee.id  }},
      resource : 'Transactions',
      action : 'read'
    }
  ] : [];
  
export default routes;
  