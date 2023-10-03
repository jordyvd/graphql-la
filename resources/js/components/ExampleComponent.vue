<template>
    <div>
        <h1>Lista de clients</h1>
        <ul>
            <li v-for="client in clients" :key="client.id">
                {{ client }}
            </li>
        </ul>
    </div>
</template>

<script>
import PostService from "../Services/posts.service";

import ClientService from "../Services/clients.service";
export default {
    data() {
        return {
            posts: [],
            clients: [],
        };
    },
    mounted() {
        // this.getPosts();
        // this.createPost();
        this.getClients();
    },
    methods: {
        // async getPosts() {
        //     const data = await PostService.getPosts({ id: 2 });
        //     this.posts = data;
        // },

        // async createPost() {
        //     const data = await PostService.createPost({ title: "okkkkk" });
        //     console.log(data);
        // },

        async getClients() {
            const data = await ClientService.getClients({ id: null });
            this.clients = data;
            console.log(data);
        },
    },
};
</script>
