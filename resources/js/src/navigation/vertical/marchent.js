
export default [
    {
        title: 'Packages',
        route: 'packages',
        icon: 'FileTextIcon', 
        resource : 'Package', 
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
            resource: 'Orders',
            action: 'read'
          },
        ],
      }
  ]
  