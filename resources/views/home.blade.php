<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Bellefair&family=Barlow:wght@400;700&display=swap"
        rel="stylesheet">
    {{-- Icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body class="home" background="HomePageBackground.jpg">

    {{-- Navigation Bar --}}
    <header class="primary-header flex">
        <div><i class="material-icons icon">rocket_launch</i>
        </div>
        <button class="mobile-nav-toggle" aria-controls="primary-navigation"><span class="sr-only"
                aria-expanded="false">Menu</span></button>
        <nav>
            <ul id="primary-navigation" data-visible="false" class="primary-navigation underline-indicators flex">
                <li class="active"><a class="ff-sans-cond uppercase text-white letter-spacing-2"
                        href="#"><span>00</span>Home</a>
                <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="#">
                        <span>01</span> Destination</a>
                <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="#">
                        <span>02</span> Crew</a>
                <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="#">
                        <span>03</span> Technology</a>
                <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="{{ route('designSystem') }}">
                        <span>04</span> Design System</a>
            </ul>
        </nav>
    </header>
    <main class="grid-container grid-container--home">
        <div>
            <h1 class="text-accent fs-500 ff-sans-cond uppercase letter-spacing-1">So, you want to travel to
                <span class="d-block fs-900 ff-serif text-white">Space</span>
            </h1>

            <p>Let???s face it; if you want to go to space, you might as well genuinely go to
                outer space and not hover kind of on the edge of it. Well sit back, and relax
                because we???ll give you a truly out of this world experience! </p>
        </div>
        <div>
            <a href="#" class="large-button uppercase ff-serif text-dark bg-white">Explore</a>
        </div>
        {{-- Na pro??b?? Maksa --}}
        {{-- <div>Myk Myk</div> --}}
    </main>
    <script src="/js/script.js"></script>
</body>

</html>
