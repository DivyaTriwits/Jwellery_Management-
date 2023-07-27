 <div class="nav">
      <input type="checkbox" id="nav-check">
      <div class="nav-header">
        <div class="nav-title">
          <center>
            Variety of Earings

    
          </center>
        </div>
      </div>
      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>

      <div class="nav-links">
         
        
        <center>
          <a href="<?php echo base_url(); ?>index.php/Users/back"><button style="height:50px;width:100px;background-color: #F08080">Back</button></a>

        </center>
      </div>
      <title>Display records</title>
    </head>
    
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

    <body>
      <div class="container">
        <?php
          foreach ($result as $user) {
          ?>
          <div class="product-card">
            <a href="<?php echo base_url(); ?>index.php/Users/viewearing1/<?php echo $user->id; ?>">
              <img src="<?php echo base_url('admin/uploads/images/'.$user->file); ?>" alt="Product Image" ></a>
              <div class="product-info">
                <h2>Gold Type: <?php echo $user->gold_type; ?></h2>
                <!-- <p>Weight: <?php echo $user->weight; ?></p> -->
                <p>Price(Rs): <?php echo $user->price; ?></p>
                <p>Discount(%): <?php echo $user->discount; ?></p>
              </div>
            </div>
            <?php
            }
          ?>
        </div>
      </body>
      </html>