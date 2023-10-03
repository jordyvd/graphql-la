export function GET_POSTS(id) {
    const query = `
    query {
      posts(id: ${id}) {
        id
        title
        content
      }
    }
  `;
    return query;
}

export function CREATE_POST(title) {
    const query = `
  mutation{
    createPost(title: "${title}"){
      id
    }
  }
`;
    return query;
}
