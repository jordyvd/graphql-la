<template>
    <div>
        <h1>Lista de posts</h1>
        <ul>
            <li v-for="post in posts" :key="post.id">{{ post.content }}</li>
        </ul>
    </div>
</template>

<script>
import PostService from "../Services/posts.service";
export default {
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        this.getPosts();
        this.createPost();
    },
    methods: {
        async getPosts() {
            const data = await PostService.getPosts({ id: 2 });
            this.posts = data;
        },

        async createPost()
        {
            const data = await PostService.createPost({ title: "okkkkk" });
            console.log(data);
        }
    },
};
</script>
