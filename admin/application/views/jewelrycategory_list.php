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
th {
    background-color: blue;
    color: white;
} 
table.center {
  margin-left: auto; 
  margin-right: auto;
  }
  table {
  border-collapse: collapse;
  width: %;
  border: 1px solid #ddd;
}
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CodeIgniter Simple CRUD Tutorial</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</style>

  <style>
    table { 
  width: 1700px; 
  border-collapse: collapse; 
  margin:50px auto;
  }

/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
  }

th { 
  background: #3164ff; 
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
  <h1 class="page-header text-center">Jewelry Category</h1>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <a href="<?php echo base_url(); ?>index.php/Users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> </a>
</center>
<a href="<?php echo base_url(); ?>index.php/Users/back" style="padding-top: 40px;padding-left: 40px;padding-bottom: 40px;"><button style="height:50px;width:150px;background-color: #F08080">Back</button></a>
      

 <a href="<?php echo base_url(); ?>index.php/Users/viewjewelrycategory" style="padding-top: 40px;padding-left: 40px;padding-bottom: 40px;"><button style="height:50px;width:150px;background-color: #F08080">Jewelrycategory</button></a>
  <a href="<?php echo base_url(); ?>index.php/Users/viewgoldlist">Ring</a>
   <a href="<?php echo base_url(); ?>index.php/Users/viewsilverlist">necklace</a>
    <a href="<?php echo base_url(); ?>index.php/Users/viewdiamondlist">Bangle</a>
     
    

    
      
      
        <thead>
          <table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
            <th>Id</th>
            <th>Jewelry Type</th>
            <th>images</th>
            <th>Units</th>
             <th>Division</th>
            <th>Description</th>
            
                      </tr>
                    </thead>
                    
                    <tbody>
                      
 <?php

          foreach($result as $user)
            
          {
            ?>                <tr>
                          
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->jewelry_type; ?></td>
            <td><img src="<?php echo base_url('uploads/images/'.$user->file); ?>" width="100" height="100"> </td>
            <td><?php echo $user->units; ?></td>
            <td><?php echo $user->division;?></td>
            <td><?php echo $user->description;?></td>
            
            
            
             
             
            
          </tr>
            <?php
            
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
