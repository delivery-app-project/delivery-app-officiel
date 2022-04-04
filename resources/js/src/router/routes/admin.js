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
        component: () => import('@/views/pages/agencies/agency-preview/agencyPreview.vue'),
        meta : {
          pageTitle : "Agency preview",
          resource : "Agencies"
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
        component: () => import('@/views/pages/stocks/stocks-preview/stocksPreview.vue'),
        meta : {
          pageTitle : "Stocks preview",
          resource : "Stocks"
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


];
