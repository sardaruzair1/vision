<?php
$fetch_record = $conn ->query("SELECT * FROM `devices`");
?>
<?php
if(isset($_GET['id'])){


$id = $_GET['id'];

$fetch = $conn->query("SELECT * FROM `devices` WHERE `id`='$id'");
$get = $conn->query("SELECT * FROM `units`");
$row = mysqli_fetch_array($fetch);
$item = mysqli_fetch_array($get);
$name = $row['name'];
$watt = $row['watt'];

}


?>
<div class="container">
<h1 class="mt-4">Calculate Your Consumption</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active mx-2">your consumption</li>
                        </ol>
</div>
<div class="container">

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Energy</th>
            <th>TimePeriod</th>
            <th>Unit Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
            <form action="" method="post">
                <td scope="row"><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $watt?></td>
            
                <td><input type="number" name="time" id="time" required></td>
                <td>
                <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="<?php echo $item['unit_type']?>">Comercial</option>
			  <option value="<?php echo $item['unit_type']?>">Resedincial</option>
		  </select>
                </td>
                <td>
                        
                        <input type="submit" value="Calculate" name="btn" class="btn btn-secondary">
                </td>
            </form>
            </tr>
        </tbody>
</table>
</div>

<?php


if (isset($_POST['btn'])) {
     $Time = $_POST['time'];
     $power = $row['watt'] / 1000;
     $Energy = $power*$Time;
     $cost = $Energy*20;
     ?>
     <div class="container">
    <div class="jumbotron">
        <h1 class="display-4"><?php echo $cost?></h1>
        <p class="lead">Your Bill on this device is <?php echo $cost ?></p>
        <hr class="my-4">
        <p>Content</p>
    </div>
    </div>
    <?php
}

?>


