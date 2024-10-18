<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Nex Community</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-bg {
            background-color: #F3C623; /* Consistent with index.php */
            color: #fff;
        }
        .footer-bg {
            background-color: #f8f9fa; /* Light grey footer */
        }
        .background-img {
            background-image: url('https://static.vecteezy.com/system/resources/previews/021/599/588/non_2x/abstract-white-and-gray-overlap-circles-background-3d-paper-circle-banner-with-drop-shadows-minimal-simple-design-for-presentation-flyer-brochure-website-book-etc-vector.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
          }
    </style>
</head>
<body class="background-img">


    <header class="d-flex  flex-row-reverse lato-regular fs-4 align-items-center justify-content-center justify-content-md-between pe-5 py-4" style="background-color: #F3C623;">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
            <a class="navbar-brand fs-3 brand-color ms-5" href="#" style="margin-right: 0px;">
              <img src="assets/img/applogo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-midle">
              Nex Community
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse  navbar-collapse justify-content-center " id="navbarNav" style="margin-left: -120px;">
                <ul class="navbar-nav">
                    <li class="nav-item active" >
                        <a class="nav-link section" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section" href="disease.php">Women Entrepreneurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section" href="insurance.php">Social Initiative</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link section" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="text-end">
              <button type="button" class="btn btn-outline-dark me-2"><a href="login.php" class="nav-link">Login</a></button>
              <button type="button" class="btn btn-dark"><a href="signup.php" class="nav-link">Sign-up</a></button>
            </div>
        </nav>
    </header>


    <main class="container mt-5">
        <h1 class="text-center">Contact Us</h1>
        <p class="text-center">Have questions? Our team is ready to help!</p>
        <section id="contact-form">
            <h2>Email Us</h2>
            <form action="submit_contact_form.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </section>

        <section id="location" class="mt-4">
            <h2>Our Location</h2>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31693.997428022314!2d-122.44674784089175!3d37.75986575041335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e2d656f6d4f%3A0xd3a21fdfd15df79!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1604272541210!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

        <section id="social-media" class="mt-4">
            <h2>Connect With Us</h2>
            <p>Follow us on our social media platforms:</p>
            <a href="https://twitter.com/nexcommunity">Twitter</a> |
            <a href="https://facebook.com/nexcommunity">Facebook</a> |
            <a href="https://instagram.com/nexcommunity">Instagram</a>
        </section>
    </main>

    <footer class="text-center p-4 footer-bg">
        © 2024 NexCommunity, All rights reserved.
    </footer>

    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
