export default [
    {
      path: '/packages',
      name: 'packages',
      component: () => import('@/views/pages/packages/index.vue'),
      meta: {
        pageTitle: 'Packages',
        resource : 'Packages',
        
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
    },
    {
      path: '/orders',
      name: 'orders',
      component: () => import('@/views/pages/orders/index.vue'),
      meta: {
        pageTitle: 'Orders',
        resource : 'Orders',
    
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
      
    },
    
    {
      path: '/orders/add',
      name: 'order-add',
      component: () => import('@/views/pages/orders/order-add/index.vue'),
      meta: {
        pageTitle: 'Order add',
        resource : 'addOrder',
        
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
    },
  ]
  