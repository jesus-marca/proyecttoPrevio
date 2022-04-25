<span class="fixed-cart-shop" >
    <a class="nav-link" href="#" data-toggle="modal" data-target="#modal-cart-shop">
      <i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style="color: black !important;">
          <span class="badge badge-success number-shop-cart"><?php echo e(Cart::getContent()->count()); ?></span>
      </i>
    </a>
</span>


<div class="container">
    <div class="modal left fade" id="modal-cart-shop" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" id="modal-cart-shop-only-body">

                    <?php if(!Cart::isEmpty()): ?>

                    <section class="pb-5">
                        <div class="">
                          <div class="row w-100">
                              <div class="col-lg-12 d-flex justify-content-end">
                                  <button type="button" class="btn btn-secondary btn-dismiss-jquery" data-dismiss="modal">X</button>                              
                              </div>
                              <div class="col-lg-12 col-md-12 col-12">

                
                                  <h3 class="display-5 mb-2 text-center">Mi carrito</h3>
                                  <p class="text-center">
                                      <i class="text-info font-weight-bold"><?php echo e(Cart::getContent()->count()); ?></i> productos en el carro</p>
                                      <p class="text-center"><a href="<?php echo e(route('clear-cart')); ?>">Limpiar mi carrito :(</a> </p>

                                        


                                  <table id="shoppingCart" class="table table-condensed table-responsive">
                                      <thead>
                                          <tr>
                                              <th style="width:60%">Producto</th>
                                              <th style="width:12%">Precio</th>
                                              <th style="width:16%">Subtotal</th>
                                              <th style="width:10%">Accion</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <style>
                                              .table-complete{
                                                width: 100%;
                                                min-width: 400px;
                                              }
                                          </style>

                                          <?php $__currentLoopData = Cart::getContent()->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr class="table-complete">
                                              <td data-th="Product" style="font-weight: bold;">
                                                  <div class="row">
                                                      <div class="col-md-12 text-left">
                                                        <h4 style="font-size: 12px;text-align:center;" class="text-uppercase font-weight-bold"><a href="<?php echo e(route('details-product',$item->id)); ?>"><?php echo e($item->name); ?></a></h4>

                                                        <a href="<?php echo e(route('details-product',$item->id)); ?>">
                                                            <img src="<?php echo e($item->attributes->img1); ?>" alt="" class="img-fluid rounded mb-2 shadow img-cart-popup">
                                                        </a>
                                                    </div>
                                                  </div>
                                              </td>
                                              
                                              <td data-th="Quantity" class="text-center cart-popup-quantity" >
                                                <?php
                                                    $valuePrice = $item->price;
                                                ?>
                                                <?php if($item['conditions']!=null): ?>
                                                
                                                    <?php $__currentLoopData = $item['conditions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conditionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($conditionItem->getName() == 'SALE 25%'): ?>
                                                            <label class="text-muted" style="font-size:0.75em;"> <span style="text-decoration: line-through;"><?php echo e(number_format($valuePrice,2)); ?></span><span style="font-weight: bold"> (<?php echo e($conditionItem->getValue()); ?>)</span></label>
                                                            <?php
                                                                $valuePrice = $valuePrice-$conditionItem->getCalculatedValue($valuePrice);
                                                            ?>
                                                        <?php endif; ?>
                                                        <?php if($conditionItem->getName() == 'SALE SUBTOTAL 10%'): ?>
                                                            <label class="text-muted" style="font-size:0.75em;"> <span style="text-decoration: line-through;"><?php echo e(number_format($valuePrice,2)); ?></span><span style="font-weight: bold"> (<?php echo e($conditionItem->getValue()); ?>)</span></label>

                                                            <?php
                                                                $valuePrice = $valuePrice-$conditionItem->getCalculatedValue($valuePrice);
                                                            ?>

                                                        <?php endif; ?>

                                                        <?php if($conditionItem->getName() == 'SALE SUBTOTAL 15%'): ?>
                                                            <label class="text-muted" style="font-size:0.75em;"> <span style="text-decoration: line-through;"><?php echo e(number_format($valuePrice,2)); ?></span><span style="font-weight: bold"> (<?php echo e($conditionItem->getValue()); ?>)</span></label>

                                                            <?php
                                                            $valuePrice = $valuePrice-$conditionItem->getCalculatedValue($valuePrice);
                                                            ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <label class="font-weight-bold text-center"> <b>S/<?php echo e(number_format($item->getPriceWithConditions(),2)); ?></b></label>

                                                <?php else: ?>
                                                    <label class="font-weight-bold text-center"> <b>S/<?php echo e(number_format($item->getPriceWithConditions(),2)); ?></b></label>
                                                <?php endif; ?>



                                                
                                                <label>X </label>
                                                <label> <b><?php echo e($item->quantity); ?></b>  unidades</label>
                                                <form class="" method="POST" action="<?php echo e(route('cart.update', $item->id )); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="d-flex justify-content-center">
                                                            <span class="input-group-prepend">
                                                                <button class="btn btn-outline-secondary btn-number" data-type="minus" data-field="quant[<?php echo e($item->id); ?>]">
                                                                    <span  class="fa fa-minus"></span>
                                                                </button>
                                                            </span>
                                                            <input style="width: 42px" type="text" data-input-now="quant[<?php echo e($item->id); ?>]" data-user-id-product="<?php echo e($item->id); ?>" name="quantityProductCart" class="form-control input-number-cart" value="<?php echo e($item->quantity); ?>" min="1" max="<?php echo e($item->attributes->maxQuantity); ?>">
                                                            <span class="input-group-append">
                                                                <button class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[<?php echo e($item->id); ?>]">
                                                                    <span class="fa fa-plus"></span>
                                                                </button>
                                                        </span>

                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </form>
                                                </td>
                                              <td class="actions " data-th="">
                                                  <div class="text-right ">
                                                      
                                                      <p class="text-center">S/<?php echo e(number_format($item->getPriceSumWithConditions(),2)); ?></p>
                                                      

                                                      <br>



                                                  </div>
                                              </td>
                                              <td>

                                                <form method="POST" action="<?php echo e(route('cart.destroy',$item->id)); ?>">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                <button class="btn btn-white border-secondary bg-white btn-md mb-2 d-flex align-items-center" type="submit">
                                                    <i class="fa fa-trash">                                                
                                                    </i>
                                                </button>
                                                </form>



                                              </td>
                                          </tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </tbody>
                                  </table>
                                  <div class="float-right text-right">
                                      <?php if(Cart::getCondition('SALE SUBTOTAL 10%')!=null): ?>
                                      <h4>Descuento:</h4>
                                      <h1><?php echo e(Cart::getCondition('SALE SUBTOTAL 10%')->getValue()); ?></h1>                                          
                                      <?php endif; ?>
                                      <?php if(Cart::getCondition('SALE SUBTOTAL 15%')!=null): ?>
                                      <h4>Descuento:</h4>
                                      <h1><?php echo e(Cart::getCondition('SALE SUBTOTAL 15%')->getValue()); ?></h1>
                                      <?php endif; ?>
                                      <h4>Subtotal:</h4>
                                      <h1>S/ <?php echo e(number_format(Cart::getSubTotal(),2)); ?></h1>
                                  </div>
                              </div>
                          </div>
                          <div class="row mt-4 d-flex align-items-center flex-column justify-content-center">
                              <div class="col-12 col-sm-12 order-md-1 order-lg-1 order-sm-1 text-right d-flex justify-content-center">
                                  <a href="<?php echo e(route('checkout-product')); ?>" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Completar compra</a>
                              </div>
                              <div class="col-12 col-sm-12 mb-3 mb-m-1 order-md-2 order-lg-2 order-sm-2 text-md-left d-flex justify-content-center">
                                  <a href="#" data-dismiss="modal" onclick="e.preventDefault();">
                                      <i class="fa fa-arrow-left mr-2"></i>Continuar comprando</a>
                              </div>
                          </div>
                      </div>
                    </section>
                    <?php else: ?>
                    <h4 class="text-center d-flex align-items-center justify-content-center" style="height: 100%">Ningun producto en la cesta</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal de oferta-->




<!-- container -->
<style>


.modal.left .modal-dialog {
    position:fixed;
    right: 0;
    margin: auto;
    width: 400px !important;
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
    -ms-transform: translate3d(0%, 0, 0);
    -o-transform: translate3d(0%, 0, 0);
    transform: translate3d(0%, 0, 0);
}

@media (min-width : 768px) and (max-width: 991px){
    .modal.left .modal-dialog {
        width: 400px !important;
    }


}

@media (min-width : 576px) and (max-width: 768px){
    .modal.left .modal-dialog {
        width: 400px !important;
    }
}

@media (min-width : 450px) and (max-width: 576px){
    .modal.left .modal-dialog {
        width: 400px !important;
    }

}

@media (min-width : 0px) and (max-width: 450px){
    .modal.left .modal-dialog {
        width: 90% !important;
        min-width: 250px;
        overflow: scroll;
    }
}


.modal.left .modal-content {
    height: 100%;
    overflow-y: auto;
}

.modal.right .modal-body {
    padding: 15px 15px 80px;
}

.modal.right.fade .modal-dialog {
    left: -320px;
    -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
    -o-transition: opacity 0.3s linear, left 0.3s ease-out;
    transition: opacity 0.3s linear, left 0.3s ease-out;
}

.modal.right.fade.show .modal-dialog {
    right: 0;
}

/* ----- MODAL STYLE ----- */
.modal-content {
    border-radius: 0;
    border: none;
}

.modal-header {
    border-bottom-color: #eeeeee;
    background-color: #fafafa;
}

.cart-popup-quantity{
    display: flex !important;
    flex-direction: column;
    align-items: center;
    flex-wrap: wrap;
}

.cart-popup-quantity > label{
    margin-bottom: 0px !important;
}

.img-cart-popup{
    width: 120;
    height: 60px;
}
</style>


<script>
    $(document).ready(function(){

        $('.btn-number').click(function(e){
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input[data-input-now='"+fieldName+"']");
            
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
        $('.input-number-cart').focusin(function(){
        $(this).data('oldValue', $(this).val());
        });
        $('.input-number-cart').change(function() {
            minValue =  parseInt($(this).attr('min'));
            maxValue =  parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());
            name = $(this).attr('data-input-now');
            userValueId = parseInt($(this).attr('data-user-id-product'));
            if(valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Lo siento, el minimo valor ya fue alcanzado');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Lo siento, el maximo valor a sido alcanzado');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent >=minValue && valueCurrent<=maxValue){
                //     $('.btn-number').attr('disabled', true);            
                // $.ajax({
                //     url: "/cart/"+userValueId,
                //     method:"PUT",
                //     data:{'quantityProductCart':valueCurrent,'where':'product-3'},
                //     success: function(data) {
                //         $("#product-cart-shop-now").html(data);
                //         $("#product-cart-shop-now").removeClass('div-disabled');
                //         $("#content-central-product").removeClass('div-disabled');

                //         $('#modal-cart-shop').modal('show')
                //         $('.btn-number').attr('disabled', false);            
                //     },
                //     beforeSend: function(thisXHR) {
                //         $("#product-cart-shop-now").addClass('div-disabled');
                //         $("#content-central-product").addClass('div-disabled');

                //         $("#modal-cart-shop").modal('hide');
                //         $('body').removeClass('modal-open');
                //         $('body').css('padding-right',0);
                //         $('.modal-backdrop').remove();
                //         $(this).attr('disabled', true);            
                //     },
                //     statusCode: {
                //         404: function() {
                //             alert("Error en la paginacion");
                //         }
                //     },
                //     error: function(jqXHR, status, error) {
                //         alert("Error al cargar tabla de productos");
                //     }
                // });
            }
        });

        $(".input-number-cart").keydown(function (e) {
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
    });

</script><?php /**PATH C:\Users\JesusM\Desktop\proyectoTaller\mueblesNet\resources\views/layouts/include/cartShop.blade.php ENDPATH**/ ?>