<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-light">

            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/blog/public/">Index</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/public/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/public/services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/public/posts">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/public/posts/create">Create Post</a>
              </li>
            </ul>
          
          </nav>
    @yield('content')
    </div>
</body>
</html>