
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use (VueRouter)

import OurContacts from './components/OurContacts.vue'
import PostLists from './components/PostLists.vue'
import TagsIndex from './components/Tags/TagsIndex.vue'

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
        },
        {
            path: '/tags',
            name: 'tags',
            component: TagsIndex
        }
    ]
})



export default router;