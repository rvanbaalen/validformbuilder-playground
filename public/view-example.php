<?php

$example = $_GET['example'];
$path = '../vendor/validformbuilder/validformbuilder/examples/';
$includePath = $path . $example . '.php';

if (!file_exists($includePath)) {
    header('Location: examples.php');
}

?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ValidForm Builder playground</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/validform.css">
    <link rel="stylesheet" href="css/monokai-sublime.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/validform.js"></script>
    <script src="js/validwizard.js"></script>

    <script src="js/highlight.js"></script>
</head>
<body>

<h1><a href="examples.php">&larr; Back to the examples</a></h1>

<h2>Source</h2>
<pre>
<code>
<?php
//*** Get the source file and show it as a reference for users
$source = file_get_contents($includePath);
$source = htmlspecialchars($source);

echo $source;
?>
</code>
</pre>
<hr>
<h2>Output</h2>
<?php

require_once($includePath);

//*** All example files generate a '$strOutput' variable which can be used here
echo $strOutput;

?>

<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>