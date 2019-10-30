<template>
    <div class="card">
        <div class="card-header d-flex">
            <div>{{ post.title }}</div>
            <div class="ml-auto"> {{ post.category }} </div>
        </div>
            <div class="card-body">
                {{ post.body }}
                <div v-if="post.comments.length">
                    <hr>
                    <post-comments :comments="post.comments"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['post'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
