<!DOCTYPE html>
<html class="login-page">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="wub/styles/styles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body class="login-body"> 
     <div class="bg"></div>
       <div class="login-modal">
        <h1>Login</h1>
        <img class="login-logo" src="wub/img/item.png">
        <form method="POST" action="{{ route('postLogin') }}">
        @csrf
            <label class="label-text">NIK</label>
            <label class="input-container">
                <span class="material-symbols-outlined">account_circle</span>
                <input class="input_field" type="text" placeholder="NIK" id="nik" name="nik" required>
            </label>
            <label class="label-text">Password</label>
            <label class="input-container">
                <span class="material-symbols-outlined"> key</span>
                <input class="input_field" type="password" placeholder="Password" id="password" name="password" required>
            </label>
            <button class="sign-in_button" type="submit">Sign-In</button>
            <p>Lupa password?</p>
            <p>Belum punya akun?, klik <a href="{{ route('registerWub') }}"><b>disini</b></a></p>
        </form>
       </div>
    </body>
</html>