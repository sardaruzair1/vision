<?php
if(isset($_GET['id'])){


$id = $_GET['id'];

$fetch = $conn->query("SELECT * FROM `units` WHERE `id`='$id'");

$row = mysqli_fetch_array($fetch);

$unit_rate = $row['unit_rate'];


}


?>
  


<div class="container">
    <h1 class="mt-4">Edit Units</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Edit-unit</li>
    </ol>
</div>
<div class="container">
<form action="" method="post">

        
            <div class="form-group">
                <br>
                <label for=""><b>Unit Rate</b></label>
                <input type="text" name="unit_rate" value="<?php echo $unit_rate?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
        
<br>
        
            <br>
        
        <input type="submit" value="Submit" name="btn" class="btn btn-info float-end">
        <br>

    </form>
</div>
<?php

if (isset($_POST['btn'])) {
   $unit_rate = $_POST['unit_rate'];

  

   $update = $conn->query("UPDATE `units` SET `unit_rate`='$unit_rate' WHERE `id` ='$id'");
if ($update) {
    ?>
    <script>
        window.location.href = '?units=true';
    </script>
    <?php
}

}

?>