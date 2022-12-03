<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets//css/bootstrap.min.css">



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
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label for="">NAME</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">EMAIL</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">NUMBER</label>
                                <input type="text" name="number" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">ADDRESS</label>
                                <input type="text" name="address" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label for="">DEPARTURE</label>
                                <input type="date" name="date" class="form-control"required>
                            </div>
                            <div class="row mb-3">
                                <h4 class="text-center">TRIPS</h4>
                                <div class="col-3">
                                <strong>BOAT 1</strong><br>
                                    <input type="radio" name="trip" value="4:00AM-4:30AM" required>4:00AM-4:30AM
                                    <br>
                                    <input type="radio" name="trip" value="6:00AM-6:30AM" required>6:00AM-6:30AM
                                    <br>
                                    <input type="radio" name="trip" value="8:00AM-8:30AM" required>8:00AM-8:30AM
                                    <br>
                                </div>
                                
                                <div class="col-3">
                                    <strong>BOAT 2</strong>
                                    <br>
                                    <input type="radio" name="trip" value="5:00AM-5:30AM" required>5:00AM-5:30AM
                                    <br>
                                    <input type="radio" name="trip" value="7:00AM-7:30AM" required>7:00AM-7:30AM
                                    <br>
                                    <input type="radio" name="trip" value="9:00AM-9:30AM" required>9:00AM-9:30AM
                                    <br>
                                </div>

                                <div class="col-3">
                                    <strong>BOAT 3</strong> <br>
                                    <input type="radio" name="trip" value="9:30AM-10:00AM" required>9:30AM-10:00AM
                                    <br>
                                    <input type="radio" name="trip" value="10:30AM-11:00AM" required>10:30AM-11:00AM
                                    <br>
                                    <input type="radio" name="trip" value="11:30AM-12:00AM" required>11:30AM-12:00AM
                                    <br>
                                </div>

                                <div class="col-3">
                                    <strong>BOAT 4</strong> <br>
                                    <input type="radio" name="trip" value="9:30AM-10:00AM" required>9:30AM-10:00AM
                                    <br>
                                    <input type="radio" name="trip" value="10:30AM-11:00AM" required>10:30AM-11:00AM
                                    <br>
                                    <input type="radio" name="trip" value="11:30AM-12:00AM" required>11:30AM-12:00AM
                                    <br>
                                </div>

                            </div>
                            <div class="mb-3">
                               <button type="submit" name="save" class="btn btn-primary float-end">SAVE</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>