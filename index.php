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
            <div class="col-lg-3 mb-4">
                <div class="card course-card">
                    <div class="card-body">
                        <h5 class="card-title">Course 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tutor 1</h6>
                        <p class="card-text">Description of course 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card course-card">
                    <div class="card-body">
                        <h5 class="card-title">Course 2</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tutor 2</h6>
                        <p class="card-text">Description of course 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card course-card">
                    <div class="card-body">
                        <h5 class="card-title">Course 3</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tutor 3</h6>
                        <p class="card-text">Description of course 3.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
				<a href="courses.php">
                <div class="card explore-card">
                    <div class="card-body">
                        <h5 class="card-title">Explore More</h5>
                        <p class="card-text">Find more courses and tutors.</p>
                    </div>
                </div>
				</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
