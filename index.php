<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>AGFI Operation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS styling for the banner */
        .banner {
            height: 24rem;
            position: relative;
            background-image: url("https://wallpapers.com/images/high/minimalist-colorful-3840-x-2160-wallpaper-wd1mqmqkd43ylki9.webp");
            background-size: cover;
            background-position: center;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        }

        .banner h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
            width: 100%;
        }

        /* Custom styles for the course cards */
        .course-card {
            height: 10rem;
        }
        .card-body{
            padding: 25px;
        }

        .explore-card {
            height: 10rem;
        }
    </style>
</head>
<body>
	<?php include 'navbar.php'; ?>
    <div class="banner">
        <h1>Welcome to<br>AGFI Operation</h1>
    </div>

    <div class="container mt-4">
		<h3 class="my-4">Available Courses</h3>
        <div class="row flex-row">
            <?php
                $sql = "SELECT * FROM courses LIMIT 3";
                $query = mysqli_query($db, $sql);

                while($row = mysqli_fetch_array($query)){
                    echo "<div class='col-lg-3 mb-4'>";
                    echo "<div class='card course-card'>";
                    echo '<div class="card-body">';
                    echo "<h5 class='card-title'>".$row['name']."</h5>";
                    echo "<p class='card-text'>".$row['deskripsi']."</p>";
                    echo '</div></div></div>';
                }
            ?>
            <div class="col-lg-3">
				<a href="courses.php">
                <div class="card explore-card">
                    <div class="card-body">
                        <h5 class="card-title">Explore More</h5>
                        <p class="card-text">Find more courses</p>
                    </div>
                </div>
				</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
		<h3 class="my-4">Our Tutors</h3>
        <div class="row flex-row">
            <?php
                $sql = "SELECT * FROM tutors LIMIT 3";
                $query = mysqli_query($db, $sql);

                while($row = mysqli_fetch_array($query)){
                    echo "<div class='col-lg-3 mb-4'>";
                    echo "<div class='card' style='height: 12rem;'>";
                    echo '<div class="card-body mx-auto d-flex flex-column">';
                    echo "<img src='data:image/png;base64,".base64_encode($row['foto'])."' class='rounded-circle mb-3 mx-auto' alt='Tutor 1' width='100' height='100'/>";
                    echo "<h6 class='card-title mx-auto'>".$row['name']."</h6>";
                    echo '</div></div></div>';
                }
            ?>
            <div class="col-lg-3">
				<a href="tutors.php">
                <div class="card explore-card" style='height: 12rem;'>
                    <div class="card-body">
                        <h5 class="card-title">Explore More</h5>
                        <p class="card-text">Find more tutors.</p>
                    </div>
                </div>
				</a>
            </div>
        </div>
    </div>

    <?php
        if(isset($_GET['status'])){
            if($_GET['status'] == 'logsuc'){
                echo '<script>alert("Login berhasil");</script>';
            } else if($_GET['status'] == 'logfail'){
                echo '<script>alert("Login gagal");</script>';
            }
            else if($_GET['status'] == 'addfail'){
                echo '<script>alert("Admission gagal");</script>';
            }
            else if($_GET['status'] == 'noLog'){
                echo '<script>alert("Need to login for admission!");</script>';
            }
            else if($_GET['status'] == 'alreadyLog') {
                echo '<script>alert("Already logged in!");</script>';}
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
