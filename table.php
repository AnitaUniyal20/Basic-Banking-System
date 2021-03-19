<?php
	
		$conn = mysqli_connect("localhost", "root", "", "all_citizens_bank");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User List</title>
    <style type="text/css">
        table, th,tr,td{
            border: 2px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            
            
        }
        table{
            width: 900px;
            height: 500px;
            color: #c4e6f2 ;
            font-size: 30px;
            border-color: black;
        }
        h1{
            text-align: center;
            color: black;
            font-size: 40px;
            margin-top:10px;


        }
        body{
            background-image: url("http://i2.wp.com/backgroundcheckall.com/wp-content/uploads/2017/12/plain-background-images-for-websites-design-10.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
        }
        th, td{
            text-align: center;
            /* border: 2px solid black; */
            
        }
        th{
            background-color: #d5e5f0 ;
            color: black ;
            border: 2px solid black;

        }
        a{
            font-size:20px;
        }
        tr{
            font-size:25px;
            color: #c4e6f2
            border: 2px white ;    
            background-color: #142a5c;
            
        }
        tr:hover{
            background-color: #030f2b;
        }
        

    </style>
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    <div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  </div>
    
    <h1><u>User List</u></h1>
    <table class="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT id, name, email, balance FROM user_list";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['balance']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

</body>
</html>