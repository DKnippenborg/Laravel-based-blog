<template>
    <div class="d-flex">
        <div>{{ comment.comment }}</div>
        <div class="ml-auto">{{ comment.user.name }}</div>
    </div>
</template>

<script>
    export default {
        name: "PostComment",
        props: ['comment'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
