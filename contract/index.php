<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <title>AdminHub</title>
</head>

<body>
    <!-- Modal -->
    <!-- Button trigger modal -->

    <!-- Edit Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>parties</label>
                            <input type="text" name="parties" id="parties" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>number</label>
                            <input type="number" name="cnumber" id="cnumber" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>startdate</label>
                            <input type="date" name="startdate" id="startdate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>enddate</label>
                            <input type="date" name="enddate" id="enddate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>plocation</label>
                            <input type="text" name="plocation" id="plocation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>btype</label>
                            <input type="text" name="btype" id="btype" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>scope</label>
                            <input type="text" name="scope" id="scope" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>totalbill</label>
                            <input type="number" name="totalbill" id="totalbill" class="form-control">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="update" class="btn btn-primary">update data</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!--Delete modal-->
    <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <input type="hidden" name="delete_id" id="delete_id" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="deletedata" class="btn btn-primary">Delete data</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="index.php" class="brand">
            <i class='bx bxs-folder'></i>
            <span class="text">CONTRACT</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="index.php">
                    <i class='bx bxs-file-blank'></i>
                    <span class="text">Contracts</span>
                </a>
            </li>
            <li>
                <a href="addform.php">
                    <i class='bx bx-plus-medical'></i>
                    <span class="text">Add Contract</span>
                </a>
            </li>
            <li>
                <a href="record.php">
                    <i class='bx bxs-folder'></i>
                    <span class="text">Records</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Dashboard</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
           <a href=""><i class='bx bxs-bell'></i></a> 
        
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Contracts</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">FORM</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="box-info">
                <li>
                    <i class='bx bxs-file-doc'></i>
                    <span class="text">
                        <?php
                        include 'database.php';

                        $dash_category_query = 'SELECT * FROM information';
                        $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                        if ($category_total = mysqli_num_rows($dash_category_query_run)) {
                            echo '<h4 class="mb-0"> ' . $category_total . ' </h4>';
                        } else {
                            echo '<h4 class="mb-0"> No Data </h4>';
                        }
                        ?>
                        <p>Contracts</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-folder-open'></i>
                    <span class="text">
                        <?php
                        include 'database.php';

                        $dash_category_query = "SELECT * FROM information WHERE status='1' ";
                        $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                        if ($category_total = mysqli_num_rows($dash_category_query_run)) {
                            echo '<h4 class="mb-0"> ' . $category_total . ' </h4>';
                        } else {
                            echo '<h4 class="mb-0">0</h4>';
                        }
                        ?>
                        <p>Active Contract</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-folder-minus'></i>
                    <span class="text">
                        <?php
                        include 'database.php';

                        $dash_category_query = "SELECT * FROM information WHERE status='0' ";
                        $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                        if ($category_total = mysqli_num_rows($dash_category_query_run)) {
                            echo '<h4 class="mb-0"> ' . $category_total . ' </h4>';
                        } else {
                            echo '<h4 class="mb-0">0</h4>';
                        }
                        ?>
                        <p>Disabled Contract</p>
                    </span>
                </li>
            </ul>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Contract</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Parties</th>
                                <th scope="col">Number</th>
                                <th scope="col">Start_date</th>
                                <th scope="col">End_date</th>
                                <th scope="col">Location</th>
                                <th scope="col">Building_type</th>
                                <th scope="col">Scope</th>
                                <th scope="col">Total_Bill</th>
                                <th scope="col">Action</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            include 'database.php';

                            $sql = "SELECT * FROM information";
                            $query_run = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $information) {
                            ?>
                                    <tr>
                                        <td><?= $information['id'] ?></td>
                                        <td><?= $information['parties'] ?></td>
                                        <td><?= $information['cnumber'] ?></td>
                                        <td><?= $information['startdate'] ?></td>
                                        <td><?= $information['enddate'] ?></td>
                                        <td><?= $information['plocation'] ?></td>
                                        <td><?= $information['btype'] ?></td>
                                        <td><?= $information['scope'] ?></td>
                                        <td><?= $information['totalbill'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success "><i class="fa-solid fa-eye"></i></button>
                                            <button type="button" class="btn btn-primary editbtn" name="editbtn"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button type="button" class="btn btn-danger deletebtn" name="deletebtn"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                        <td>
                                            <?php

                                            if($information['status'] == 1) {
                                                echo ' <p><a href="active.php?id='.$information['id'].'&status=0" class="btn btn-success">Active</a></p>';


                                            }else {
                                                echo ' <p><a href="active.php?id='.$information['id'].'&status=1"  class="btn btn-danger">InActive</a></p>';

                                            }


?>


 
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!--SCRIPT CODE-->
    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#id').val(data[0]);
                $('#parties').val(data[1]);
                $('#number').val(data[2]);
                $('#startdate').val(data[3]);
                $('#enddate').val(data[4]);
                $('#plocation').val(data[5]);
                $('#btype').val(data[6]);
                $('#scope').val(data[7]);
                $('#totalbill').val(data[8]);


            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.deletebtn').on('click', function() {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);



            });
        });
    </script>


    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Page Script -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>

<!-- PHP CODES -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

</body>

</html>

<!--Update php code-->
<?php
include 'database.php';

if (isset($_POST['update'])) {

    $id = $_POST['id'];

    $parties = $_POST['parties'];
    $cnumber = $_POST['cnumber'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $plocation = $_POST['plocation'];
    $btype = $_POST['btype'];
    $scope = $_POST['scope'];
    $totalbill = $_POST['totalbill'];

    $query = "UPDATE information SET parties='$parties', cnumber='$cnumber', startdate='$startdate', enddate='$enddate', plocation='$plocation', btype='$btype', scope='$scope', totalbill='$totalbill' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
?>
        <script>
            let timerInterval
            Swal.fire({
                title: 'Updating Data',
                html: 'I will close in <b></b> milliseconds.',
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    location.href = "index.php"
                }
            })
        </script>



<?php

    } else {
    }
}

?>

<!--Delete php code-->

<?php
include 'database.php';

if (isset($_POST['deletedata'])) {

    $id = $_POST['delete_id'];

    $query = "DELETE FROM information WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {

?>
        <script>
            Swal.fire({
                title: "Data Deleted!",
                text: "You cannot revert this!",
                icon: "success"
            });
        </script>


<?php

    }
}

?>