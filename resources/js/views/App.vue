<template>
    <div>

        
     
        <NavBar />
        <router-view></router-view>
    </div>
</template>


<script>

import NavBar from '../components/NavBar.vue'

export default {

    name: "App",


    // futuri components
    components: {

        NavBar,

    },

    //mounted, gli dico di chiamare la funzione quando la pagina è caricata 
    mounted() {

        

    },

    // data, che va sempre con il return 
    data() {
        return {
           
        }
    },

    // methods per la funzione
    methods: {
       
    }
}


</script>