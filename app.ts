
let message: string = 'Hello, TypeScript!';

let heading = document.createElement('h1');
heading.textContent = message;

document.body.appendChild(heading);

const fetchData = async (url: string): Promise<unknown> => {
    const response = await fetch(url);
    return await response.json();
  };
  
  const showPosts = async () => {
    const url = 'https://jsonplaceholder.typicode.com/posts';
    try {
      const posts = await fetchData(url); // unknown type
  
      (
        posts as { userId: number; id: number; title: string; body: string }[]
      ).map((post) => console.log(post.title));
    } catch (err) {
      console.log(err);
    }
  };
  
  showPosts();
  