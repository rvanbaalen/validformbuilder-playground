<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ValidForm Builder playground</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/validform.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/validform.js"></script>
    <script src="js/validwizard.js"></script>
</head>
<body>

<?php
// This file creates the $form variable
require_once('validform.php');

echo $form->toHtml();
?>

</body>
</html>