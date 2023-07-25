  <!DOCTYPE html>
  <html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

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
/*form {
  display: flex; /* 2. display flex to the rescue */
  flex-direction: row;
}*/

@media only screen and (max-width: 450px) {
  .container {
    font-size: 14px;
  }
</style>

<div class="container">
  <h1 class="page-header text-center">Purchase Product</h1>
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h3>
        <span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span></a></span>
      </h3>
      <hr>
      <form method="POST" action="<?php echo base_url(); ?>index.php/Users/register1234">

        <div class="form-group col-md-6 mt-3">
         <label for="name">Name<span class="tx-danger">*</span></label>
         <input type="text" class="form-control" minlength="5" maxlength="11" name="name" placeholder="enter the name" onkeypress="return  allowOnlyLetters( event,this);" maximum =11 characters required />

       </div>
      <?php foreach ($result as $user) { ?>
                       <!-- <img src="<?php echo base_url('admin/uploads/images/' . $user->file); ?>" width="800" height="800" alt="Product Image"> -->
                       <?php } ?>

                        <div class="form-group">
  <label for="number">Gold Type<span class="tx-danger">*</span></label>
  <input type="text" class="form-control" placeholder="gold_type" name="readOnlyInput" id="gold_type" readonly value="<?php echo $user->gold_type; ?>" />
</div> 

         <!-- <div class="dropdown">  
         <label for="stocks">Choose a jwelery:</label>
         <select name="gold_type" id="gold_type" class="form-control input-lg">
          <?php
            foreach($stocks as $row)
            {
             echo '<option value="'.$row->id.'">'.$row->gold_type.'</option>';
           }
         ?>
       </select>
     </div> -->
     <br> 

             <!-- <label for="name">Payment Details<span class="tx-danger">*</span></label>
                                  <select class="form-control" name="payment_details" id="payment_details">
                                  <option selected="" disabled="">Select Payment Details</option>  
   

  <option value = "Credit Card">Credit Card   
  </option>  
  <option value = "paytm">paytm  
  </option>  
  <option value = "PhonePay">PhonePay  
  </option> 
  <option value = "Check">Check  
  </option>  
  </datalist>  
  </select>  
              

  </div>
  <div class="form-group">
  <label for="cardNumber">Card Number:</label>
    <input type="text" id="card_number" name="card_number" required>
  </div>
            
-->

<label>
  <span class="lname">Payment Type<span class="required">*</span></span>


<!-- <input type="text" class="form-control" name="subject" id="subject" required> -->

<select class="form-control" name="payment_details" id="payment_details" onchange="showPaymentFields()">
  <option selected="" disabled="">Select Payment Type</option>
  <option value="Credit Card">Credit Card</option>
  <option value="paytm">Paytm</option>
  <option value="PhonePay">PhonePay</option> <!-- Added this option for PhonePay -->
</select>
</label>


<div id="phonePayField" style="display: none;">
  <label>
    <span>PhonePay Number <span class="required">*</span></span>
    <input type="text" class="form-control" minlength="10" maxlength="10" id="phonepay_number" name="phonepay_number" onkeypress="return isNumber(event);" >
  </label>
</div>

<div id="creditCardField">
  <label>
    <span>Credit Card Number<span class="required">*</span></span>
    <input type="text" class="form-control" minlength="16" maxlength="16" id="credit_card_number" name="credit_card_number" onkeypress="return isNumber(event);" >
  </label>
</div>

<div id="paytmField" style="display: none;">
  <label>
    <span>Paytm Number<span class="required">*</span></span>
    <input type="text" class="form-control" minlength="10" maxlength="10" id="paytm_number" name="paytm_number" onkeypress="return isNumber(event);" >
  </label>
</div>
<div class="form-group">
  <label for="number">Date<span class="tx-danger">*</span></label>
   <input type="date" class="form-control" minlength="10" maxlength="10" placeholder="YYYY-DD-MM" reg="var pattern = /^(0[1-9]|[12]\d|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;"  name="date" id="date" onkeypress="return isNumber(event);" required /> 
  <!-- <input type="date" id="dateInput" min="" required> -->
</div>
 <!-- <div class="form-group">
  <label for="number">Cost(Rs)<span class="tx-danger">*</span></label>
  <input type="text" class="form-control" minlength="" maxlength="10" placeholder="Enter cost" name="cost" id="cost" onkeypress="return isNumber(event);" required />
</div>  -->
 <div class="form-group">
  <label for="number">Price(Rs)<span class="tx-danger">*</span></label>
  <input type="text" class="form-control" placeholder="price" name="readOnlyInput" id="price" readonly value="<?php echo $user->price; ?>" />

</div> 
 <!-- <div class="form-group">
  <label for="number">Weight(gm)<span class="tx-danger">*</span></label>
  <input type="text" class="form-control" minlength="" maxlength="11" placeholder="Enter weight" name="weight" id="weight" onkeypress="return isNumber(event);" required />
</div>  -->
 <div class="form-group">
  <label for="number">Weight(gm)<span class="tx-danger">*</span></label>
  <input type="text" class="form-control" minlength="11" maxlength="11" placeholder="Weight" name="weight" id="weight" readonly value="<?php echo $user->weight; ?>" />
</div> 

 <div class="form-group">
  <label for="number">Discount(%)<span class="tx-danger">*</span></label>
  <input type="text" class="form-control" minlength="11" maxlength="11" placeholder="discount" name="discount" id="discount" readonly value="<?php echo $user->discount; ?>" />
</div> 
<!-- <div class="form-group">
  <label>Discount(%):</label>
  <input type="text" class="form-control" minlength="" maxlength="3" placeholder="Enter discount" name="discount" id="discount" onkeypress="return isNumber(event);" required />
</div>  -->
          <!-- <div class="form-group">
            <label>Total:</label>
             <input type="text" class="form-control" minlength="4" maxlength="11" placeholder="Enter total" name="total" id="total" onkeypress="return isNumber(event);" required />
           </div> -->
           <button onclick="getPrice()">
            Get total
          </button>
          <br>
          <br>
          <input readonly name="total" placeholder="enter the total" 
          id="total"  required />


          
          <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>


          <script>
            function showPaymentFields() {
              var paymentType = document.getElementById("payment_details").value;
              var creditCardField = document.getElementById("creditCardField");
              var paytmField = document.getElementById("paytmField");
              var phonePayField = document.getElementById("phonePayField");

              if (paymentType === "Credit Card") {
                creditCardField.style.display = "block";
                paytmField.style.display = "none";
                phonePayField.style.display = "none";
              } else if (paymentType === "paytm") {
                creditCardField.style.display = "none";
                paytmField.style.display = "block";
                phonePayField.style.display = "none";
              } else if (paymentType === "PhonePay") {
                creditCardField.style.display = "none";
                paytmField.style.display = "none";
          phonePayField.style.display = "block"; // Show PhonePay fields when PhonePay is selected
        } else {
          creditCardField.style.display = "none";
          paytmField.style.display = "none";
          phonePayField.style.display = "none";
        }
      }
    </script>
    <script>
      function debugFormSubmit() {
        var form = document.querySelector('form');
        console.log('Form data:', new FormData(form));
      return true; // Return false to prevent form submission for debugging purposes
    }
  </script>
  <script>
        // Get the current date
    const currentDate = new Date();

        // Format the current date as YYYY-MM-DD
    const currentYear = currentDate.getFullYear();
    const currentMonth = String(currentDate.getMonth() + 1).padStart(2, "0");
    const currentDay = String(currentDate.getDate()).padStart(2, "0");
    const formattedDate = `${currentYear}-${currentMonth}-${currentDay}`;

        // Set the formatted date as the default value for the input field
    const dateInput = document.getElementById("date");
    dateInput.value = formattedDate;
  </script>
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
function isValidDate(date) {
  var temp = date.split('/');
  var d = new Date(temp[1] + '/' + temp[0] + '/' + temp[2]);
  return (d && (d.getMonth() + 1) == temp[1] && d.getDate() == Number(temp[0]) && d.getFullYear() == Number(temp[2]));


          alert(isValidDate('29/02/2015')); // it not exist ---> false
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
      function dateChecker()
      {
        var date1, string, re;
        re = new RegExp("\d{4}/\d{1,2}/\{1,2}");

        date1 = document.getElementById("visitDate").value; 
        if(date1.length == 0)
        {
          document.getElementById("showError").innerHTML = "Plz Insert Date";
          document.getElementById("showError").style.color = "red";
        }
        else if(date1.match(re))
        {
          document.getElementById("showError").innerHTML = "Ok";
          document.getElementById("showError").style.color = "red";
        }
        else
        {
          document.getElementById("showError").innerHTML = "It is not a date";
          document.getElementById("showError").style.color = "red";
        }

      }

          // Usage example
      var inputDate = "2023-07-11";
      if (isValidDate(inputDate)) {
        console.log("Valid date!");
      } else {
        console.log("Invalid date!");
      }  

    </script>
    <script>
    function getPrice() {         
 var numVal1 = Number(document.getElementById("price").value);
 var numVal2 = Number(document.getElementById("discount").value);

 var totalValue = numVal1 * ( (100-numVal2) / 100 )
 document.getElementById("total").value = totalValue.toFixed(2);
}  
</script>

    <!-- <script>
      getPrice = function() {
        var numVal1 = Number(document.getElementById("cost").value);
        var numVal2 = Number(document.getElementById("weight").value);
        var numVal3 = Number(document.getElementById("discount").value) / 100;
        var totalValue = (numVal1*numVal2) - (numVal1 * numVal3)
        document.getElementById("total").value = totalValue.toFixed(2);
      }


    </script> -->
    <script>
      $(document).ready(function(){
        $('#loginForm').bootstrapValidator({
          feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
            name: {
              message:'name is correct',

              validators: {
                notEmpty: {

                  message: 'The name is not 5 or 11 letters take',
                },
                stringLength: {
                  min: 5,
                  max: 11,
                }, 
              }
            },
            account_number: {

              validators: {
               notEmpty: {
                message: 'The account number is 11 number  required',
              },
              stringLength: {
                min: 11,
                max: 11,
              }, 
            }
          },
          weight: {

            validators: {
              notEmpty: {
                message: 'The  number minimum three numbers are required'
              }
            }
          },
          water: {

            validators: {
              notEmpty: {

                message: 'The water source is required'
              },

            }
          },


          phone: {

            validators: {
              notEmpty: {
                message: 'The phone number is required'
              },
              stringLength: {
                min: 10,
                max: 10,
                message: 'Enter a valid mobile number'
              },
            }
          },
          adhaar: {

            validators: {
              notEmpty: {
                message: 'The adhaar number is required'
              }
            }
          },

          village: {

            validators: {
              notEmpty: {
                message: 'The village is required'
              },
              stringLength: {
                min: 4,
                max: 10,
              }, 
            }
          },
          district: {

            validators: {
              notEmpty: {
                message: 'The district is required'
              }
            }
          },
          state: {

            validators: {
              notEmpty: {
                message: 'The state is required'
              }
            }
          },
          address: {

            validators: {
              notEmpty: {
                message: 'The address is required'
              },
              stringLength: {
                min: 4,
                max: 10,
              }, 
            }
          },
        }
      })
      });

    </script>       
