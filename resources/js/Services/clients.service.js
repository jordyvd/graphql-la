import axios from "axios";
import { GET_CLIENT } from "../Queries/Client.js";

const url = "/graphql";

class ClientsService {
    async getClients({ id }) {
        try {
            const response = await axios.post(url, {
                query: GET_CLIENT(id),
            });
            console.log(response.data.data.posts);
            return response.data.data.client;
        } catch (error) {
            console.error(error);
        }
    }
}

export default new ClientsService();
