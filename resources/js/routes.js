
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use (VueRouter)

import OurContacts from './components/OurContacts.vue'
import PostLists from './components/PostLists.vue'

const router = new VueRouter ({
    mode: 'history',
    routes: [
        {
            path: '/contacts',
            name: 'contacts',
            component: OurContacts
        },
        {
            path: '/posts',
            name: 'posts',
            component: PostLists
        }
    ]
})



export default router;