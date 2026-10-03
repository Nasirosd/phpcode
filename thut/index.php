<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // Session dynamically shurute chole ashbe Header Error eriiye cholte

if(isset($_POST['submit'])){
    extract($_POST);
    // $password = md5($password);
    include_once('dbconfig.php');

    $result = $conn->query("SELECT * FROM user1 WHERE email = '$email' AND password = '$password'");
    
    if($result && $result->num_rows > 0){
        $_SESSION['email'] = $email;
        header("Location: dashboard.php"); // dashdoard typo -> dashboard kora hoyeche
        exit();
    } else {
        $error = "Login Failed! Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-card {
            background: #ffffff;
            padding: 30px 25px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 360px;
        }
        .login-card h3 {
            margin-bottom: 20px;
            color: #1c1e21;
            text-align: center;
            font-size: 22px;
        }
        .input-box {
            margin-bottom: 15px;
        }
        .input-box input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #dddfe2;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s;
        }
        .input-box input:focus {
            border-color: #1877f2;
        }
        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-login:hover {
            background-color: #166fe5;
        }
        .error-msg {
            background-color: #ffebe9;
            color: #d93025;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
            text-align: center;
            border: 1px solid #ffcdd2;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h3>Login Form</h3>

        <?php if(isset($error)): ?>
            <div class="error-msg"><?php echo $error; ?></div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter email" value="<?php
                 if(isset($_POST['email'])) echo $_POST['email'];?>">
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter password" required>
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login">
        </form>
    </div>

</body>
</html>