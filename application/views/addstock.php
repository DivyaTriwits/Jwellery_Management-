  <!DOCTYPE html>
  <html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Add julary</title>
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
  width: 1250px;
  max-width: 3000px;
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
form {
  display: flex; /* 2. display flex to the rescue */
  flex-direction: row;
}
.error-message {
  margin-top: 0.2em;
}
input,
button {
  display: block;
  outline: none;
  width: 30%;
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
  <h1 class="page-header text-center">Add Stock</h1>
  <div class="row" >
    <div class="col-sm-10 col-sm-offset-4" >
      <h3>Add Form
        <span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> </a></span>
      </h3>
      <hr>
      <form action="<?PHP echo base_url(). 'index.php/Users/uploadimage' ?>"
        method="post" enctype="multipart/form-data" name="addform">  
        


        <div class="form-group">
          <label>Gold Type:</label>
          <input type="text" name="gold_type" placeholder="enter the gold_type" id="gold_type" onkeypress="return allowOnlyLetters(event,this);" maximum =10 characters required />
        </div>
        
        <div class="form-group">
          <label>Weight:</label>
          <input type="text" placeholder="Enter weight" name="weight" id="weight" onkeypress="return isNumber(event);" required />
        </div>
        
        <div class="form-group">
          <label>Price:</label>
          <input type="text" class="form-control" name="price" 
          id="price" onkeypress="return isNumber(event);" required /> 
        </div>
        <label >Upload the file:</label>
        <input type='file' name='picture' id="picture" > <br/>
      </div>
      
      
      

      
      
      <br/>
      
      <div class="form-group">
        <input type='submit' > <br/>
      </div> 
      
      
    </form>

    
    

    
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

  function isPercentage(evt) {
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
function verifyFile()
{

 if(document.mainform.ATTACH_FILE.value.search(/\.(xls)$/) == -1) {
  alert("Invalid filename extension!");
  return false;
}
}
function getPrice() {         
 var numVal1 = Number(document.getElementById("price").value);
 var numVal2 = Number(document.getElementById("discount").value);

 var totalValue = numVal1 * ( (100-numVal2) / 100 )
 document.getElementById("total").value = totalValue.toFixed(2);
}  


</script>
<script>
  $(document).ready(function(){
    $('#changePassword').bootstrapValidator({
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
        old: {

          validators: {
            notEmpty: {
              message: 'The old password is required'
            }
          }
        },
        file: {

          validators: {
            notEmpty: {
              message: 'The file mustbe xlsx is required'
            }
          }
        },
      }
    })
  });
</script>
</form>
</div>
</div>
</div>
</body>
</html>

