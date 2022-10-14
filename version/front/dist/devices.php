<?php
$fetch_record = $conn ->query("SELECT * FROM `devices`");
?>
<div class="container">
<h1 class="mt-4">Devices</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Devices</li>
                        </ol>
</div>
<div class="container">
    <a href="?add_devices=true" class="btn btn-primary float-end">Add Devices</a>
    <table class="table table-striped table-inverse">
        <thead class="thead-inverse">
            <tr>
                <th>Id</th>
                <th>Device</th>
                <th>Watt</th>
                <th>Check</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $sr = 1; 
                $fetch_record = $conn ->query("SELECT * FROM `devices`");
                foreach($fetch_record as $row){
                ?>
                <tr>
                    <td scope="row"><?php echo $sr++ ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['watt'] ?></td>
                    <td>
                        <a href="?calc_consumption=true & id=<?php echo $row['id']?>" class="btn btn-secondary">Calculate</a>
                    </td>
                    <td>
                        <a href="?edit=true & id=<?php echo $row['id']?>" class="btn btn-primary">Edit</a>
                        <a href="?delete=true & id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
             <?php  
                }
             ?>

            </tbody>
    </table>
</div>