<header id="home">
<div class="container">
    <div class="brand">
      <img src="https://vignette4.wikia.nocookie.net/joke-battles/images/4/41/Infinity_Logo_Gold.png/revision/latest?cb=20151230235753" style="width: 40px"/>
      <p> Golden Jewelry</p>
    </div>
 </div><!-- / container -->
  <style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500');

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: 'Montserrat', sans-serif;
  overflow-y: scroll;
  overflow-x: hidden;
}

h1, h2, h3{
  letter-spacing: 2px;
}

header{
  background: #000;
  color: #fff;
}

.container{
  max-width: 960px;
  margin: 0 auto;
}

.brand{
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 40px;
}

.brand img{
  margin-bottom: 20px;
}

nav.nav-sticky{
  width: 100%;
  position: fixed;
  top: 0;
  background: #222;
  padding-top: 8px;
  padding-bottom: 8px;
  z-index: 10;
  transition: all 1s;
}

nav ul{
  list-style: none;
  text-align: center;
  padding: 10px;
  border: 1px solid #222;
}

nav ul li a.active{
  color: #fcbe32;
}

nav ul li{
  display: inline;
  padding: 20px;
}

nav ul li a{
  text-decoration: none;
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1px;
  color: #999;
}

nav ul li a:hover{
  color: #fcbe32;
}

/*========== GENERAL ==========*/

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

.section-head p{
  color: #fcbe32;
  font-weight: 500;
  letter-spacing: 2px;
  margin-bottom: 20px;
}

.list-head h3{
  font-weight: 300;
  padding-bottom: 14px;
  text-transform: uppercase;
  font-weight: 400;
}

.list-head span{
  color: #999;
  font-weight: 100;
  font-size: 14px;
  word-wrap: break-word;
}

/*========== MAIN CONTENT ==========*/

.main-background{
  background: url('http://www.gold.org/sites/default/files/images/Three_bracelets.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 100vh;
}

.main-content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-30%, -50%);
  text-align: right;
}

.main-content h1{
  font-size: 50px;
  margin-bottom: 20px;
  font-weight: 300;
  padding-bottom: 20px;
}

.main-content h2{
  color: #fcbe32;
  padding-bottom: 5px;
  font-weight: 400;
}

.main-content p{
  margin-bottom: 40px;
}

.main-content a{
  color: #fcbe32;
  text-decoration: none;
}

.main-content a:hover{
  color: #eee;
}

/*==========  CUSTOM COLLECTION ==========*/

.collection-list ul{
  list-style: none;
}

.collection-list ul li{
  display: inline-block;
  padding: 14px;
}

/*==========  NEW COLLECTION ==========*/

.new-collection{
  position: absolute;
  width: 100%;
}

.new-collection .left{
  float: left;
  background: url('https://media.angieslist.com/s3fs-public/styles/widescreen_large/public/jewelry.jpeg?itok=ymeE9NXz');
  background-repeat: no-repeat;
  background-position: right;
  background-size: cover;
  height: 350px;
  width: 50%;
}

.new-collection .right{
  float: left;
  background: url('http://static.boredpanda.com/blog/wp-content/uploads/2016/03/terrarium-jewelry-microcosm-ruby-robin-boutique-10.jpg');
  background-repeat: no-repeat;
  background-position: left;
  background-size: cover;
  height: 350px;
  width: 50%;
}

.new-collection .middle{
  position: absolute;
  background-color: #fcbe32;
  height: 250px;
  width: 350px;
  left: 50%;
  top: 50%;
  margin-left: -175px;
  margin-top: -125px;
  text-align: center;
}

.new-collection .mid-title{
  text-transform: uppercase;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -80px;
  margin-top: -60px; 
}

.new-collection .mid-title h2{
  font-weight: 400;
  padding-bottom: 20px;
  color: #eee;
}

.new-collection .mid-title a{
  text-decoration: none;
  letter-spacing: 1px;
  color: #555;
  border: 1px solid #555;
  padding: 10px 20px;
  font-size: 14px;
}

.new-collection .mid-title a:hover, 
.new-collection .mid-title a:focus{
  color: #fff;
  border: 1px solid #fff;
}

/*==========  DESIGNER COLLECTION ==========*/

.designer-collection .section-head {
  padding-top: 340px;
}

/*==========  SECTION CARDS ==========*/

.card-wrapper section{
  float: left;
  background: #985d8d;
  width: 50%;
  height: auto;
  text-align: center;
}

.card-wrapper section .card-title{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-transform: uppercase;
  line-height: 2em;
}

.card-wrapper section .card-title a{
  color: #fff;
  text-decoration: none;
}

.card-wrapper section .card-title a:hover,
.card-wrapper section .card-title a:focus{
  color: #333;
}


.card-wrapper .card-one{
  background: url('https://static.pexels.com/photos/356148/pexels-photo-356148.jpeg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 350px;
}

.card-wrapper .card-two{
  background: #985d8d;
  height: 350px;
  color: #eee;
}

.card-wrapper .card-three{
  background: #fcbe32;
  height: 350px;
}

.card-wrapper .card-four{
  background: url('http://findmyrock.com/wp-content/uploads/2013/04/best-photography-6.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 350px;
}

/*==========  DESIGNER GALLERY ==========*/


.gallery .section-head{
  text-align: center;
  padding-bottom: 40px;
  padding-top: -50px;
}

.gallery-showcase{
  list-style: none;
}

.gallery-showcase li{
  display: block;
  width: 33.33%;
  float: left;
  padding: 4px;
}

.gallery-showcase figure{
  overflow: hidden;
}

.gallery-showcase img{
  width: 100%;
  height: auto;
  transform: scale(1.15);
  transition: all 0.5s;
  cursor: pointer;
}

.gallery-showcase img:hover{
  transform: scale(1.05);
}

/*==========  ABOUT US ==========*/

.about .wrapper{
  padding-top: 80px;
}

.about .left{
  width:50%;
  height: 300px;
  background: url('http://maxpixel.freegreatpicture.com/static/photo/1x/Diamond-Luxury-Jewelry-Gold-Shiny-Precious-888286.jpg');
  background-size: cover;
  background-position: center top;
  background-repeat: no-repeat;
  float: left;
}

.about .right{
  width: 50%;
  height: 300px;  
  float: left;
  background: #fcbe32;
}

.about .right .text{
  max-height: 300px;
  color: #555;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 10px 80px 10px 80px;
  line-height: 1.5;
}

/*==========  CONTACT US ==========*/

form{
  padding-top: 40px;
  padding-bottom: 40px;
}

input[type=text], input[type=button], textarea{
  width: 50%;
  padding: 10px;
  border: 1px solid #985d8d;
  border-radius: 4px;
  margin: 6px;
  resize: vertical;
}

input[type=button]{
  background: #bb8eb3;
  color: #fff;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
}

input[type=button]:hover{
  background: #985d8d;
}

/*==========  FOOTER ==========*/

.bottom-links ul{
  list-style: none;
  text-align: center;
  padding: 40px;
}

.bottom-links li{
  display: inline;
  padding: 12px;
}

.bottom-links ul li a{
  text-decoration: none;
  color: #888;
  font-size: 12px;
}

.bottom-links ul li a:hover,
.buttom-links ul li a:focus{
  color: #985d8d;
}

footer{
  padding: 20px;
  background: #222;
  color: #fcbe32;
  text-align: center;
}


/*==========  MEDIA QUERIES ==========*/

/* Work in progress */
  </style>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#custom-sec">Custom Jewelry</a></li>
        <li><a href="#designer-sec">Designer Jewelry</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        
        <li><a href="<?php echo base_url(); ?>index.php/Users/viewregistration">Registration</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Users/viewlogin">Login</a></li>
        
        

        
      </ul>
    </nav>
  
  <div class="main-background">
    <div class="container">
      <div class="main-content">
        <h1>Golden Jewelry</h1>
        <h2>24 Caratage Yellow Gold Bracelet</h2>
        <p>Shope the latest designs from new brands</p>
        <a href="Earings">- View Products</a>
      </div>
    </div>
  </div>
  
</header><!-- / header -->

<!-- ========== CUSTOM JEWELRY ========== -->

<section class="section" id="custom-sec">
  <div class="container">
    <div class="section-head">
      <h2>Custom Jewelry</h2>
      <p>Latest Design</p>
    </div>
    
    <div class="collection-list">
      <ul>
        <li><img src="http://www.thomassabo.com/dw/image/v2/AAQY_PRD/on/demandware.static/-/Sites-ts-master-catalog/default/dwbb260100/productimages/LBA0102-415-12.png?sw=310&sfrm=png" style="width: 180px"/>
          <div class="list-head">
            <h3>Bracelets</h3>
            <span>2000</span>
          </div>
        </li>
    

        <li><img src="https://s-media-cache-ak0.pinimg.com/originals/27/41/69/274169b4444ccf7448d4133c13dd05c1.png" style="width: 180px"/>
          <div class="list-head">
            <h3>Rings</h3>
            <span>1000</span>
          </div>
        </li>

        
        <li><img src="https://s-media-cache-ak0.pinimg.com/originals/c9/89/55/c98955bbb6331b4aa98cf33bdc84a84a.png" style="width: 180px"/>
          <div class="list-head">
            <h3>Earrings</h3>
            <span>500</span>
          </div>
       </li>

       
        <li><img src="https://shop.southindiajewels.com/wp-content/uploads/2021/12/AD-Stone-Pendent-Necklace-1-570x570.jpg" style="width: 180px"/>
          <div class="list-head">
            <h3>Pendants</h3>
            <span>2000</span>
          </div>
       </li>
        
      </ul>
    </div><!-- / collection-list -->
    
  </div><!-- / container -->
</section>


<!-- ========== NEW COLLECTION ========== -->

<section class="section" id="new-sec">
    <div class="new-collection">
    
        <div class="left"></div>

        <div class="right"></div>

        <div class="middle">
          <div class="mid-title">
            <h2>New <br/>Collection</h2>
            <a href="#DESIGNER JEWELRY">View products</a>
          </div><!-- / mid-title -->
        </div>
                 
    </div>
</section>

<!-- ========== DESIGNER COLLECTION ========== -->

<section class="section designer-collection clearfix" id="designer-sec">
  <div class="container">
    <div class="section-head">
        <h2>Designer JEWELRY</h2>
        <p>Explore Design</p>
    </div>
    
    <div class="collection-list clearfix">
      <ul>
        <li><img src="https://cdn0.rubylane.com/shops/2heartsjewelry/TRI369.1L.jpg" style="width: 180px"/>
          <div class="list-head">
            <h3>Bracelets</h3>
            <span>5000</span>
          </div>
        </li>
    

       <li><img src="https://s-media-cache-ak0.pinimg.com/originals/27/41/69/274169b4444ccf7448d4133c13dd05c1.png" style="width: 180px"/>
          <div class="list-head">
            <h3>Rings</h3>
            <span>8000</span>
          </div>
        </li>

        
        
          
          <div class="list-head">
             <li><img src="https://s-media-cache-ak0.pinimg.com/originals/c9/89/55/c98955bbb6331b4aa98cf33bdc84a84a.png" style="width: 180px"/>
            <h3>Earrings</h3>
            <span>2000</span>
          </div>
       </li>

      </ul>
      
    </div><!-- / collection-list -->
        
  </div><!-- / container -->
</section>

<!-- ========== SECTION CARDS ========== -->

<section class="section card-wrapper">
  
  <section class="card-one">
  </section>
  
  <section class="card-two">
    <div class="card-title">
      <h3>Designer Name</h3>
      <p>Details about the product goes here.</p>
      <a href="#home">View more</a>
    </div>
  </section>

  <section class="card-three">
     <div class="card-title">
      <h3>Designer Name</h3>
      <p></p>
      <a href="#home">View more</a>
    </div>
  </section>
  
  <section class="card-four">
  </section>
  
</section><!-- card wrapper -->

<!-- ========== SECTION INSTAGRAM ========== -->
  
<section class="section gallery cleafix">
  
  <div class="container">
      <div class="section-head">
          <h2>Designer Gallery</h2>
          <p>Explore Design</p>
      </div>
      <ul class="gallery-showcase">

        <li>
          <figure>
            <img src="https://static.pexels.com/photos/265856/pexels-photo-265856.jpeg" alt=""/>
          </figure>
        </li>

        <li>
          <figure>
            <img src="https://static.pexels.com/photos/230290/pexels-photo-230290.jpeg" alt=""/>
          </figure>
        </li>

        <li>
          <figure>
            <img src="https://static.pexels.com/photos/248077/pexels-photo-248077.jpeg" alt=""/>
          </figure>
        </li>

      </ul>
  </div>
  
</section>

<!-- ========== ABOUT ========== -->

<section class="section about" id="about">
    <div class="section-head">
        <h2>About Us</h2>
        <p>Learn more about us and quality of our products</p>
    </div>
  
  
      <div class="wrapper clearfix">

        <div class="left">
        </div>

        <div class="right">
          <div class="text">
            <h3>Who we are</h3>
            <br/>
            <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br/> <br/> The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
            </p>
          </div>
        </div>
        
        

      </div><!-- / wrapper -->
  
</section>

<!-- ========== CONTACT ========== -->

<section class="section contact" id="contact">
  <div class="container">
    <div class="section-head">
        <h2>Contact Us</h2>
        <p>Contact Us for More Details</p>
    </div>  
    
    <form>
      <input type='text' name="firstname" placeholder="Your First Name">
      
      <input type="text" name="lastname" placeholder="Your Last Name">
      
      <input type="text" name="phone" placeholder="Your Phone Number">
      
      <input type="text" name="email" placeholder="Your Email Address">
      
      <textarea name="message" rows="8" placeholder="Your Message"></textarea>
      <br/>
      <input type="button" value="Send">
    </form>
  
  </div>
</section>
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


<!-- ========== CONTACT ========== -->
<section class="section contact" id="contact">
  <div class="container">
    <div class="section-head">
        
        
    </div>  
    
    <form>
     
<!-- Example DataTables Card-->
            <div class="card mb-3">
              <div class="card-header">
                <li>
                 

                    
                  </li>
                </div>
                <div class="card-header">

                  


              </div>
                
              <div class="card-body">
                <div class="table-responsive">
                   <table class="table table-bordered table-striped">
        
</section>

<!-- ========== FOOTER ========== -->

<div class="bottom-links">
  <div class="container">
    <ul>
        <li><a href="#home">Support</a></li>
        <li><a href="#home">FAQ</a></li>
        <li><a href="#home">Designers</a></li>
        <li><a href="#home">About</a></li>
        <li><a href="#home">Contact</a></li>
        <li><a href="#home">Registration</a></li>
        <li><a href="#home">Login</a></li>
        <li><a href="#home">Table</a></li>
      </ul>
  </div>
</div>

<footer>
  <div class="container">
    <small>&copy; 2017 Infitinity Golden Jewelry | Coded By Jak Ashuraliev</small>
  </div>
</footer>
<script>
$(function(){
  
    //Smooth scroll
    var $root = $('html, body');
    $('a').click(function(){
       $root.animate({
          scrollTop: $($.attr(this, 'href')).offset().top
       }, 800);
      return false;
    });

  
   //Sticky navigation on scroll.
      $(document).on('scroll', function(){
        if($(this).scrollTop() > 185){
            $('nav').addClass('nav-sticky');
        }else{
            $('nav').removeClass('nav-sticky');
        }
    });

  
    //Add active class to the nav on click.
    $('nav li a').click(function(){
    $('nav li a').removeClass('active');
    $(this).addClass('active');
    });

    $('nav li a').scroll(function(){
    $('nav li a').removeClass('active');
    $(this).addClass('active');
    });
  
   
  
});
</script>