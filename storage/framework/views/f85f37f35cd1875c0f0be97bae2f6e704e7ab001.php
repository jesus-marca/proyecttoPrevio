


<?php $__env->startSection('contenido_js'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido_cSS'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/template.css')); ?>">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container px-1 px-md-4 py-5 mx-auto bg-white shadow mt-4">
    <div class="card" style="border-color: white !important;">
        <div class="col-12">
            <h5 class="text-center title-principal">Proceso de compra</h5>
        </div>

        <div class="row d-flex justify-content-between" style="margin-right: 0px !important;margin-left: 0px !important;" >
            
            <div class="d-flex">
                
            </div>
            
        </div> 
        <div class="row d-flex justify-content-center" style="margin-right: 0px !important;margin-left: 0px !important;" >
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0"> Detalles de compra</li>
                    
                    <li class="active step0">Pago de compra</li>
                    <li class="step0">Orden enviada</li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="text-left text-muted text-info">
        <label for="">* El paquete sera enviado a Olva Courier dentro de 2 dias habiles como maximo</label>
        <br>
        <label for="">* El Numero de Tracking sera enviado una vez realizado el pago</label>
        <br>
        <label for="">* Para el seguimiento del producto puedes <a target="_blank" style="font-weight: bold" href="https://www.olvacourier.com/app2-0/app02-seguimiento-envios/">consultar aqui</a> </label>
    </div>
</div>

<section class="container bg-white py-4 p-4 mt-4 subtitle">
    <div class="text-center ">Tu pedido quedo registrado, <label style="color: red;">nos comunicaremos contigo</label>  en las proximas 24 horas para completar la compra</div>
    <div class="text-center">Lamentablemente ahora no disponemos de pago via internet</div>

</section>


<?php $__env->stopSection(); ?>


<style>

.card {
    z-index: 0;
    padding-bottom: 20px;
    border-radius: 10px
}


#progressbar {
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%
}

#progressbar li:nth-child(2):after,
#progressbar li:nth-child(3):after {
    left: -50%
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #651FFF
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c"
}
</style>


<?php $__env->startSection('contenido_abajo_js'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JesusM\Desktop\proyectoTaller\mueblesNet\resources\views/producto/paymentProduct.blade.php ENDPATH**/ ?>