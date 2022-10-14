<div class="container">
    <h1 class="mt-4">Add Devices</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add-Devices</li>
    </ol>
</div>
<div class="container">
<form action="" method="post">

        
            <div class="form-group">
                <br>
                <label for=""><b> Device Name</b></label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        
<br>
        
            <div class="form-group">
                <br>
                <label for=""><b>Watt</b></label>
                <input type="text" name="watt" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
            <br>
        
        <input type="submit" value="Submit" name="btn" class="btn btn-info float-end">
        <br>

    </form>
</div>
<?php
if (isset($_POST['btn'])) {
    $name=$_POST['name'];
    $watt=$_POST['watt'];
 
    $insert = $conn->query("INSERT INTO `devices`(`name`, `watt`) VALUES ('$name','$watt')");
    
    
    ?>
<script>
    window.location.href = '?devices=true';
</script>
   
    <?php
}
?>