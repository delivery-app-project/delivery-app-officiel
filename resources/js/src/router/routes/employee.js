export default [
    {
      path: '/transactions',
      name: 'transactions',
      component: () => import('@/views/pages/transactions/Transactions.vue'),
      meta: {
        pageTitle: 'Transactions',
        resource : 'Transactions',
        
        // breadcrumb: [
        //   {
        //     text: 'Home',
        //     active: true,
        //   },
        // ],
      },
    },
  ]
  