<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/record.css" type="text/css">
    
    <title>AdminHub</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="index.php" class="brand">
            <i class='bx bxs-folder'></i>
            <span class="text">CONTRACT</span>
        </a>
        <ul class="side-menu top">
            <li>
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
            <li class="active">
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
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Records</h1>
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
                        <p>Records</p>
                    </span>
                </li>

            </ul>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Contract Records</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Parties</th>
                                <th>Number</th>
                                <th>Start_date</th>
                                <th>End_date</th>
                                <th>Location</th>
                                <th>Building_type</th>
                                <th>Total_Price</th>
                                <th>Scope</th>
                                <th>Total_Bill</th>
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
                                        <td><?= $information['approve'] ?></td>
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
    <!-- CONTENT -->


    <script src="js/script.js"></script>
</body>

</html>