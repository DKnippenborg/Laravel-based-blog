<template>
    <div>
        <div v-for="comment in comments">
            <post-comment :comment="comment"/>
        </div>
    </div>
</template>

<script>
    import PostComment from './PostComment';
    export default {
        props: ['comments'],
        components: { PostComment },
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>
