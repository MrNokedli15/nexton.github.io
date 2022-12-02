<?php require("register.class.php") ?>
<?php
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['username'], $_POST['email'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Register form</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<div class="header">
		<h2>Regisztráció</h2>
	</div>

	<input type="text" placeholder="Felhasználó név" name="username">

	<input type="email" placeholder="Email" name="email">

	<input type="password" placeholder="Jelszó" name="password" id="id_password">

<i class="bi bi-eye" id="togglePassword" style="font-size: 1rem; cursor: pointer;"></i>
	<input type="submit" value="Regisztráció" name="submit">
	<a href="login.php">Login</a>
		
	</form>
	<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
    
</body>
        <script>
        const togglePassword = document.querySelector('#togglePassword');
  const password = document.getElementById("id_password");

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
     this.classList.toggle('bi-eye');
    this.classList.toggle('bi-eye-slash');
});
        </script>
</html>
