<!DOCTYPE html>
<html>
<head>
    <title>Login REPOLIB</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
    <h1>LOGIN REPOLIB</h1>
    <h2>Repository Library</h2>
 
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>
 
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>
 
        <form action="cek_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
            <input type="submit" class="tombol_login" value="LOGIN">
 
            <br/>
            <br/>
            <center>
                <a class="link" href="index.php">Kembali</a>
            </center>
        </form>
        
    </div>
 
 
</body>
</html>