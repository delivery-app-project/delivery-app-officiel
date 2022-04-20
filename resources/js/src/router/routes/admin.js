export default [
    {
        path: '/agencies',
        name: 'agencies',
        component: () => import('@/views/pages/agencies/index.vue'),
        meta: {
          pageTitle: 'Agencies',
          resource : 'Agencies',

          // breadcrumb: [
          //   {
          //     text: 'Home',
          //     active: true,
          //   },
          // ],
        },
      },
      {
        path: '/agencies/preview/:id',
        name: 'agency-preview',
        component: () => import('@/views/pages/agencies/agency-preview/index.vue'),
        meta : {
          pageTitle : "Agency preview",
          resource : "viewAgency"
        }
      }, 
      {
        path: '/agencies/update/:id',
        name: 'agency-update',
        component: () => import('@/views/pages/agencies/agency-update/agencyUpdate.vue'),
        meta : {
          pageTitle : "Agency Update",
          resource : "updateAgency",
          action : 'update'
        } 
      },
      {
        path: '/agencies/add',
        name: 'agency-add',
        component: () => import('@/views/pages/agencies/agency-add/agencyAdd.vue'),
        meta : {
          pageTitle : "Agency add",
          resource : "addAgency"
        }
      },
    {
        path: '/stocks',
        name: 'stocks',
        component: () => import('@/views/pages/stocks/index.vue'),
        meta: {
          pageTitle: 'Stocks',
          resource : 'Stocks',

          // breadcrumb: [
          //   {
          //     text: 'Home',
          //     active: true,
          //   },
          // ],
        },
      },
      {
        path: '/stocks/preview/:id',
        name: 'stocks-preview',
        component: () => import('@/views/pages/stocks/stocks-preview/index.vue'),
        meta : {
          pageTitle : "Stocks preview",
          resource : "viewStock"
        }
      },
      {
        path: '/stocks/add',
        name: 'stock-add',
        component: () => import('@/views/pages/stocks/stock-add/stockAdd.vue'),
        meta : {
          pageTitle : "Stock add",
          resource : "addStock"
        }
      },
      {
        path: '/stocks/update/:id',
        name: 'stock-update',
        component: () => import('@/views/pages/stocks/stock-update/stockUpdate.vue'),
        meta : {
          pageTitle : "Stock Update",
          resource : "updateStock"
        } 
      },

    {
        path: '/employees',
        name: 'employees',
        component: () => import('@/views/pages/employees/employees-list/index.vue'),
        meta: {
          pageTitle: 'Employees',
          resource : 'Employees',

          // breadcrumb: [
          //   {
          //     text: 'Home',
          //     active: true,
          //   },
          // ],
        },
      },{
      path: '/employees/:id',
        name: 'employees-preview',
        component: () => import('@/views/pages/employees/employees-view/index.vue'),
        meta: {
          pageTitle: 'Employees-preview',
          //accy to Employees
          resource : 'Stocks',

          // breadcrumb: [
          //   {
          //     text: 'Home',
          //     active: true,
          //   },
          // ],
        },
      },
    {
        path: '/marchents',
        name: 'marchents',
        component: () => import('@/views/pages/marchents/marchents-list/index.vue'),
        meta: {
          pageTitle: 'Marchents',
          resource : 'Marchents',

          // breadcrumb: [
          //   {
          //     text: 'Home',
          //     active: true,
          //   },
          // ],
        },
      },

      
    {
      path: '/orders/:id',
      name: 'orders-marchent',
      component: () => import('@/views/pages/orders/index.vue'),
      meta: {
        pageTitle: 'Order of marchent',
        resource : 'viewMarchentOrders',
    
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
      
    },
    {
      path: '/agency/orders/:id',
      name: 'orders-agency',
      component: () => import('@/views/pages/agencies/orders/index.vue'),
      meta: {
        pageTitle: 'Orders of the Agency',
        resource : 'viewMarchentOrders',
    
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
      
    }


];
