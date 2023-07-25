<!--FOR FCC-->
<script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

:root{
  --primary: #FC5404;
  --secondary: #eee;
  --dark: #323232;
  --bg: #202040;
}

body{
  background: var(--bg);
}

@media (max-height:600px) {
header{
  padding: 1rem ;
  display: flex; 
  justify-content: space-around;
  align-items: center;
  color: var(--secondary);
  }
}

#header-img{
  width:100px; 
}

header ul{
  display: flex;
  jutsify-content: space-between;
  align-items: center; 
}

a{
  color:#888;
  text-decoration: none;
}


header ul li{
  list-style-type: none;
  margin: 1rem;
  font-size: 18px;
  font-family: "Josefin Sans", Arial;
  cursor: pointer;
  
}

header .btns{
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.btn{
  margin:1rem;
  background: transparent;
  padding: 0.5rem 1.5rem;
  border-radius: 25px;
  border: none;
  font-size: 15px;
  outline: none;
  cursor: pointer;
  color: #3482B5;
  font-family: "Josefin Sans", Arial;
  
}

.btn-tertiary{
  background: var(--primary);
}

.btn-primary:hover{
  background: var(--secondary);
  color: var(--primary);
}

.btn-secondary:hover{
  background: var(--secondary);
  color: var(--primary);
}

.btn-tertiary:hover{
  background: var(--secondary);
  color: var(--primary);
}

.container {
  text-align: center;
  align-items: center;     
  transform: translate(-50%,-50%;)  
}

 h2 {
      font-size: 3rem;
      color:#fff;
      font-family:'Abel';      
}

img{
  size:10px;
}

.catalog{
  border-radius: 25px;
  border: none;
  font-size: 15px;
  outline: none;
  cursor: pointer;
  color: #fff;
  font-family: "Josefin Sans", Arial;
  margin:1rem;
  background: var(--primary);
}

.catalog:hover{
  background: var(--secondary);
  color: var(--primary);
}

#BLOG p{
  color: #fff;
  font-family: "Josefin Sans", Arial;
}

 h4{
      color: #888;
      font-size: 2rem;
      font-family:'abel';
    }

#name,
#email,
#submit{
  margin-right: 2%;
  font-size:15px;
  background-color:#fff;
  padding: 0.5rem 1.5rem;
  border-radius: 25px;  
}
    
#submit{
  background: var(--primary);
}      
 
#submit:hover:hover{
  background: var(--secondary);
  color: var(--primary);
}

.offer{
  font-family: 'Antic slab';
  color:#000;
  text-align:center;
  font-size:25px
}    

P{
  color: #000;
  font-family: "Josefin Sans", Arial;
}
.footer{
      margin: auto;
      overflow: hidden;
      background-color: transparent;
      padding: 20px 10px;
      border-top: 2px solid #d2d2d7;
      width: 100%;
    }

.footer{
      word-spacing:20px;
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
    }



</style>

<!--FOR GOOGLE FONTS-->
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Antic Slab' rel='stylesheet'>


<!--HEADER-SECTION-->
 <header id="header">
   
<!--FOR FONT-AWESOME ICONS-->
 <script src="https://kit.fontawesome.com/e405ed0319.js" crossorigin="anonymous"></script>
  
<!--LOGO-->
 <div class="logo">
   <img id="header-img"
src="https://cdn.dribbble.com/users/2007778/screenshots/14703451/media/a8cad900d9d652c3d1eb18a0e413ce38.jpg?compress=1&resize=400x300"
 alt="BB logo" align="top-left"/>
 </div>
  
<!--TOP NAV-->
    <nav id="nav-bar">
      <ul>
        <li><a class="nav-link" href="#HOME">HOME</a></li>

        <li><a href="<?php echo base_url(); ?>index.php/Users/view">Product Details</a></li>
         
        <!-- <li><a href="<?php echo base_url(); ?>index.php/Users/viewjewelry">ViewJewelrycategory</a></li> -->
        
        <!-- <li><a href="<?php echo base_url(); ?>index.php/Users/view1234">viewPurchase</a></li> -->

        

       
        <a href="<?php echo base_url(); ?>index.php/Users/logout">Logout</button></a>
</ul>
    </nav>
  
 
<!--BUTTONS-->
   
</header>
<!--END OF HEADER-SECTION-->


<!--FORM SECTION-->
<div class="container">
 <section id="HOME">
  <h2><i class="fas fa-quote-left"></i>        <b>JEWELLERY THAT IS AS
    UNIQUE AS YOU</b>
    <i class="fas fa-quote-right"></i>
   </h2>
</section>

<!--CATALOG-SECTION-->
     <section id="PORTFOLIO">
   
   
    <a href="<?php echo base_url(); ?>index.php/Users/viewstock1"><img src="https://i.ebayimg.com/images/g/poYAAOSw6EpcTWsp/s-l400.jpg" alt="earing image" width="500" height="300">Earings</a>
    

   <a href="<?php echo base_url(); ?>index.php/Users/viewstockring"><img src="https://images.pexels.com/photos/16438683/pexels-photo-16438683.jpeg?cs=srgb&dl=pexels-superlens-photography-16438683.jpg&fm=jpg"alt="Ring" width="500" height="300">Ring</a>
      <br>
 
      <br>
      
<!--VIDEO-->

</section> 
 
  <section id ="BLOG">
<p>We make beautiful jewellery which are accessible,affordable and forever wearable.
  As hundreds of women across the country, we came to find that there was a common dilemma women faced - picking between expensive jewellery for special occasion, and everyday jewellery that was of inferior quality and was not keeping pace with their changing lifestyle.We give women access to modern,fine jewellery,that was also wearable everyday. 
 </section>
  
<section id="SERVICES">
<h4>JOIN OUR MAILING LIST!</h4>
<h4>Be the first to be notified of new releases and sales</h4>
  </section>
    
<!--form-->  
  <section id="CONTACT">
<form id="form" action="https://www.freecodecamp.com/email-submit">
  
<input type="name" class="name" id="name" name="name" placeholder="Your full-Name here" required/>
  
<input type="email" class="input" id="email" name="email" placeholder="Your email here" required/>
  
<input type="submit" id="submit" class="button" value="Send!">  
 </form>
 </section>
<!--END OF FORM SECTION-->

<!--ABOUT US- SECTION-->
<section id ="ABOUT US"
<div class="offer">
<h1>SUBSCRIBE</h1>
<h4>And receive a 10% welcome discount for your first order</h4>
  <p>Our prices and policies are always transparent.<p>
<button class="btn btn-dark btn-lg"><i class="fab fa-google-play"></i> Google Play</button>
    <button class="btn btn-dark btn-lg"><i class="fab fa-youtube"></i> You Tube</button>
</div>


<!--FOOTER-->
<div class="footer">
    <a href="#home">Status</a>
    <a href="#contact">Privacy</a>
    <a href="#about">Terms</a>
    <a href="">Cookie Preferences</a>
    <a href="">Contact Us</a>
    <a href="">Change Region</a><br> 
</div>
</section>
<script>
// !! IMPORTANT README:

// You may add additional external JS and CSS as needed to complete the project, however the current external resource MUST remain in place for the tests to work. BABEL must also be left in place. 

/***********
INSTRUCTIONS:
  - Select the project you would 
    like to complete from the dropdown 
    menu.
  - Click the "RUN TESTS" button to
    run the tests against the blank 
    pen.
  - Click the "TESTS" button to see 
    the individual test cases. 
    (should all be failing at first)
  - Start coding! As you fulfill each
    test case, you will see them go   
    from red to green.
  - As you start to build out your 
    project, when tests are failing, 
    you should get helpful errors 
    along the way!
    ************/

// PLEASE NOTE: Adding global style rules using the * selector, or by adding rules to body {..} or html {..}, or to all elements within body or html, i.e. h1 {..}, has the potential to pollute the test suite's CSS. Try adding: * { color: red }, for a quick example!

// Once you have read the above messages, you can delete all comments. 

</script> 
    
  