<!DOCTYPE html>
<html>
<head>
 <title>@yield('title', 'Sample App22') - test</title>
 <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @section('sidebar')
        这是master的侧边栏
    @show
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
