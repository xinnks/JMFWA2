<?php
/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 10:03 AM
 */ ?>
<!doctype html>
<html lang="<?php echo config_item('language'); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url().'assets/favicons/apple-touch-icon.png'; ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url().'assets/favicons/favicon-32x32.png'; ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url().'assets/favicons/favicon-16x16.png'; ?>" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url().'assets/favicons/manifest.json'; ?>">
    <link rel="mask-icon" href="<?php echo base_url().'assets/favicons/safari-pinned-tab.svg'; ?>" color="#5bbad5">
    <meta name="theme-color" content="#a084b8">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/app.css' ?>">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
            height: 100vh;
            margin: 0;
        }
        .footer{
            background-color: #204d74;
            color: #fff;
            height: 80px;
        }
        .footer-credits{
            margin-top: 30px;
            font-size: 14px;
        }
        .footer-justify{
            height: 50px;
        }
        .btn{
            border-radius: 0;
            font-weight: 600;
        }
        .navbar{
            /*background-color: #e3f2fd;*/
        }
        .my-hr{
            border-top: 1px solid #1f648b;
        }
        .menu-brand{
            height: 80px;
            width: 80px;
            margin: 10px auto;
        }

        .text-center > h3, select > option{
            font-weight: 600;
        }
        #form_sadaka{
            background-color: #ccffcc;
            border: solid 1px #419641;
        }
        #form_zaka{
         background-color: #e6f3f7;
         border: solid 1px #28a4c9;
        }
        #form_somo{
             background-color: #f9e3c2;
             border: solid 1px #eea236;#b92c28
        }
        #form_shukrani{
            background-color: #f1d4d4;
            border: solid 1px #b92c28;
        }
    </style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar" role="navigation">
    <div class="container text-center">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="text-center">
            <img class="menu-brand" src="<?php echo base_url().'assets/images/st_francis.png'; ?>" alt="JMFWA">
        </div>
        <div class="row col-md-8 col-md-offset-2">
            <hr class="my-hr">
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
