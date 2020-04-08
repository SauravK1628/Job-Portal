<?php
session_start();
session_destroy();
echo"<script>location.href='newform.php'</script>";
?>