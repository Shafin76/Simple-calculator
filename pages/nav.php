<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location:action.php?page=login");
}
?>
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="" class="navbar-brand fw-bolder fs-2"> Calculator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto">
                <li><a href="action.php?page=home" class="nav-link fs-5 active">Home</a></li>
                <li><a href="action.php?page=about" class="nav-link fs-5">About</a></li>
                <!--            <li><a href="action.php?page=contact" class="nav-link fs-5">Contact</a></li>-->
                <li><a href="action.php?page=calculator" class="nav-link fs-5">Calculator</a></li>
                <li><a href="action.php?page=fullname" class="nav-link fs-5">FullName</a></li>
                <li><a href="action.php?page=series" class="nav-link fs-5">Series</a></li>
                <li><a href="action.php?page=evenodd" class="nav-link fs-5">Even & Odd</a></li>

                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown"><?php echo $_SESSION['user_name'];?></a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a href="action.php?page=profile" class="dropdown-item fs-5 ">Profile</a></li>
                        <li><a href="action.php?page=logout" class="dropdown-item fs-5  ">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>


    </div>
</nav>