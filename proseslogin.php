<?php
session_start();
include("config.php"); 

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username =  $_POST['username'];
//     $password =  $_POST['password'];

//     $query = "SELECT * FROM login WHERE username='$username'";
//     $row=mysqli_fetch_array($query);
//     $pass=$row['password'];
//     if($password==$pas){
//         $_SESSION['username'] = $username;
//                    header("Location: index1.php");
//     }

//     if (mysqli_num_rows($result) == 1) {
//         $user = mysqli_fetch_assoc($result);
//         if (password_verify($password, $user['password'])) {
//             $_SESSION['username'] = $username;
//             header("Location: index1.php");
//         } else {
//             echo "<script>alert('Username atau password salah');window.location='login.php';</script>";
//         }
//     } else {
//         echo "<script>alert('Username atau password salah');window.location='login.php';</script>";
//     }
// } else {
//     header("Location: index.php");
//}
// $row = $koneksi->prepare($query);
// 		$row -> execute(array($username,$password));
// 		$jum = $row -> rowCount();
// 		if($jum > 0){
// 			$hasil = $row -> fetch();
//             $_SESSION['username'] = $username;   
// 			echo '<script>alert("Login Sukses");window.location="index.php"</script>';
// 		}else{
// 			echo '<script>alert("Login Gagal");history.go(-1);</script>';
// 		}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
              header("Location: index1.php");
            exit;
        }
    } else {
        $error = "Username or password is incorrect";
    }

?>
