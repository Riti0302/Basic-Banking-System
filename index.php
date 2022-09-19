<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body style="background-color:black">
    <h1 style="color: rgb(79, 3, 67)">Welcome to Sparks Bank</h1>
    <div id="container">
      

    <?php include 'spin.php'; ?>


    <style>
        .nav-link:hover {
            text-decoration: underline;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

<nav
        class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="
          font-family: candara;
          font-size: 18px;
          box-shadow: 0px 0px 10px 0px whitesmoke;
        "
      >
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <b>
            <ul class="navbar-nav">
              <li class="nav-item" style="margin-left: 15px">
                <img src="logo.png" width="50px" height="40px">
              </li>
              <li class="nav-item nav-links" style="margin-left: 15px">
               
                        <a class="nav-link active text-nowrap" aria-current="page" href="index.php">Home</a>
                        </li>
              <li class="nav-item" style="margin-left: 15px">
                <a class="nav-link text-nowrap" href="send_money.php">Transfer Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">View Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>



    <div class="container">
        <div class="row">
          <div class="col-6" align="center">
            <br><br><br>
            <div style="font-size: 60px; color:wheat; font-weight: bold;">THE SPARKS FOUNDATION BANK</div>
          </div>
          <div class="col-6"><img src="Digital-Bank.jpeg" alt="Snow" width="100%" /></div>
        </div>
      </div>
      <center style="margin: 60px 0px 20px 0px">
        <div
          class="container"
          style="
          background-color:plum;
            backdrop-filter: blur(10px);
            box-shadow: 3px 3px 15px rgb(244, 239, 239);
            border-radius: 30px;
            padding: 20px 0px 20px 0px;
          "
        >
          <h1 style="text-shadow: 2px 2px 2px whitesmoke; color: black">
            <b>Our Services</b>
          </h1>
          <div class="container" style="margin: 30px 0px 20px 0px">
            <div class="row">
              <div class="col-lg">
                <div
                  style="
                    background-color: #343a40;
                    color: white;
                    width: 90%;
                    border-radius: 30px;
                    box-shadow: 3px 3px 8px gray;
                    padding: 20px 10px 20px 10px;
                  "
                >
                  <i class="fas fa-users fa-7x"></i><br /><br />
                  <div style="color: white; font-size: 18px;">View all customers</div><br />
                  <a href="all_cust.php"
                    ><button type="button" class="btn btn-outline-light mybtn">
                      View Customers
                    </button></a
                  >
                  
                </div>
              </div>
              <div class="col-lg">
                <div
                  style="
                    background-color: #343a40;
                    color: white;
                    width: 90%;
                    border-radius: 30px;
                    box-shadow: 3px 3px 8px gray;
                    padding: 20px 10px 20px 10px;
                  "
                >
                  <i class="fas fa-comments-dollar fa-7x"></i><br /><br />
                  <div style="color: white; font-size: 18px;">Money transfer can be done</div><br />
                  <a href="send_money.php"
                    ><button type="button" class="btn btn-outline-light mybtn">
                      Transfer Money
                    </button></a
                  ><br />
                </div>
              </div>
              <div class="col-lg">
                <div
                  style="
                    background-color: #343a40;
                    color: white;
                    width: 90%;
                    border-radius: 30px;
                    box-shadow: 3px 3px 8px gray;
                    padding: 20px 10px 20px 10px;
                  "
                >
                  <i class="fas fa-coins fa-7x"></i><br /><br />
                  <div style="color: white; font-size: 18px;">Check Your Balance Here</div><br />
                  <a href="check_blc.php"
                    ><button type="button" class="btn btn-outline-light mybtn">
                      Check Balance
                    </button></a
                  ><br />
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </center>
<br><br>
<br><br><br><br>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
      ></script>
    </div>
    
<script>
  
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>
    <!-- Start Footer area -->   <footer class="text-center bg-light  footer">
    <p>&copy 2022. Made by <b>RITIKA MISHRA</b> <br>For the Project of</b> <b>THE SPARKS FOUNDATION</b></p>
  </footer>
  <!-- End Footer area -->

</div>
</body>

</html>