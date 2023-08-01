<style>
html,
body {
  height: 100%;
}

a {
  text-decoration: none;
  color: #fff;
}

*:focus {
  outline: none;
}

.container {
  height: 100%;
  background: url(https://jaisanjayjewellers.com/wp-content/uploads/2022/07/6-MObile-Jewellery-Banner-Copy.jpg) no-repeat center center fixed;
  background-size: cover;
}

.color-layer {
  position: absolute;
  top: 50%;
  left: 50%;
  padding: 0;
  background-color: rgba(0, 0, 0, 0.5);
  height: 600px;
  width: 450px;
  margin: -300px -225px;
  box-shadow: 0px 0px 3px #291001;
}

.color-layer h1 {
  font-family: 'Kaushan Script', cursive;
  color: #fff;
  font-size: 70px;
  text-align: center;
  padding: 10px 0;
  margin-top: 50px;
  text-shadow: 0px 0px 2px #fff;
}

form {
  padding-top: 10px;
}

.form-container {
  margin: 0 50px;
  padding: 0;
  box-sizing: border-box;
  color: #fff;
  font-family: 'Quicksand';
  font-weight: 300;
  font-size: 15px;
  font-weight:500;
}

.form-container span {
  padding-top: 20px;
  display: inline-block;
  font-size: 12px;
  text-align: center;
  width: 100%;
}

label {
  display: block;
  margin-top: 40px;
  color: #AD916E;
}

.input {
  display: block;
  width: 100%;
  height: 40px;
  margin: 0 auto;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #EDCDB6;
  background-color: rgba(0, 0, 0, 0);
  margin: 10px 0;
  color: #f0f0f0;
  font-size: 18px;
  letter-spacing: 2px;
  padding: 0 10px;
}

.button {
  margin-top: 40px;
  width: 100%;
  height: 50px;
  background-color: #852A0A;
  border: none;
  color: #FFDDC4;
  font-size: 18px;
  font-family: 'Quicksand';
  letter-spacing: 2px;
  border-radius: 8px;
}

@media only screen and (max-width : 320px) {
  .color-layer{
    top:0;
    left:0;
    margin:0;
    width:100%;
    height:100%;
    
  }
  
  .color-layer h1 {
    
    text-align:center;
    width:250px;
    margin:0 auto;
    font-size: 45px;
    padding: 20px 0;
    margin-top: 55px;
  }
  
  .content{
    position:absolute;
    top:50%;
    left:50%;
    width:320px;
    height:500px;
    margin-top:-290px;
    margin-left:-160px;
  }
  
  .form-container{
    font-size:15px;
    margin:0 15px;
    
  }
  
  .input{
    border-bottom: 1px solid #EDCDB6;
    font-size:20px;
  }
  
  .button{
    height:40px;
    font-size:15px;
  }
  label{
    margin-top:20px;
  }
}
</style>
 <div id = "frm">  
        
          
<div class="container">
  <div class="color-layer">
    <div class="content">
      <h1>Login Page</h1>
      <form action="<?PHP echo base_url(). 'index.php/Users/loginuser23' ?>" method = "POST" name="login1"> 
            
        <div class='form-container'>
          <label for='email'>Email:  :</label>
          <input type="text" class='input' id="email" name  = "email">
          <label for='password'>Password :</label>
          <input type="password" class='input' id="password" name  = "password"> 
          <input type="submit" value="Login" class='button'>
        </div>
      </form>
  </div>
  </div>
</div>