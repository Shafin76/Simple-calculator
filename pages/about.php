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
              <h2>This is About Page...</h2>
            </div>
        </div>
    </section>

<?php include "footer.php"?>