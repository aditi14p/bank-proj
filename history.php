<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <style>

    table{
      border-color: black;
      border: 2px;
      width: 100%;
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
    tr:hover {background-color: yellow;}
    button{
      border-radius: 5px;
      border:0;
      background:#235;
      color:#eee;
      line-height:37px;
      height:40px;
      width: 10%;
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
  <section class="bg">
  <center><h1>Transaction History</center></h1>
       <br>
    <table>
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transfer";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sr.no']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['date_time']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>
  </section>
  <br><br>
  <form action="index.php" method="post"/>
    <center><button name="submit" type="submit" id="myBtn">home</button></center>
  </form>
</body>
</html>
