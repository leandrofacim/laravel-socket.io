import Vue from 'vue';

window.Echo.channel('laravel_database_post-created')
  .listen('PostCreated', (event) => {
    console.log(event)
    console.log(event.post)

    Vue.$vToastify.success(`Título do post ${event.post.title}`, 'Novo Post')
  });