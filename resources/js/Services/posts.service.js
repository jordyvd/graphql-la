import axios from "axios";
import { GET_POSTS, CREATE_POST } from "../Queries/Posts.js";

const url = "/graphql";

class PostsService {
    async getPosts({ id }) {
        try {
            const response = await axios.post(url, {
                query: GET_POSTS(id),
            });
            console.log(response.data.data.posts);
            return response.data.data.posts;
        } catch (error) {
            console.error(error);
        }
    }

    async createPost({ title })
    {
        try{
            const response = await axios.post(url, {
                query: CREATE_POST(title),
            });
            console.log(response.data.data.posts);
            return response.data.data.posts;
        }catch(error){

        }
    }
}

export default new PostsService();
