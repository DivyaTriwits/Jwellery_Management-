<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
  
     
</head>
<body>
  
  <style>
      {
  border: 0;
  box-sizing: content-box;
  color: inherit;
  font-family: inherit;
  font-size: inherit;
  font-style: inherit;
  font-weight: inherit;
  line-height: inherit;
  list-style: none;
  margin: 0;
  padding: 0;
  text-decoration: none;
  vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 100%; table-layout: fixed; width: 200%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 105%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
  border-width: 1px;
  display: block;
  font-size: .8rem;
  padding: 0.25em 0.5em;  
  float: left;
  text-align: center;
  width: 0.6em;
}

.add, .cut
{
  background: #9AF;
  box-shadow: 0 1px 2px rgba(0,0,0,0.2);
  background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
  background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
  border-radius: 0.5em;
  border-color: #0076A3;
  color: #FFF;
  cursor: pointer;
  font-weight: bold;
  text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
  * { -webkit-print-color-adjust: exact; }
  html { background: none; padding: 0; }
  body { box-shadow: none; margin: 0; }
  span:empty { display: none; }
  .add, .cut { display: none; }
}

@page { margin: 0; }
    </style>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table {
  border-collapse: collapse;
  width: 200%;
}

th {
  height: 100px;
}
td {
  height: 80px;
}

</style>
 
<nav class="navbar navbar-expand-sm navbar-dark header">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
     
    </a>
    <span class="float-end pt-2">
        <button type="button" onclick="generatePDF()" class="btn-sm btn-danger pull-right">Export to PDF</button>
      </span>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" id="divToExport">
      <div class="border border-2 rounded p-3 my-3">
        
        <header>
      <h1>Jewellery Management system invoice</h1>
      <address contenteditable>
        
        
      
      </head>

          <?php
  $cnt=1;

          foreach($result as $user)
            
          {
            ?>                         
                               
            
        
         <?php
             $cnt++;
          }
          ?>
        <h2>Date:- <td><?php echo $user->date; ?></td></h2>
        <h2>Name:-<td><?php echo $user->name; ?></td></h2>
        <h2>InvoiceNo:-<td><?php echo $user->id; ?></td></h2>

         
      </address>
      <!-- <span><img alt="" src="https://cdn2.vectorstock.com/i/1000x1000/18/21/jewelry-logo-design-template-ring-icon-vector-36381821.jpg" width="200" height="200"><input type="file" accept="image/*"></span> -->
    </header>
      
      <br>
      <table class="inventory">
        <thead>
          <tr>
            <th>Jewelry Type</th>
            <th>Cost(Rs)</th>
            <th>Weight(gm)</th>
            <th>Discount(%)</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          
                  
                    
                   
                      
 <?php
  $cnt=1;

          foreach($result as $user)
            
          {
            ?>                         
             <tr>                           
            
            <td><?php echo $user->gold_type; ?></td>
            
            <td><?php echo $user->price; ?></td>
            <td><?php echo $user->weight; ?></td>
            <td><?php echo $user->discount; ?></td>
            <td><?php echo $user->total; ?></td>
            </tr>
             
             
            
          
              <?php
             $cnt++;
          }
          ?>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
<script type="text/javascript">
  function generatePDF() {
        
        // Choose the element id which you want to export.
        var element = document.getElementById('divToExport');
        element.style.width = '700px';
        element.style.height = '900px';
        var opt = {
            margin:       0.5,
            filename:     'purchaseinvoice.pdf',
            image:        { type: 'jpeg', quality: 1 },
            html2canvas:  { scale: 1 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait',precision: '12' }
          };
        
        // choose the element and pass it to html2pdf() function and call the save() on it to save as pdf.
        html2pdf().set(opt).from(element).save();
      }
</script>
</body>
</html>

