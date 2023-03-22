<?php
require 'config/database.php';

// get signup form from data if signup button was clicked

if(isset($_POST['submit'])) {
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$avatar = $_FILES['avatar'];

// validate input values
  if(!$firstname) {
    $_SESSION['signup'] = "الاسم الأول مطلوب ";
  } elseif (!$lastname){
    $_SESSION['signup'] = "الاسم الأخير مطلوب ";
  } elseif (!$username){
    $_SESSION['signup'] = "اسم المستخدم مطلوب ";
  } elseif (!$email){
    $_SESSION['signup'] = "البريد الإلكتروني مطلوب ";
  } elseif (strlen($createpassword) < 8 || strlen
  ($confirmpassword) < 8){
    $_SESSION['signup'] = "كلمة المرور يجب أن تكون +8 ";
  } elseif (!$avatar['name']){
    $_SESSION['signup'] = "إرفاق صورة عرض";
  } else{
    // check if passwords don't match
    if($createpassword !== $confirmpassword) {
        $_SESSION['signup'] = "لا تطابق كلمة المرور";
    } else {
        // hash password
        $hashed_password = password_hash($createpassword, 
        PASSWORD_DEFAULT);
     
        // check if username or email already exist in database
        $user_check_query = "SELECT * FROM users WHERE 
        username='$username' OR email= '$email'";
        $user_check_result = mysqli_query($connection, $user_check_query);
        if(mysqli_num_rows($user_check_result) > 0) {
            $_SESSION['signup'] = "اسم المستخدم أو البريد الإلكتروني موجود من قبل";

        } else{
            // WORK ON AVATAR
            // rename avatar
            $time = time(); // make each image name unique using curren timestamp
            $avatar_name = $time . $avatar['name'];
           $avatar_tmp_name = $avatar['tmp_name'];
           $avatar_destination_path = 'images/' . $avatar_name;

           // make sure file is an image
           $allowed_files = ['png', 'jpg', 'jpeg'];
           $extintion = explode('.', $avatar_name); 
           $extintion = end($extintion);
           if(in_array($extintion, $allowed_files)) {
            // make sure image is not too much large
             if($avatar['size'] < 1000000) {
                //upload avatar
                 move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
             } else{
                $_SESSION['signup'] = 'حجم الملف كبير جداً يجب أن لا يقل عن 1 ميجا بايت';
             }
           } else{
            $_SESSION['signup'] = "png, jpg, jpeg صيغة الملف يجب أن تكون ";
           }

          

        }
    }
  }
 
   
  // redirect back to signup page if there was any problem 

  if(isset($_SESSION['signup'])) {
      // pass form data back to sign up page
      $_SESSION['signup-data'] = $_POST;
      header('location: ' . ROOT_URL . 'signup.php');
      die();
  } else {
      // insert new user into users table
      $insert_user_query = "INSERT INTO users SET firstname='$firstname',
      lastname='$lastname', username='$username', email='$email',
      password='$hashed_password', avatar='$avatar_name',
       is_admin=0";
      $insert_user_result = mysqli_query($connection, $insert_user_query);

      if(!mysqli_errno($connection)) {
        // redirect to login page with success message
        $_SESSION['signup-success'] = "تم التسجيل بنجاح . تسجيل دخول ";
        header('location: ' . ROOT_URL . 'signin.php');
        die();
      }
  }
  
} else{
    // if button wasn't clicked, bounce back to signup page 
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}


