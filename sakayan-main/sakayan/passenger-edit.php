<?php
session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">



    <title>Document</title>

</head>

<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Passenger Info
                            <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <?php
                            if(isset($_GET['id'])){
                                $student_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM passengers Where id='$student_id'";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    $student = mysqli_fetch_array($query_run);
                                    ?>

                                            
                                <form action="code.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $student['id']?>">
                                    <div class="mb-3">
                                        <label for="">NAME</label>
                                        <input type="text" name="name" value="<?= $student['name']?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">EMAIL</label>
                                        <input type="email" name="email" value="<?= $student['email']?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">NUMBER</label>
                                        <input type="text" name="number" value="<?= $student['number']?>" class="form-control" require>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">ADDRESS</label>
                                        <input type="text" name="address" value="<?= $student['address']?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">DEPARTURE</label>
                                        <input type="date" name="date" value="<?= $student['address']?>" class="form-control">
                                    </div>
                                    <div class="row mb-3">
                                <h5 class="text-center">TRIPS</h5>
                                <div class="col-4">
                                    BOAT 1<br>
                                    <input type="radio" name="trip" value="4:00AM-4:30AM" <?php echo $student['trip'] == "4:00AM-4:30AM" ? "checked" : ""; ?> required>4:00AM-4:30AM
                                    <br>
                                    <input type="radio" name="trip" value="6:00AM-6:30AM" <?php echo $student['trip'] == "6:00AM-6:30AM" ? "checked" : ""; ?> required>6:00AM-6:30AM
                                    <br>
                                    <input type="radio" name="trip" value="8:00AM-8:30AM" <?php echo $student['trip'] == "8:00AM-8:30AM" ? "checked" : ""; ?> required>8:00AM-8:30AM
                                    <br>
                                </div>
                                
                                <div class="col-4">
                                    <label class="text-center">BOAT 2</label>
                                    <br>
                                    <input type="radio" name="trip" value="5:00AM-5:30AM" <?php echo $student['trip'] == "5:00AM-5:30AM" ? "checked" : ""; ?> required>5:00AM-5:30AM
                                    <br>
                                    <input type="radio" name="trip" value="7:00AM-7:30AM" <?php echo $student['trip'] == "7:00AM-7:30AM" ? "checked" : ""; ?> required>7:00AM-7:30AM
                                    <br>
                                    <input type="radio" name="trip" value="9:00AM-9:30AM" value="9:00AM-9:30AM" <?php echo $student['trip'] == "9:00AM-9:30AM" ? "checked" : ""; ?> required>9:00AM-9:30AM
                                    <br>
                                </div>

                                <div class="col-4">
                                    BOAT 3<br>
                                    <input type="radio" name="trip" value="9:30AM-10:00AM" <?php echo $student['trip'] == "9:30AM-10:00AM" ? "checked" : ""; ?>>9:30AM-10:00AM
                                    <br>
                                    <input type="radio" name="trip" value="10:30AM-11:00AM" <?php echo $student['trip'] == "10:30AM-11:00AM" ? "checked" : ""; ?>>10:30AM-11:00AM
                                    <br>
                                    <input type="radio" name="trip" value="11:30AM-12:00AM" <?php echo $student['trip'] == "11:30AM-12:00AM" ? "checked" : ""; ?>>11:30AM-12:00AM
                                    <br>
                                </div>

                            </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_passenger" class="btn btn-primary form-control">Update Passenger</button>
                                    </div>

                                </form>
                                    <?php
                                }
                                else{
                                    echo "<h4>No such record found!</h4>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>