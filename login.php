<?php
    session_start();
    
    include 'conn.php';

    if($_SESSION){
        header('location: login.php');
    } else{

        if(isset($_GET['redirectProfile'])){
            $profileId = $_GET['redirectProfile'];
        }
    
        if(isset($_POST['submit'])){
            // session_start();
            $username = $_POST['username'];
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $password = password_verify($_POST['password'], $hash);
    
            $sql = "SELECT * FROM users WHERE `username`='$username'";
            $result = mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            if($row != NULL){
                if(password_verify($_POST['password'],$row['password'])){
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $row['id'];
                    // var_dump($_SESSION['id']);
                    if($profileId != NULL){
                        header('location: profile.php?id='.$profileId);
                    } else{
                        header('Location: home.php');
                    }
                }
            } else{
                echo "No Dataset";
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
						<img src="img/logo.jpg" alt="logo">
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
							<h4 class="card-title" ><strong>Login</strong></h4>
                            <h1></h1>
							<form action="login.php<?php if(isset($_GET['redirectProfile'])){echo "?redirectProfile=".$_GET['redirectProfile'];}?>" method="POST">
								<div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" id="username" required= "required" name="username" placeholder="Masukkan username">
								</div>

								<div class="form-group">
									<label>Password</label>
                                    <input type="password" class="form-control" id="password" required= "required" name="password">
								</div>

								<center><div class="form-group m-0">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
									
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="register.php">Create One</a>
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

<?php include 'footer.php' ?>

    