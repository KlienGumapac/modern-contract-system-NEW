<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="css/fake.css" type="text/css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <button onclick="popUp()"><i class="fa-solid fa-arrow-left"></i></button>
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
              <label>Client/Owner:</label>
              <input type="text" name="client" placeholder="Enter Client.." required>
            </div>

            <div class="input-field">
              <label>Contractor:</label>
              <input type="text" name="contractor" placeholder="Enter Contractor.." required>
            </div>

            <div class="input-field">
              <label>Scope of Work:</label>
              <input type="text" name="scope" placeholder="Enter Scope of Work.." required>
            </div>

            <div class="input-field">
              <label>Project Location:</label>
              <input type="text" name="location" placeholder="Enter Project Location.." required>
            </div>

            <div class="input-field">
              <label>Project Start Date:</label>
              <input type="date" name="startdate" placeholder="Enter Start Date.." required>
            </div>

          </div>
        </div>

        <div class="deatails personal">
          <span class="title">More Details</span>

          <div class="fields">
            <div class="input-field">
              <label>Total Price:</label>
              <input type="number" name="price" placeholder="Enter total Price.." required>
            </div>

            <div class="input-field">
              <label>Payment Schedule:</label>
              <input type="date" name="payment" placeholder="Enter Payment Schedule.." required>
            </div>

            <div class="input-field">
              <label>Permit and Approval:</label>
              <input type="text" name="permit" placeholder="Enter Description.." required>
            </div>
          </div>

          <button class="nextBtn">
            <span class="btnText">Next</span>
            <i class="fa fa-solid fa-right-long"></i>
          </button>

        </div>
      </div>

      <div class="form second">
        <div class="deatails address">
          <span class="title">Billing Adress</span>

          <div class="fields">
            <div class="input-field">
              <label>Full Name:</label>
              <input type="text" name="name" placeholder="Enter Name.." required>
            </div>

            <div class="input-field">
              <label>Name On Card:</label>
              <input type="text" name="cardname" placeholder="Enter Card Name.." required>
            </div>

            <div class="input-field">
              <label>Address:</label>
              <input type="text" name="address" placeholder="Enter Address.." required>
            </div>

            <div class="input-field">
              <label>Card Number:</label>
              <input type="text" name="cardnum" placeholder="1111-2222-3333-4444." required>
            </div>

            <div class="input-field">
              <label>City:</label>
              <input type="text" name="startdate" placeholder="Enter City.." required>
            </div>

            <div class="input-field">
              <label>Exp Month:</label>
              <input type="date" name="expmonth" placeholder="Enter Exp Month.." required>
            </div>

          </div>
        </div>

        <div class="deatails personal">
          <span class="title">Payment</span>

          <div class="fields">
            <div class="input-field">
              <label>State:</label>
              <input type="text" name="state" placeholder="Enter State.." required>
            </div>

            <div class="input-field">
              <label>Zip Code:</label>
              <input type="number" name="zipcode" placeholder="123 456.." required>
            </div>

            <div class="input-field">
              <label>Exp Year:</label>
              <input type="date" name="expyear" placeholder="2022.." required>
            </div>

            <div class="input-field">
              <label>CCV:</label>
              <input type="number" name="ccv" placeholder="2022.." required>
            </div>

            <div class="input-field">
              <label>Enter Pin:</label>
              <input type="password" name="pin" placeholder="1122.." required>
            </div>

            <div class="input-field">
              <label>Amount:</label>
              <input type="number" name="amount" placeholder="Enter Amount.." required>
            </div>

          </div>

          <div class="buttons">
            <div class="backBtn">
              <i class="fa fa-solid fa-right-long"></i>
              <span class="btnText">Back</span>
            </div>

            <button type="submit" name="submit" class="nextBtn">
              <span class="btnText">Submit</span>
              <i class="fa-solid fa-check"></i>
            </button>
          </div>

        </div>
      </div>
    </form>
  </div>
  <script src="js/button.js"></script>
    
</body>
</html>