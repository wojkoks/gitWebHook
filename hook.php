<?php
if($_GET["pass"] == "haslo1") {
    shell_exec("git pull; echo test >> test.txt");
}
?>