<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
    <div class ="wrapper">
     <section class ="form signup">
        <header>my chat app</header>
        <h6>author: bronlins</h6>
        <form action="#" mothod="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field-input">
                    <label>first name</label>
                    <input type="text" name="fname" placeholder="first name" required>
                </div>
                <div class="field-input">
                    <label>last name</label>
                    <input type="text" name="lname" placeholder="last name" required>
                </div>
            </div>
            <div class="field-input">
                    <label>Email adress</label>
                    <input type="text" name="email" placeholder="enter your email" required>
                </div>
                <div class="field-input">
                    <label>password</label>
                    <input type="password" name="password" placeholder="enter your password" required>
                </div>
                <div class="field-input">
                    <label>select image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field-input">
                    <input type="submit" name="submit" value="start chat">
                </div>
        </form>
        <div class="link">already have an account? <a href="login.php">login now</a></div>
     </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>
</html>