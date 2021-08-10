window.Echo.channel('laravel_database_post-created')
  .listen('PostCreated', (event) => {
    console.log(event)
    console.log(event.post)
  });