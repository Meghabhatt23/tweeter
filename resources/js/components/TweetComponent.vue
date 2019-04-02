<template>
    <div class="tweet">
        <div class="tweet-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">
                {{ tweet.tweets }}
        </div>
        <br />

        by - {{ tweet.user_id}} @ {{ tweet.created_at }}
        <br/>
            <button :class="{'displaying': likeActive}" class="btn btn-sm likeUnlikeBtn" @click="likeTweet(tweet.id)" style="background-color: #1da1f2; color:white;">like</button> &nbsp;&nbsp;
            <button :class="{'displaying': unlikeActive}" class="btn btn-sm likeUnlikeBtn" @click="unlikeTweet(tweet.id)" style="background-color: #1da1f2; color:white;">Unlike</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Tweet Component mounted.')
        },
        data() {
            return{
            tweets: [],
            likeActive: true,
            unlikeActive: false
        }
},
        methods:{
        likeTweet(tweetId){
                this.likeActive   = false;
                this.unlikeActive   = true;
            axios.post('/api/tweet-likes',{

                tweet_id: tweetId,
                like: "1",
                user_id:currentLoggedInUserUserId
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        },
        unlikeTweet(tweetId){
            this.likeActive   = true;
            this.unlikeActive   = false;
            axios.post('/api/tweet-likes',{
                tweet_id: tweetId,
                like: "0",
                user_id:currentLoggedInUserUserId
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error){
                console.log(error);
            });
        }
},
        props:['tweet']
    }


</script>
