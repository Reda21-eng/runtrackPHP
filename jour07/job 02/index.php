<?php
setcookie("nbvisites","nbvisites+1", time() = 3600,"/");
if (isset($_COOKIE["nbvisites"])) {};
    echo "Nombre de vistes ";$_COOKIE["nbvisites+1"]


?>