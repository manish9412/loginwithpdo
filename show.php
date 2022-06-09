<?php 
 include("includes/connection.php"); 
 

   // $record = mysqli_num_rows(mysqli_query($conn,"select id,email,password from login_data"));
 

  $sql=$conn->prepare("SELECT id,email  from login_data");
  $result = $sql->execute();
   
   
   
 echo ' <br><tr> 
              <th>Sr.No</th> 
              <th>Email</th> 
              <th>Edit</th> 
              <th>Delete</th> 
              </tr><br>'; 
   
 $i=1; 

 while($data=$sql->fetch()) 
 { 
              echo ' 
             
      <tr> 
         <td>'.$i.'</td>  
         <td>'.$data['email'].'</td>  
         <td><a href="#" class="btn btn-success">Edit</a></td> 
         <td><a href="page1.php?del_id='.$data['id'].'" class="btn btn-danger" >Delete</a></td> 
       </tr><br>'; 
               
               $i++; 
 } 
   
 ?> 
