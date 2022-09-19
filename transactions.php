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
    <title>Contact us - Sparks Bank</title>
</head>

<body style="background-color:#bf1366;">
    <?php include 'spin.php'; ?>

    <style>
        .nav-link:hover {
            text-decoration: underline;
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



    <style>
        th,
        td {
            text-align: center;
        }
    </style>

    <center>



        <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; ">
            <div
                style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">All Customers</h1>
            </div>
            <?php

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection not established: ".mysqli_connect_error());
    }else{
    
        $sql = "SELECT * FROM `transactions`";
        $result = mysqli_query($conn, $sql);
?>
            <table class="table table-dark" style="margin-top: 30px;">
                <thead>
                    <tr>
                        <th scope="col">Sender</th>
                        <th scope="col">Reciever</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <style>
                    .mybtn {

                        box-shadow: 2px 2px 10px black;
                        border-radius: 30px;
                        font-weight: bold;
                        background-color: lightgreen;
                        color: green;
                    }

                    .mybtn:active {
                        background-color: green;
                        color: lightgreen;
                    }
                </style>
                <?php
echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
        if(!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount'])))
            {echo    '
            <tr>
              <td>'.$row['sender'].'</td>
              <td>'.$row['receiver'].'</td>
              <td>'.$row['amount'].'</td>
              <td>'; ?> <?php if($row['status'] == "succeed"){echo '<b><p style="color:green;">SUCCESS</p></b>';}else{echo '<b><p style="color:red;">FAILED</p></b>';} ?>
              <?php echo '</td>
              </tr>';}
    }
    
    }
    echo "</tbody>";
?>
        </div>
    </center>

    
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>
</html>
