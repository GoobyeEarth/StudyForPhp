<?php
#29

echo $_COOKIE['username'];

setcookie("username", "taguchi", time()-60*60);