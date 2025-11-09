<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
     <nav>
        <div class="navbar">
            <div class="brand">
                <a href="/">EduFun</a>
            </div>
            <div class="menu">
                <a href="/">Home</a>

                <div class="dropdown">
                    <a href="#">Category ▼</a>
                    <div class="dropdown-content">
                        <a href="/category/interactive-multimedia">Interactive Multimedia</a>
                        <a href="/category/software-engineering">Software Engineering</a>
                    </div>
                </div>

                <a href="/writers">Writers</a>
                <a href="/about">About Us</a>
                <a href="/popular">Popular</a>
            </div>
        </div>
    </nav>
</body>
</html>