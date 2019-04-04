<template>
    <div class="tweet">
        <div class="tweet-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">
            {{ tweet.tweets }}
        </div>
        <br />

        by - {{ tweet.user_id}} @ {{ tweet.created_at }}
        <br/>
        <button :class="{'displaying': likeActive}" class="btn btn-sm likeUnlikeBtn" @click="likeTweet(tweet.id)" style="background-color:white; color:white; font-size:30px;"><i class="fa fa-heart" style="color:#2DB2F4;"></i></button> &nbsp;&nbsp;
        <button :class="{'displaying': unlikeActive}" class="btn btn-sm likeUnlikeBtn" @click="unlikeTweet(tweet.id)" style="background-color: white; color:white;"><i class="fa fa-heart" style="color:red; font-size:30px;"></i></button>
        <comment-component></comment-component>

        <div class="row">
            <div class="col-sm-6 col">
                <!-- <div class="container">
                <img  class="profile-icon" src="images/bird.png" alt="profile" style="width:40px; height:40px;">
            </div> -->
            <div class="col-md-6" style="text-align:right">
            </div>
            <form name="comment-form" method="post" action="comments">

                <textarea name="comment" class="form-control" placeholder="comment here" style="text-align:right"></textarea>
                    
                <input type="hidden" name="tweet_id" value=" " />
                <div class="align-right" style="text-align:right">
                    <button class="btn btn-twitter btn-sm align-right" style="background-color: #1da1f2; color:white;">Comment</button>
                </div>
            </form>
        </div>
    </div>
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
