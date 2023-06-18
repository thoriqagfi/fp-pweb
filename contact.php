<!DOCTYPE html>
<html>
<head>
    <title>AGFI Operation - Admission</title>
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

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 1rem;
            justify-items: center;
        }

        .admission-form {
            padding: 2rem;
            background-color: #f8f9fa;
            border-radius: 0.25rem;
            width: 75%;
        }

        .form-check-label {
            font-weight: 400;
        }

        .form-check-input:checked {
            background-color: #007bff;
            border-color: #007bff;
        }

        .form-check-input:checked ~ .form-check-label {
            color: #fff;
        }

        .submit-button {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="d-flex flex-wrap">
        <div class="banner">
            <h2>Give Us Your Feedback</h2>
            <div class="banner-overlay"></div>
        </div>
        <div class="admission-form d-flex justify-content-center">
            <div class="col-md-6 col-sm-8 my-auto border rounded p-5">
                <h2>Contact Us!</h2>
                <form>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Enter the subject">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary submit-button">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
