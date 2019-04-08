<template>
    <div class="tweet">

        <div class="tweet-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">
            {{ tweet.tweets }}
        </div>
        <br />

        by - {{ tweet.id}} @ {{ tweet.created_at }}
        <br/>
        <button :class="{'displaying': likeActive}" class="btn btn-sm likeUnlikeBtn" @click="likeTweet(tweet.id)" style="background-color:white; color:white; font-size:30px;"><i class="fa fa-heart" style="color:#2DB2F4;"></i></button> &nbsp;&nbsp;
        <button :class="{'displaying': unlikeActive}" class="btn btn-sm likeUnlikeBtn" @click="unlikeTweet(tweet.id)" style="background-color: white; color:white;"><i class="fa fa-heart" style="color:red; font-size:30px;"></i></button>
        <comments-component :tweetId  = "tweet.id"></comments-component>

        <div class="row" style="text-align:right;">
            <textarea v-model="newComment" name="comment" class="form-control" placeholder="comment here" style="text-align:right"></textarea>
            <br /><br />
            <input type="hidden" name="tweet_id" value=" " />
            <div class="align-right">
                <button @click="makeComment" class="btn btn-twitter btn-sm align-right" style="background-color: #1da1f2; color:white; text-align:right">Comment</button>
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
            likeActive: true,
            unlikeActive: false,
            newComment: ""
      }
    },
    methods:{
        makeComment(){
        // alert(this.tweet.id);
        console.log(this.tweet);
        axios.post('/api/new-comment',{
            tweet_id: this.tweet.id,
            user_id: currentLoggedInUserUserId,
            comment:this.newComment
        })
        .then(function (response) {


            console.log(response);
        })
        .catch(function (error){
            console.log(error);
        });


      location.reload();
    },

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
