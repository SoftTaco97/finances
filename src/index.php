<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])) $_SESSION['user_id'] =  uniqid('md_'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Finance Application</title>

    <!-- Required Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-vue.min.css">

    <!-- Required scripts -->
    <script src="js/vue.min.js"></script>
    <script src="js/bootstrap-vue.min.js"></script>

    <!-- Project Stylesheets -->

  </head>
  <body>
    <!-- Main Application -->
    <div id="app">
      <app-main></app-main>
    </div>
    <!-- Main Application -->

    <!-- Application JS -->
    <script src="js/app.js"></script>
  </body>
</html>