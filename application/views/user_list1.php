<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2>Images Side by Side</h2>
<p>How to create side-by-side images with the CSS float property:</p>
 <?php
        $cnt=1;
          foreach($result as $user) 
          {
            ?>
            <a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> </a>
<div class="row">
  <div class="column">
     <img src="<?php echo base_url('admin/uploads/images/'.$user->file); ?>"width="500" height="500"> <h1>Gold Type:-<?php echo $user->gold_type; ?> <h1>Weight:-<?php echo $user->weight; ?></h1>
              <h1>Price:-<?php echo $user->price; ?><h1><a href="<?php echo base_url(); ?>index.php/Users/viewpurchase"><button style="height:50px;width:120px;background-color: #F08080">purchase</button></a></li> 
  </div>
  <div class="column">
    <img src="img_forest.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="img_mountains.jpg" alt="Mountains" style="width:100%">
     <?php
             $cnt++;
          }
          ?>
  </div>
</div>

</body>
</html>
