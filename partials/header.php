<?php
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">CodeQueryHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php" tabindex="-1">Contact Us</a>
                </li>
            </ul>
            
            <div class="mx-2 d-flex">
                <form class="d-flex me-2">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <div class="btn btn-success ms-3 me-1 data-bs-toggle="modal" data-bs-target="#loginModal">Signin</div>
                <div class="btn btn-success data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</div>
            </div>
            </div>
        </div>
    </nav>
';
include 'partials/login_modal.php' ;
include 'partials/signup_modal.php' ;
?>