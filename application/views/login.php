<html>  
<head>  
    <title> login </title>    
    <link rel = "stylesheet" type = "text/css" href = "style.css">   

<header id="home">
<div class="container">
    <div class="brand">
        <center>
      <img src="https://vignette4.wikia.nocookie.net/joke-battles/images/4/41/Infinity_Logo_Gold.png/revision/latest?cb=20151230235753" style="width: 80px"/>
      <h2 style="color:white;">Golden Jewelry</h2>
  </center>
      </div>
 </div>
<style>
body{
    padding: 0;
    margin: 0;
    background: url(background.jpg)no-repeat;
    background-size: cover;
}
body{

  background-color: #000000;
}

/*login form css*/
.form{
    font-family: "Roboto", sans-serif;
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    opacity: 99%;
    max-width: 600px;
    margin: 200px auto 100px;
    padding: 10px 45px 30px 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
}
.form p{
    height:60px;
    font-size: 15px;
    padding: 1px;
    text-align: center;
}
.form input{
    outline: 0;
    border-radius: 10px;
    background: #F2F2F2;
    width: 80%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}
.form input:hover{
    background-color: #000000;
    transition: all 1s ease 0s;
}
.form input:focus{
    background-color: #D3F8F9;
    transition: all 1s ease 0s;
}
.form button{
    text-transform: uppercase;
    outline: 0;
    border-radius: 10px;
    background: #1ADBE5;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    cursor: pointer;
}
.form button:hover, .form button:active, .form button:focus{
    background-color: #06C5CF;
    transition: all 1s ease 0s;
}
.form .message{
    margin: 15px 0 0;
    color: #B3B3B3;
    font-size: 12px;
}
.form .message a{
    color: #06C5CF;
    text-decoration: none;
}
.section{
  padding-top: 80px;
  text-align: center;
  overflow: hidden;
}

.section-head h2{
  font-weight: 400;
  padding-bottom: 5px;
  text-transform: uppercase;
}

 </style>
        
  

    <div class="form">
        <img src="https://www.krishnajewellers.com/blog/wp-content/uploads/2021/07/RV_10-scaled.jpg" style="width: 400px;height:200"/>
        <form action="<?PHP echo base_url(). 'index.php/Users/loginuser' ?>" method = "POST" name="login">

    <p>Login</p>
    <form>
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button>login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
    </div>
</body>     
</html> 