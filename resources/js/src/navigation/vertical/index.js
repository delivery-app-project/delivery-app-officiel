
import admin from './admin'
import employee from './employee'
import marchent from './marchent'
let routes = [
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
  ...employee,
  ...admin
];



export default routes;
