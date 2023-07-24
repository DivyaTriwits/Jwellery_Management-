<html>  
<head>  
    <title> login </title>    
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>
<style>  
 body{
background: #04AA6D;
}
.form-style input{
border:0;
height:100px;
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
<img src="https://cdn1.jewelxy.com/live/img/business_product/N7R1b6C0gQ_20211031163738.jpg" style="width: 400px;height:300"/>
                      </div>
    <div id = "frm">  
        <h1>Login</h1>
         <form action="<?PHP echo base_url(). 'index.php/Users/loginuser23' ?>" method = "POST" name="login"> 
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