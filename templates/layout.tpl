<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title|default:"Blog"}</title>
    
    <!-- Bootstrap CSS linkelése a CDN-ről -->
    <link 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
rel="stylesheet">
    
    {block name="head"}{/block}
</head>
<body>
<!-- Header with navigation links (Bootstrap navigation example) -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Teszt blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="/">Kezdőlap</a>
            </li>
            {if isset($is_logged_in) && $user_id==1}
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Admin</a>
                </li>
            {else}
            {/if}
            {if $is_logged_in}
            <li class="nav-item">
                <a class="nav-link" href="/user/myposts">Saját posztok</a>
            </li>
            {/if}
            {if isset($is_logged_in) && $is_logged_in}
                <li class="nav-item">
                <a class="nav-link" href="/login/logout">Kijelentkezés</a>
                </li>
            {else}
                <li class="nav-item">
                    <a class="nav-link" href="/login">Bejelentkezés</a>

                </li>
            {/if}

            <li class="nav-item">
                <a class="nav-link" href="/login/register">Regisztráció</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
        {block name="content"}{/block}
    </div>

    <!-- Bootstrap JS és jQuery CDN-ek hozzáadása -->
    <script 
src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script 
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script 
src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

