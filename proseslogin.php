<?php

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
//    $email = $_POST['email'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    mysql_connect("localhost", "root", "");
    mysql_select_db("progweb");

    $result = mysql_query("SELECT * FROM user where username = '$username' and password = '$password'")
                or die ("Failed to query database ".mysql_error());

    $row = mysql_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password){
        echo "Berhasil Login! Selamat Datang ".$row['username'];
        //redirect ke halaman lain untuk lebih memastikan
        $_SESSION["username"]=$username;
        $_SESSION["email"]=$email;
        header("Location: akun.php");
    } else {
        echo "Invalid username or password, coba lagi!";
    }

/*
    //periksa apakah file ini tidak dipanggil secara langsung, jika dipanggil secara langsung
    //maka user akan di kembalikan ke login
    if (!isset($username) || !isset($password)) {
    header( "Location: akun.php" );
    }
    //melihat apakah form telah diisi semua atau tidak. Jika tidak, user akan dikembalikan ke
    //halaman login
    elseif (empty($username) || empty($password)) {
    header( "Location: http: login.php" );
    }
    else{
    //mengubah username dan password yang telah dimasukkan menjadi sebuah variabel dan meng-enkripsi password ke md5
    $username = addslashes($_POST['username']);
    $password = md5($_POST['password']);

    //variabel untuk koneksi ke database
    $dbHost = "localhost";
    $dbUser = "root"; //user yang akan digunakan pada database.
    $dbPass = ""; //password dari username untuk database.
    $dbDatabase = "progweb"; //dari database yang dibuat tadi

    //Melakukan koneksi ke database

    $db = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("koneksi gagal nih, cek apakah variabel sudah benar apa belum");

    //memilih database
    mysql_select_db("$dbDatabase", $db) or die ("Gagal memilih database");

    $result=mysql_query("select * from user where username='$username' AND password='$password'", $db);

    //melihat apakah username dan password yang dimasukkan benar
    $rowCheck = mysql_num_rows($result);

    //jika benar maka
    if($rowCheck > 0){
    while($row = mysql_fetch_array($result)){

    //mulai session dan register variabelnya
    session_start();
    $_SESSION['username'];

    //Memberitahu jika login sukses
    echo 'login berhasil..!!';

    //redirect ke halaman lain untuk lebih memastikan
    header( "Location: loginok.php" );

    }

    }
    else {

    //jika $rowCheck = 0, berarti username atau password salah, atau tidak terdaftar di database

    echo 'Invalid username or password, coba lagi deh.. ';
    }
    }

    */

/*
    session_start();
    $server = "localhost"; //ganti sesuai server Anda
    $username = "root"; //ganti sesuai username Anda
    $password = ""; //ganti sesuai password Anda
    $db_name = "progweb"; //ganti sesuatu nama database Anda
    $db = mysql_connect($server,$username,$password) or DIE("koneksi ke database gagal !!");
    mysql_select_db($db_name) or DIE("nama database tersebut tidak ada !!");
    $login = mysql_query("select * from user where (username = '" . $_POST['username'] . "') and (password = '" . md5($_POST['password']) . "')",$db);
    $rowcount = mysql_num_rows($login);
    if ($rowcount == 1) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: akun.php");
    }
    else
    {
    header("Location: akun.php");
    }
*/
?>