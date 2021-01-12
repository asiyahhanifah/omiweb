<?php
    session_start();

    if(!($_SESSION)){
        header('location: update.php');
    }

    include 'conn.php';

    if(isset($_POST['submit'])){
    //    var_dump($_FILES['gambar']);

        $id = $_SESSION['id'];
        $bio = $_POST['bio'];
        $desc = $_POST['desc'];
        $hargacom = $_POST['hargacom'];
        $nama_porto = $_POST['nama_porto'];

        $targetDir = "uploads/";
        $fileName = $_FILES['gambar']['name'];
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        $allowedTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType,$allowedTypes)){
            if(move_uploaded_file($_FILES['gambar']['tmp_name'],$targetFilePath)){

                $sql = "UPDATE users SET `bio` = '$bio' , `description` = '$desc' , `hargacom` = '$hargacom', `nama_porto` = '$nama_porto', `image` = '$fileName' WHERE id = $id";
                // $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`,`description`)";
                if(mysqli_query($conn,$sql)){
                    echo "File Upload Success";
                }else{
                    echo"File Upload Error";
                }
            }else{
                echo "Sorry, there was an error uploading your file.";
            }
        }else{
           echo 'Sorry, only JPG, JPEG, PNG, GIF, files are allowed to upload.';
        }
    }
if(isset($_POST['post'])){
        
        $id = $_SESSION['id'];
        $nama_porto = $_POST['nama_porto'];
        $nama_porto2 = $_POST['nama_porto2'];
        $nama_porto3 = $_POST['nama_porto3'];

        $targetDir = "uploads/portofolio/";
        $porName = $_FILES['portof']['name'];
        $targetporPath = $targetDir . $porName;
        $fileType = pathinfo($targetporPath,PATHINFO_EXTENSION);

        $allowedTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType,$allowedTypes)){
            if(move_uploaded_file($_FILES['portof']['tmp_name'],$targetporPath)){

                $sql = "UPDATE users SET `nama_porto` = '$nama_porto' ,`nama_porto2` = '$nama_porto2', `nama_porto3` = '$nama_porto3', `portofolio` = '$porName' WHERE id = $id";
                if(mysqli_query($conn,$sql)){
                    echo "File Upload Success";
                }else{
                    echo"File Upload Error";
                }
            }else{
                echo "Sorry, there was an error uploading your file.";
            }
        }else{
           echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }

        $targetDir2 = "uploads/portofolio/2/";
        $porName2 = $_FILES['portof2']['name'];
        $targetporPath2 = $targetDir2 . $porName2;
        $fileType = pathinfo($targetporPath2,PATHINFO_EXTENSION);

        $allowedTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType,$allowedTypes)){
            if(move_uploaded_file($_FILES['portof2']['tmp_name'],$targetporPath2)){

                $sql = "UPDATE users SET `nama_porto2` = '$nama_porto2', `portofolio2` = '$porName2' WHERE id = $id";
                // $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`,`description`)";
                if(mysqli_query($conn,$sql)){
                    echo "File Upload Success";
                }else{
                    echo"File Upload Error";
                }
            }else{
                echo "Sorry, there was an error uploading your file.";
            }
        }else{
           echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }

        $targetDir3 = "uploads/portofolio/3/";
        $porName3 = $_FILES['portof3']['name'];
        $targetporPath3 = $targetDir3 . $porName3;
        $fileType = pathinfo($targetporPath3,PATHINFO_EXTENSION);

        $allowedTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType,$allowedTypes)){
            if(move_uploaded_file($_FILES['portof3']['tmp_name'],$targetporPath3)){

                $sql = "UPDATE users SET `nama_porto3` = '$nama_porto3', `portofolio3` = '$porName3' WHERE id = $id";
                // $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`,`description`)";
                if(mysqli_query($conn,$sql)){
                    echo "File Upload Success";
                }else{
                    echo"File Upload Error";
                }
            }else{
                echo "Sorry, there was an error uploading your file.";
            }
        }else{
           echo 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
        
        
        header('Location: home.php');
    }

    // var_dump($_GET['id']);
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE `id`= $id";

    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    // var_dump($row);
    
    mysqli_close($conn);
    
    include 'header_home.php';
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
						<img src="" alt="">
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
							<h4 class="card-title"><strong>Update Profile</strong></h4>
							<form action="update.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="text" class="form-control" required= "required" name="bio" value="<?= $row['bio'] ?>">
                                <small id="emailHelp" class="form-text text-muted">Tanggal Lahir Anda</small>
                            </div>

						    <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <input type="text" class="form-control" required= "required" name="desc" value="<?= $row['description'] ?>">
                                <small id="emailHelp" class="form-text text-muted">Deskripsikan diri Anda secara singkat</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Rentang Harga Design</label>
                                <input type="text" class="form-control" required= "required" name="hargacom" value="<?= $row['hargacom'] ?>">
                                <small id="emailHelp" class="form-text text-muted">Masukkan rentang harga karya Anda</small>
                            </div>

							<div class="form-group">
                                <label for="exampleFormControlFile1">Upload foto</label>
                                <input type="file" class="form-control-file" required= "required" name="gambar">
                            </div>

							<center><div class="form-group m-0">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                            
							</form>
                        </div>
					</div>
                </div>

            </div>
            </section>
</body>  


<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
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
							<h4 class="card-title"><strong>Update Portofolio</strong></h4>
							<form action="update.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Portofolio</label>
                                <input type="text" class="form-control" required= "required" name="nama_porto" value="<?= $row['nama_porto'] ?>">
                                <small id="emailHelp" class="form-text text-muted">Deskripsikan diri Anda secara singkat</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Portofolio</label>
                                <input type="file" class="form-control-file" required= "required" name="portof">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Portofolio 2</label>
                                <input type="text" class="form-control" required= "required" name="nama_porto2" value="<?= $row['nama_porto2'] ?>">
                                <small id="emailHelp" class="form-text text-muted">Deskripsikan diri Anda secara singkat</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Portofolio</label>
                                <input type="file" class="form-control-file" required= "required" name="portof2">
                            </div><div class="form-group">
                                <label for="exampleInputPassword1">Nama Portofolio 3</label>
                                <input type="text" class="form-control" required= "required" name="nama_porto3" value="<?= $row['nama_porto3'] ?>">
                                <small id="emailHelp" class="form-text text-muted">Deskripsikan diri Anda secara singkat</small>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Portofolio</label>
                                <input type="file" class="form-control-file" required= "required" name="portof3">
                            </div>
                            
							<center><div class="form-group m-0">
                                <button type="post" name="post" class="btn btn-primary">Post</button>
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
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/my-login.js"></script>
<?php include 'footer.php'?> 