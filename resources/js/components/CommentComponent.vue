<template>

    <div class="comment">
        <div class="comment-component">
              This is megha's comment!
    </div>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Comment Component mounted.')
    },
    data() {
        return{
            comment: [],

        }
    },
    methods:{

    },

    props:['comment']

}

</script>
