<?php include "header.php"; ?>

    <title>Calculator page</title>
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
                    <div class="card bg-primary bg-opacity-25">
                        <div class="card-title">  <h2 class="text-center fw-bolder bg-primary text-white p-2">Calculator</h2> </div>
                        <div class="card-body">
                            <form action="action.php?page=calculation" method="post">
                            <div class="row mb-3">
                                    <label for="" class="col-md-3 fw-semibold">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="fnumber" class="form-control">
                                    </div>
                            </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fw-semibold">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="snumber" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3 "></label>
                                    <div class="col-md-9 ">
                                        <input type="submit" class="btn btn-primary me-2" name="operator" value="+">
                                        <input type="submit" class="btn btn-primary me-2" name="operator" value="-">
                                        <input type="submit" class="btn btn-primary me-2" name="operator" value="*">
                                        <input type="submit" class="btn btn-primary me-2" name="operator" value="/">
                                        <input type="submit" class="btn btn-primary " name="operator" value="%">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fw-semibold">Result</label>
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