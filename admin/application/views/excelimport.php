  <?php if($this->session->flashdata('message')){?>
    <div align="center" class="alert alert-success">      
      <?php echo $this->session->flashdata('message')?>
    </div>
  <?php } ?>

  <br><br>


  <div align="center">
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      </style>

      <br>
      <br>
      <a href="<?php echo base_url(); ?>sample.csv"> Table </a>
      <br><br>

      <div style="width:80%; margin:0 auto;" align="center">
        <table id="t01">
          <tr>
           <th>Id</th>
           <th>Gold Type</th>
           <th>Weight</th>
           <th>Price</th>
           <th>Discount</th>
           <th>Description</th>
           <th>File</th>
           <th>Action</th>
           
         </tr>
         <?php
         if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
         foreach ($view_data as $key => $data) { 
          ?>
          <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['gold_type'] ?></td>
            <td><?php echo $data['weight'] ?></td>
            <td><?php echo $data['price'] ?></td>
            <td><?php echo $data['discount'] ?></td>
            <td><?php echo $data['description'] ?></td>
            <td><img src="<?php echo $data[base_url('uploads/images/'.$user->file)]; ?>" width="100" height="100"> </td>  
              
          </td>
        </tr>
      <?php } endif; ?>
    </table>
  </div>
</div>