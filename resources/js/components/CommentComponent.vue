<template>
    <div class="">
        {{comment.comments}} <br />
            {{ comment.user_id }} @ {{ comment.created_at }}
     </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:['comment']
    }
</script>
