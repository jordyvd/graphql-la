import "./bootstrap";
import { createApp } from "vue";
// import ApolloClient from "apollo-client";
// import { ApolloProvider } from "vue-apollo";

const app = createApp({});

import ExampleComponent from "./components/ExampleComponent.vue";
app.component("example-component", ExampleComponent);

// const apolloClient = new ApolloClient({
//     // Aquí debes configurar la URL de tu servidor GraphQL
//     uri: "https://mi-servidor-graphql.com/graphql",
// });

// Crear el proveedor de Apollo para Vue
// const apolloProvider = ApolloProvider({
//     defaultClient: apolloClient,
// });

// Agregar el proveedor de Apollo a la instancia de Vue
// Vue.use(apolloProvider);

app.mount("#app");
