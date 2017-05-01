<?php
/**
 * Created by PhpStorm.
 * User: James Sinkala
 * Date: 5/1/2017
 * Time: 10:11 AM
 */
?>
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

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 54px;
            font-weight: 500;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .logo-img{
            height: 300px;
            width: 300px;
            margin: 10px auto;
        }
    </style>
</head>
<body>
<div class="content">
    <img class="logo-img" src="<?php echo base_url().'assets/images/st_francis.png'; ?>">
    <div class="title m-b-md">
        Jumuiya Ya Mt. Fransisko wa Asisi
    </div>

    <div class="links">
        <?php echo anchor(base_url().'matoleo','Matoleo'); ?>
        <?php echo anchor(base_url().'Waumini','Waumini'); ?>
        <?php echo anchor(base_url().'ripoti','Ripoti'); ?>
    </div>
</div>
</body>
</html>

