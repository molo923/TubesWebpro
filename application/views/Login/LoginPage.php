<html>
<head>
<title>Login Form Design</title>
<link href="<?php echo base_url('assets/Login/style.css')?>" rel="stylesheet">
<body>
    <div class="loginbox">
        <h1>LOGIN</h1>
        <form>
            <p>Username</p>
            <input type="text" name="" placeholder="Masukkan Username">
            <p>Password</p>
            <input type="password" name="" placeholder="Masukkan Password">
            <input type="submit" name="" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="<?php echo base_url('Users/'); ?>register ">Don't have any account?</a>
        </form>

    </div>

</body>
</head>
</html>
