<?php
$includePath = '../src/sandbox.php';
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

<h1>ValidForm Builder Playground</h1>
<p>This file serves as a playground for ValidForm Builder. Edit the contents of <code>src/sandbox.php</code> to change the form below. Alternatively, you can <a href="examples.php">browse through the form examples</a>.</p>

<h2 id="output">Output</h2>
<a href="#source">View source</a><br>
<?php

require_once($includePath);

?>
<hr>
<h2 id="source">Source of <?=$includePath?></h2>
<a href="#output">View output</a><br>
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

<br>
<a href="#source">View source</a> - <a href="#output">View output</a><br>

<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>