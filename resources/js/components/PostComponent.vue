<template>
    <div class="card">
        <div class="card-header">{{ postTitle }}</div>
            <div class="card-body">
                {{ postBody }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['postTitle', 'postBody'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
