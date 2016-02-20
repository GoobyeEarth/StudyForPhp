<?php
#30

session_start();
echo $_SESSION['username'];

unset($_SESSION['username']);
