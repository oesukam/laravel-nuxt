import Vue from 'vue'
import Router from 'vue-router'
import { scrollBehavior } from '~/utils'

Vue.use(Router)

const Home = () => import('~/pages/home').then(m => m.default || m)
const Welcome = () => import('~/pages/index').then(m => m.default || m)

const Login = () => import('~/pages/auth/login').then(m => m.default || m)
const Register = () => import('~/pages/auth/register').then(m => m.default || m)
const PasswordReset = () => import('~/pages/auth/password/reset').then(m => m.default || m)
const PasswordRequest = () => import('~/pages/auth/password/email').then(m => m.default || m)

const Settings = () => import('~/pages/settings/index').then(m => m.default || m)
const SettingsProfile = () => import('~/pages/settings/profile').then(m => m.default || m)
const SettingsPassword = () => import('~/pages/settings/password').then(m => m.default || m)

const routes = [
  { path: '/', name: 'welcome', component: Welcome },
  { path: '/en', name: 'en.welcome', component: Welcome },
  { path: '/home', name: 'home', component: Home },
  { path: '/:lang/home', name: 'en.home', component: Home },

  { path: '/login', name: 'login', component: Login },
  { path: '/:lang/login', name: 'en.login', component: Login },
  { path: '/register', name: 'register', component: Register },
  { path: '/:lang/register', name: 'en.register', component: Register },
  { path: '/password/reset', name: 'password.request', component: PasswordRequest },
  { path: '/:lang/password/reset', name: 'en.password.request', component: PasswordRequest },
  { path: '/password/reset/:token', name: 'password.reset', component: PasswordReset },
  { path: '/:lang/password/reset/:token', name: 'en.password.reset', component: PasswordReset },

  { path: '/:lang?/settings',
    component: Settings,
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: SettingsProfile },
      { path: 'password', name: 'settings.password', component: SettingsPassword }
    ] }
  // { path: '/:lang?', name: 'welcome', component: Welcome }
]

export function createRouter () {
  return new Router({
    routes,
    scrollBehavior,
    mode: 'history'
  })
}
