<?php
require 'config1.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Messages</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="welcome.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">Dashboard</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span>Hello <?php echo $_SESSION['username']; ?></span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="welcome.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i
                        class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="reservation.php"> <i class="bi bi-circle"></i><span>Reservation</span> </a>
                    </li>
                    <li>
                        <a href="messages.php" class="active"> <i class="bi bi-circle"></i><span>Messages</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="logout.php" class="nav-link collapsed">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Messages</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Messages</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-xxl-4 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Messages List</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>

                                <?php $i = 1; ?>
                                <?php
                                $result = "SELECT * FROM contact ";
                                $con = mysqli_query($conn, $result);
                                if ($con) {
                                    while ($row = mysqli_fetch_assoc($con)) { ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td data-id="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></td>
                                    <td data-id="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></td>
                                    <td data-id="<?php echo $row['id']; ?>"><?php echo $row['subject']; ?></td>
                                    <td data-id="<?php echo $row['id']; ?>"><?php echo $row['message']; ?></td>
                                </tr>
                                <?php $i++; ?>
                                <?php
                                    }
                                } ?>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>