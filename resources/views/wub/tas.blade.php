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
    <body class="tas-body"> 
     <div class="bg"></div>
       <div class="tas-box">
            <div class="terms-description">
            <h1>Syarat dan Ketentuan</h1>
            <p>
            Morbi sit amet risus nisl. Fusce ut nunc tortor. Praesent faucibus id ligula id molestie. 
            Sed ipsum enim, euismod a bibendum non, euismod ut velit. Maecenas sollicitudin enim non mollis tristique. 
            Phasellus et nisl vitae magna placerat ornare et nec lorem. In tortor tortor, viverra vitae ultricies vel, placerat sit amet turpis. 
            Ut turpis turpis, elementum lobortis est non, facilisis rutrum odio. Proin convallis condimentum porttitor. Sed lobortis placerat congue. 
            Donec feugiat lorem vitae libero porttitor, ut tincidunt ante sollicitudin. Donec luctus ullamcorper velit consectetur auctor.
            Praesent aliquam, diam sit amet malesuada venenatis, lorem risus congue ante, at vulputate massa mi vitae nulla. Proin augue justo, sodales et mi dignissim, laoreet malesuada neque. Morbi ante odio, maximus ac urna et, dictum porta nisi. Aliquam tortor ipsum, blandit eu nibh ac, ornare elementum nulla. Nulla facilisi. Aliquam vel ex enim. Aliquam id nulla sed nunc sagittis bibendum. In hac habitasse platea dictumst. Vivamus posuere, magna vitae malesuada dapibus, purus odio sodales nulla, quis rhoncus eros enim sed ex. Aliquam at arcu eu diam ornare ullamcorper ac at tortor. Morbi consectetur porttitor gravida.
            </p>
            <div class="tas-checkbox" style="text-align: center;">
                <label>
                    <input type="checkbox" id="tas-checkbox">
                    Dengan ini saya telah membaca dan menyetujui syarat serta ketentuan yang sudah diberlakukan
                </label>
            </div>
            <div class="buttons-tas">
                <button class="btn-accept" disabled onclick="location.href='{{ route('loginWub') }}'">Saya Setuju</button>
                <button class="btn-disagree" onclick="location.href='{{ route('home') }}'">Tidak Setuju</button>
            </div>
            </div>
       </div>
       <script src="wub/js/script.js"></script>
    </body>
</html>