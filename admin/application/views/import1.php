 <?php $this->load->view('templates/header');?>
 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>Import Data to Excel and CSV file using PhpSpreadsheet library in CodeIgniter and MySQL</h2>
      </div>
 
      <?php if(form_error('fileURL')) {?>    
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php print form_error('fileURL'); ?>
        </div>       
    <?php } ?>
    <div class="row padall border-bottom">  
      <div class="col-lg-12">
      <div class="float-right">  
          <a href="<?php print site_url();?>assets/uploads/sample-xlsx.xlsx" class="btn btn-info btn-sm"><i class="fa fa-file-excel"></i> Sample .XLSX</a>
          <a href="<?php print site_url();?>assets/uploads/sample-xls.xls" class="btn btn-info btn-sm"><i class="fa fa-file-excel"></i> Sample .XLS</a>
          <a href="<?php print site_url();?>assets/uploads/sample-csv.csv" class="btn btn-info btn-sm" target="_blank" ><i class="fa fa-file-csv"></i> Sample .CSV</a>
        </div> 
      </div>
      </div>
 
    <form action="<?php print site_url();?>contactus/save" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">
      <div class="row padall">
        <div class="col-lg-6 order-lg-1">
          
          <input type="file" class="custom-file-input" id="validatedCustomFile" name="fileURL">
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        </div>
        <div class="col-lg-6 order-lg-2">
          <button type="submit" name="import" class="float-right btn btn-primary">Import</button>
        </div>
      </div>
    </form>
    </div>
  </section>
 <?php $this->load->view('templates/footer');?>

<div class="table-responsive">
    <table class="table table-hover tablesorter">
        <thead>
            <tr>
                <th class="header">First Name</th>
                <th class="header">Last Name</th>                           
                <th class="header">Email</th>                      
                <th class="header">DOB</th>
                <th class="header">Contact Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($employeeInfo) && !empty($employeeInfo)) {
                foreach ($employeeInfo as $key => $element) {
                    ?>
                    <tr>
                        <td><?php echo $element['first_name']; ?></td>   
                        <td><?php echo $element['last_name']; ?></td> 
                        <td><?php echo $element['email']; ?></td>                       
                        <td><?php echo $element['dob']; ?></td>
                        <td><?php echo $element['contact_no']; ?></td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">There is no employee.</td>    
                </tr>
            <?php } ?>
 
        </tbody>
    </table>
</div>