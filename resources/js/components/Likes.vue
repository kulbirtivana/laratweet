<template>
<div>
    <form action="tweet/Like" method="post">
        <label for="Likes">
            <button type="submit" value="Like" onclick="toggleLike( event )">Like</button>
        </label>
    </form>             
</div>
</template>

<script>
    export default {
        name: "Likes",
        methods: {
             toggleLike: function( event )
        {
            let tweetId = event.target.dataset.tweetId;
            let action = event.target.textContent;
            toggleButtonText[action](event.target);
            updatePostStats[action](postId);
            axios.patch('/tweet/' + tweettId + '/act',
            { action: like });
        },
            like(tweetId) {
                 this.text = 'Unlike';
                 document.querySelector('#likes-count-' + postId).textContent++;
                axios.patch('/tweet/tweetId/like')
                   
            },
            unLike(tweetId) {
                 this.text = 'Like';
                  document.querySelector('#likes-count-' + tweetId).textContent--;
                axios.patch('/tweet/tweetId/unLike')
            
            }
        }
    }
</script>

<style scoped>
</style>