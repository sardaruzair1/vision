<?php


if(isset($_GET['id'])){

    $id= $_GET['id'];



    $delete=$conn->query("DELETE FROM `devices` WHERE `id`='$id'");

    if($delete){
        ?>
        <script>
            window.location.href = '?devices=true';
        </script>
            
            <?php
    }




}


?>