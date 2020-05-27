<?php
/**
 * Some settings and configuration
 */
require_once '../src/utilities.php';
$includePath = '../src/sandbox.php';
$release = getPackageVersion('validformbuilder/validformbuilder');

?>
<!doctype html>
<html class="no-js" lang="en">
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

<h1>ValidForm Builder Playground</h1>
<pre>ValidForm Builder version installed: <?php echo $release ?></pre>
<p>This file serves as a playground for <a href="https://github.com/validformbuilder/validformbuilder">ValidForm Builder</a>. Edit the contents of <code>src/sandbox.php</code> to change the form below. Alternatively, you can <a href="examples.php">browse through the form examples</a>.</p>

<h2 id="output">Output</h2>
<?php

/** @noinspection PhpIncludeInspection */
require_once($includePath);

?>

<hr>
<h2 id="source">Source of <?=$includePath?></h2>
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

<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
