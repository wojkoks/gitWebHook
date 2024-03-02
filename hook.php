<?php
if($_GET["pass"] == "haslo1") {
    shell_exec("git pull; echo siema >> test.txt");
}
?>
