<?php
require_once "vendor/autoload.php";
use App\classes\Calculator;
use App\classes\FullName;
use App\classes\Auth;
use App\classes\Serise;
use App\classes\Evenodd;
use App\classes\Project;
use App\classes\Data;
$message='';

if (isset($_GET['page'])){
    if ($_GET['page']=='home'){

        $allProject=new Project();

        $projects=$allProject->allProject();

        include 'pages/home.php';
    }
    if ($_GET['page']=='about'){

        include 'pages/about.php';
    }
    elseif ($_GET['page']=='calculator'){
        include "pages/calculator.php";
    }
    elseif ($_GET['page']=='fullname'){
        include "pages/fullName.php";
    }
    elseif ($_GET['page']=='series'){
        include "pages/series.php";
    }
    elseif ($_GET['page']=='login'){
        include "pages/login.php";
    }
    elseif ($_GET['page']=='evenodd'){
        include "pages/evenodd.php";
    }
    elseif ($_GET['page']=='calculation'){
        $calculator= new Calculator($_POST);
        $message=$calculator->calculation();
        include "pages/calculator.php";
    }

    elseif ($_GET['page']=='mfullName'){
        $fullname= new FullName($_POST);
        $message= $fullname->makeFullName();
        include "pages/fullName.php";
    }
    elseif ($_GET['page']=='flogin'){
        $login= new Auth($_POST);
        $message= $login->login();

    }
    elseif ($_GET['page']=='seriesmaker'){
        $series= new Serise($_POST) ;
        $message= $series->SeriseMaker();
        include "pages/series.php";
    }


//one for form
    elseif ($_GET['page']=='evenOddForm'){
        $evenodd= new Evenodd($_POST) ;
        $message= $evenodd->EvenorOdd();
        include "pages/evenodd.php";
    }
    elseif ($_GET['page']=='logout'){
        $logout= new  Auth();
        $logout->logout();
    }
    elseif ($_GET['page']=='profile'){
        $profile= new Data();
        $profiles=$profile->userInfo();


        include 'pages/profile.php';
    }

}

