
<style>
  /* all */
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  :root {
    --main-blue: #71b7e6;
    --main-purple: #9b59b6;
    --main-grey: #ccc;
    --sub-grey: #d9d9d9;
  }

  body {
    display: flex;
    height: 100vh;
    justify-content: center; /*center vertically */
    align-items: center; /* center horizontally */
    background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
    padding: 10px;
  }
  /* container and form */
  .container {
    max-width: 700px;
    width: 400%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
  }
  .container .title {
    font-size: 25px;
    font-weight: 500;
    position: relative;
  }

  .container .title::before {
    content: "";
    position: absolute;
    height: 3.5px;
    width: 200px;
    background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
    left: 0;
    bottom: 0;
  }

  .container form .user__details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
  }
  /* inside the form user details */
  form .user__details .input__box {
    width: calc(100% / 2 - 20px);
    margin-bottom: 15px;
  }

  .user__details .input__box .details {
    font-weight: 500;
    margin-bottom: 5px;
    display: block;
  }
  .user__details .input__box input {
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid var(--main-grey);
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
  }

  .user__details .input__box input:focus,
  .user__details .input__box input:valid {
    border-color: var(--main-purple);
  }

  /* inside the form gender details */

  form .gender__details .gender__title {
    font-size: 20px;
    font-weight: 500;
  }

  form .gender__details .category {
    display: flex;
    width: 80%;
    margin: 15px 0;
    justify-content: space-between;
  }

  .gender__details .category label {
    display: flex;
    align-items: center;
  }

  .gender__details .category .dot {
    height: 18px;
    width: 18px;
    background: var(--sub-grey);
    border-radius: 50%;
    margin: 10px;
    border: 5px solid transparent;
    transition: all 0.3s ease;
  }

  #dot-1:checked ~ .category .one,
  #dot-2:checked ~ .category .two,
  #dot-3:checked ~ .category .three {
    border-color: var(--sub-grey);
    background: var(--main-purple);
  }

  form input[type="radio"] {
    display: none;
  }

  /* submit button */
  form .button {
    height: 45px;
    margin: 45px 0;
  }

  form .button input {
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
    transition: all 0.3s ease;
  }

  form .button input:hover {
    background: linear-gradient(-135deg, var(--main-blue), var(--main-purple));
  }

  @media only screen and (max-width: 584px) {
    .container {
      max-width: 100%;
    }

    form .user__details .input__box {
      margin-bottom: 15px;
      width: 100%;
    }

    form .gender__details .category {
      width: 100%;
    }

    .container form .user__details {
      max-height: 300px;
      overflow-y: scroll;
    }

    .user__details::-webkit-scrollbar {
      width: 0;
    }
  }

</style>
<div class="container">
  <div class="title">Jewelry category</div>
  <form action="<?PHP echo base_url(). 'index.php/Users/uploadimage123' ?>"
    method="post" enctype="multipart/form-data" name="jewelrycategory">
    
    
    <div class="user__details">
      <div class="input__box">
        
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
    </div>
  </div>
  <div class="input__box">
    <span class="details">images</span>
    <input type='file' placeholder="Enter images" name='picture' id="picture" onkeypress="return" required /></div>
    
    <div class="input__box">
      <span class="details">Price</span>
      <input type="text" placeholder="Enter price" name="price" id="price" onkeypress="return isNumber(event);" required /></div>
      <div class="input__box">
        <span class="details">Discount</span>
        <input type="text" placeholder="Enter discount" name="discount" id="discount" onkeypress="return (event);" required />
      </div>
      <div class="input__box">
        <span class="details">Description</span>
        <input type="text" placeholder="Enter description" name="description" id="description" onkeypress="return allowOnlyLetters( event,this);" required />      
      </div>
      
      

      
      <div class="button">
        <input type="submit" value="Save">
      </div>
    </form>
  </div>
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
