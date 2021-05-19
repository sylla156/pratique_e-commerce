<?php

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    echo "<script> location.pathname = '/'  </script>";
}



if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
    echo "<script> location.pathname = '/'  </script>";
}

