<?php
if(isset($_GET['id'])){


$id = $_GET['id'];

$fetch = $conn->query("SELECT * FROM `devices` WHERE `id`='$id'");

$row = mysqli_fetch_array($fetch);

$name = $row['name'];
$watt = $row['watt'];

}


?>
  


<div class="container">
    <h1 class="mt-4">Edit Devices</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit-Devices</li>
    </ol>
</div>
<div class="container">
<form action="" method="post">

        
            <div class="form-group">
                <br>
                <label for=""><b> Device Name</b></label>
                <input type="text" name="name" value="<?php echo $name?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
        
<br>
        
            <div class="form-group">
                <br>
                <label for=""><b>Watt</b></label>
                <input type="text" name="watt" id="" value="<?php echo $watt?>"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <br>
        
        <input type="submit" value="Submit" name="btn" class="btn btn-info float-end">
        <br>

    </form>
</div>
<?php

if (isset($_POST['btn'])) {
   $name = $_POST['name'];
   $watt = $_POST['watt'];
  

   $update = $conn->query("UPDATE `devices` SET `name`='$name',`watt`='$watt' WHERE `id` ='$id'");
if ($update) {
    ?>
    <script>
        window.location.href = '?devices=true';
    </script>
    <?php
}

}

?>