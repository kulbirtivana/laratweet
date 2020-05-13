  
<template>
  <div>
    <a href="#" v-if="isLiked" @click.prevent="unLike(tweet)">
      <i class="fas fa-thumbs-o-up" aria-hidden="true" style="color: blue; font-size: 2em;"></i>
      </a>
    <a href="#" v-else @click.prevent="like(tweet)">
      <i class="fas fa-thumbs-down" aria-hidden="false" style="color: red; font-size: 2em;"></i>
    </a>
  </div>
</template>

<script>
    export default {
        name: "Likes",
        props: ["tweet", "liked"],
        data() {
            return {
                    isLiked: ""
                    };
                },

            mounted () {
                this.isLiked = this.isLike ? true : false;
            },

            computed: {
                isLike() {
                return this.liked;
                }
            },
        methods: {
             like(tweet) {
             axios
             .tweet("tweetLara/public/like" + tweet)
             .then(response => (this.isLiked = false))
             }
        }
    };
</script>

<style scoped>
</style>