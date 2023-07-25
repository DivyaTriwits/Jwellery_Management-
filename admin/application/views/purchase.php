  <!DOCTYPE html>
  <html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<title>purchase</title>
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
  </head>
</body>
<style>
 font-family: Arial, Helvetica, sans-serif;
 background-color: black;
 <meta name="viewport" content="width=11">

 * {
  background: #555;
}

body{

  background-color: #3164ff;
}
.container {
  width: 90vw;
  max-width: 600px;
  padding: 2em 1.5em;
  background-color: #ffffff;
  margin: 1em auto;
  border-radius: 0.5em;
}
h4 {
  font-size: 1.5em;
}
.input-section {
  margin: 0.5em 0;
}
label,
.error-message {
  display: block;
  font-size: 1em;
}
label {
  margin-bottom: 0.5em;
  font-weight: 500;
}
.error-message {
  margin-top: 0.2em;
}
input,
button {
  display: block;
  outline: none;
  width: 100%;
  padding: 0.5em;
  border-radius: 0.3em;
}
input {
  padding: 1em 0.5em;
  border: 1.5px solid #d0d0d0;
}
button {
  font-size: 1em;
  background-color: #3164ff;
  border: none;
  color: #ffffff;
  padding: 0.8em 0;
  margin-top: 2em;
}
.required-color {
  color: #ff4747;
}
.error {
  border-color: #ff4747;
}
.valid {
  border-color: #37a137;
}
.hide {
  display: none;
}
@media only screen and (max-width: 450px) {
  .container {
    font-size: 14px;
  }
</style>

<div class="container">
 <h1 class="page-header text-center">Purchase</h1>
 <div class="row">
  <div class="col-sm-4 col-sm-offset-4">
   <h3>
    <span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
  </h3>
  <hr>
  <form method="POST" action="<?php echo base_url(); ?>index.php/Users/register1234">

    <div class="form-group">
     <label>Name:</label>
     <input type="text" name="name" placeholder="enter the name" onkeypress="return  allowOnlyLetters( event,this);" maximum =10 characters required />

   </div>
   
   <div class="dropdown">  
     <label for="jewelry_type">Jewelry Type</label>
     <input list="browsers" name="jewelry_type">
     <datalist id="browsers">
      <select>  
        <option value = "Ring">Ring  
        </option>  
        <option value = "Necklace">Necklace   
        </option>  
        <option value = "Bracelet">Bracelet  
        </option>  
        <option value = "Earrings">Earrings  
        </option> 
        <option value = "Bangle">Bangle  
        </option>  
      </datalist>  
    </select>  
    
  </div>
  <div class="form-group">
   <label>Account Number:</label>
   <input type="text" placeholder="Enter account number" name="account_number" id="account_number" onkeypress="return isNumber(event);" required />
 </div>
 <div class="form-group">
  <label>Date:</label>
  <input type="text" placeholder="Enter date" name="date" id="date" onkeypress="return isNumber(event);" required />
</div>
<div class="form-group">
  <label>Cost:</label>
  <input type="text" placeholder="Enter cost" name="price" id="price" onkeypress="return isNumber(event);" required />
</div>
<div class="form-group">
  <label>Weight:</label>
  <input type="text" placeholder="Enter weight" name="weight" id="weight" onkeypress="return isNumber(event);" required />
</div>
<div class="form-group">
  <label>Discount:</label>
  <input type="text" placeholder="Enter discount" name="discount" id="discount" onkeypress="return isNumber(event);" required />
</div>
<div class="form-group">
  <label>Total:</label>
  <input type="text" placeholder="Enter total" name="total" id="total" onkeypress="return isNumber(event);" required />
</div>

<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>



<script>
 function allowOnlyLetters(e, t)   
 {    
   if (window.event)    
   {    
    var charCode = window.event.keyCode;    
  }    
  else if (e)   
  {    
    var charCode = e.which;    
  }    
  else { return true; }    
  if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32))

   return true;    
 else  
 {       
  return false;    
}           
} 

function OnlyNumbers(e){
  var Asciicode=(e.which)? e.which: e.keyCode
  if(Asciicode> 31 && (Asciicode< 48 || Asciicode > 57))
    return false;
  return true;
} 

function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;


}

function OnlyNumbers(e){
  var Asciicode=(e.which)? e.which: e.keyCode
  if(Asciicode> 31 && (Asciicode< 48 || Asciicode > 57)){
    return false;
  }

  return true;
}
reg="^[789]\d{9}$"





function validate(){
  var password=document.getElementbyId("password");
  var conformPassword=document.getElementbyId("conformPassword");
  if(password!=conformPassword){
    alert("password did not match");
    return false;
  }
  return true;
}

function validateBirthdate() {
  	// get current date
 let currentDate = new Date();
  	// get input date
 let input = document.getElementById("birthdate").value;
 let birthdate = new Date(input);
  	// return if age is over 18
 let diff = new Date(currentDate - birthdate)
 let age = Math.abs(diff.getUTCFullYear() - 1970);
 alert(valid ? "Over 18" : "Under 18");
 
 return age >= 18;
}



function isUserName(val){
  let regUser=/^[a-zA-Z0-](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z])[a-zA-Z]$/;
  if(!regUser.test(val)){
    return 'Name can only use letters,maximum length is 8 characters';
  }
}

function validateEmail(email) {
 var re = /^([a-zA-Z0-9_\.\-])+\@@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
 return re.test(email);
}
function checkEmail() {
  var email = document.getElementById('txtEmail');
  var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
  }
}




</script>
</form>
</div>
</div>
</div>
</body>
</html>

