<?php
// Created by Dougal Southerland (dougal) '11, Andrew Stromme (astromme) '12
// June 12, 2012
// Used by GUTS to automatically log into mailman by pre-setting the HTTP cookie
// See GUTS/services/mailinglists/views.php
$cookie_name = $_GET['listname'] . 
    ($_GET['is_admin'] == '1' ? '+admin' : '+moderator');

setcookie($cookie_name, $_GET['value'], 0, '/mailman/');

header("Location: https://secure.sccs.swarthmore.edu/" . $_GET['redirect_path']);
?>
