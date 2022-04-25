<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>" ></script>
    

    <?php echo $__env->yieldContent('contenido_js'); ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('fonts/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap-social.css')); ?>" rel="stylesheet">
    
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">    
    <link rel="stylesheet" href="<?php echo e(asset('css/template.css')); ?>">
    <style>
        @import  url('https://fonts.googleapis.com/css2?family=Pangolin&display=swap');
    </style>

    <style>
        .navbar-custom{
            background-color: rgb(242,219,125) !important;
            color:black;
            font-weight: bold;
            font-family: 'Pangolin', cursive;
        }
    </style>
    
    <?php echo $__env->yieldContent('contenido_cSS'); ?>


</head> 
<body>
    <div id="app">
        

        
 
        <nav class="navbar navbar-icon-top navbar-expand-lg navbar-custom fixed-top nav-superior-node" >
            <a class="navbar-brand " id="logo-format" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/img/LogoSubli.png')); ?>" class="logo-subli-now" alt="Logo" srcset=""></a>
            <div  style="width: 60%" class="navbar-brand logo-font" id="search-centro-responsive">

                <form class="form-inline my-2 my-lg-0" method="GET" action="<?php echo e(route('product-search-now')); ?>" >
                    <?php echo csrf_field(); ?>
                    <input class="form-control mr-sm-1 form-search-now " required name="productSearch" id="input-search-4" style="width: 75%;" type="text" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 btn-search-nav-now" type="submit"><i class="fa fa-search"></i></button>
                  </form>
            </div>            

            <button class="navbar-toggler" id="button-toggler-now-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                <i class="fa fa-bars fa-2x" style="color:black;"></i>                  
              </span>
            </button>

          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                

                <li class="nav-item">
                    <a class="nav-link style-option-nav" href="<?php echo e(url('/productos/todos/0')); ?>">
                      <i class="fa fa-th"></i>
                      Catalogo
                      </a>
                </li>

  
                
                
                
              </ul>

              <div style="width: 60%" id="search-centro-responsive-2">
                <form class="form-inline my-2 my-lg-0" method="GET"  action="<?php echo e(route('product-search-now')); ?>">
                    <?php echo csrf_field(); ?>
                    <input class="form-control mr-sm-1" style="width: 75%;height:35px" required name="productSearch" type="text" placeholder="Producto" aria-label="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0 btn-search-nav-now" type="submit" style="font-size: 12px;"><i class="fa fa-search"></i></button>
                </form>
            </div>            

              <ul class="navbar-nav ">
                
                
                

                
                



                <li class="nav-item">
                    <a class="nav-link style-option-nav" href="#">Contactanos <span class="sr-only">(current)</span></a>
                </li>
                <?php if(isset(Auth::user()->admin)==true): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('index-admin')); ?>">Administracion<span class="sr-only"></span></a>
                </li>                                        
                <?php endif; ?>

                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                    

                <?php endif; ?>


                
                

                

              </ul>
            </div>
          </nav>
          <br>
          <br>


        <main class="py-4 mt-3 background-3-now">
            <?php echo $__env->yieldContent('content'); ?> 
            
          

        </main>
    </div>
    <footer id="footer" class="navbar-custom" >


        
        <div class="container">
            <div class="row">
    
                <div class="col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h4 style="font-weight: bold;" class="color-title-footer">CONTENIDO</h4>
                            <ul>
                                <div class="copyright row">
                                    <div class="col-md-6">
                                        <a class="style-option-footer" href="<?php echo e(route('home')); ?>">Inicio </a>                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <a class="style-option-footer" href="<?php echo e(route('products')); ?>">Categorias</a>
                                    </div>

                                </div>
                                    
                                
                            </ul>
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                        </div>
                    </div>
                </div>
    
    
                <div class="col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
    
                            <h3 class="color-title-footer" style="color: blue">
                                <img style="width: 6.5em;" src="<?php echo e(asset('assets/img/logoFooter2.png')); ?>" alt="">
                            </h3>

                            <a href="https://www.facebook.com/sublifunky" target="_blank" class="btn">
                                <img style="width: 9em;" src="<?php echo e(asset('assets/img/sublifunkyFacebook.png')); ?>" alt="">
                            </a>
                            <a href="https://www.instagram.com/subli_funky/?fbclid=IwAR3jSWEt-UDRtyijNUrgmeUKnsEFscjg9FTNtP-_yt_2TNgiIHC_XWqFNdU" target="_blank" class="btn">
                                <img style="width: 9em;" src="<?php echo e(asset('assets/img/sublifunkyTwitter.png')); ?>" alt="">                                
                            </a>


                                                            


                            
    
    
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h4></h4>
                            <div class="copyright color-title-footer" >
                                © Copyright <strong><span>Sublifunky</span></strong> 2020 - 3030. Todos los derechos reservados
                              </div>
                        
                        </div>
                    </div>
                </div>
    
            </div>
        </div>    
        
    
      </footer>

    <?php echo $__env->yieldContent('contenido_abajo_js'); ?>
    
    <?php if(Request::path()!='/' && \Request::route()->getName()!='checkout-product' && \Request::route()->getName()!='aboutUs'): ?>
    <div id="product-cart-shop-now">
        <?php echo $__env->make('layouts.include.cartShop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
    </div>

    <style>
        .fixed-cart-shop{
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 4;
            background-color: white;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            border-radius: 25%;
        }
        .number-shop-cart{
            position: fixed !important;
            right: 20px !important;
            bottom: 50px !important;
            font-size: 15px;
        }

        .fixed-ws{
            position: fixed;
            right: 20px;
            bottom: 80px;
            z-index: 4;
            background-color: white;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            border-radius: 25%;
        }
    </style>

    <?php else: ?>
        
    <style>

        .fixed-ws{
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 4;
            background-color: white;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            border-radius: 25%;
        }
    </style>

    <?php endif; ?>






<script>

$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
});
</script>
    
</body>
    
</html>
<?php /**PATH C:\Users\JesusM\Desktop\proyectoTaller\mueblesNet\resources\views/layouts/app.blade.php ENDPATH**/ ?>