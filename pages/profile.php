<?php
include "pages/header.php"; ?>
<title>Profile page</title>
</head>
<body class="bg-light bg-opacity-25">
<?php include "nav.php";
if(!isset($_SESSION['user_id'])){
    header("Location:action.php?page=login");
}
?>
<section class="py-5 ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-4"></div>

            <div class="col-md-4 col-sm-12">
                <?php foreach ($profiles as $profile){ if ($_SESSION['user_id']==$profile['id']){ ?>
                    <div class="card p-3 bg-info bg-opacity-25 shadow ">
                        <img src="assets/img/<?php echo $profile['image'];?>" class="mx-auto rounded-circle border-2 border-primary " alt="..." height="120" width="120">
                        <div class="card-body">
                            <h4 class="card-title text-center fw-bold"><?php echo $profile['name'];?></h4>
                            <p class="card-text text-center fw-semibold"><?php echo $profile['email'];?></p>
                        </div>
                    </div>

                <?php }} ?>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>
</section>

<?php include "footer.php"?>
