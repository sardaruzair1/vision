
            <!-- <div id="layoutSidenav_content"> -->
            
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <!-- <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div> -->
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <!-- DataTable Example -->
                            </div>
                            <div class="card-body">
                            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th>Power</th>
                        <th>One Month</th>
                        <th>Bill</th>
                        <th>Sugestion</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                <?php
$fetch_record = $conn ->query("SELECT * FROM `devices`");
?>

                <tbody>
                    <?php
                $sr = 1; 
                $tm ="Month";
                $fetch_record = $conn ->query("SELECT * FROM `devices`");
                foreach($fetch_record as $row){
                ?>
                    <tr>
                        <td scope="row">
                            <?php echo $sr++ ?>
                        </td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                        <td>
                            <?php echo $row['watt'] ?>
                        </td>
                        <td>
                            <?php echo $tm ?>
                        </td>
                        

                        <td>
                            <?php
                        $Time = "730.001";
     $power = $row['watt'] / 1000;
     $Energy = $power*$Time;
     $cost = $Energy*20;
     echo $cost;
     ?>
     
                        </td>
                        <td>
                        <?php
                        if ($cost < 4000) {
                            echo "No problem";
                        }else{
                            echo "Change This";
                        }
                        ?>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
                            </div>
                        </div>
                    </div>
                