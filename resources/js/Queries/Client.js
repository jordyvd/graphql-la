export function GET_CLIENT(id) {
    const query = `
    query{
        client(id: ${id}){
          id,
          name,
          user{
            id
          }
        }
      }
  `;
    return query;
}
