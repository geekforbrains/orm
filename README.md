PHP ORM
=======

A basic PHP ORM that will later be used in my [Caffeine]('http://github.com/geekforbrains/caffeine', 'Caffeine') framework.

Planned Usage/Syntax
--------------------

Example for creating a blog post:

    $post = new Post();
    $post->title = 'Greeting';
    $post->body = 'Hello World!';
    $post->save();

Example for finding a blog post by id:

    $post = Post::find($id);

Example for getting all posts:

    $posts = Post::all();

Example for getting 3 recent blog posts ordered by date:

    $posts = Post::orderBy('created_at')->limit(3)->get();

Example for getting the first comment from a blog post:

    $comment = Post::find($id)->comment->first();
