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
    <title>Chat Interface</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    < class="chat-container">
        <h3></h3>
        <div class="chat-box" id="chat-box"></div>
        <div class="input-area">
            <input type="text" id="user-input" placeholder="Type a message...">
            <button id="send-button">></button>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>