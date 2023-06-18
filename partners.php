<!DOCTYPE html>
<html>
<head>
    <title>AGFI Operation - Partners</title>
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

        .container-partner {
            width: 75%;
            max-height: 93vh;
            overflow: hidden;
        }

        .partner-image {
            width: 10rem;
            height: auto;
            object-fit: contain;
            display: block;
            margin: 2rem;
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

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 1rem;
            justify-items: center;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="d-flex flex-wrap">
        <div class="banner">
            <h2>Our Awesome Partners</h2>
            <div class="banner-overlay"></div>
        </div>
        <div class="container-partner">
            <div class="row grid p-5">
                <img src="https://www.docker.com/wp-content/uploads/2022/03/vertical-logo-monochromatic.png"
                    alt="Partner 1" class="partner-image">

                <img src="https://www.docker.com/wp-content/uploads/2022/03/vertical-logo-monochromatic.png"
                    alt="Partner 2" class="partner-image">

                <img src="https://www.docker.com/wp-content/uploads/2022/03/vertical-logo-monochromatic.png"
                    alt="Partner 3" class="partner-image">


                <img src="https://www.docker.com/wp-content/uploads/2022/03/vertical-logo-monochromatic.png"
                    alt="Partner 4" class="partner-image">

                <img src="https://www.docker.com/wp-content/uploads/2022/03/vertical-logo-monochromatic.png"
                    alt="Partner 5" class="partner-image">

                <img src="https://www.docker.com/wp-content/uploads/2022/03/vertical-logo-monochromatic.png"
                    alt="Partner 6" class="partner-image">

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
