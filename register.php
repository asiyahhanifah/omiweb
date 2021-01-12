<?php
    session_start();

    include 'conn.php';

    if($_SESSION){
        header('location: login.php');
    } else{

        if(isset($_POST['submit'])){
            if($_POST['password'] !== $_POST['confirm_password'])
            header('Location: register.php');
    
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $bio = $_POST['bio'];
            $desc = $_POST['description'];
            
            $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`,`description`)
            VALUES ('$email', '$username', '$password','$bio','$desc')";
    
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);

    }

    include 'header.php';
?>

<body class="jarak">
    <h1></h1>
</body>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
        <div class="brand">
                        <h1></h1>
                        <h1></h1>
					</div>
        <div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
                        <h1></h1>
                        <h1></h1>
					</div>
                    <div class="card-wrapper">
					<div class="brand">
                        <h1></h1>
                        <h1></h1>
					</div>
                    <div class="brand">
						<h1></h1>
                        <h1></h1>
					</div>
                
					<div class="card fat">
                        <div class="card-body">
							<h4 class="card-title" ><strong>Register</strong></h4>
                            <h1></h1>
							<form action="register.php" method="POST">
								<div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" required= "required" name="email" placeholder="Masukkan Email">
								</div>

								<div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" id="username" required= "required" name="username" placeholder="Masukkan Username">
								</div>
                                
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="bio" required= "required" name="bio" placeholder="Masukkan Bio">
								</div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" id="username" required= "required" name="desc" placeholder="Masukkan Deskripsi">
								</div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" required= "required" name="password" onkeyup='check();' >
								</div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" required= "required" name="confirm_password" onkeyup=' check();' >
                                    <span id="message"></span>
								</div>

								<center><div class="form-group m-0">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Daftar</button>
									
								</div>
								<div class="mt-4 text-center">
									Have an account? <a href="login.php">Login</a>
								</div>
							</form>
						</div>
                        
					</div>
			</div>
            <div class="brand">
						<h1></h1>
                        <h1></h1>
					</div>
		</div>
    </section>
</body>

    <script type="text/javascript">
        var check= function(){
            if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'Password sudah sama!';
            } else {
          document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'Password tidak sama!';
            }
        }
    </script>
<?php include 'footer.php' ?>