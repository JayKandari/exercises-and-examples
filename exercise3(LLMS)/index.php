<?php 
$servername="localhost";
$username="root";
$password="root";
$dbname="LLMS";
// create connection

$conn =  new mysqli($servername, $username, $password, $dbname);
if ($conn->connec_error) {
  die ("connection failed:" . mysqli_connect_error());
}

$sql= "SELECT ID, Title, Description, Author, Quantity, Status FROM books_data";
    $result= $conn->query($sql);
     
?>

<html>
     <head>
       <title>LLMS</title>
       <h1>Limited Library Management System</h1>
     </head>
      <style>
        table, th , td { border: 1px solid black; text-align: center;}
          h1{ text-align: center; }
        
      </style>
     <body>
    <!--  <div>
        <form action="" method="post">
          Title: <input type="text" name="Title" >
          Description: <input type="text" name="Description" >
          Author: <input type="text" name="Author" >
          Quantity: <input type="number" name="Quantity" >
          Status: <input type="text" name="Status" >
                  <input type="submit" name="add_book" value="Add">
        </form>
      </div>
  -->
       <table style=" width: 100%;">
        <tr>
         <th>ID</th>
         <th>Title</th>
         <th>Description</th>
         <th>Author</th>
         <th>Quantity</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) {  ?>
        	<?php if ($row['Status']=='Active') { ?>
         

        <tr> 
         <td><?php echo $row['ID']; ?></td>
         <td><?php echo $row['Title']; ?></td>
         <td><?php echo $row['Description']; ?></td>
         <td><?php echo $row['Author']; ?></td>
         <td><?php echo $row['Quantity']; ?></td>
         </tr>
           
                    <?php } ?>
        
          
           <?php } ?>
        

       </table>

       
       
     </body>

    </html>

    <?php 
    $conn->close();  
    ?>