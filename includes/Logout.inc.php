<?php
session_start();
session_unset();
session_destroy();


header("location: ../signup.php?error=none");