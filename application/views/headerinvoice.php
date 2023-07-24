<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="container box">
            <br />
        <h3 align="center">Invoice List</h3><br />
        <br />  
        <?php
        if(isset($customer_data))
        {
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                <th>Invoice ID</th>
                <th>Customer Name</th>
                <th>Customer Phone Number</th>
                <th>Customer Billing Address</th>
                <th>Customer Shipping Address</th>
                <th>Computer Serial Number</th>
                <th>Computer Manufacturer</th>
                <th>Computer Model</th>
                <th>Computer Configuration</th>
                <th>Monthly Hire Rate</th>
                <th>Total Hire Rate</th>
                <th>View</th>
                <th>View in PDF</th>
            </tr>
         <?php
            foreach($customer_data->result() as $row)
            {
              echo '
                 <tr>
                 <td>'.$row->invoice_id.'</td>
                 <td>'.$row->cus_name.'</td>
                 <td>'.$row->cus_phone.'</td>
                 <td>'.$row->cus_badr.'</td>
                 <td>'.$row->cus_sadr.'</td>
                 <td>'.$row->com_sno.'</td>
                 <td>'.$row->com_make.'</td>
                 <td>'.$row->com_model.'</td>
                 <td>'.$row->com_config.'</td>
                 <td>'.$row->mohr.'</td>
                 <td>'.$row->tohr.'</td>
                 <td><a href="'.base_url(). 'htmltopdf/details/'.$row->invoice_id.'">View</a></td>
                 <td><a href="'.base_url(). 'htmltopdf/pdfdetails/'.$row->invoice_id.'">View in PDF</a></td>
                 </tr>
              ';
            }
          }
          ?>
        </table>    
    </div>
    <?php
    {
        if(isset($customer_details))
    {
       echo $customer_details;
    }
    }
    ?>
    </div>
    </body>
    </html>