<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>AGFI Operation - Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .banner {
            position: relative;
            background-image: url("https://wallpapers.com/images/high/minimalist-colorful-3840-x-2160-wallpaper-wd1mqmqkd43ylki9.webp");
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 16rem;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
            z-index: 0;
        }

        @media (min-width: 768px) {
            .banner {
                flex-direction: column;
                width: 25%;
                height: 93.5vh;
            }
        }

        .banner h2 {
            position: absolute;
            margin: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: left;
            z-index: 1;
        }
        .course-card {
            background-image: url("https://img.freepik.com/premium-vector/white-abstract-background-with-hexagon-pattern-style-seamless-concept_7505-1698.jpg?w=1380");
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .course-card::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 1);
            opacity: 0.5;
        }

        .course-card .card-body {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="d-flex flex-wrap">
        <div class="banner">
            <h2>Courses</h2>
            <div class="banner-overlay"></div>
        </div>
        <div class="container mt-4">
            <div class="row">

            <?php
            $sql = "SELECT * FROM courses";
            $query = mysqli_query($db, $sql);
            
                while($row = mysqli_fetch_array($query)){
                    echo "<div class='col-lg-12 mb-4'>";
                    echo "<div class='card course-card'>";
                    echo " <div class='card-body'>";
                    echo "<h5 class='card-title'>".$row['name']."</h5>";
                    echo "<h6 class='card-subtitle mb-2 text-muted'>Rp".$row['harga']."</h6>";
                    echo "<p class='card-text'>".$row['deskripsi']."</p>";
                    echo " </div></div></div>";
                }	
            ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
