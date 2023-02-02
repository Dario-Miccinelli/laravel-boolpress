<template>
    <div>


        <!-- loader  -->
        <Loader v-if="isLoading" />

        <!-- card  -->
        <div  v-else-if="posts.length" class="container mt-5">
            <div  v-for="elem in posts" :key="elem.id" class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                     <img :src="'storage/' + elem.cover" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ elem.title }}</h5>
                            <p class="card-text">{{ elem.body }}</p>
                            <span v-if="elem.category">
                             {{ elem.category.name }}
                        </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p v-else class="text-white text-center">Non ci sono post nel DB</p>

        
    </div>
</template>


<script>

import Loader from '../components/Loader.vue'

export default {

    name: "PostLists",


    // futuri components
    components: {
        Loader,

    },
    data() {
    return {
        posts: [],
        isLoading: false, 
    }
},


    mounted() {

        this.getPosts();

    },

  
    methods: {
        getPosts() {
            this.isLoading = true,
            axios.get('http://localhost:8000/api/posts') //chiamata API ai dati dei post 
                .then((res) => {
                    this.posts = res.data;
                    
                }).catch(err => {
                    console.log(err)
                }).then(() => {
                    this.isLoading = false
                })
        }
    }
}


</script>