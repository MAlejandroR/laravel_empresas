<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/css/app.js'])
</head>
<body>
<header class="h-15vh bg-header">
    <h1>CABECERA</h1>
</header>
<nav class="h-10vh bg-nav">
    <h1>MENU</h1>
</nav>
<main class="h-65vh bg-main">
    @yield("main")
</main>
<footer class="h-10vh bg-footer">
    <h1>footer</h1>
</footer>

</body>
</html>
