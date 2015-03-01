<!doctype html>
<html class="no-js" lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>slim template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="<?php echo APP_PATH; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>css/common.css">
        <link rel="stylesheet" href="<?php echo APP_PATH; ?>css/main.css">
        <script src="<?php echo APP_PATH; ?>js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
          <div class="page-header">
            <h1>slim template</h1>
            <p>php bacis framework</p>
          </div>

          <h3>test api</h3>
             <ul class="">
               <li><a href='<?php echo APP_PATH; ?>'>index</a></li>
               <li><a href='<?php echo APP_PATH; ?>get_lists/1'>list</a></li>
               <li><a href='<?php echo APP_PATH; ?>get_json/1'>json</a></li>
            </ul>

            <div class="jumbotron">

