<!DOCTYPE html>
<html>
<head>
    <title>AGFI Operation - Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
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

    <div class="container mt-4">
        <h2 class="my-4">Courses</h2>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card course-card">
                    <div class="card-body">
                        <h5 class="card-title">Course 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tutor 1</h6>
                        <p class="card-text">Description of course 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="card course-card">
                    <div class="card-body">
                        <h5 class="card-title">Course 2</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tutor 2</h6>
                        <p class="card-text">Description of course 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="card course-card">
                    <div class="card-body">
                        <h5 class="card-title">Course 3</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tutor 3</h6>
                        <p class="card-text">Description of course 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
