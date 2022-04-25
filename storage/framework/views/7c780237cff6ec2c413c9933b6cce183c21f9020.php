<aside class="col-lg-9" style="">

    <div class="card">
        <div class="container">
            <?php if(empty($messageMaxQuantity)): ?>
            <?php else: ?>
                <h4 class="text-danger">* <?php echo e($messageMaxQuantity); ?></h4>                
            <?php endif; ?>
                
        </div>
        <div class="table-responsive">
            <table class="table table-borderless table-shopping-cart">
                <thead class="text-muted">
                <tr class="small text-uppercase">
                    <th scope="col">Producto</th>
                    <th scope="col" width="120">Cantidad</th>
                    <th scope="col" width="120">Precio</th>
                    <th scope="col" class="text-right " width="200">Accion</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $valueWithoutCondition=0;
                ?>
                <?php if(!Cart::isEmpty()): ?>  

                <?php $__currentLoopData = Cart::getContent()->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td>
                        <figure class="itemside align-items-center">
                            <div class="aside"><img src="<?php echo e($item->attributes->img1); ?>" class="img-sm"></div>
                            <figcaption class="info"> <a href="#" class="title text-dark decoration-a-checkout" data-abc="true"><?php echo e($item->name); ?></a>
                                <p class="text-muted small">.<br>- - -</p>
                            </figcaption>
                        </figure>
                    </td>
                    <td> 





                    <?php
                        $valuePrice = $item->price;
                    ?>
                    <?php if($item['conditions']!=null): ?>
                        <?php $__currentLoopData = $item['conditions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conditionItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($conditionItem->getName() == 'SALE 25%'): ?>
                                <div class="price-wrap text-center">
                                    <label class="text-muted" style="font-size:0.75em;margin-bottom:0px;"> <span style="text-decoration: line-through;"><?php echo e(number_format($valuePrice,2)); ?></span><span style="font-weight: bold"> (<?php echo e($conditionItem->getValue()); ?>)</span></label>
                                </div>
                                <?php
                                    $valuePrice = $valuePrice-$conditionItem->getCalculatedValue($valuePrice);
                                ?>
                            <?php endif; ?>
                            <?php if($conditionItem->getName() == 'SALE SUBTOTAL 10%'): ?>
                                <div class="price-wrap text-center">
                                    <label class="text-muted" style="font-size:0.75em;margin-bottom:0px;"> <span style="text-decoration: line-through;"><?php echo e(number_format($valuePrice,2)); ?></span><span style="font-weight: bold"> (<?php echo e($conditionItem->getValue()); ?>)</span></label>
                                </div>
                                <?php
                                    $valuePrice = $valuePrice-$conditionItem->getCalculatedValue($valuePrice);
                                ?>
                            <?php endif; ?>
                            <?php if($conditionItem->getName() == 'SALE SUBTOTAL 15%'): ?>
                                <div class="price-wrap text-center">
                                        <label class="text-muted" style="font-size:0.75em;margin-bottom:0px;"> <span style="text-decoration: line-through;"><?php echo e(number_format($valuePrice,2)); ?></span><span style="font-weight: bold"> (<?php echo e($conditionItem->getValue()); ?>)</span></label>
                                </div>
                                <?php
                                $valuePrice = $valuePrice-$conditionItem->getCalculatedValue($valuePrice);
                                ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="price-wrap text-center">
                            <label class="font-weight-bold text-center" style="margin-bottom:0px;"> <b>S/<?php echo e(number_format($item->getPriceWithConditions(),2)); ?></b></label>
                        </div>
                        <div class="price-wrap text-center ">
                            <var class="price" style="height: 30px"><br>X </var>
                        </div>

                    <?php else: ?>
                        <div class="price-wrap text-center">
                            <label class="font-weight-bold text-center"> <b>S/<?php echo e(number_format($item->getPriceWithConditions(),2)); ?></b></label>
                        </div>
                        <div class="price-wrap text-center">
                            <var class="price"><br>X </var>
                        </div>

                    <?php endif; ?>

                            <div class="d-flex justify-content-center">
                                    <span class="input-group-prepend">
                                        <button class="btn btn-outline-secondary btn-number" data-type="minus" data-field="quant[<?php echo e($item->id); ?>]">
                                            <span  class="fa fa-minus"></span>
                                        </button>
                                    </span>
                                    <input style="width: 42px" type="text" data-input-now="quant[<?php echo e($item->id); ?>]" data-user-id="<?php echo e($item->id); ?>" name="quantityProductCart" class="form-control input-number" value="<?php echo e($item->quantity); ?>" min="1" max="<?php echo e($item->attributes->maxQuantity); ?>">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[<?php echo e($item->id); ?>]">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                            </div>
                        

                    <td>
                        <div class="price-wrap"> 
                            <var class="price">                                
                                S/ 
                            <?php
                                $valueWithoutCondition = $valueWithoutCondition + $item->getPriceSumWithConditions();
                                echo number_format($item->getPriceSumWithConditions(),2);
                            ?>                                
                            </var>
                        </div>
                    </td>

                    <td class="text-right d-none d-block d-sm-block d-md-block"> 
                        <form method="POST" action="<?php echo e(route('cart.destroy',$item->id)); ?>">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button  type="submit" class="btn btn-light decoration-a-checkout" data-abc="true">X</button> 
                        </form>
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <h2 class="text-center">Ningun producto en el carrito</h2>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex flex-row-reverse text-white p-4" id="subtotal-2">
        
    </div>
</aside>
<aside class="col-lg-3">
    <div class="card mb-3">
        <div class="card-body">
            <form>
                <div class="form-group"> <label>¿Tienes un cupon?</label>
                    <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Codigo de cupon"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon btn-aplicar-2">Aplicar</button> </span> </div>
                </div>
            </form>
        </div>
    </div>
    
    
    <div class="card">

        <div class="card-body">

            <dl class="dlist-align d-flex justify-content-between">
                <dt>Precio:</dt>
                <dd class="text-right ml-3">
                <?php if($valueWithoutCondition==0): ?>
                    - - -
                <?php else: ?>
                S/ <?php echo e(number_format($valueWithoutCondition,2)); ?>

                <?php endif; ?>
                </dd>
            </dl>
            <dl class="dlist-align d-flex justify-content-between">
                <dt>Descuento:</dt>
                <dd class="text-right text-danger ml-3">
                    <?php if(Cart::getCondition('SALE SUBTOTAL 10%')!=null): ?>
                    <?php echo e(Cart::getCondition('SALE SUBTOTAL 10%')->getValue()); ?>                                          
                    <?php endif; ?>
                    <?php if(Cart::getCondition('SALE SUBTOTAL 15%')!=null): ?>
                    <?php echo e(Cart::getCondition('SALE SUBTOTAL 15%')->getValue()); ?>

                    <?php endif; ?>
                </dd>
            </dl>
            <hr style="height: 1px; background-color:black;">
            <dl class="dlist-align d-flex justify-content-between">
                <dt>Subtotal:</dt>
                <dd class="text-right ml-3">S/<?php echo e(number_format(Cart::getSubTotal(),2)); ?></dd>
            </dl>
            <dl class="dlist-align d-flex justify-content-between">
                <dt>Cargo por envio:</dt>
                <dd class="text-right ml-3">
                    <?php if(Cart::getCondition('SHIPPING XX')!=null): ?>
                    S/<?php echo e(number_format(Cart::getCondition('SHIPPING XX')->getValue(),2)); ?>

                    <?php else: ?>
                     Seleccione distrito
                    <?php endif; ?>
    
                </dd>



            </dl>
        
            <hr style="height: 1px; background-color:black;">
        
            <dl class="dlist-align d-flex justify-content-between">
                <dt>Total:</dt>
                <dd class="text-right text-dark b ml-3"><strong>S/<?php echo e(number_format(Cart::getTotal(),2)); ?></strong></dd>
            </dl>
            <hr>
            <button type="submit" class="btn btn-out btn-square btn-main" id="button-submit-order" data-abc="true"> Completar compra </button>
            
            <a href="<?php echo e(route('products')); ?>" class="btn btn-out btn-success btn-square btn-main-2 mt-2" data-abc="true">Continuar comprando</a>
        </div>



    </div>


</aside>

<script>
    $('#button-submit-order').click(function(event){
        event.preventDefault();
        $('#form-order-user').submit();
    });
</script>


    <script>
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
        $('.input-number').focusin(function(){
        $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {
            
            minValue =  parseInt($(this).attr('min'));
            maxValue =  parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());
            name = $(this).attr('data-input-now');
            userValueId = parseInt($(this).attr('data-user-id'));
            // alert(minValue);
            // alert(maxValue);
            // alert(valueCurrent);
            // alert(name);
            // alert(userValueId);
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
                $.ajax({
                    url: "/cart/"+userValueId,
                    method:"PUT",
                    data:{'quantityProductCart':valueCurrent,'where':'checkout-2'},
                    success: function(data) {
                        $("#content-central-checkout").html(data);
                        $("#content-central-checkout").removeClass('div-disabled');
                    },
                    beforeSend: function(thisXHR) {
                        $("#content-central-checkout").addClass('div-disabled');
                    },
                    statusCode: {
                        404: function() {
                            alert("Error en la paginacion");
                        }
                    },
                    error: function(jqXHR, status, error) {
                        alert("Error al cargar tabla de productos");
                    }
                });
            }
        });

        $(".input-number").keydown(function (e) {
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
            
    
        

    </script><?php /**PATH C:\Users\JesusM\Desktop\proyectoTaller\mueblesNet\resources\views/producto/include/checkout_prod.blade.php ENDPATH**/ ?>