<?php
$pageTitle = $_GET["title"];
$prependPath = "./";
$prependCSSPath = null;
include("../base/header.html");
include("../galleries/" . $_GET["gallery"] . ".php");
include("../base/footer.html");
?>