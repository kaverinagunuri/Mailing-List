<?php 
 include 'connect.php';
 ?>
<html>
    <head>
        <title>Mailing List</title>
    </head>
    <body>
        <h2>Mailing List</h2>
        <p>Send To</p>
        <form action="send.php" method="get">
           <?php 
           $mailcount=0;
           $namecount=0;
           $Query="SELECT * FROM Mail_Form WHERE Send=1";
           $get=  mysqli_query($link, $Query);
           while($row=  mysqli_fetch_assoc($get))
           {
               //echo $row['Email']."<br/>";
               echo "<input type='checkbox' name='mail_".$mailcount++."'value='".$row['Email']."' CHECKED >".$row['FirstName']." ".$row['LastName']."(".$row['Email'].")
                       <input type='hidden' name='name_".$namecount++."' value='".$row['FirstName']."'><br>";
              //echo "<input type='hidden' name='name_'".$namecount++."' value='".$row['FirstName'].">";    
               
           }
           ?>
            <p>Message:<br/>
                <textarea name="message"></textarea>
            </p>
            <input type="submit" name="submit" value="submit"/>
        </form>
    </body>
</html>