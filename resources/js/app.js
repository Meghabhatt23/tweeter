
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('tweet-component', require('./components/TweetComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// const app = new Vue({
//     el: '#app'
// });
const test = new Vue({
    el: '#tweetsWrapper',
    data() {
        return{
        tweets: [
            {
        id: 56,
        user_id: 2,
        tweets: "I'm afraid, sir' said Alice, who was peeping anxiously into its eyes by this time). 'Don't grunt,' said Alice; 'it's laid for a minute or two, it was getting very sleepy; 'and they all crowded round.",
        created_at: "2019-03-28 17:55:42",
        updated_at: "2019-03-28 17:55:42"
        },
        {
        id: 57,
        user_id: 2,
        tweets: "I know I do!' said Alice more boldly: 'you know you're growing too.' 'Yes, but I can't see you?' She was a dead silence. 'It's a pun!' the King hastily said, and went on in the last few minutes she.",
        created_at: "2019-03-28 17:55:42",
        updated_at: "2019-03-28 17:55:42"
        }
        ]
    }
},
methods:{
    initialTweets(){
        axios.get("/api/tweetsbynumber/10")
        .then((response) => {
            console.log(response);
    });
}
},
mounted(){
    this.initialTweets();

}

});
