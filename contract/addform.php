<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/add.css" type="text/css">

  <title>AdminHub</title>
</head>

<body>

  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
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
      <li class="active">
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
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="container">
        <header>Contract Information</header>
        <form action="#" method="POST">
          <div class="form first">
            <div class="deatails personal">
              <span class="title">Add Details</span>

              <div class="fields">
                <div class="input-field">
                  <label>Parties:</label>
                  <input type="text" name="parties" placeholder="Enter Parties.." required>
                </div>

                <div class="input-field">
                  <label>Contact Number:</label>
                  <input type="number" name="number" placeholder="Enter number.." required>
                </div>

                <div class="input-field">
                  <label>Start Date:</label>
                  <input type="date" name="sdate" placeholder="Enter Start Date.." required>
                </div>

                <div class="input-field">
                  <label>End Date:</label>
                  <input type="date" name="edate" placeholder="Enter End Date.." required>
                </div>

                <div class="input-field">
                  <label>Project Location:</label>
                  <input type="text" name="location" placeholder="Enter Project Location.." required>
                </div>

                <div class="input-field">
                  <label>Building Type:</label>
                  <input type="text" name="btype" placeholder="Enter Building Type." required>
                </div>

              </div>
            </div>

            <div class="deatails personal">
              <span class="title">More Details</span>

              <div class="fields">
                <div class="input-field">
                  <label>Scope of Work:</label>
                  <input type="text" name="scope" placeholder="Enter Scope of Work.." required>
                </div>

                <div class="input-field">
                  <label>Total Bill:</label>
                  <input type="number" name="bill" placeholder="Enter bill.." required>
                </div>

                <div class="input-field">
                  <label>Approve:</label>
                  <input type="text" name="approve" placeholder="Approve or Disapprove.." required>
                </div>

                <button type="submit" name="submit">
                  <span class="btnText">Submit</span>
                  <i class="fa-solid fa-check"></i>
                </button>

              </div>
            </div>
          </div>
        </form>
      </div>


    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <script src="js/script.js"></script>
</body>

</html>

<?php

include 'database.php';


if (isset($_POST['submit'])) {

  $parties = $_POST['parties'];
  $number = $_POST['number'];
  $sdate = $_POST['sdate'];
  $edate = $_POST['edate'];
  $location = $_POST['location'];
  $btype = $_POST['btype'];
  $scope = $_POST['scope'];
  $bill = $_POST['bill'];
  $approve = $_POST['approve'];

  $sql = "INSERT INTO  information (parties, cnumber, startdate, enddate, plocation, btype, scope, totalbill, approve) values ('$parties','$number','$sdate','$edate','$location','$btype','$scope','$bill','$approve')";

  if ($conn->query($sql)) {
?>
    <script>
      Swal.fire(
        'Success',
        'Data Inserted',
        'success'
      )
    </script>


<?php

  } else {
  }
}


?>