<?php
    if(isset($_POST['searchterm'])){
        echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
    }
?>

<h1>Hello World!</h1>
