<!DOCTYPE html>
<html>
<head>
  <title>Display records</title>

  <style>
    /* Your CSS styles here */
    /* ... */
  </style>
  
</head>
<body>

  <!-- Sidebar -->
  <input type="checkbox" id="MenuToggle">
  <aside class="sidebar">
    <nav>
      <a href="#" class="logo">Logo</a>
      <div class="nav_items">
       <h2> Jewellery Category </h2>

              <a href="<?php echo base_url(); ?>index.php/Users/viewringlist" class="menu-item">Ring</a>
              <a href="<?php echo base_url(); ?>index.php/Users/viewnecklacelist" class="menu-item">Necklace</a>
              <a href="<?php echo base_url(); ?>index.php/Users/viewbanglelist" class="menu-item">Bangles</a>
              <!-- <a href="<?php echo base_url(); ?>index.php/Users/viewearinglist" class="menu-item">Earings</a> -->
              <!-- <a href="<?php echo base_url(); ?>index.php/Users/viewearinglist" class="menu-item">Earings</a> -->

      </div>
    </nav>
  </aside>

  <!-- Main content -->
  <main class="right">
    <label for="MenuToggle" class="toggle__icon">
      <span class="line line1"></span>
      <span class="line line3"></span>
      <span class="line line2"></span>
    </label>
    <div class="content">
      <h2>jewellery category</h2>
      <br>
      <br>
      <br>
      <div class="container">
        <style>
  .menu-item {
    margin-right: 70px; /* Adjust the value as needed */
  }
</style>
<style>
  <style>
  {
    box-sizing: border-box;
  }

  body {
    margin: 0px;
    font-family: 'segoe ui';
    background-color: #D5CDCC;
  }

  .nav {
    height: 50px;
    width: 100%;
    background-color: #3482B5;
    position: relative;
  }

  .nav > .nav-header {
    display: inline;
  }

  .nav > .nav-header > .nav-title {
    display: inline-block;
    font-size: 22px;
    color: #fff;
    padding: 10px 10px 10px 10px;
  }

  .nav > .nav-btn {
    display: none;
  }

  .nav > .nav-links {
    display: inline;
    float: right;
    font-size: 18px;
  }

  .nav > .nav-links > a {
    display: inline-block;
    padding: 13px 10px 13px 10px;
    text-decoration: none;
    color: #efefef;
  }

  .nav > .nav-links > a:hover {
    background-color: rgba(0, 0, 0, 0.3);
  }

  .nav > #nav-check {
    display: none;
  }

  @media (max-width:800px) {
    .nav > .nav-btn {
      display: inline-block;
      position: absolute;
      right: 0px;
      top: 0px;
    }
    .nav > .nav-btn > label {
      display: inline-block;
      width: 5px;
      height: 50px;
      padding: 13px;
    }
    .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
      background-color: rgba(0, 0, 0, 0.3);
    }
    .nav > .nav-btn > label > span {
      display: block;
      width: 25px;
      height: 10px;
      border-top: 2px solid #eee;
    }
    .nav > .nav-links {
      position: absolute;
      display: block;
      width: 100%;
      background-color: #333;
      height: 0px;
      transition: all 0.3s ease-in;
      overflow-y: hidden;
      top: 50px;
      left: 0px;
    }
    .nav > .nav-links > a {
      display: block;
      width: 100%;
    }
    .nav > #nav-check:not(:checked) ~ .nav-links {
      height: 0px;
    }
    .nav > #nav-check:checked ~ .nav-links {
      height: calc(100vh - 50px);
      overflow-y: auto;
    }
  }
  
  body {
    margin: 0;
    padding: 0;
    font-family: 'segoe ui';
    background-color: #D5CDCC;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }

  .container .product-card {
    width: 200px;
    margin: 10px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 1px 1px 15px #cccccc40;
    transition: 0.5s ease-in;
  }

  .container .product-card:hover {
    box-shadow: 1px 1px 28.5px -7px #d6d6d6;
  }

  .container .product-card img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
  }

  .container .product-card .product-info {
    text-align: center;
  }

  .container .product-card .product-info h2 {
    margin-bottom: 10px;
    font-size: 18px;
    font-weight: 600;
  }

  .container .product-card .product-info p {
    margin-bottom: 10px;
    font-size: 16px;
  }

  .container .product-card .purchase-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #F08080;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease-in;
  }

  .container .product-card .purchase-btn:hover {
    background-color: #E25858;
  }

</style>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,600&display=swap');
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  position: relative;
  width: 100%;
  height: 100vh;
  font-family: 'Raleway', sans-serif;
  background: #f2f2f2;
  overflow-x: hidden;
  z-index: 1;
  display: flex;
}

a {
  text-decoration: none;
  color: #fff;
  text-transform: uppercase;
}

#MenuToggle {
  display: none;
  /* position: absolute;
 top: 30px;
 left: 350px; */
}


/* Left */

.sidebar {
  position: relative;
  width: 250px;
  height: 100%;
  background: #020321;
  opacity: 1;
  transform: translateX(0);
  transition: all .8s ease;
}


/* For Navbar */

.logo {
  display: block;
  font-size: 30px;
  font-weight: 70;
  text-align: center;
  letter-spacing: .3px;
  padding: 20px 0px;
  background: #000831;
}

.nav_items {
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.nav_items a {
  display: block;
  padding: 20px 0px;
  font-size: 18px;
  font-weight: 400;
  text-align: center;
  transition: all .4s ease;
}

.nav_items a:hover,
.nav_items a.active {
  background: #000831;
}


/* Right */

.right {
  position: relative;
  width: calc(100% - 250px);
  height: 100%;
  padding: 30px 30px;
  overflow-x: hidden;
  display: flex;
  align-items: center;
  transition: all .8s ease;
}

.content {
  width: 100%;
}

.content h2 {
  font-size: 60px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: .3px;
  color: #000831;
  text-align: center;
}


/* Toggle bar */

.toggle__icon {
  position: absolute;
  top: 24px;
  left: 30px;
  cursor: pointer;
}

.toggle__icon .line {
  width: 24px;
  height: 3px;
  background-color: #000831;
  margin: 6px 0;
  display: block;
  border-radius: 8px;
}


/* If Checked */

#MenuToggle:checked~.sidebar {
  width: 0;
  transform: translateX(-250px);
}

#MenuToggle:checked~.right {
  width: 100%;
}
  </style>


        <?php foreach ($result as $user) { ?>
          <div class="product-card">
            <a href="<?php echo base_url(); ?>index.php/Users/viewproductj/<?php echo $user->id; ?>">
              <img src="<?php echo base_url('admin/uploads/images/' . $user->file); ?>" alt="Product Image">
            </a>
            <div class="product-info">
              <h2>Gold Type: <?php echo $user->gold_type; ?></h2>
              <p>Price(Rs): <?php echo $user->price; ?></p>
              <p>Discount(%): <?php echo $user->discount; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>

  <!-- JavaScript for sidebar toggle -->
  <script>
    const menuToggle = document.getElementById('MenuToggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.right');

    menuToggle.addEventListener('change', () => {
      if (menuToggle.checked) {
        sidebar.style.transform = 'translateX(0)';
        mainContent.style.width = 'calc(100% - 250px)';
      } else {
        sidebar.style.transform = 'translateX(-250px)';
        mainContent.style.width = '100%';
      }
    });
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
  var menuLinks = document.querySelectorAll(".nav ul li a");

  // Event handler when menu item is clicked
  menuLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault(); // Prevent following the link

      var targetId = link.getAttribute("href"); // Get the href attribute
      var targetSection = document.querySelector(targetId); // Get section by ID

      // Smooth scrolling to section
      window.scrollTo({
        top: targetSection.offsetTop,
        behavior: "smooth"
      });
    });
  });
});
</script>
</body>
</html>