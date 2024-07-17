<?php
session_start();


include("config.php");

$username = 'catrinn';
$password = 'catrin18';


// //$query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
// if (mysqli_query($koneksi, $query)) {
//     echo "User added successfully.";
// } else {
//     echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
// }
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
              header("Location: dashboard.php");
            exit;
        }
    } else {
        $error = "Username or password is incorrect";
    }
mysqli_close($koneksi);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Beranda</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include("include/css.php"); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <!-- <form method="post" action="proseslogin.php"> -->
            <div class="mb-3">
                <h2>Login</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
    <?php include("include/js.php"); ?>
</body>
</html>
