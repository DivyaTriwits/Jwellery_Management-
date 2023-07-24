<div class="TaskView" > 
    <h2 class="heading" ><?php echo "ASGB_IN".str_pad($incidents->incidents_id, '4', '0', STR_PAD_LEFT);?></h2>
      <!-- <form action="<?php echo base_url('get_pdf_test/'.$incidents->id);?>" method="post" >       -->
    <div class="row">
           <div class="form-group col-md-4">
              <label for="email">Incidents ID</label>
              <input type="text" class="form-control" id="T_id" placeholder="Name" name="T_id" value="<?php echo "ASGB_IN".str_pad($incidents->incidents_id, '4', '0', STR_PAD_LEFT);?>" readonly>
            </div>
           <div class="form-group col-md-4">
              <label for="email">Incidents Name</label>
              <input type="text" class="form-control" id="Tname" placeholder="Name" name="Tname" value="<?php echo $incidents->incident_name;?>" readonly>
            </div>
            <div class="form-group col-md-4">
              <label for="pwd">Company Name</label>
              <input  type="text"class="form-control" id="Cname" name="Cname" value="<?php echo $incidents->company_name;?>"readonly>
            </div>
            <div class="form-group col-md-4">
              <label for="pwd">Project Name</label>
              <input type="text" class="form-control" id="Pname" name="Pname" value="<?php echo $incidents->project_name;?>" readonly>
            </div>