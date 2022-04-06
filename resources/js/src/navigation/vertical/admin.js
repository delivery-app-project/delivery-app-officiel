export default [
  {
    title: 'Agencies',
    icon: 'HomeIcon',
    route: 'agencies',
    resource: 'Agencies',
    action: 'read',
    children: [
      // {
      //   title: 'Edit',
      //   route: { name: 'apps-invoice-edit', params: { id: 4987 } },
      // },
      {
        title: 'Agencies',
        icon: 'HomeIcon',
        route: 'agencies',
        resource: 'Agencies',
        action: 'read',
      },
      {
        title: 'Add',
        route: { name: 'agency-add' },
        resource: 'Agencies',
        action: 'read'
      },
    ],
  },

  {
    title: 'Stocks',
    icon: 'HomeIcon',
    route: 'stocks',
    resource: 'Stocks',
    action: 'read',
    children: [
      // {
      //   title: 'Edit',
      //   route: { name: 'apps-invoice-edit', params: { id: 4987 } },
      // },
      {
        title: 'Stocks',
        icon: 'HomeIcon',
        route: 'stocks',
        resource: 'Stocks',
        action: 'read',
      },
      {
        title: 'Add',
        route: { name: 'stock-add' },
        resource: 'Agencies',
        action: 'read'
      },
    ],
  },
  {
    title: 'Employees',
    icon: 'HomeIcon',
    route: 'employees',
    resource: 'Employees',
    action: 'read'
  },
  {
    title: 'Marchents',
    icon: 'HomeIcon',
    route: 'marchents',
    resource: 'Marchents',
    action: 'read'
  },
]
