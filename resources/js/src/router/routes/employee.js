
export default [ 
  {
    path: '/transactions',
    name: 'transactions',
    component: () => import('@/views/pages/transactions/index.vue'),
    meta: {
      pageTitle: 'Transactions',
      resource : 'Transactions',
      
      // breadcrumb: [
      //   {
      //     text: 'Home',
      //     active: true,
      //   },
      // ],
      }
    },
  
    {
      
      path: '/transactions/preview/:id',
      name: 'transaction-preview',
      component: () => import('@/views/pages/transactions/transaction-preview/index.vue'),
      meta: {
        pageTitle: 'Preview Transaction',
        resource : 'Transactions',
        
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
    },
    {
      
      path: '/agencies/:id',
      name: 'employee-agencies',
      component: () => import('@/views/pages/agencies/index.vue'),
      meta: {
        pageTitle: 'Employee Agencies',
        resource : 'viewEmployeeAgencies',
        
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
    }
  ]
  