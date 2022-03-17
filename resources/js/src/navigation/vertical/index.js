
import employee from './employee'
import marchent from './marchent'

export default [
  {
    title: 'Home',
    route: 'home',
    icon: 'HomeIcon',
    resource : 'Home',
    action : 'read'
  },
  {
    title: 'Second Page',
    route: 'second-page',
    icon: 'FileIcon',
    resource : 'SecondPage',
    action : 'read'
  },
  {
    title: 'Third Page',
    route: 'third-page',
    icon: 'FileIcon', 
    resource : 'ThirdPage',
    action : 'read'
  },
  ...marchent,
  ...employee
]
