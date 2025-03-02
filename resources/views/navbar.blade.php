<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radley:ital@0;1&family=Uncial+Antiqua&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        :root {
            --primary-color: #126B40;
            --primary-dark: #094C2C;
            --accent-color: #F5D76E;
            --accent-secondary: #C95E28;
        }

        .custom-navbar {
            background-color: var(--primary-dark) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 0.7rem 1rem;
        }
        
        .custom-navbar .navbar-brand {
            font-family: 'Uncial Antiqua', 'Radley', serif;
            font-size: 1.5rem;
            color: white;
            position: relative;
            padding-left: 28px;
        }
        
        .custom-navbar .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            margin: 0 5px;
            font-family: 'Radley', serif;
            font-size: 1.05rem;
            transition: all 0.3s ease;
        }
        
        .custom-navbar .nav-link:hover {
            color: var(--accent-color) !important;
            transform: translateY(-2px);
        }
        
        .custom-navbar .nav-link.active {
            color: white !important;
            font-weight: bold;
            border-bottom: 2px solid var(--accent-color);
        }

        /* Celtic bottom border for navbar */
        .celtic-bottom {
            height: 4px;
            background: linear-gradient(90deg, 
                var(--primary-color) 25%, 
                var(--accent-color) 25%, var(--accent-color) 50%,
                var(--primary-color) 50%, var(--primary-color) 75%,
                var(--accent-color) 75%);
            background-size: 20px 100%;
        }
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('chat') ? 'active' : '' }}" href="{{ url('/chat') }}">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('roadmap') ? 'active' : '' }}" href="{{ url('/roadmap') }}">Roadmap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="celtic-bottom"></div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>