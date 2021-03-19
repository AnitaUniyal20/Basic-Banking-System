<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "all_citizens_bank");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Basic Banking System</title>
	<style type="text/css">
		body{
			background-image: url("https://previews.123rf.com/images/nathanael005/nathanael0051801/nathanael005180100153/93788656-a-spotlight-vector-illustration-on-plain-background-.jpg");
			background-repeat: no-repeat;
  			background-size: 1500px 700px;
        margin: 0;
        
		}
    	h1{
      font-size: 100px;
      text-align: center;
      color: #144a8c;
      text-shadow: 2px 2px #262626;
      font-family: 'candal',serif;
    }
    	button{
      font-size: 30px;
      padding: 10px 30px;
      justify-content: center;
      background-color: #071a3d;
      color: rgba(19, 135, 243, 0.74);
      text-decoration: none;


    }
    	h5{
      text-align: center;
      font-size: 40px;
      color: black;
      text-shadow: 1px 1px #f7f8f8;


    }
    	div{
      
      margin-left: auto;
      margin-right: auto;

    }
    .container{
      padding-left: 530px;
  

    }
    h3{
    	text-align: center;
    	font-size: 25px;
    	color: black;
      text-shadow: 1px 1px #3b5278;

    }
    a{
      color: white;
      font-size:20px;
      
    }
    button:hover{
      background-color: rgba(19, 135, 243, 0.74);
      text-align: center;
    }
    .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: #071a3d;
     color: white;
     text-align: center;
     margin-bottom:0px;
    
}

  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	
<?php include 'connection.php' ?>


  <div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  
  </div>

  <br><br>
	 <h1>ALL CITIZENS BANK</h1>
  <h5><i>Banking beyond the ordinary</i></h5>
  
  
  <div class="container">
    <button><a href="money.php"><i><b><u>SEND MONEY</u></b></i></a></button>
    <!--\ <button id="user"><a href="table.php">View user list</button>
      <button><a href="transaction.php">Transaction History</a></button> -->
  </div>
  
  <div class="footer">
  <marquee behavior="scroll" direction="left">
  <p>Made By|Anita Uniyal|The Sparks Foundation|</p></marquee>
</div>


</body>

	

</body>
</html>