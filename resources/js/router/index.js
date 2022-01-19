import { createRouter , createWebHistory } from 'vue-router'

import Dashboard from '../pages/Dashboard.vue'
import Transaction from '../pages/Transaction.vue'

const routes =  [
  {
    path : '/',
    component : Dashboard,
    name : 'dashboard'
  },
  {
    path : '/transaction',
    component : Transaction,
    name : 'transaction'
  }
]

const router = createRouter({
  routes,
  history : createWebHistory()
})

export default router