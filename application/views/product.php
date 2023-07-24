<!DOCTYPE html>
<html>
<head>
<style>
  .container {
    display: flex;
    align-items: center;
  }

  .container img {
    width: 500px;
    height: 500px;
  }

  .container .details {
    margin-left: 20px;
  }
</style>
</head>
<body>
  <div class="container">
    <img src="<?php echo base_url('admin/uploads/images/'.$user->file); ?>" width="500" height="500">
    <div class="details">
      <h1>Gold Type: <?php echo $user->gold_type; ?></h1>
      <h1>Weight: <?php echo $user->weight; ?></h1>
      <h1>Price: <?php echo $user->price; ?></h1>
    </div>
  </div>
   <a href="<?php echo base_url(); ?>index.php/Users/viewpurchase/<?php echo $user->id; ?>">
    <button style="height: 50px; width: 120px; background-color: #F08080">Purchase</button>
    <button style="height: 50px; width: 120px; background-color: #F08080">Purchase</button>
  </a>
</body>
</html>