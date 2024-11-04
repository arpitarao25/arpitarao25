<?php


include "dbcon.php";
      
$qry="select * from register";
      
$cnt = 1;
        
$result=mysqli_query($conn,$qry);

        
          
echo"<table class='table table-bordered table-hover'>
          
<thead>
                
<tr>
                  
<th>#</th>
                  
<th>Fullname</th>
                  
<th>Age</th>
                  
<th>Phone Number</th>
                  
<th>Email</th>
                                 
</tr>
              
</thead>";
              
            
while($row=mysqli_fetch_array($result))
{
            
            
echo"<tbody> 
               
                
<td>".$cnt."</div></td>
                
<td>".$row['f_name']."</div></td>
                
<td>".$row['age']."</div></td>
                
<td>".$row['p_no']."</div></td>
                
<td>".$row['email']."</div></td>
                      
                
              
</tbody>";
          
$cnt++;  
}
           
?>