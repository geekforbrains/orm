PHP ORM
=======

Planned Usage/Syntax
--------------------

Example for creating a blog post:

    $post = new Post();
    $post->title = 'Greeting';
    $post->body = 'Hello World!';
    $post->save();

Example for finding a blog post by id:

    $post = Post::find($id);
