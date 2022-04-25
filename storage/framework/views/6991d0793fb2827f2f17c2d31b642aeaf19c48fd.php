


<?php $__env->startSection('contenido_js'); ?>

    <script src="<?php echo e(asset('js/jquery.jcarousel.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido_cSS'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/styleDetails.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/template.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>






    <div class="container content-main">
        <div class="row">
            <div class="col-lg-12 py-2">
                <a href="<?php echo e(url('/productos/todos/0')); ?>" class="btn btn-success">Atras</a>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12 section-photo" >
                <div class="">
                    <div class="wrapper" >
                        <div class="connected-carousels" >
                            <div class="stage">
                                <div class="carousel carousel-stage" >
                                    
                                    <ul style="width: 1000%">
                                        <?php if($productDetails->prod_img1!=null): ?>

                                        <li style="width: 10%;"><img class="img-carousel-2"
                                                src="<?php echo e($productDetails->prod_img1); ?>" alt="">
                                        </li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img2!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img2); ?>" alt="">
                                        </li>                                    
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img3!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img3); ?>" alt="">
                                        </li>                                    
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img4!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img4); ?>" alt="">
                                        </li>                                    
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img5!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img5); ?>" alt="">
                                        </li>                                    
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img6!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img6); ?>" alt="">
                                        </li>                                    
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img7!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img7); ?>" alt="">
                                        </li>                                     
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img8!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img8); ?>" alt="">
                                        </li>                                    
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img9!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img9); ?>" alt="">
                                        </li>                                    
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img10!=null): ?>
                                        <li style="width: 10%;"><img class="img-carousel-2"
                                            src="<?php echo e($productDetails->prod_img10); ?>" alt="">
                                        </li>                                    
                                        <?php endif; ?>



                                    </ul>
                                </div>
                                
                                
                            </div>

                            <div class="navigation">
                                <a href="#" class="prev prev-navigation">&lsaquo;</a>
                                <a href="#" class="next next-navigation">&rsaquo;</a>
                                <div class="carousel carousel-navigation">
                                    <ul>
                                        <?php if($productDetails->prod_img1!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img1); ?>"
                                                width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img2!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img2); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img3!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img3); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img4!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img4); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img5!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img5); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img6!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img6); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img7!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img7); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img8!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img8); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img9!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img9); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>
                                        <?php if($productDetails->prod_img10!=null): ?>
                                        <li><img src="<?php echo e($productDetails->prod_img10); ?>"
                                            width="50" height="60" alt=""></li>
                                        <?php endif; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 section-content-right mt-4 p-2" style="border:0px solid gray">
                <!-- Datos del vendedor y titulo del producto -->
                <h3 class="title-principal"><?php echo e($productDetails->prod_name); ?></h3>
                <h5 style="color:#337ab7"><small style="color:#337ab7">(<?php echo e($productDetails->prod_sell_num); ?> veces vendido)</small></h5>

                <!-- Precios -->

                <h6 class="title-price"><small>PRECIO</small></h6>
                <?php if($productDetails->prod_discount!=null): ?>
                <label for="" style="display: block;text-decoration: line-through;" class="text-muted">
                    S/ <?php echo e(number_format($productDetails->prod_price, 2)); ?></label>
                <h3 style="display: inline-block" class="card-title precio-product">S/ <?php echo e(number_format($productDetails->prod_price*(100 - $productDetails->prod_discount)/100, 2)); ?></h3><label
                    class="text-success">&nbsp;<?php echo e($productDetails->prod_discount); ?>% OFF</label>
                <?php else: ?>
                <h3 style="display: inline-block" class="card-title precio-product">S/ <?php echo e(number_format($productDetails->prod_price,2)); ?></h3>

                <?php endif; ?>

                <?php if($productDetails->prod_quantity>0): ?>

                
                    <?php if(Cart::get($productDetails->id) ==null): ?>


                    <form class="form-product-data-details" method="POST" action="<?php echo e(route('cart.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="container py-4">
                            
                            <div class="row counter-quantity-form">
                                <div class="">


                                    

                                    <input type="hidden" name="idProductCart" value="<?php echo e($productDetails->id); ?>">
                                    <input type="hidden" name="nameProductCart" value="<?php echo e($productDetails->prod_name); ?>">
                                    <input type="hidden" name="priceProductCart" value="<?php echo e($productDetails->prod_price); ?>">
                                    <input type="hidden" name="img1ProductCart" value="<?php echo e($productDetails->prod_img1); ?>">
                                    <input type="hidden" name="discountProductCart" value="<?php echo e($productDetails->prod_discount); ?>">
                                    <input type="hidden" name="categorieProductCart" value="<?php echo e($productDetails->cate_id); ?>">
                                    <input type="hidden" name="maxQuantityProductCart" value="<?php echo e($productDetails->prod_quantity); ?>">
                                    
                                    <div class="input-group d-flex align-items-center" >

                                        <span style="font-weight: bold">Cantidad :&nbsp;</span> 
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn btn-outline-secondary btn-number-details" data-type="minus" data-field="sec[0]">
                                                <span class="fa fa-minus"></span>
                                            </button>
                                        </span>
                                        <input style="width: 50px" data-user-id="<?php echo e($productDetails->id); ?>" data-input-one="sec[0]" type="text" id="quantity-now-product-2" name="quantityProductCart" class="form-control input-number-2" value="1" min="1" max="<?php echo e($productDetails->prod_quantity); ?>">                                    
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary btn-number-details" data-type="plus" data-field="sec[0]">
                                                <span class="fa fa-plus"></span>
                                            </button>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Botones de compra -->
                        <div class="section d-flex justify-content-center" style="padding-bottom:20px;">
                            <button class="btn btn-success cart-shop-style" type="submit"><span style="margin-right:10px"
                                    class="fa fa-shopping-cart" aria-hidden="true"></span> AGREGAR AL CARRITO</button>
                        </div>
                        <?php if(session('productSell')): ?>
                            <h4 class="text-center text-danger"><?php echo e(session('productSell')); ?></h4>                
                        <?php endif; ?>

                    </form>

                    <?php else: ?>

                    



                    <form class="form-product-data-details" method="POST" action="<?php echo e(route('cart.update', $productDetails->id )); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="container py-4">
                            
                            <div class="row counter-quantity-form">
                                <div class="">
                                    <div class="input-group d-flex align-items-center" >
                                        <span style="font-weight: bold">Cantidad :&nbsp;</span> 
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn btn-outline-secondary btn-number-details" data-type="minus" data-field="sec[0]">
                                                <span class="fa fa-minus"></span>
                                            </button>
                                        </span>
                                        <input style="width: 50px" data-user-id="<?php echo e($productDetails->id); ?>" type="text" id="quantity-now-product-2" data-input-one="sec[0]" name="quantityProductCart" class="form-control input-number-2" value="<?php echo e(Cart::get($productDetails->id)->quantity); ?>" min="1" max="<?php echo e($productDetails->prod_quantity); ?>">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary btn-number-details" data-type="plus" data-field="sec[0]">
                                                <span class="fa fa-plus"></span>
                                            </button>
                                        </span>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- Botones de compra -->
                        <div class="section d-flex justify-content-center" style="padding-bottom:20px;">
                            <button class="btn btn-success cart-shop-style" type="submit"><span style="margin-right:10px"
                                    class="fa fa-shopping-cart" aria-hidden="true"></span> AGREGAR AL CARRITO</button>
                        </div>
                        <?php if(session('productSell')): ?>
                            <h4 class="text-center text-danger"><?php echo e(session('productSell')); ?></h4>                
                        <?php endif; ?>

                    </form>                
                    <?php endif; ?>

                <?php else: ?>
                    <?php if(session('productSell')): ?>
                        <h4 class="text-center text-danger"><?php echo e(session('productSell')); ?></h4>                
                    <?php endif; ?>

                
                    <h4 class="text-center">Producto agotado :(</h4>
                <?php endif; ?>

                <p class="subtitle-2">Disponibilidad y tiempo de entrega</p>
                <div class="container-icons d-flex align-items-center">
                    <i class="fa fa-truck fa-2x icons-able mr-2" aria-hidden="true"></i>Disponible para envio a domicilio en todo el Perú (Solo Olva Courier)
                </div>
                <br>
                <div class="container-icons">
                    <i class="fa fa-hand-peace-o fa-2x icons-able mr-2" aria-hidden="true"></i>Disponible para contraentrega <label style="cursor: pointer;color:blue" data-toggle="modal" data-target="#modalMap">( Unico punto consulta aqui)</label>
                </div>
            </div>
        </div>

        <section id="tabs-information">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                                    aria-controls="nav-home" aria-selected="true">Descripcion</a>
                                <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Caracteristicas</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                <?php echo $productDetails->prod_description; ?>

                            </div>
                            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <?php echo $productDetails->prod_features; ?>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        
        <h5 class="title-principal">Tambien te podria gustar</h5>

        <div class="container background-2-now">
            <div class="row">
                <div id="carouselPlus" class="carousel slide multi-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $__currentLoopData = $productRelated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                        <div class="carousel-grid col-lg-3 col-md-4 col-sm-12">

                            <div class="card mb-2">
                                <a href="<?php echo e(route('details-product',$related->id)); ?>}">
                                <img class="card-img-top img-product-p"
                                    src="<?php echo e($related->prod_img1); ?>" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                    <?php if($related->prod_discount !=null): ?>
                                    <label for="" style="display: block;text-decoration: line-through;" class="text-muted">
                                        S/ <?php echo e(number_format($related->prod_price, 2)); ?></label>
                                    <h4 style="display: inline-block" class="card-title">S/ <?php echo e(number_format($related->prod_price*(100 - $related->prod_discount)/100, 2)); ?></h4><label
                                        class="text-success">&nbsp;<?php echo e($related->prod_discount); ?>% OFF</label>
                                    <?php else: ?>
                                    <h4 style="display: inline-block" class="card-title">S/ <?php echo e(number_format($related->prod_price, 2)); ?></h4>

                                    <?php endif; ?>
                                    <p class="card-text text-muted"><?php echo e($related->prod_name); ?></p>
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
                            <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span
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







        <style>
            .multi-carousel {
                opacity: 0;
                padding: 0 25px;
            }

            .multi-carousel .carousel-control-next,
            .multi-carousel .carousel-control-prev {
                width: 25px;
                background: gray;
            }

        </style>


<div class="modal fade" id="modalMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Unico lugar de entrega</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <a href="https://goo.gl/maps/1cpgwRf5Apj9dbdu7" class="text-center" target="_blank">Ir al mapa en google maps</a>            

        <div class="modal-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d975.6976233672407!2d-77.0794612!3d-11.9889938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc3ff2e2f7f49d93!2sParque%20Virgen%20De%20La%20Soledad!5e0!3m2!1ses!2spe!4v1613719483082!5m2!1ses!2spe" width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          
        </div>
      </div>
    </div>
  </div>


    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('contenido_abajo_js'); ?>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') //Obtiene el token 										csrf
        }
    });
</script>
<script src="<?php echo e(asset('js/jsDetailsProduct.js')); ?>"></script>
<script>
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

$('.btn-number-details').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[data-input-one='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number-2').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number-2').change(function() {
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    userValueId = parseInt($(this).attr('data-user-id'));
    name = $(this).attr('data-input-one');
    if(valueCurrent >= minValue) {
        $(".btn-number-details[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Lo sentimos, el minimo valor a sido alcanzado');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number-details[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Lo sentimos, el maximo valor a sido alcanzado');
        $(this).val($(this).data('oldValue'));
    }

});

$(".input-number-2").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
         // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) || 
         // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
    
    
        
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JesusM\Desktop\proyectoTaller\mueblesNet\resources\views/producto/detailsProduct.blade.php ENDPATH**/ ?>