<!-- resources/views/home.blade.php -->
 <!-- 
    php artisan view:clear
    php artisan cache:clear
    php artisan serve
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Chat Interface</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="top-container">
        @include('navbar')
    </div>
    <div class="chat-container">
        <h3></h3>
        <div class="chat-box" id="chat-box"></div>
        <form id="chat-form" method="POST" action="/api/chat">
            @csrf
            <div class="input-area">
                <input type="text" id="user-input" name="message" placeholder="Type a message...">
                <button type="submit" id="send-button">Send</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>