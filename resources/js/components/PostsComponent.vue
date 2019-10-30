<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3" v-for="post in posts">
                    <post-component :post="post"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['posts'],
        
        
        mounted() {
            console.log('Component mounted.');
            console.log(this.posts, 123);
        },
    }
</script>
