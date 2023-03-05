<?php include "header.php"; ?>
    <title>Full-Name page</title>
    </head>
    <body>
<?php include "nav.php";
if(!isset($_SESSION['user_id'])){
    header("Location:action.php?page=login");
}
?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto ">
                    <div class="card  bg-primary bg-opacity-25">
                        <div class="card-title  bg-primary"><h2 class="text-center fw-bolder text-white mb-0 p-2">Full Name</h2></div>
                        <div class="card-body">
                            <form action="action.php?page=mfullName" method="post">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fw-semibold">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="fname" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fw-semibold">Last Number</label>
                                    <div class="col-md-9">
                                        <input type="text" name="lname" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" value="Make Full Name" class="btn btn-primary fw-semibold">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fw-semibold">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $message ;?>">
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