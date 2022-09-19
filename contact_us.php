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

    <title>Contact Us- Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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


    <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you '.$name.' for contacting us!
        </div>
      </div>';
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops '.$name.'! Something went wrong!
        </div>
      </div>';
    }
}
}

?>



<style>
      .formin {
        border-radius: 20px;
        width: 380px;
        height: 50px;
        padding: 5px 5px 5px 15px;
      }
      .registrationcard {
        width: 700px;
        height: 500px;
        display: inline-block;
        border-radius: 10px;
        padding: 10px 15px;
        box-sizing: border-box;
        cursor: pointer;
        margin: 10px 15px;
        background-position: center;
        background-size: cover;
        background-color: #a86cd4;
        transition: transform 0.5;
      }

      .mybtn {
        margin-bottom: 10px;
        box-shadow: 2px 2px 10px black;
        border-radius: 30px;

        font-weight: bold;
        color: white;
      }

      .mybtn:active {
        background-color: black;
        color: white;
      }

      td {
        padding-top: 10px;
        padding-bottom: 10px;
      }
      a{
        color:antiquewhite
      }
    </style>

    <center>
      <div class="container" style="margin-top: 6%">
        <div
          class="registrationcard"
          style="backdrop-filter: blur(5px); border-radius: 5px"
        >
          <br />
          <div
            style="
              width: 80%;
              background-color: rgba(0, 0, 0, 0.5);
              padding: 5px 5px 5px 5px;
              border-radius: 30px;
              box-shadow: 2px 2px 10px gray;
            "
          >
            
                <h1 style=" color:white;">Contact Us</h1>
            </div>

            <div class="container"
                style=" backdrop-filter: blur(5px);  border-radius:5px; padding: 20px 20px 20px 20px; margin-top:50px; width:60%;">
                <form action="contact_us.php" method="post">
                    <input type="text" class="formin form-control" name="name" id="" placeholder="Name"><br><br>
                    <input type="email" class="formin form-control" name="email" id="" placeholder="Email"><br><br>
                    <textarea name="message" class="" style="border-radius:20px; padding: 5px 5px 5px 15px;"
                        placeholder="Enter your message" rows="4" cols="47" id=""></textarea>
                    <br><br><input class="btn mybtn btn-outline-light" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </center>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>