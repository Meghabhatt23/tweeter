<template>
    <div class="tweet">

        <div class="tweet-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">
            {{ tweet.tweets }}

        </div>
        <br />

        by -{{ tweet.user_id}} @ {{ tweet.created_at }}
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Tweet Component mounted.')
        },
        props:['tweet']
    }
</script>
