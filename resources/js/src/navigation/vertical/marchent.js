import { getUserData } from "@/auth/utils"

let routes = getUserData().marchent ? [
  {
      title: 'Packages',
      route: 'packages',
      icon: 'FileTextIcon', 
      resource : 'Packages', 
      action : 'read'
    },
  {
      title: 'Orders',
      route: 'orders',
      icon: 'FileTextIcon', 
      resource : 'Orders', 
      action : 'read',
      children: [
        // {
        //   title: 'Edit',
        //   route: { name: 'apps-invoice-edit', params: { id: 4987 } },
        // },
        {
          title: 'Orders',
          route: 'orders',
          icon: 'FileTextIcon', 
          resource : 'Orders', 
          action : 'read',
        },
        {
          title: 'Add',
          route: { name: 'order-add' },
          resource: 'addOrder',
          action: 'read'
        },
      ],
    }
] : [];

export default routes;
  