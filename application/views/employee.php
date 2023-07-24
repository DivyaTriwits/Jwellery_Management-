    <style>
    {
      margin: 0;
      padding: 0;
      -webkit-box-sizing: border-box;
              box-sizing: border-box; }

    body {
      font-family: 'Montserrat', sans-serif; }

    .wrapper {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      width: 70%;
      margin: 0 auto;
      background: #EBEBEB;
      padding: 20px 30px;
      border-radius: 8px; }

    h1 {
      text-align: center; }

    .form-container {
      width: 100%;
      margin: 10px auto;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
          -ms-flex-direction: row;
              flex-direction: row; }

    .flex {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: space-evenly;
          -ms-flex-pack: space-evenly;
              justify-content: space-evenly;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center; }

    .flex-item {
      width: 40%;
      height: 100%; }

    label {
      display: block;
      font-size: 20px; }

    .field-container {
      padding: 5px 10px;
      margin: 10px 0 10px; }

    .required {
      color: red;
      font-size: 1.1em; }

    .field-container > input, .passkey-box > input {
      width: 100%;
      display: inline-block;
      padding: 7px 15px;
      font-size: 18px;
      margin: 5px 0 3px;
      border-radius: 3px;
      outline: none;
      border: none;
      border-bottom: 2px solid black; }

    .passkey-box {
      position: relative; }

    .passkey-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      -webkit-transform: translateY(-50%);
              transform: translateY(-50%);
      font-size: 1.2em; }

    .field-container > input:focus, .passkey-box > input:focus {
      border-bottom: 2px solid dodgerBlue; }

    .error-messg {
      display: block;
      color: red;
      font-weight: 300; }

    .center {
      text-align: center; }

    input[type='submit'] {
      padding: 10px 30px;
      font-size: 1.2em;
      background: dodgerBlue;
      border: 1px solid white;
      outline: none;
      color: white;
      border-radius: 3px; }

    @media screen and (max-width: 576px) {
      .wrapper {
        width: 100%;
        padding: 100px 10px 30px;
        border-radius: 0; }

      h1 {
        margin-top: 50px; }

      .flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column; }

      .flex-item {
        width: 100%; } }
    @media screen and (min-width: 576px) {
      .wrapper {
        width: 80%;
        padding: 100px 10px 30px;
        border-radius: 0; }

      .flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column; }

      .flex-item {
        width: 100%; } }
    @media screen and (min-width: 662px) {
      .wrapper {
        width: 70%;
        padding: 100px 10px 30px;
        border-radius: 0; }

      .flex-item {
        width: 90%;
        height: 100%; } }
    @media screen and (min-width: 768px) {
      .wrapper {
        width: 80%;
        padding: 30px 10px;
        border-radius: 0; }

      .flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
            -ms-flex-direction: row;
                flex-direction: row; }

      .flex-item {
        width: 40%;
        height: 100%; } }
    @media screen and (min-width: 992px) {
      .wrapper {
        max-width: 876px;
        padding: 30px 10px;
        border-radius: 0; } }

    /*# sourceMappingURL=style.css.map */
    </style>
    <!--Main wrapper-->
    <div class="wrapper">
        <h1>Employee Record</h1>

        <!--form container-->
        <div class="form-container">
        <form action="<?PHP echo base_url(). 'index.php/Users/uploadimage12' ?>"
          method="post" enctype="multipart/form-data" name="addform">  
            <!--flexbox and it's items-->
            <div class="flex">
                <div class="flex-item">
                <!--full name field-->
                    <div class="field-container">
                        <label for="name">Name: <span class="required">*</span></label>
                        <input type="text" name="name"   pattern="^([a-zA-Z]{2,} ?)+$" id="name" placeholder="Your  name" onkeypress="return  allowOnlyLetters( event,this);" maximum =10 characters required />
                        <span class="error-messg"></span>              
                    </div>
                
                 <!--email field-->
                    <div class="field-container">
                        <label for="phone_number">Phone Number: <span class="required">*</span></label>
                        <input type="phone_number" name="phone_number" id="phone_number" placeholder="Your phone_number" onkeypress="return            isNumber(event);" required="required" />
                        <span class="error-messg"></span>
                    </div>

                 <!--confirm email field-->
                    <div class="field-container">
                        <label for="age">Age: <span class="required">*</span></label>
                        <input type="age" name="age" id="age" placeholder="age" onkeypress="return  isNumber(event);" required="required" />
                        <span class="error-messg"></span>
                    </div>
                    
                </div>
                <div class="flex-item">
                    <!--contact no field-->
                    <div class="field-container">
                        <label for="place">Place: <span class="required">*</span></label>
                        <input type="place" name="place" id="place" placeholder="place" onkeypress="return allowOnlyLetters( event,this);" required="required" />
                        <span class="error-messg"></span>
                    </div>

                    <!--password field-->
                    <div class="field-container">
                        <label for="file">Upload the file:: <span class="required">*</span></label>
                        <div class="passkey-box">
                        <input type='file' name='picture' id="picture" > <br/>
        
                        </div>

                     </div>
                    
                </div>
            </div>
            <!--Submit button-->
            <div class="center"><input type="submit" value="Save"></div>
        </form>
        </div>

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
                
        

    <script>
    //full name validation
    document.querySelector('#full-name').addEventListener('blur',(event)=>{
        let err = document.querySelector(".error-messg");
        err.innerText = "";
        try{
            //if field empty
            if(event.target.validity.valueMissing)
                throw event.target.validationMessage;
            
            else if(event.target.validity.patternMismatch){
                //event.target.setCustomValidity("Enter A valid name");
                throw "Please enter a valid name!";
            }

            else{
                event.target.style.borderBottomColor = 'green';
                err.innerText = "";
            }
        }

        catch(messg){
            err.innerText = messg;
        }
        
    });


    //to validate email
    document.querySelector('#email').addEventListener('blur',(event)=>{
        validateEmail(event);
    });

    //to validate confirm email
    document.querySelector('#confirm-email').addEventListener('blur',(event)=>{
        validateEmail(event);
        validateConfirmation(document.querySelector('#email'),event.target);
    });


    //function for email and confirm email validation
    function validateEmail(event){
        let error = event.target.nextElementSibling;
        error.innerText = "";
        try{
            
            if(event.target.validity.valueMissing)
                throw event.target.validationMessage;

            else if(!event.target.validity.valid || event.target.value.slice(-4)!='.com')
                throw "Please enter a valid email.";

            else
                event.target.style.borderBottom = '2px solid green';
             
        }

        
        catch(messg){
            error.innerText = messg;
        }

    }

    //for validating confirm 
    function validateConfirmation(el,cEl){
        if(el.value == cEl.value){
            cEl.nextElementSibling.innerText = "";
            document.querySelector('[type="submit"]').removeAttribute('disabled');
        }

        else{
            cEl.nextElementSibling.innerText = "Confirm email not mached!";
            document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
        }
    }


    //validating contact number
    document.querySelector('#contact-no').addEventListener('blur',function(event){
        let error = event.target.nextElementSibling ;
        error.innerText = "";
        try{
            if(event.target.validity.valueMissing)
                throw event.target.validationMessage;

            else if(event.target.value.length!=10)
                throw "Please enter 10 digit mobile number.";

            else    
                event.target.style.borderBottom = "2px solid green";
        }
        catch(messg){
            error.innerText = messg;
        }
    });


    //password show/hide functionality
    document.querySelector('.passkey-icon').addEventListener('click',displayPassword);
    document.querySelectorAll('.passkey-icon')[1].addEventListener('click',displayPassword);

    function displayPassword(event){
        if(event.target.parentNode.getAttribute('data-display-passkey')=='off'){
            event.target.parentNode.setAttribute('data-display-passkey','on');
            event.target.setAttribute('class','fas fa-eye-slash');
            event.target.parentElement.previousSibling.previousSibling.setAttribute('type','text');
            console.log(event.target.parentElement.previousSibling.previousSibling);
        }
        else{
            event.target.parentNode.setAttribute('data-display-passkey','off');
            event.target.setAttribute('class','fas fa-eye');
            event.target.parentElement.previousSibling.previousSibling.setAttribute('type','password');
        }
    }


    //adding to password field
    document.querySelector("#passkey").addEventListener('blur',validatePassword);

    //password validation
    function validatePassword(event){
        let error = event.target.parentElement.nextElementSibling;
        error.innerText = "";
        try{
            console.log((event.target.value));
            console.log();
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;

        else if(!(/[0-9]{4,}/g).test(event.target.value)){
            throw "There must be atleast 4 digit.";
        }

        else if(event.target.value.length<8 || event.target.value.length>15){
            
            throw "Password must be 8 to 15 charaters.";
        }

        else{
            document.querySelector('[type="submit"]').removeAttribute('disabled');
            event.target.style.borderBottom = "2px solid green";
        }

        }
        catch(messg){
            document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
            error.innerText = messg;
        }
        console.log(error);
    }


    //confirm password validation
    document.querySelector('#confirm-passkey').addEventListener('blur',function(event){
        try{
            var error = document.querySelectorAll('.error-messg')[5];
            error.innerText = "";
            if(event.target.validity.valueMissing)
                throw event.target.validationMessage;

            else if(document.querySelector('#passkey').value != event.target.value){
                throw "Password not matched!";
            }

            else{
                document.querySelector('[type="submit"]').removeAttribute('disabled');
                event.target.style.borderBottom = "2px solid green";
            }
        }

        catch(messg){
            document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
            error.innerText = messg;
        }
    });

    console.log(document.querySelector('#email'));
    </script>

