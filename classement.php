<?php
require("include/top.php");
$smarty->assign("login", $login);

$smarty->display('template/classement.tpl');