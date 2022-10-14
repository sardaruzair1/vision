<?php
$fetch_record = $conn ->query("SELECT * FROM `devices`");
?>
<div class="container">
<h1 class="mt-4">Unit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Unit</li>
                        </ol>
</div>
<div class="container">
   
    <table class="table table-striped table-inverse">
        <thead class="thead-inverse">
            <tr>
                <th>Sno</th>
                <th>Unit Rates</th>
                <th>Unit Type</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $sr = 1; 
                $fetch_record = $conn ->query("SELECT * FROM `units`");
                foreach($fetch_record as $row){
                ?>
                <tr>
                    <td scope="row"><?php echo $sr++ ?></td>
                    <td><?php echo $row['unit_rate'] ?></td>
                    <td><?php echo $row['unit_type'] ?></td>
                    <td>
                    <a href="?edit_units=true & id=<?php echo $row['id']?>" class="btn btn-primary">Edit</a>
                    </td>
                   
                </tr>
             <?php  
                }
             ?>

            </tbody>
    </table>
</div>