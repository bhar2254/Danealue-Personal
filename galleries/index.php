<?php
$pageTitle = $_GET["title"];
$prependPath = "/danealue";
$prependCSSPath = null;
include($prependPath."/base/header.html");
include($prependPath."/galleries/" . $_GET["gallery"] . ".php");
include($prependPath."/base/footer.html");
?>