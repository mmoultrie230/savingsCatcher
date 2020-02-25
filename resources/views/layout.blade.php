<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

</head>
<body>
    <a href="/">Home</a>
    <br>
    <a href="/users">Click here to view user info</a>
    <br>
    <a href="/savings">Click here to view savings</a>
    <br>
    <a href="/users/page">click here to enter new user</a>
    <br>
    <a href="/savings/purchases">click here to enter new trip totals</a>
    
    
    @yield('content')
</body>
</html>