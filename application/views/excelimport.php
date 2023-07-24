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
            <th>SKU</th>
            <th>Product Name</th>
            <th>Product Desc</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Get Total</th>
            <th>File</th>
            
  </tr>
<?php
if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
foreach ($view_data as $key => $data) { 
?>
  <tr>
    <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['sku'] ?></td>
            <td><?php echo $data['product_name'] ?></td>
            <td><?php echo $data['product_desc'] ?></td>
            <td><?php echo $data['qty'] ?></td>
            <td><?php echo $data['price'] ?></td>
            <td><?php echo $data['discount'] ?></td>
            <td><?php echo $data['price']-($data['discount']*$data['price'])/100 ?></td>
            <td><?php echo $data['file'] ?></td>
            
          </tr>
  <?php } endif; ?>
</table>
</div>
</div>