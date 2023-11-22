<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="css/regcss.css">
</head>
<body>
    <header>
        <img src="css/Asset/florism.png">
        <button onclick="login()">Halaman Login</button>
    </header>
    <div class="form">
        <h3>ayam</h3>
       <h1>Form Registrasi Akun</h1>
       <div class="formsatu">
       <div class="form1">
       <h2>Username :</h2>
       <input type="text" placeholder="Username"><br>
       <h2>Password :</h2>
       <input type="text" placeholder="Password"><br>
       <h2>Gmail :</h2>
       <input type="text" placeholder="Gmail">
       </div>
       <div class="form2">
        <h2>No Handphone :</h2>
        <input type="text" placeholder="No Handphone"><br>
        <h2>Gender :</h2>
        <input list="gender"><br>
        <datalist id="gender">
            <option value="Pria">
            <option value="Perempuan">
        </datalist>
        <input id="gugel" type="submit" value="Sign In With Google"><br>
        <input id="signin" type="submit" value="Sign In">   
        </div>
        <div class="baner">
       <h1>Mari Menjelajah wisata Eco Park Dan Botani Bersama Florism</h1>
        </div>
       </div>
       

    </div>
</body>
<script>
    function login(){
        window.location.href = ("http://127.0.0.1:5500/testi.html")
    }
</script>
</html>