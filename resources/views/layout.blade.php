<!DOCTYPE html>
<html>
<head>
    <title>Static page 3</title>
    <link href="/css/main.css">
</head>
<body>

@yield('content')

<ul>
    <li><a href="static_1.html">Static 1 page</a></li>
    <li><a href="static_2.html">Static 2 page</a></li>
    <li><a href="static_3.html">Static 3 page</a></li>
    <li><a href="{{ route('index_posts') }}">Posts</a></li>
</ul>

</body>
</html>