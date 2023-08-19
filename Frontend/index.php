<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    $message = $_POST['message'];

    $sql = "INSERT INTO reservation (name, email, phone, date, time, people, message)
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Reservation Successful")</script>';
    } else {
        print '<script>alert("Reservation Failed")</script>';
    };
}

if (isset($_POST['kirim'])) {
    $name1 = $_POST['name1'];
    $email1 = $_POST['email1'];
    $subject = $_POST['subject'];
    $messages = $_POST['messages'];

    $sql1 = "INSERT INTO contact (name, email, subject, message)
            VALUES ('$name1', '$email1', '$subject', '$messages')";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1) {
        echo '<script>alert("Message Successful")</script>';
    } else {
        print '<script>alert("Message Failed")</script>';
    };
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <title>Noza Restaurant</title>
</head>

<body class="id">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #000000;">
        <div class="container">
            <a class="navbar-brand" href="#home">Noza Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-4">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#event">Events</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#chefs">Chefs</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link active" href="#booking" style="color: #cda45e;">Book A Table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- home -->
    <section id="home">
        <div class="text-light text-end">
            <p class="operational"><i class="bi bi-clock"></i>Monday-Saturday: 11:00-23:00</p>
        </div>
        <div class="container " data-aos="zoom-in" data-aos-delay="100">
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-6">
                    <h1 id="opening">Welcome to <bold style="color:#cda45e;">Noza Restaurant</bold>
                    </h1>
                    <h4 class="text-light">Serving great food for more than 5 years!</h4>
                    <h6 class="text-light">
                        <script>
                        var d = new Date();
                        var time = d.getHours();
                        if (time < 12) {
                            document.write("Good Morning");
                        } else if (time < 16) {
                            document.write("Good Afternoon")
                        } else if (time < 18) {
                            document.write("Good Evening");
                        } else {
                            document.write("Good Night");
                        };
                        document.write(", ");
                        var x = new Date();
                        theDay = x.getDay();
                        switch (theDay) {
                            case 1:
                                document.write("Happy Monday.");
                                break;

                            case 2:
                                document.write("Happy Tuesday.");
                                break;

                            case 3:
                                document.write("Happy Wednesday.");
                                break;

                            case 4:
                                document.write("Warm Thursday.");
                                break;

                            case 5:
                                document.write("Warm Friday.");
                                break;

                            case 6:
                                document.write("Relax and enjoy your weekend on Saturday.");
                                break;

                            default:
                                document.write("Chill Sunday and dont forget to take exercise.");
                        }
                        </script>
                    </h6>
                </div>
                <div class=" col-6">
                    <h4 class="status">
                        <script>
                        var d = new Date();
                        var time = d.getHours();
                        if (time >= 6 && time <= 11) {
                            document.write("We're closed, wait till 11");
                        } else if (time >= 11 && time <= 23) {
                            document.write("We're open");
                        } else {
                            document.write("We're closed for the day! Please come back tomorrow!");
                        }
                        </script>
                    </h4>
                    <h4 class="text-light" style="font-family: 'Dancing Script', cursive; font-size: 35px;">
                        <script>
                        var d = new Date();
                        var time = d.getHours();
                        if (time >= 6 && time <= 11) {
                            document.write("It's Breakfeast Time. ");
                            document.write("Let's start the day with smile :)");
                        } else if (time >= 12 && time <= 16) {
                            document.write("It's Lunch Time. ");
                            document.write("Don't Forget Your Lunch");
                        } else if (time >= 17 && time <= 20) {
                            document.write("It's Time for Dinner. ");
                            document.write("Stop working and take a rest :)");
                        } else {
                            document.write("It's Nigth Time. ");
                            document.write("Take for relax and don't forget to sleep :)");
                        }
                        </script>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- about -->
    <section id="about">
        <div class="container text-light" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="assets/img/about.jpg" alt="" height="550" width="550">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3 class="about-title">Noza Restaurant History</h3><br>
                    <p class="fst-italic">
                        Was established in 2017. It is famous for its cuisine that has the characteristics of strong
                        spices
                    </p>
                    <ul>
                        <li>
                            There's a place to party, and a bar to have fun
                        </li>
                        <li>
                            Has a beautiful view, and is served by the beauty of the sea
                        </li>
                        <li>
                            Has a green plant theme for the interior of the restaurant, and has a lounge to relax with
                            your friends
                        </li>
                    </ul>
                    <p>
                        Located in New Zealand, Araara Island. Serving food with special spices imported from Indonesia.
                        and has been visited by famous food critics
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae non autem quae doloremque
                        incidunt dolore deleniti eveniet perspiciatis, culpa earum?
                    </p>
                </div>
            </div>
    </section>
    <!-- about end -->

    <!-- promotion -->
    <section id="promotion">
        <div class="container text-light">
            <div class="section-title">
                <p>Why Us</p>
                <hr>
                <h2 style="color:#cda45e;">Why Choose Our Restaurant</h2> <br><br>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>Quality</h4>
                        <p>We always choose quality food ingredients that are still fresh and new from the market</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <span>02</span>
                        <h4>Hygienic</h4>
                        <p>We have 15 members to clean every corner of the
                            restaurant</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span>03</span>
                        <h4>Ease of access</h4>
                        <p>It has short access to the nearest hotel and tourist attractions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promotion end -->

    <!-- menu -->
    <section id="menu">
        <div class="container">
            <div class="section-title text-light">
                <h4>Menu</h4>
                <hr>
                <h2 style="color: #cda45e;">Check Our Tasty Menu</h2>
            </div>

            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Lobster Bisque</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lobster, Lemon, Butter, Parsley, White Wine, Whipping Cream
                    </div>
                </div>

                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Bread Barrel</a><span>$6.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Crab Cake</a><span>$7.95</span>
                    </div>
                    <div class="menu-ingredients">
                        A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                    </div>
                </div>

                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Caesar Selections</a><span>$8.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Tuscan Grilled</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                    </div>
                </div>

                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Mozzarella Stick</a><span>$4.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Greek Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach, crisp romaine, tomatoes, and Greek olives
                    </div>
                </div>

                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Spinach Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                </div>

                <div class="col-lg-6 menu-item">
                    <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">Lobster Roll</a><span>$12.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- menu end -->

    <!-- events -->
    <section id="event">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="section-title text-light">
                <h4>Events</h4>
                <hr>
                <h2 style="color: #cda45e;">Organize Your Events in our Restaurant</h2>
            </div><br>
            <div class="row text-light">
                <div class="col-md-4">
                    <img src="assets/img/event-birthday.jpg" alt="" style="height: 220px; width: 350px;">
                    <h3 class="event-option">Birthday Parties</h3>
                    <div class="price">
                        <p><span>$200</span></p>
                    </div>
                    <p class="fst-italic">Has a capacity of 300 people, and provides party design services</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, eos.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, ducimus.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, assumenda?</li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quae velit error iste, aperiam
                        consequatur provident reiciendis porro!
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/event-custom.jpg" alt="" style="height: 220px; width: 350px;">
                    <h3 class="event-option">Custom Parties</h3>
                    <div class="price">
                        <p><span>$145</span></p>
                    </div>
                    <p class="fst-italic">
                        Provides a lounge for parties and a dance room. Equipped with bars. Has a
                        capacity of 250 people
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet onsectetur adipisicing elit. Dicta, sunt.</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, ipsa!</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fuga!</li>
                    </ul>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident necessitatibus ipsum ipsa
                        dolorum nesciunt quos.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/event-private.jpg" alt="" style="height: 220px; width: 350px;">
                    <h3 class="event-option">Private Parties</h3>
                    <div class="price">
                        <p><span>$290</span></p>
                    </div>
                    <p class="fst-italic">
                        Providing a special room for karaoke, swimming pool, special lounge, and top-class service
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, eveniet?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, tempore.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, modi.</li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et mollitia tempore aut cum doloribus.
                        Et!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- events end -->

    <!-- reservation -->
    <section id="booking">
        <div class="container">
            <div class="section-title text-light">
                <h5>Reservation</h5>
                <hr>
                <h2 style="color: #cda45e;">Book a Table</h2><br><br>
            </div>

            <form action="" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="date" name="date" class="form-control" id="date" placeholder="Date"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="time" class="form-control" name="time" id="time" placeholder="Time"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-control" name="people" id="people" placeholder="# of people"
                            data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div><br><br>
                <div class="text-center"><button type="submit" name="submit">Book a Table</button></div>
            </form>
        </div>
        </div>
    </section>
    <!-- reservation end -->

    <!-- chef -->
    <section id="chefs">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h4 class="text-light">Our Chef
                    <hr>
                </h4>
                <h2 style="color: #cda45e;">Meet our amazing chef</h2><br>
                <div class="row">
                    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" height="350px"
                            width="350px">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/chefs/chef-1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <h2 class="text-light">Xiang Ling</h2>
                        <h4 class="text-light">Master Chef</h4>
                        <p class="text-light">Mao Xiangling, Chinese: 卯香菱 Mǎo Xiānglíng. She is the Head
                            Chef at the Wanmin Restaurant and runs it alongside her
                            father Chef Mao.</p>
                        <p class="text-light">As a chef, Xiangling isn't afraid to try out different
                            recipes or "exotic" ingredients... making her dishes
                            sometimes quite unique.</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            height="350px" width="350px">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/chefs/chef-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/chefs/chef-2(2).jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <h2 class="text-light">Souma Yukihira</h2>
                        <h4 class="text-light">Pattisier</h4>
                        <p class="text-light">Sōma Yukihira (幸ゆき平ひら 創そう真ま, Yukihira Sōma). He is the son of
                            Jōichirō Yukihira and Tamako Yukihira, the proud owner of
                            Restaurant Yukihira.</p>
                        <p class="text-light">He is a 92nd Tōtsuki Generation alumnus and a former resident of
                            Polar Star Dormitory. He is also a previous 1st seat of the
                            Elite Ten Council.</p>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                            height="350px" width="350px">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/chefs/chef-3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/chefs/chef-3(2).jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/chefs/chef-3(3).jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <h2 class="text-light">Karyl Momochi</h2>
                        <h4 class="text-light">Chef</h4>
                        <p class="text-light">Kiruya Momochi (百地 希留耶, Momochi Kiruya), or known by her alias of Karyl
                        </p>
                        <p class="text-light">A magic-user who has the ability to tame and control monsters, she is a
                            member of the
                            GourmetGuild.</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- chef end -->

    <!-- gallery -->
    <section id="gallery">
        <div class="container">
            <div class="section-title">
                <h4 class="text-light">Gallery
                    <hr>
                </h4>
                <h2 style="color: #cda45e;">Some Photos From our Restaurant</h2><br>
            </div>
            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- gallery end -->

    <!-- contact -->
    <section id="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="section-title">
                <h4 class="text-light">Contact
                    <hr>
                </h4>
                <h2 style="color: #cda45e;">Contact Us</h2><br>
            </div>
            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.041552087101!2d174.6988007151567!3d-35.89699798457323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0ca41009326929%3A0xf00ef62249bfc50!2sAraara%20Island!5e0!3m2!1sid!2sid!4v1648833864116!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="400">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address text-light">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>
                                    A0174 Ara Street<br>
                                    Araara Island, New Zealand
                                </p>
                            </div>

                            <div class="open-hours text-light">
                                <i class="bi bi-clock"></i>
                                <h4>Open Hours:</h4>
                                <p>
                                    Monday-Saturday:<br>
                                    11:00 AM - 11:00 PM
                                </p>
                            </div>

                            <div class="email text-light">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>nozarestaurant@gmail.com</p>
                            </div>

                            <div class="phone text-light">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+72 4568 753961 95</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name1" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email1" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="messages" rows="8" placeholder="Message"
                                    required></textarea>
                            </div><br><br>
                            <div class="text-center"><button type="submit" name="kirim">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- contact end -->

    <!-- footer -->
    <section id="footer">
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-info text-light">
                                <h3>Noza Restaurant</h3>
                                <p>
                                    A0174 Araara Island <br>
                                    NY 535022, New Zealand<br><br>
                                    <strong>Phone:</strong> +72 4568 753961 95<br>
                                    <strong>Email:</strong> nozarestaurant@gmail.com<br>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 footer-links text-light">
                            <h4>Payment Method</h4>
                            <ul>
                                <li>
                                    <p>Debit/Credit Card</p>
                                </li>
                                <li>
                                    <p>Mobile Banking</p>
                                </li>
                                <li>
                                    <p>PayPal</p>
                                </li>
                                <li>
                                    <p>Cash</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-4 footer-links text-light">
                            <h4>Our Services</h4>
                            <ul>
                                <li>
                                    <p>Restaurant Reservation</p>
                                </li>
                                <li>
                                    <p>Product Management</p>
                                </li>
                                <li>
                                    <p>Food Catering</p>
                                </li>
                                <li>
                                    <p>Food Serving</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- footer end -->

    <!-- copyright -->
    <section id="copyright">
        <div class="container">
            <div class="copyright text-center text-light">
                &copy; Copyright <strong><span>Noza Restaurant</span></strong>. All Rights Reserved 2022
            </div>
        </div>
    </section>
    <!-- copyright end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>