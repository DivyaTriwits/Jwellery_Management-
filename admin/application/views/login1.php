<html>  
<head>  
    <title> login </title>    
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>
<style> 
 
 body{
background: #0a0ae9;
}
.form-style input{
border:0;
height:200px;
border-radius:0;
border-bottom:1px solid #ebebeb;

}
.form-style input:focus{
border-bottom:1px solid #04AA6D;
box-shadow:none;
outline:0;
background-color:#ebebeb;
}
.sideline {
display: flex;
width: 200%;
justify-content: center;
align-items: center;
text-align: center;
color:#ccc;
}
button{
height:50px;
}
.sideline:before,
.sideline:after {
content: '';
border-top: 1px solid #ebebeb;
margin: 0 20px 0 0;
flex: 1 0 20px;
}
.sideline:after {
margin: 0 0 0 20px;
}

    input[type="text"]{
        padding-left:17px;
        padding-right:17px;
    }


</style>
        
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<div class="container">
<div class="row m-5 no-gutters shadow-lg">
<div class="col-md-6 d-none d-md-block">
<img src="https://zeevector.com/wp-content/uploads/Jewellery-Banner-Design-Background-1536x1491.png" style="width: 500px;height:400"/>
                      </div>
    <div id = "frm">  
        <h1>Login</h1>
         <form action="<?PHP echo base_url(). 'index.php/Users/loginuser23' ?>" method = "POST" name="login1"> 
            <p>  
                <label> Email: </label>  
                <input type = "text" id ="email" name  = "email" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>   
</body>     
</html> 