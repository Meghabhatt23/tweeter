<template>

    <div class="comment">
        <div class="comment-component">
               {{ this.comments }}
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.initialComments();
        console.log('comment Component mounted.')
    },
    data() {
        return{
            comments: [],
        }
    },
    methods:{
        initialComments(){
            // alert();
            axios.get("/api/tweet-comments/500")
            .then((response) => {
                this.comments = response.data.data;
                console.log("this.comments");
            });

            }
                },

                props:['tweet_id']

            }
</script>
