<?php
$pageTitle = $_GET["title"];
$prependPath = "/var/www/danealue";
$prependCSSPath = null;

include($prependPath."/base/head.html");
include($prependPath."/galleries/".$_GET["gallery"].".php");
include($prependPath."/base/footer.html");
?>