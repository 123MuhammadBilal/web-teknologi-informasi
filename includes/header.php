<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?<?= time(); ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- FontAw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css?<?= time(); ?>" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css?<?= time(); ?>" />

    <title>Muhammad Bilal</title>
</head>

<body>

    <!-- START navbar -->
    <section id="navbar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark shadow p-3 mb-5">
            <div class="container">
                <a class="navbar-brand fw-bolder" href="home.php">Teknologi Informasi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="service.php">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="data.php">Data</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item text-center" href="#">Profile</a></li>
                                <li><a class="dropdown-item text-center" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- END navbar -->