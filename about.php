<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Nex Community</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-bg {
            background-color: #F3C623; /* Consistent with index.php */
            color: #fff;
        }
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #F3C623;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }
        .container-timeline {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }
        .container-timeline::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid #F3C623;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        .left {
            left: 0;
        }
        .right {
            left: 50%;
        }
        .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }
        .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }
        .content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
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
        <h1 class="text-center">About Nex Community</h1>
        <p class="text-center">Learn more about our mission and the values that guide us.</p>
        <section id="mission">
            <h2>Mission and Values</h2>
            <p>At Nex Community, our mission is to empower women entrepreneurs and support social initiatives that have a lasting impact on communities. We value inclusivity, innovation, and integrity in all our endeavors.</p>
        </section>

        <section id="history" class="mt-4">
            <h2>Our History</h2>
            <div class="accordion" id="historyAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            The Beginning of Nex Community
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#historyAccordion">
                        <div class="accordion-body">
                            Nex Community was founded in 2015 with the goal of creating a supportive environment for women entrepreneurs...
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="impact" class="mt-4">
            <h2>Impact and Achievements</h2>
            <!-- Timeline -->
            <div class="timeline">
                <div class="container-timeline left">
                    <div class="content">
                        <h2>2016</h2>
                        <p>Launched our first major initiative to support 100 startups led by women.</p>
                    </div>
                </div>
                <div class="container-timeline right">
                    <div class="content">
                        <h2>2018</h2>
                        <p>Expanded our reach to over 10 countries, focusing on sustainable business practices.</p>
                    </div>
                </div>
                <div class="container-timeline left">
                    <div class="content">
                        <h2>2020</h2>
                        <p>Partnered with global NGOs to increase impact in underdeveloped regions.</p>
                    </div>
                </div>
                <div class="container-timeline right">
                    <div class="content">
                        <h2>2022</h2>
                        <p>Received the Community Impact Award for our innovative approach to social entrepreneurship.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center p-4 mt-5 bg-light">
        © 2024 NexCommunity, All rights reserved.
    </footer>

    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
