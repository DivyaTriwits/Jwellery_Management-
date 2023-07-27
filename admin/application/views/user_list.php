<!DOCTYPE html>
<html>
<head>
<title>Display records</title>
</head>
<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      Navbar
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>

  <div class="nav-links">
    <a>Stock</a>

    <a href="<?php echo base_url(); ?>index.php/Users/viewaddstock">
          Addstock</a>
      
    <a href="<?php echo base_url(); ?>index.php/Users/viewringlist" class="menu-item">Ring</a>
              <a href="<?php echo base_url(); ?>index.php/Users/viewnecklacelist" class="menu-item">Necklace</a>
              <a href="<?php echo base_url(); ?>index.php/Users/viewbangle123list" class="menu-item">Bangles</a>
              <a href="<?php echo base_url(); ?>index.php/Users/viewearinglist" class="menu-item">Earings</a>
             <a href="<?php echo base_url(); ?>index.php/Users/back">Back</a>
  </div>
</div>
<style>
{
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
  background-color: #D5CDCC;
}

.nav {
  height: 50px;
  width: 100%;
  background-color: #3482B5;
  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}

.nav > .nav-links > a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.nav > #nav-check {
  display: none;
}

@media (max-width:800px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
</style>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th {
  height: 70px;
}
</style>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CodeIgniter Simple CRUD Tutorial</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  <!-- <style>
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
 -->
<div class="container">
   <center>
  <h1 class="page-header text-center">Stock</h1>
</center> 
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <a href="<?php echo base_url(); ?>index.php/Users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> </a>

      <!-- <center>
      <a href="<?php echo base_url(); ?>index.php/Users/viewaddstock">
          <button style="height:50px;width:100px;background-color: #F08080">Addstock</button></a>
      <a href="<?php echo base_url(); ?>index.php/Users/back"><button style="height:50px;width:100px;background-color: #F08080">Back</button></a>
      </center> -->

      <form action="<?php echo base_url(); ?>index.php/uploadcsv/import" 
method="post" name="upload_excel" enctype="multipart/form-data">
                  <input type="file" name="file" id="file">
<button type="submit" id="submit" name="import" style="height:50px;width:100px;background-color: #F08080">Import</button>
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
            <!-- <th>Jewery_id</th> -->
            <th>Stock</th>
            <th>Action</th>
            
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
           <!--  <td><?php echo $user->jewelry_id; ?>
            </td> -->
             <td><?php echo $user->stock; ?>
            </td>
            
            
            
             <td><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" class="btn btn-success">

                <span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
            </tr>
          

          
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
