<template>
    <div>

        <h1 class="text-center mt-3 text-white">Posts</h1>


        <div class="container mt-5">
            <div class="card mb-3" v-for="elem in posts" :key="id">
                <div class="row g-0">
                    <div class="col-md-4">
                     <img :src="'storage/' + elem.cover" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ elem.title }}</h5>
                            <p class="card-text">{{ elem.body }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</template>


<script>

export default {

    name: "PostLists",


    // futuri components
    components: {

    },

    //mounted, gli dico di chiamare la funzione quando la pagina è caricata 
    mounted() {

        this.getPosts();

    },

    // data, che va sempre con il return 
    data() {
        return {
            posts: [], //array vuoto che andrò a riempire con i file del json
        }
    },

    // methods per la funzione
    methods: {
        getPosts() {
            axios.get('http://localhost:8000/api/posts') //chiamata API ai dati dei post 
                .then((res) => {
                    this.posts = res.data; //riempio l'array vuoto che ho sopra in data
                })
        }
    }
}


</script>