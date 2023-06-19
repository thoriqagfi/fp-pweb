<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>AGFI Operation - Tutors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .tutor-card {
            background-image: url("https://img.freepik.com/premium-vector/white-abstract-background-with-hexagon-pattern-style-seamless-concept_7505-1698.jpg?w=1380");
            background-size: cover;
            background-position: center;
            position: relative;
            height: 300px;
        }

    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">

        <h2 class="my-3">Tutors</h2>
        <div class="row">

        <?php
            $sql = "SELECT * FROM tutors";
            $query = mysqli_query($db, $sql);
            
                while($row = mysqli_fetch_array($query)){
                    echo "<div class='col-lg-4 mb-4'>";
                    echo "<div class='card tutor-card'>";
                    echo "<div class='card-body text-center text-white'>";
                    echo "<img src='data:image/png;base64,".base64_encode($row['foto'])."' class='rounded-circle mb-3' alt='Tutor 1' width='210'/>";
                    echo "<h5 class='card-title text-dark'>".$row['name']."</h5>";
                    echo "<p class='text-dark'>Alumni: ".$row['alumni_universitas']."</p>";
                    echo " </div></div></div>";
                }	
            ?>
            <!--
            <div class="col-lg-4 mb-4">
                <div class="card tutor-card">
                    <div class="card-body text-center text-white">
                        <img src="tutor1.jpg" class="rounded-circle mb-3" alt="Tutor 1" width="120">
                        <h5 class="card-title text-dark">Tutor 1</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card tutor-card">
                    <div class="card-body text-center text-white">
                        <img src="tutor2.jpg" class="rounded-circle mb-3" alt="Tutor 2" width="120">
                        <h5 class="card-title text-dark">Tutor 2</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card tutor-card">
                    <div class="card-body text-center text-white">
                        <img src="tutor3.jpg" class="rounded-circle mb-3" alt="Tutor 3" width="120">
                        <h5 class="card-title text-dark">Tutor 3</h5>
                    </div>
                </div>
            </div>-->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
