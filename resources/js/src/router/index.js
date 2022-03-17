import Vue from 'vue'
import VueRouter from 'vue-router'


import { canNavigate } from '@/libs/acl/routeProtection'
import { isUserLoggedIn, getUserData, getHomeRouteForLoggedInUser } from '@/auth/utils'
import marchent from './routes/marchent'
import employee from './routes/employee' 

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  scrollBehavior() {
    return { x: 0, y: 0 }
  },
  routes: [
    {
      path: '/not-authorized',
      name: 'not-authorized',
      component: () => import('@/views/pages/miscellaneous/NotAuthorized.vue'),
      meta: {
        pageTitle: 'Not Authorized',
        resource : 'Not Authorized',
        breadcrumb: [
          {  
            text: 'Not Authorized',
            active: true,
          },
        ],
      },
    },
    {
      path: '/',
      name: 'home',
      component: () => import('@/views/Home.vue'),
      meta: {
        pageTitle: 'Home',
        resource : 'Home',
        breadcrumb: [
          {
            text: 'Home',
            active: true,
          },
        ],
      },
    },
    {
      path: '/third-page',
      name: 'third-page',
      component: () => import('@/views/ThirdPage.vue'),
      meta: {
        pageTitle: 'Third Page',
        resource: 'ThirdPage',
        breadcrumb: [
          {
            text: 'Third Page',
            active: true,
          },
        ],
      },
    },
    {
      path: '/second-page',
      name: 'second-page',
      component: () => import('@/views/SecondPage.vue'),
      meta: {
        pageTitle: 'Second Page',
        resource : 'SecondPage',
        breadcrumb: [
          {
            text: 'Second Page',
            active: true,
          },
        ],
      },
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('@/views/Login.vue'),
      meta: {
        layout: 'full',
        resource: 'Auth',
        redirectIfLoggedIn : true,
      },
    },
    {
      path: '/error-404',
      name: 'error-404',
      
      component: () => import('@/views/error/Error404.vue'),
      meta: {
        layout: 'full',
        // resource : 'Auth'
      },
    },
    {
      path: '*',
      redirect: 'error-404',
    },
    ...marchent,
    ...employee
  ],
})


router.beforeEach((to, _, next) => {
  
  const isLoggedIn = isUserLoggedIn()
  
  if (!canNavigate(to)) {
    // Redirect to login if not logged in
    if (!isLoggedIn) return next({ name: 'login' })
    
    // If logged in => not authorized
    return next({ name: 'not-authorized' })
  }
  // Redirect if logged in
  if (to.meta.redirectIfLoggedIn && isLoggedIn) {
    const userData = getUserData()
    next(getHomeRouteForLoggedInUser(userData ? userData.role : null))
  }

  return next()
})
// ? For splash screen
// Remove afterEach hook if you are not using splash screen
router.afterEach(() => {
  // Remove initial loading
  const appLoading = document.getElementById('loading-bg')
  if (appLoading) {
    appLoading.style.display = 'none'
  }
})



export default router
