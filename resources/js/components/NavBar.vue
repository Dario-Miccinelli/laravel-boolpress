<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menù</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link active" :to="'/'">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="'/posts'">Posts</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="'/contacts'">Contacts</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="'/tags'">Post feelings</router-link>
                        </li>




                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {

    name: "NavBar",
}


</script>




