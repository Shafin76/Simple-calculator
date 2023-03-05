<?php
include "pages/header.php"; ?>
    <title>Home page</title>
</head>
<body class="bg-primary bg-opacity-25">
<?php include "nav.php";
if(!isset($_SESSION['user_id'])){
    header("Location:action.php?page=login");
}
?>
<section class="py-5">
    <div class="container">
        <div class="row">
<?php foreach ( $projects as $project){?>
            <div class="col-md-4 mb-3">

                <div class="card shadow py-3">

                    <div class="card-body">
                        <div class="mx-auto col-md-8">
                            <img src="assets/img/<?php echo $project['image'];?>" alt=""  height="250" class="w-100">
                        </div>

                        <div class="p-2">
                            <h2 class="fw-bold text-center pt-3"><?php echo $project['name'] ;?></h2>
                            <p class="text-center"><?php echo $project['description']; ?></p>
                        </div>

                        <a href="action.php?page=<?php echo strtolower($project['name']) ;?>" class="btn btn-success w-100 fw-semibold py-2" ><?php echo $project['name'] ;?></a>
                    </div>


                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"?>