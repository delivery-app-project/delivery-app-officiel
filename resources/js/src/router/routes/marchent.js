export default [
    {
      path: '/packages',
      name: 'packages',
      component: () => import('@/views/pages/packages/Packages.vue'),
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
  ]
  