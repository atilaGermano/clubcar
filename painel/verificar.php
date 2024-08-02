<?php 
@session_start();
if ($_SESSION['nome'] == ""){
    echo '<script>window.location="../"</script>';
    exit();
}

?>