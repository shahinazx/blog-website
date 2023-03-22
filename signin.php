<?php
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- CUSTOME STYLESHEET-->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
        <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>

<sction class="form__section" dir="rtl">
    <div class="container form__section-container">
        <h2>تسجيل دخول </h2>
       <?php if (isset($_SESSION['signup-success'])) : ?>
       <div class="alert__message success">
       <p>
           <?= $_SESSION['signup_success'];
           unset($_SESSION['signup-success']);
            ?>
         </p>
       </div>

        <?php elseif (isset($_SESSION['signin'])) : ?>
        <div class="alert__message error">
       <p>
           <?= $_SESSION['signin'];
           unset($_SESSION['signin']);
            ?>
         </p>
       </div>

        <?php endif ?>

        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
         <input type="text" name="username_email" value="<?= $username_email ?>"
          placeholder="اسم المستخدم أو البريد الإلكتروني">
         <input type="password"  name="password" value="<?= $password ?>"
          placeholder=" الرقم السري">
        <button type="submit" name="submit" class="btn">تسجيل دخول</button>
        <small>ليس لديك حساب؟ <a href="signup.php">تسجيل جديد</a></small>
        </form>
    </div>
</sction>

</body>
</html>

