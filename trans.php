<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <style>
    table{
      border-color: black;
      border: 2px;
      width: 90%;
      font-family:"Times New Roman", Times, serif;
      font-size: 23px;
      text-align: center;
    }
    th{
      background-color: orange;
    }
    th, td {
      border: 1px solid black;
    }
      button{
        transition: 1.5s;
          border-radius: 5px;
        border:0;
        background:#235;
        color:#eee;
        line-height:37px;
        height:40px;
        width: 50%;
        cursor:pointer;
        font-size: 20px;
    		}
    	  button:hover{
    			background-color:#777E8B;
    			transform: scale(1.1);
    			color:white;
      }

    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
?>

        <center><h1>Transfer Money</h1></center>
        <br>

                    <table>
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Balance</th>
                            <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="details.php?id= <?php echo $rows['id'] ;?>"> <button type="button">Transact</button></a></td>
                    </tr>
                <?php
                    }
                ?>
                        </tbody>
                    </table>


</body>
</html>
