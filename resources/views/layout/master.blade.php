<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
</head>
<body>

<h2>UNIVERSITAS MDP</h2>

<hr/>
    @yield("content")

<hr/>
    &copy; {{date('Y')}} - Universitas MDP 

</body>
</html>