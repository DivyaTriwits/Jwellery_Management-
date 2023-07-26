<!DOCTYPE html>
<html>
<head>
<title>Display records</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table {
  border-collapse: collapse;
  width: 400%;
}
th {
  height: 70px;
}
</style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CodeIgniter Simple CRUD Tutorial</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <style>
 table { 
  width: 1600px; 
  border-collapse: collapse; 
  margin:50px auto;
  }

/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
  }

th { 
  background: #3498db; 
  color: white; 
  font-weight: bold; 
  }

td, th { 
  padding: 10px; 
  border: 1px solid #ccc; 
  text-align: left; 
  font-size: 18px;
  }

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

  table { 
      width: 100%; 
  }

  /* Force table to not be like tables anymore */
  table, thead, tbody, th, td, tr { 
    display: block; 
  }
  
  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr { 
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  
  tr { border: 1px solid #ccc; }
  
  td { 
    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee; 
    position: relative;
    padding-left: 50%; 
  }

  td:before { 
    /* Now like a table header */
    position: absolute;
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%; 
    padding-right: 10px; 
    white-space: nowrap;
    /* Label the data */
    content: attr(data-column);

    color: #000;
    font-weight: bold;
  }

}
</style>

<div class="container">
  <center>
  <h1 class="page-header text-center">Stock</h1>
</center>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <a href="<?php echo base_url(); ?>index.php/Users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> </a>

      <center>
      <a href="<?php echo base_url(); ?>index.php/Users/viewbangles">
          <button style="height:50px;width:100px;background-color: #F08080">AddEarings</button></a>


     

      <a href="<?php echo base_url(); ?>index.php/Users/back"><button style="height:50px;width:100px;background-color: #F08080">Back</button></a>
      </center>

      
                 
        <thead>
          <table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <table class="center">
            <th>Id</th>
            <th>File</th>
             <th>Gold Type</th>
            <th>Weight(gm)</th>
            <th>Price(Rs)</th>
            <th>Discount(%)</th>
            <th>Description</th>
            
            
                      </tr>
                    </thead>
                    
                    <tbody>
                      
        <?php
        $cnt=1;
          foreach($result as $user) 
          {
            ?>
           
             
             <tr>
               <td><?php echo $cnt; ?></td>
               <td><img src="<?php echo base_url('uploads/images/'.$user->file); ?>" width="100" height="100"> </td>         
           <div> <td><?php echo $user->gold_type; ?></td></div>
            <td><?php echo $user->weight; ?></td>
            <td><?php echo $user->price; ?></td>
            <td><?php echo $user->discount; ?></td>
            <td><?php echo $user->description; ?>
            </td>
            
            
            
            

               
          

          
            <?php
             $cnt++;
          }
          ?>
             
            
          
          
          
</table>
</div>
</div>

              
             
            
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>
