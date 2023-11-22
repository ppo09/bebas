<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florism/Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <img src="css/Asset/florism.png">
        <ul>
            <li><button id="home" onclick="home()">Home</button></li>
            <li><button>Contact</button></li>
            <li><button>Profil</button></li>
            <li><button onclick="logout()" id="logout">Log Out</button></li>
        </ul>
    </header>
    <div class="bloksamping">
        <button id="ketiket" onclick="tiket()">Ticket</button><br>
        <button>Gallery</button><br>
        <button>Pembayaran</button><br>
        <button>Event</button><br>
    </div>
    <div id="kontenu" class="konten">
        <div class="banner">
            <h3>Kosongan</h3>
            <h4>Sudah Ada Planning Hari Ini?</h4>
        </div>
        <div class="jelajah">
    <h1>Mari Jelajahi Wisata FLora Dan Botani Di Wilayah Anda </h1>
    <img id="obelix" src="css/Asset/obelix.jpg">
        </div>
    <h2>Obelix Village</h2>
    </div>

    
</body>
<script>
    function logout(){
        window.location.href = ("http://127.0.0.1:5500/testi.html")
    }

   

</script>
</html>