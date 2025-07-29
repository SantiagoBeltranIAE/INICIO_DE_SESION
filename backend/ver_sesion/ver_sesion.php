<?php
<?php
session_start();
session_destroy();
header("Location: destruir_sesion.html");
exit;