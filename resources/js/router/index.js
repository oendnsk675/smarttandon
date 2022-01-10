import home from '../views/Home'
import dashboard from '../views/Dashboard'
import analytic from '../views/Analytic'
import account from '../views/Account'
import listUser from '../views/ListUser'
import login from '../views/auth/Login'
// import testLogin from '../views/testing/Login'
// import testDashboard from '../views/testing/Dashboard'
// import testHome from '../views/testing/Home'
// import testApp from '../views/testing/App'
// import dashboard2 from '../views/Tes'
// import dashboard3 from '../views/TesChart'

export default{
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: home
        },
        {
            path: '/login',
            name: 'login',
            component: login
        },
        {
            path: '/analytic',
            name: 'analytic',
            component: analytic
        },
        {
            path: '/account',
            name: 'account',
            component: account
        },
        {
            path: '/list_user',
            name: 'listUser',
            component: listUser
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: dashboard
        },
        // {
        //     path: '/test/login',
        //     name: 'testlogin',
        //     component: testLogin
        // },
        // {
        //     path: '/test/home',
        //     name: 'testHome',
        //     component: testHome
        // },
        // {
        //     path: '/test/dashboard',
        //     name: 'testDashboard',
        //     component: testDashboard,
        //     meta: {
        //         requiresAuth: true, 
        //     }
        // },
        // {
        //     path: '/test/app',
        //     name: 'testApp',
        //     component: testApp
        // },
        {
            path: '/auth/:provider/callback',
            component: {
                template: '<div class="auth-component">osyi</div>'
            }
        },
    ]
}