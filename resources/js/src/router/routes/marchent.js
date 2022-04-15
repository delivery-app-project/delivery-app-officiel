export default [
    {
      path: '/packages',
      name: 'packages',
      component: () => import('@/views/pages/packages/index.vue'),
      meta: {
        pageTitle: 'Packages',
        resource : 'Package',
        
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
      path: '/orders/preview/:id',
      name: 'order-preview',
      component: () => import('@/views/pages/orders/order-view/index.vue'),
      meta: {
        pageTitle: 'Order preview',
        resource : 'Orders',
        
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
    },
  ]
  