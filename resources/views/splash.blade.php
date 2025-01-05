<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radley:ital@0;1&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/splash.css') }}">
    <title>Therapist AI</title>
</head>

<body class="splash-page"> 
    @include('navbar')
    <div class="hero-section">
        <center>
            <div class="hero-content">
                <h1 class="radley-regular">Therapist AI</h1>
                <p class="radley-regular">Providing compassionate, AI-powered mental health support, accessible anytime and anywhere. Join us to explore ways to improve your mental well-being.</p>
                <a href="{{ url('/chat') }}" class="hero-button">Get Started</a>
            </div>
        </center>
    </div>

        <div class="content-page">
            <div class="bubble bg-dark">
                <h2 class="article-title">Article Title</h2>
                <p class="article-text">This is a short description of the article or content.</p>
                <a href="#">Read more</a>
            </div>
            <div class="bubble bg-dark">
                <h2 class="article-title">Article Title</h2>
                <p class="article-text">This is a short description of the article or content.</p>
                <a href="#">Read more</a>
            </div>
            <div class="bubble bg-dark">
                <h2 class="article-title">Article Title</h2>
                <p class="article-text">This is a short description of the article or content.</p>
                <a href="#">Read more</a>
            </div>
        </div>

    <footer class="disclaimer-section">
        <p class="disclaimer-text">Disclaimer: We have no way to see what you are saying to the therapist. Your conversations are private and secure.</p>
    </footer>
</body>

</html>
