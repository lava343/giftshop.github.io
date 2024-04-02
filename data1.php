<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
               @font-face{
  font-family:shasenem-wefayi;
  src:url('../fonts/rudawregular2.ttf');
}
#a{
    font-family:shasenem-wefayi;

}
    </style>
</head>
<body style="background-color: rgb(249,235,235)" id="a">
  <p style="position: absolute;left: 24%;top: 8%;font-family: shasenem-wefayi;font-size: 210%;color: rgb(0,128,128)">ئەو ڕەخنە و پێشنیارانەی لەلایەن بەکارهێنەرانەوە ئاراستە کراون</p>

<a href="web1.php" style="position: absolute;top: 10%;left: 5%"><button  style="font-size: 130%;font-weight: bolder;background-color:rgb(0,128,128);border:3px solid rgb(0,128,128);color: white;border-radius:12px;font-family: shasenem-wefayi">چوونەدەرەوە </button></a>
 

    
    <table  style="border:2px solid rgb(0,128,128);width:80%;position: absolute;left: 10%;top: 30%">
      <thead  style="color:white;border:2px solid rgb(0,128,128);background-color:rgb(0,128,128);font-size:25px;">
        <tr>
         <th>ژمارە</th>
        <th>تێبینی </th>
       <th >هەڵسەنگاندن</th>

        </tr>
      </thead>
    <tbody style="text-align: center;color:rgb(0,128,128);">
                    <?php
                    $servername = "localhost"; // Change this if your database is hosted elsewhere
    $username = "root";
    $password = "";
    $database = "web1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
                    $conn->query("SET NAMES  'utf8'");
$conn->query("SET CHARACTER SET utf8");
                    $query = mysqli_query($conn, "SELECT id, name, rating FROM ratee") or die(mysqli_error());
                    while($fetch = mysqli_fetch_array($query)){
                ?>
                <tr  style="font-size:20px;color:black;font-weight: bolder;">
                    <td><?php echo $fetch['id']?></td>
                    <td><?php echo $fetch['name']?></td>
                    <td><?php echo $fetch['rating']?></td>
                  
                
                </tr>
                <?php
                    
                  
                    
                    }
                ?>
            </tbody>
         
        </table>

</body>
</html>

