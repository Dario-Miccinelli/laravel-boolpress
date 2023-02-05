<template>
    <div>

        <h1 class="text-center text-white">Post feelings</h1>
        <!-- loader  -->
        <Loader v-if="isLoading" />

     
        <!-- card  -->
        <div  v-else-if="tags.length" class="container mt-5">
            <div  v-for="elem in tags" :key="elem.id" class="card mb-3">
                <div class="row g-0">
                
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">Today i'm feeling: {{ elem.name }}</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p v-else class="text-white text-center">Non ci sono post nel DB</p>

        
    </div>
</template>


<script>

import Loader from '../../components/Loader.vue'

export default {

    name: "TagList",


    // futuri components
    components: {
        Loader,

    },
    data() {
    return {
        tags: [],
        isLoading: false, 
    }
},


    mounted() {

        this.getTags();

    },

  
    methods: {
        getTags() {
            this.isLoading = true,
            axios.get('http://localhost:8000/api/tags') //chiamata API ai dati dei post 
                .then((res) => {
                    this.tags = res.data;
                    
                }).catch(err => {
                    console.log(err)
                }).then(() => {
                    this.isLoading = false
                })
        }
    }
}


</script>