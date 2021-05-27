<?php

namespace App\class;

class Redirection
{
    public static function redirect(string $path = '/')
    {
        if ($path[0] === '/') {
            echo "<script> location.pathname='$path'</script>";
        } else {
            echo "<script> location.hrel='http://location:8000/$path' </script>";
        }
    }
}
