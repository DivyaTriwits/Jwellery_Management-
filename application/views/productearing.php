                        <html>
                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                            <title>Product</title>
                            <meta name="application-name" content="Jorge Fco.">
                            <meta name="theme-color" content="#000000">
                            <meta name="description" content="Add to cart loader effect">
                            <meta name="google" content="notranslate">

                            <!--FONTS-->
                            <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

                            <!--CSS-->
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                            <!--ICONS-->
                            <script src="https://kit.fontawesome.com/4643810438.js" crossorigin="anonymous"></script>
                        </head>
                        <body>
                            <style>
                                :root{
                                    --color-primary: #1EB954;
                                    --color-secundary: #007bff;

                                    --color-text:           #212b36;
                                    --color-text-light:     #637381;
                                    --color-text-black:     #000000;

                                    --color-red: #FF0000;
                                    --color-yellow: #ffe000;
                                    --color-accent: #f8f8f8;
                                    --color-divider: #c4cdd5;

                                    --title: 'DM Sans', sans-serif;
                                    --text: 'DM Sans', sans-serif;
                                }

                                body{
                                    font-family: var(--text);
                                    font-weight: 400;
                                    background-color: white;
                                }

                                //= RESPONSIVE
                                @mixin media($breakpoint...){

                                    @if index($breakpoint, Mobile){
                                        @media (min-width: 0px) and (max-width: 768px) {
                                            @content;
                                        }
                                    }

                                    @if index($breakpoint, Tablet){
                                        @media (min-width: 769px) and (max-width: 1024px) {
                                            @content;
                                        }
                                    }
                                }

                                //= HEADER.
                                .header{
                                    width: 100%;
                                    z-index: 50;
                                    position: relative;
                                    padding-top: 2rem;
                                    padding-bottom: 2rem;
                                    background-color: white;
                                    border-bottom: 1px solid var(--color-divider);
                                }

                                .header__container{
                                    width: 100%;
                                    position: relative;
                                    padding-left: 32px;
                                    padding-right: 32px;
                                }

                                .header__row{
                                    display: flex;
                                    display: -ms-flexbox;
                                    flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    flex-direction: row;
                                    align-itesm: center;
                                }

                                .header__logo{
                                    width: 50%;
                                    position: relative;

                                    a{
                                        font-family: var(--text);
                                        font-weight: 700;
                                        color: var(--color-primary);
                                        font-size: 18px;
                                        text-decoration: none;

                                        span{
                                            font-family: var(--title);
                                            font-weight: 400;
                                            font-style: normal;
                                            color: var(--color-text);
                                            display: inline-block;
                                            position: relative;
                                            margin-left: 2px;
                                        }
                                    }
                                }

                                .header__cart{
                                    width: 50%;
                                    position: relative;
                                    text-align: right;

                                    span{
                                        font-family: var(--text);
                                        font-weight: 700;
                                        font-size: 1rem;
                                        color: var(--color-text);
                                        position: relative;
                                        z-index: 5;

                                        .header__cart__quantity{
                                            font-family: var(--text);
                                            font-weight: 700;
                                            color: white;
                                            font-size: 9px;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            text-align: center;
                                            bottom: -10px;
                                            right: -10px;
                                            width: 18px;
                                            height: 18px;
                                            border: 0px;
                                            border-radius: 100%;
                                            z-index: 20;
                                            position: absolute;
                                            opacity: 0;
                                            visibility: hidden;
                                            background-color: var(--color-primary);

                                            // Animation
                                            animation-duration: 1s;
                                            animation-name: pulse;
                                            animation-fill-mode: both;
                                            animation-iteration-count: infinite;
                                        }

                                        i{
                                            font-size: 20px;
                                            color: var(--color-text);
                                            position: relative;
                                            display: inline-block;
                                            margin-left: 4px;
                                            z-index: 10;
                                        }
                                    }
                                }

                                .header__top{
                                    width: 100%;
                                    position: relative;
                                    padding-top: 5px;
                                    padding-bottom: 5px;
                                    text-align: center;
                                    background-color: black;

                                    span{
                                        font-family: var(--text);
                                        font-weight: 700;
                                        font-size: 12px;
                                        color: white;
                                        display: block;
                                        position: relative;

                                        i{
                                            font-size: 16px;
                                            position: relative;
                                            margin-right: 4px;
                                        }
                                    }
                                }

                                //= FOOTER
                                .footer{
                                    width: 100%;
                                    position: relative;
                                    padding-top: 2rem;
                                    padding-bottom: 2rem;
                                    background-color: var(--color-accent);
                                }

                                .footer__layout{
                                    width: 100%;
                                    position: relative;
                                    padding-left: 8.33333%;
                                    padding-right: 8.33333%;
                                }

                                .footer__references{
                                    width: 100%;
                                    list-style: none;
                                    margin: 0px;
                                    padding: 0px;
                                    position: relative;

                                    li{
                                        p{
                                            font-family: var(--text);
                                            color: var(--color-text);

                                            a{
                                                font-family: var(--text);
                                                font-weight: 700;
                                                color: var(--color-primary);
                                                text-decoration: underline;
                                            }
                                        }
                                    }
                                }

                                //= LAYOUT.
                                .layout{
                                    width: 100%;
                                    padding-left: 8.33333%;
                                    padding-right: 8.33333%;
                                    position: relative;
                                }

                                .column{
                                    width: 50%;
                                    position: relative;

                                    @include media(Mobile){
                                        width: 100%;
                                    }
                                    @include media(Tablet){
                                        width: 100%;
                                    }
                                }

                                //= LOADER.
                                .loader{
                                    width: 100vw;
                                    height: 100vh;
                                    top: 0px;
                                    left: 0px;
                                    right: 0px;
                                    bottom: 0px;
                                    position: fixed;
                                    z-index: 100;
                                    opacity: 0;
                                    visibility: hidden;

                                    &:before{
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        top: 0px;
                                        left: 0px;
                                        right: 0px;
                                        bottom: 0px;
                                        z-index: 80;
                                        backdrop-filter: blur(3px);
                                        position: absolute;
                                        background-color: rgba(0,0,0,0.5);
                                    }
                                }

                                .loader__container{
                                    width: calc(100% - 16.66666%);
                                    top: 50%;
                                    left: 50%;
                                    z-index: 90;
                                    position: absolute;
                                    text-align: center;
                                    overflow: hidden;
                                    opacity: 0;
                                    visibility: hidden;
                                    transform: translateX(-50%) translateY(-50%);

                                    i{
                                        font-size: 64px;
                                        color: white;
                                        display: block;
                                        position: relative;
                                        margin-bottom: 25px;
                                        // Animation
                                        animation-duration: 2s;
                                        animation-fill-mode: none;
                                        animation-name: rotation;
                                        animation-delay: 0s;
                                        animation-iteration-count: infinite;
                                        animation-direction: alternate;
                                        animation-play-state: running; 
                                        animation-timing-function: ease-in-out;
                                    }

                                    span{
                                        font-family: var(--text);
                                        font-weight: 700;
                                        font-size: 24px;
                                        color: white;
                                        letter-spacing: 0.04rem;
                                        display: inline-block;
                                        position: relative;
                                        text-align: center;

                                        @include media(Mobile){
                                            font-size: 18px;
                                        }

                                        data{
                                            color: white;
                                            display: block;
                                            text-align: center;
                                            position: absolute;

                                            &.is-add-cart-loader{
                                                position: relative;
                                                opacity: 0;
                                                visibility: hidden;
                                                transform: matrix(1, 0, 0, 1, 0, 200);
                                            }

                                            &.is-add-cart-success{
                                                width: 100%;
                                                top: 0px;
                                                left: 50%;
                                                opacity: 0;
                                                visibility: hidden;
                                                position: absolute;
                                                transform: translateX(-50%);
                                            }
                                        }
                                    }
                                }

                                //= PRODUCT.
                                .product{
                                    width: 100%;
                                    padding-top: 8em;
                                    padding-bottom: 8em;
                                    position: relative;

                                    @include media(Mobile){
                                        padding-top: 4em;
                                        padding-bottom: 4em;
                                    }
                                    @include media(Tablet){
                                        padding-top: 6em;
                                        padding-bottom: 6em;
                                    }
                                }

                                .product__row{
                                    display: flex;
                                    display: -ms-flexbox;
                                    flex-wrap: wrap;
                                    -ms-flex-wrap: wrap;
                                    flex-direction: row;
                                    align-itesm: center;
                                }

                                .product__thumb{
                                    width: 100%;
                                    height: 65vh;
                                    position: relative;
                                    overflow: hidden;
                                    z-index: 5;
                                    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.05);

                                    @include media(Mobile){
                                        height: 50vh;
                                    }
                                    @include media(Tablet){
                                        height: 55vh;
                                    }
                                }

                                .product__thumb__loader{
                                    width: 200%;
                                    height: 200%;
                                    top: 0px;
                                    left: 0px;
                                    right: 0px;
                                    bottom: 0px;
                                    z-index: 20;
                                    overflow: hidden;
                                    position: absolute;
                                    background-color: var(--color-accent);
                                }

                                .product__thumb__image{
                                    width: 100%;
                                    height: 400%;
                                    top: 0px;
                                    left: 0px;
                                    right: 0px;
                                    bottom: 0px;
                                    z-index: 10;
                                    overflow: hidden;
                                    position: absolute;
                                    text-align: center;

                                    img{
                                        width: 500%;
                                        margin: 0 auto;
                                        position: relative;
                                        opacity: 0;
                                        visibility: hidden;
                                    }
                                }

                                .product__information{
                                    width: 100%;
                                    padding-left: 8.33333%;
                                    padding-right: 8.33333%;
                                    position: relative;

                                    @include media(Mobile){
                                        padding-top: 2em;
                                        padding-left: 0%;
                                        padding-right: 0%;
                                    }
                                    @include media(Tablet){
                                        padding-top: 2em;
                                        padding-left: 0%;
                                        padding-right: 0%;
                                    }

                                    h1{
                                        font-family: var(--title);
                                        font-weight: 700;
                                        color: var(--color-text);
                                        position: relative;
                                        margin-bottom: 10px;

                                        @include media(Mobile){
                                            font-size: 28px;
                                        }
                                        @include media(Tablet){
                                            font-size: 32px;
                                        }
                                    }

                                    span{
                                        font-family: var(--text);
                                        color: var(--color-text-light);
                                        font-size: 14px;
                                        font-weight: 400;
                                        display: block;
                                        position: relative;
                                        margin-bottom: 10px;

                                        b{
                                            font-family: var(--text);
                                            font-weight: 700; 
                                        }

                                        i{
                                            font-size: 12px;
                                            margin-right: 4px;
                                            position: relative;
                                        }
                                    }

                                    data{
                                        font-family: var(--text);
                                        font-size: 24px;
                                        font-weight: 700;
                                        color: var(--color-text);
                                        display: block;
                                        position: relative;
                                        margin-top: 25px;
                                        margin-bottom: 25px;
                                    }

                                    p{
                                        font-family: var(--text);
                                        font-weight: 400;
                                        color: var(--color-text);
                                        line-height: 1.8;
                                        margin-bottom: 35px;
                                        position: relative;
                                    }

                                    button{
                                        display: inline-block;
                                        font-family: var(--text);
                                        font-weight: 700;
                                        font-size: 1rem;
                                        color: white;
                                        text-align: center;
                                        text-transform: uppercase;
                                        letter-spacing: 0.06rem;
                                        vertical-align: middle;
                                        -webkit-user-select: none;
                                        -moz-user-select: none;
                                        -ms-user-select: none;
                                        user-select: none;
                                        background-color: black;
                                        border: 1px solid transparent;
                                        box-shadow: 0px 3px 6px rgba(0,0,0,0.05);
                                        padding: 0.8rem 2rem;
                                        line-height: 1.5;
                                        border-radius: 0px;
                                        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;

                                        @include media(Mobile){
                                            width: 100%;
                                            text-align: center;
                                        }
                                        @include media(Tablet){
                                            width: 100%;
                                            text-align: center;
                                        }

                                        i{
                                            margin-right: 4px;
                                            position: relative;
                                        }

                                        &:hover{
                                            color: white;
                                            border: 1px solid transparent;
                                            background-color: var(--color-secundary);
                                            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                        }
                                        &:focus{
                                            outline: none;
                                            box-shadown: none;
                                            border: 1px solid transparent;
                                        }
                                    }
                                }

                                .product__information__stars{
                                    width: 100%;
                                    position: relative;
                                    margin-bottom: 15px;

                                    i{
                                        color: var(--color-yellow);
                                        font-size: 1rem;
                                        opacity: 0;
                                        visibility: hidden;
                                    }
                                }

                                //= ANIMATIONS
                                @keyframes rotation {
                                    50% {
                                        transform: rotate(360deg);
                                    }
                                    100% {
                                        transform: rotate(0deg);
                                    }
                                }

                                @keyframes pulse {
                                  from {
                                    transform: scale3d(1, 1, 1);
                                }

                                50% {
                                    transform: scale3d(1.05, 1.05, 1.05);
                                }

                                to {
                                    transform: scale3d(1, 1, 1);
                                }
                            }
                            table { 
                              width: 100%; 
                          }
                          tr:nth-of-type(odd) { 
                              background: #eee; 
                          }

                          th { 
                              background: #3498db; 
                              color: white; 
                              font-weight: bold; 
                          }

                          td, th { 
                              padding: 10px; 
                              border: 1px solid #ccc; 
                              text-align: left; 
                              font-size: 18px;
                          }

                      </style>
                      <!--LOADER-->
                      <div class="loader js-loader" role="loader">
                        <div class="loader__container js-loader-container">
                            <i class="fas fa-spinner"></i>
                            <span>
                                <data class="is-add-cart-loader">Agregando producto al carrito</data>
                                <data class="is-add-cart-success">Se agrego correctamente</data>
                            </span>
                        </div>
                    </div>
                    <!--LOADER-->

                    <!--HEADER-->
                    <div class="header__top">
                        <span>
                            <i class="fas fa-shipping-fast"></i>
                            Envío gratuito a domicilio a partir de MXN 699.00
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <center>

        </center>
        <header class="header">
            <div class="header__container">
                <div class="header__row">
                    <div class="header__logo">
                        <a href="#">

                        </a>
                    </div>
                    <div class="header__cart">
                        <span>

                            <div class="header__cart__quantity" data-cart-quantity="1">

                            </div>
                            <i class="fas fa-shopping-bag"></i>
                        </span>
                    </div>
                </div>
            </div>
        </header>
        <!--HEADER-->

        <main class="product">
            <section class="layout">
                <!--ROW-->
                <div class="product__row" role="row">
                    <div class="column" role="column">
                        <!--IMAGE-->
                        <th>
                            <div class="product__thumb__image is-background">
                             <?php
                                $cnt=1;
                                foreach ($result as $user) { ?>
                                <img src="<?php echo base_url('admin/uploads/images/' . $user->file); ?>" width="800" height="800" alt="Product Image">



                            </div>
                            <!--IMAGE-->
                        </div>


                        <div class="column" role="column">
                            <article class="product__information">

                             <div class="product-info">
                                <br>
                                <br>
                                <br>
                                <br>
                                <h2>Product Details</h2>
                                
                                <br>
                                <h2>Id: <?php echo $user->id; ?></h2>
                                <h2>Gold Type: <?php echo $user->gold_type; ?></h2>
                                <!-- <h2>Weight(gm): <?php echo $user->weight; ?></h2> -->
                                <h2>Price(Rs): <?php echo $user->price; ?></h2>
                                <h2>Discount(%): <?php echo $user->discount; ?></h2>
                                <br>
                                <h3>Product Details:- <?php echo $user->description; ?></h3>
                                <br>
                                
                                <h4><li>100% Original Products</li></h4>
                                <h4><li>Pay on delivery might be available</li></h4>
                                <h4><li>Easy 14 days returns and exchanges</li></h4>
                                <br>
                                <!-- <h4>Care Instructions :
                                    <br>
                                    Wipe your jewellery with a soft cloth after every use
                                    Always store your jewellery in a flat box to avoid accidental scratches
                                    Keep sprays and perfumes away from your jewellery
                                    Do not soak your jewellery in water
                                Clean your jewellery using cleaning solutions only.</h4> -->


                            </th>
                            <?php
                                $cnt++;
                            }
                        ?> 
                        <br>
                        <br>


                        <a href="<?php echo base_url(); ?>index.php/Users/viewpurchaseearing/<?php echo $user->id; ?>" class="purchase-btn">
                            <button style="height:50px;width:100px;background-color: #F08080">Purchase</button></a>


                        </th>  



                    </button>
                </article>

            </div>
        </div>
        <!--ROW-->
    </section>
</main>

<footer class="footer">
    <div class="footer__layout">
        <ul class="footer__references">



        </ul>
        <script>
            var Product = function(){

                var AddCart = function(){

                                // Click button add cart...
                    $(".js-product-add-cart").click(function(event) {
                        event.preventDefault();

                        TweenMax.to($(".js-loader"), 0.8,{
                            delay: 0,
                            autoAlpha: 1,
                            ease: Expo.easeInOut
                        });

                        TweenMax.to($(".header__cart__quantity"), 0.5,{
                            delay: 0,
                            autoAlpha: 1,
                            ease: Expo.easeInOut
                        });

                        TweenMax.to($(".is-add-cart-loader"), 1,{
                            delay: 0.3,
                            y: 0,
                            autoAlpha: 1,
                            ease: Power4.easeInOut,
                            onComplete: function(){
                             TweenMax.to($(".is-add-cart-loader"), 0.8,{
                                delay: 0.5,
                                y: 200,
                                autoAlpha: 0,
                                ease: Power4.easeInOut,
                                onComplete: function(){
                                 TweenMax.to($(".is-add-cart-success"), 0.5,{
                                    delay: 0.3,
                                    autoAlpha: 1,
                                    ease: Power4.easeInOut
                                });
                             }
                         });
                         }
                     });

                        TweenMax.to($(".js-loader-container"), 0.5,{
                            delay: 0.3,
                            autoAlpha: 1,
                            ease: Expo.easeInOut,
                            onComplete: function(){
                                HiddenLoader();
                            }
                        });

                    });
                }

                var HiddenLoader = function(){
                    TweenMax.to($(".js-loader-container"), 0.5,{
                        delay: 3,
                        autoAlpha: 0,
                        ease: Expo.easeInOut,
                        onComplete: function(){
                                        //
                            TweenMax.to($(".js-loader"), 0.5,{
                                delay: 0,
                                autoAlpha: 0,
                                ease: Expo.easeInOut
                            });

                                        //
                            TweenMax.to($(".is-add-cart-success"), 0.5,{
                                delay: 0,
                                autoAlpha: 0,
                                ease: Power4.easeInOut
                            });
                        }
                    });
                }

                var Intro = function(){
                    var _time = 0;

                                // this elements
                    $(".product__information__stars i").each(function(index, el){
                                    // Time
                        _time = index * 0.1;

                                    // Animation
                        TweenMax.to($(this), 0.3,{
                            delay: _time,
                            autoAlpha: 1,
                            ease: Expo.easeInOut
                        });
                    });

                                //Loader hidden...
                    TweenMax.to($(".js-product-thumb-loader"), 0.5,{
                        delay: 1,
                        width: 0,
                        ease: Expo.easeInOut
                    });
                }

                var Images = function(){
                    $(".is-background").imgLiquid();
                }

                return{
                    init: function(){
                        Intro();
                        Images();
                        AddCart();
                    }
                };
            }();

                        // Run...
            Product.init();

        </script>
        <script>
        function calculateTotal() {
            const cost = parseFloat(document.getElementById('cost').value);
            const discount = parseFloat(document.getElementById('discount').value);

            // Calculate the total after applying the discount
            const total = cost - (cost * discount / 100);

            // Redirect to the second page with the cost, discount, and total as URL parameters
            window.location.href = `purchase.php?cost=${cost}&discount=${discount}&total=${total}`;
        }
    </script>
    </div>
</footer>
</body>
</html>