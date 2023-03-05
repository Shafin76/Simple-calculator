
<?php include "header.php"; ?>
<title>Login Page</title>
</head>
<body>
<?php //include "nav.php"?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto ">
                <div class="card">
                    <div class="card-title  bg-primary bg-opacity-75"><h1 class="text-center fw-bolder text-white">Login</h1></div>
                    <div class="card-body">
                        <form action="action.php?page=flogin" method="post">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="text" name="password" class="form-control">
                                </div>
                            </div>
                            <h5 class="text-danger py-2 text-center">
                                <?php session_start();
                                if(isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }?>
                            </h5>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Login" class="btn btn-outline-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"?>