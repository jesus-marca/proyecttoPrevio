


<?php $__env->startSection('contenido_js'); ?>
    <script src="https://sorgalla.com/jcarousel/dist/jquery.jcarousel.min.js?raw=1"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido_cSS'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/styleHome.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/template.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container-fluid mt-4 carousel-2">
  <div class="row d-flex justify-content-center">
      <div class="col-md-9">
          <div class="carousel slide" id="carousel-554496">
              <div class="carousel-inner">                
                  <div class="carousel-item active" style="width: 100%">
                    <div class="d-flex justify-content-center bg-dark content-column-now" >
                        <div class="p-3 delete-padding-2" style="width: 100% !important">  
                            <?php if(isset($elementsCarouselNow[0]->prod_id) && isset($elementsCarouselNow[0])): ?>
                                <img class="d-block img-carousel-1" alt="Carousel Bootstrap Third" src="<?php echo e($elementsCarouselNow[0]->CarouselItemProd->prod_img1); ?>" />                        
                            <?php else: ?>
                                <img class="d-block img-carousel-1" alt="Carousel Bootstrap Third" src="<?php echo e(asset('assets/img/sticker/expansor_madera.jpg')); ?>" />
                            <?php endif; ?>                            
                        </div>
                        <div class="p-3 delete-padding-2" style="width: 100%">
                            <?php if(isset($elementsCarouselNow[1]->prod_id) && isset($elementsCarouselNow[1])): ?>
                                <img class="d-block img-carousel-1" alt="Carousel Bootstrap Third" src="<?php echo e($elementsCarouselNow[1]->CarouselItemProd->prod_img1); ?>" />                        
                            <?php else: ?>
                                <img class="d-block img-carousel-1" alt="Carousel Bootstrap Third" src="<?php echo e(asset('assets/img/sticker/expansor_madera.jpg')); ?>" />
                            <?php endif; ?>                            
                        </div>
                    </div>


                      


                      <div class="carousel-caption d-flex align-items-center justify-content-between" style="height: 100%">
                        <?php if(isset($elementsCarouselNow[0]->prod_id)): ?>
                            <div class="btn cart-shop-style" onclick="window.location='<?php echo e(route('details-product',$elementsCarouselNow[0]->prod_id)); ?>'" style="width: 120px;height:40px;font-size:14px">
                                <span style="margin-right:10px;"
                                class="fa fa-eye" aria-hidden="true"> Ver mas</span>
                            </div> 
                        <?php endif; ?>
                        <?php if(isset($elementsCarouselNow[1]->prod_id)): ?>
                          <div class="btn cart-shop-style" onclick="window.location='<?php echo e(route('details-product',$elementsCarouselNow[1]->prod_id)); ?>'" style="width: 120px;height:40px;font-size:14px">
                              <span style="margin-right:10px;"
                              class="fa fa-eye" aria-hidden="true"> Ver mas</span>
                          </div> 
                        <?php endif; ?>
                      </div>
                  </div>

                  <div class="carousel-item" style="width: 100%">
                    <div class="d-flex justify-content-center bg-dark content-column-now" >
                        <div class="p-3 delete-padding-2" style="width: 100% !important">
                            <?php if(isset($elementsCarouselNow[2]) && $elementsCarouselNow[2]->prod_id!=null): ?>
                                <img class="d-block img-carousel-1" alt="Carousel Bootstrap Third" src="<?php echo e($elementsCarouselNow[2]->CarouselItemProd->prod_img1); ?>" />                        
                            <?php else: ?>
                                <img class="d-block img-carousel-1" alt="Carousel Bootstrap Third" src="<?php echo e(asset('assets/img/sticker/expansor_madera.jpg')); ?>" />
                            <?php endif; ?>                            
                        </div>
                        <div class="p-3 delete-padding-2" style="width: 100%">
                            <?php if(isset($elementsCarouselNow[3]) && $elementsCarouselNow[3]->prod_id!=null): ?>
                                <img class="d-block img-carousel-1" alt="Carousel Bootstrap Third" src="<?php echo e($elementsCarouselNow[3]->CarouselItemProd->prod_img1); ?>" />                        
                            <?php else: ?>
                                <img class="d-block img-carousel-1" alt="Carousel Bootstrap Third" src="<?php echo e(asset('assets/img/sticker/expansor_madera.jpg')); ?>" />
                            <?php endif; ?>                            
                        </div>
                    </div>


                      


                      <div class="carousel-caption d-flex align-items-center justify-content-between" style="height: 100%">
                          
                          <?php if(isset($elementsCarouselNow[2]->prod_id)): ?>

                            <div class="btn cart-shop-style" onclick="window.location='<?php echo e(route('details-product',$elementsCarouselNow[2]->prod_id)); ?>'" style="width: 120px;height:40px;font-size:14px">
                                <span style="margin-right:10px;"
                                class="fa fa-eye" aria-hidden="true"> Ver mas</span>
                            </div> 
                          <?php endif; ?>
                          <?php if(isset($elementsCarouselNow[3]->prod_id)): ?>
                                <div class="btn cart-shop-style" onclick="window.location='<?php echo e(route('details-product',$elementsCarouselNow[3]->prod_id)); ?>'" style="width: 120px;height:40px;font-size:14px">
                                    <span style="margin-right:10px;"
                                    class="fa fa-eye" aria-hidden="true"> Ver mas</span>
                                </div> 
                            <?php endif; ?>

                      </div>
                  </div>                  
              </div> 
              <a  class="carousel-control-prev" href="#carousel-554496" data-slide="prev"><span class="carousel-control-prev-icon format-indicator p-4"></span>
                   <span class="sr-only">Previous</span></a>
              <a class="carousel-control-next" href="#carousel-554496" data-slide="next"><span class="carousel-control-next-icon format-indicator p-4"></span> 
              <span class="sr-only">Next</span></a>
          </div>
      </div>
  </div>
</div>














    <div class="content-all">

        



        <h3 class="container my-4 titulo-2 ">PRODUCTOS POPULARES</h3>
        <div class="container background-2-now">
            <div class="row">
                <div id="carouselPlus" class="carousel slide multi-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $popularProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popularP): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <div class="carousel-grid col-lg-3 col-md-4 col-sm-12" onclick="window.location='/productos/detalles/<?php echo e($popularP->id); ?>'" style="cursor: pointer;">

                            <div class="card mb-2">

                                <a href="<?php echo e(route('details-product',$popularP->id)); ?>">
                                <img class="card-img-top img-product-p"
                                    src="<?php echo e($popularP->prod_img1); ?>" alt="Card image cap" style="height: 220px !important;">

                                </a>    
                                <div class="card-body">


                                    <?php if($popularP->prod_discount!=null): ?>
                                    <label for="" style="display: block;text-decoration: line-through;" class="text-muted">
                                        S/ <?php echo e(number_format($popularP->prod_price, 2)); ?></label>
                                    <h3 style="display: inline-block" class="card-title precio-product">S/ <?php echo e(number_format($popularP->prod_price*(100 - $popularP->prod_discount)/100, 2)); ?></h3><label
                                        class="text-success">&nbsp;<?php echo e($popularP->prod_discount); ?>% OFF</label>
                                        <p class="card-text text-muted"><?php echo e($popularP->prod_name); ?></p>
                                    <?php else: ?>
                                    <h3 style="display: inline-block" class="card-title precio-product">S/ <?php echo e(number_format($popularP->prod_price,2)); ?></h3>
                                    <p class="card-text text-muted"><?php echo e($popularP->prod_name); ?></p>
                    
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
                   </div>
                    <a class="carousel-control-prev" href="#carouselPlus" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselPlus" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000"
                            data-keyboard="true">
                            <ol class="carousel-indicators">
                                <li data-target="#lightbox" data-slide-to="0"></li>
                                <li data-target="#lightbox" data-slide-to="1"></li>
                                <li data-target="#lightbox" data-slide-to="2"></li>
                                <li data-target="#lightbox" data-slide-to="3"></li>
                                <li data-target="#lightbox" data-slide-to="4"></li>
                                <li data-target="#lightbox" data-slide-to="5"></li>
                                <li data-target="#lightbox" data-slide-to="6"></li>
                                <li data-target="#lightbox" data-slide-to="7"></li>
                            </ol>
                            <div class="carousel-inner">

                            </div>

                              <a class="carousel-control-prev"  href="#lightbox" role="button" data-slide="prev"><span
                                class="carousel-control-prev-icon" aria-hidden="true"></span><span
                                class="sr-only">Previous</span></a>
                              <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span
                                class="carousel-control-next-icon" aria-hidden="true"></span><span
                                class="sr-only">Next</span></a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="lg" class="d-none d-lg-block"></div>
        <div id="md" class="d-none d-md-block d-lg-none"></div>
        <div id="sm" class="d-none d-sm-block d-md-none"></div>



    </div>
        
        <h3 class="container my-4 titulo-2 pb-0 pt-0  ">CATEGORIAS</h3>
        <div class="container rounded">
          <div class="row">
                <?php $__currentLoopData = $categoriesAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 my-lg-0 my-3 pb-1" onclick="goToProduct('<?php echo e($categorie->cate_name); ?>','<?php echo e($categorie->id); ?>');">
                    <div class="box bg-white">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle mx-3 text-center d-flex align-items-center justify-content-center blue"> <img class="img-categories-now" src="<?php echo e(asset('assets/img/sticker/sticker_esqueleto.png')); ?>" alt=""> </div>
                            <div class="d-flex flex-column"> <b class="style-black text-uppercase"><?php echo e($categorie->cate_name); ?></b> <a class="decorate-a" href="#">
                                    <p class="text-muted style-muted"><?php echo e($categorie->CateProd->count()); ?> items</p>
                                </a> </div>
                        </div>
                    </div>
                </div>                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </div>

    <h3 class="container my-4 titulo-2 ">DESCUBRE</h3>

    <div class="container rounded">
      <div class="row">
          <div class="col-lg-6 col-md-6 my-lg-0 my-3" onclick="goToProduct('todos','0');">
              <div class="box bg-white card-descubre-3" >
                  <div class="row offer-card-now">
                      <div class="col-lg-6 col-md-12 col-sm-6 col-12 p-4 ">
                        <div> 
                          <b class="style-black text-uppercase">NUEVOS PACK DE STICKERS</b> 
                        </div>
                        <div>
                          
                              <p class="text-muted style-muted pt-4 delete-padding-now">Nuevos pack de stickers y de todo tipo. Echale un vistaso</p>
                          
                        </div>
                        <div class="pt-4">
                          <button class="cart-shop-style"><a onclick="goToProduct('todos','0');" style="text-decoration: none !important;color:white;">Descubrir</a></button>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-6 col-12 text-center aux-img-descubre-now" > 
                        <img class="img-descubre" src="<?php echo e(asset('assets/img/sticker/sticker_esqueleto.png')); ?>" alt=""> 
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 my-lg-0 my-3" onclick="goToProduct('todos','0');">
            <div class="box bg-white card-descubre-3" >
                <div class="row offer-card-now">
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12 p-4 ">
                      <div> 
                        <b class="style-black text-uppercase">NUEVOS PACK DE STICKERS</b> 
                      </div>
                      <div>
                        
                            <p class="text-muted style-muted pt-4 delete-padding-now">Nuevos pack de stickers y de todo tipo. Echale un vistaso</p>
                        
                      </div>
                      <div class="pt-4">
                        <button class="cart-shop-style"><a onclick="goToProduct('todos','0');" style="text-decoration: none !important;color:white;">Descubrir</a></button>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12 text-center aux-img-descubre-now" > 
                      <img class="img-descubre" src="<?php echo e(asset('assets/img/sticker/sticker_esqueleto.png')); ?>" alt=""> 
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>






    <h3 class="container my-4 titulo-2 ">PRODUCTOS MAS RECIENTES</h3>
    <div class="container row d-flex justify-content-between m-auto">

        <?php $__currentLoopData = $recentProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productR): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-3 col-md-4 col-sm-6 col-6 m-auto" onclick="window.location='/productos/detalles-<?php echo e($productR->id); ?>'" style="cursor: pointer;">

        <div class="card">
            <img class="img-product-p" style="height: 200px !important"
                src="<?php echo e($productR->prod_img1); ?>" alt="Card image cap">



            <div class="card-body">
                <?php if($productR->prod_discount!=null): ?>
                <label for="" style="display: block;text-decoration: line-through;" class="text-muted">
                    S/ <?php echo e(number_format($productR->prod_price, 2)); ?></label>
                <h3 style="display: inline-block" class="card-title precio-product">S/ <?php echo e(number_format($productR->prod_price*(100 - $productR->prod_discount)/100, 2)); ?></h3><label
                    class="text-success">&nbsp;<?php echo e($productR->prod_discount); ?>% OFF</label>
                <p class="card-text text-muted"><?php echo e($productR->prod_name); ?></p>
                <?php else: ?>
                <h3 style="display: inline-block" class="card-title precio-product">S/ <?php echo e(number_format($productR->prod_price,2)); ?></h3>
                <p class="card-text text-muted"><?php echo e($productR->prod_name); ?></p>

                <?php endif; ?>

            </div>
        </div>
      </div>  

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>












    <style>
        .multi-carousel {
            opacity: 0;
            padding: 0 25px;
        }

        .multi-carousel .carousel-control-next,
        .multi-carousel .carousel-control-prev {
            width: 25px;
            background: gray;
            height: 80px;
            margin: auto;
        }

    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido_abajo_js'); ?>
    <script>
        $('#blogCarousel').carousel({
            interval: 5000
        });

        $('#blogCarousel-2').carousel({
            interval: 5000
        });

        // Productos populares
        var $origin = $("#carouselPlus .carousel-inner").prop("outerHTML");

        function multiCarousel() {
            if ($("#lg").is(":visible")) {
                do {
                    $("#carouselPlus .carousel-inner").children(".carousel-grid:lt(4)").wrapAll(
                        "<div class=\"carousel-item\"><div class=\"row\"></div></div>");
                    $("#carouselPlus .carousel-inner .carousel-item:first").addClass("active");
                } while ($("#carouselPlus .carousel-inner").children(".carousel-grid").length);
            } else if ($("#md").is(":visible")) {
                do {
                    $("#carouselPlus .carousel-inner").children(".carousel-grid:lt(3)").wrapAll(
                        "<div class=\"carousel-item\"><div class=\"row\"></div></div>");
                    $("#carouselPlus .carousel-inner .carousel-item:first").addClass("active");
                } while ($("#carouselPlus .carousel-inner").children(".carousel-grid").length);
            } else {
                do {
                    $("#carouselPlus .carousel-inner").children(".carousel-grid:lt(1)").wrapAll(
                        "<div class=\"carousel-item\"><div class=\"row\"></div></div>");
                    $("#carouselPlus .carousel-inner .carousel-item:first").addClass("active");
                } while ($("#carouselPlus .carousel-inner").children(".carousel-grid").length);
            }
        }
        $(window).on("load resize", function() {
            $.when(
                $("#carouselPlus .carousel-inner").replaceWith($origin),
                multiCarousel()
            ).done(function() {
                $(".multi-carousel").animate({
                    opacity: "1"
                }, 1000);
            });
        });

    </script>
<script>

  function goToProducts(){
    window.location="/productos/todos";
  }
  function goToProduct(nameProductJs,idProductJs){
    window.location="/productos/"+nameProductJs+"/"+idProductJs;
  }

  function goToDetails(){
    window.location="/producto/detalle";
  }
  $(document).ready(function(){
    $(document).on('click','#sticker-categories',function(){
      window.location="/productos";
    });
    $(document).on('click','#expansores-categories',function(){
      window.location="/productos";
    });

    
  });


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JesusM\Desktop\proyectoTaller\mueblesNet\resources\views/home.blade.php ENDPATH**/ ?>