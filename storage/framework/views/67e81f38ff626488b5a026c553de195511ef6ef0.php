


<?php $__env->startSection('contenido_js'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido_cSS'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/template.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/styleCheckout.css')); ?>">
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<!------ Include the above in your HEAD tag ---------->



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
                    
                    <li class="step0">Pago de compra</li>
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




<div class="background-3-now">
    <form action="<?php echo e(route('registerOrder')); ?>" id="form-order-user" method="POST">
        <?php echo csrf_field(); ?>
    
        <div class="container border shadow bg-white mt-sm-4 mb-5">
            <div class="wrapper d-flex justify-content-center flex-column px-md-5 px-1 content-register">
                <div class="text-center font-weight-bold text-principal-register-1 title-principal">Detalles de compra</div>
                <div class="row my-4 my-2">
                    <div class="col-md-6"> <label class="label-register">Nombres *</label> 
                        <input class="register-input-1" name="nameUserOrder" type="text" value="<?php echo e(old('nameUserOrder')); ?>" required placeholder="Inserte sus nombres"> 
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('nameUserOrder'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

                    </div>
                    <div class="col-md-6 pt-md-0 pt-4"> 
                        <label class="label-register">Apellidos *</label>
                        <input class="register-input-1" name="lastNameUserOrder" value="<?php echo e(old('lastNameUserOrder')); ?>" type="text" placeholder="Inserte sus apellidos">
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('lastNameUserOrder'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    </div>
                </div>
                <div class="row my-4 my-2">
                    <div class="col-md-6"> 
                        <label class="label-register">DNI *</label>
                        <input class="register-input-1" name="dniUserOrder" value="<?php echo e(old('dniUserOrder')); ?>" type="number" step="1" min="0" placeholder="Insertar DNI" required>
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('dniUserOrder'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="col-md-6 pt-md-0 pt-4">
                        <label class="label-register">Telefono/Celular *</label>
                        <input class="register-input-1" name="phoneUserOrder" value="<?php echo e(old('phoneUserOrder')); ?>" required type="number" step="1" min="0" placeholder="Inserte su celular">
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('phoneUserOrder'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="row my-4 my-2">
                    <div class="col-md-12">
                        <label class="label-register">Correo electronico *</label>
                        <input class="register-input-1" name="correoUserOrder" value="<?php echo e(old('correoUserOrder')); ?>" type="email" placeholder="correoElectronico@gmail.com" required>
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('correoUserOrder'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="row my-4 my-2">
                    <div class="col-md-12"> <label class="label-register">Departamento *</label></div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 py-2" >
                        <select name="selectDepartamento" onchange="cambia()" class="form-control" required="">
                            <option value="">Seleccione Departamento</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Ancash">Ancash</option>
                            <option value="Apurímac">Apurímac</option>
                            <option value="Arequipa">Arequipa</option>
                            <option value="Ayacucho">Ayacucho</option>
                            <option value="Cajamarca">Cajamarca</option>
                            <option value="Callao">Callao</option>
                            <option value="Cuzco">Cuzco </option>
                            <option value="Huancavelica">Huancavelica</option>
                            <option value="Huánuco">Huánuco</option>
                            <option value="Ica">Ica</option>
                            <option value="Junín">Junín</option>
                            <option value="La_Libertad">La Libertad</option>
                            <option value="Lambayeque">Lambayeque</option>
                            <option value="Lima">Lima</option>
                            <option value="Loreto">Loreto</option>
                            <option value="Madre_de_Dios">Madre de Dios</option>
                            <option value="Moquegua">Moquegua</option>
                            <option value="Pasco">Pasco</option>
                            <option value="Piura">Piura</option>
                            <option value="Puno">Puno</option>
                            <option value="San_Martín">San Martín</option>
                            <option value="Tacna">Tacna</option>
                            <option value="Tumbes">Tumbes</option>
                            <option value="Ucayali">Ucayali</option>
                        </select>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12" >
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('selectDepartamento'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="col-md-12"> <label class="label-register">Provincia *</label></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 py-2" >
                
                        <select class="form-control" id="provinceNow" name="selectProvincia" onchange="cambiaDistrito()" required="">
                        <option>Seleccione la Provincia</option>
                        </select> 
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12" >
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('selectProvincia'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="col-md-12"> <label class="label-register">Distrito *</label></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 py-2" >
                        
                        <select class="form-control" id="districtIdNow" name="selectDistrito" onchange="cambiaDistritoValue()" required=""><option>Seleccione el Distrito</option>
                        </select>
                        <div style="display: inline-block !important;" class="text-info">Lo que esta en "()", es el cargo de envio</div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12" >
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('selectProvincia'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

    
                </div>

                <div class="row my-4 my-2">
                    <div class="col-md-12">
                         <label class="label-register">Direccion *</label> 
                        <input class="register-input-1" name="directionUserOrder" value="<?php echo e(old('directionUserOrder')); ?>" type="text" placeholder="Urb.Los palomares MZ.j . . . ">
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('directionUserOrder'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
                <div class="row my-4 my-2">
                    <div class="col-md-12">
                        <label class="label-register">Referencias *</label> 
                        <input class="register-input-1" name="referenceUserOrder" value="<?php echo e(old('referenceUserOrder')); ?>" type="text" placeholder=" . . ."> 
                        <?php $__currentLoopData = $errors->orderRegisterForm->get('referenceUserOrder'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorRegister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label for="" class="text-danger">
                                <?php echo e($errorRegister); ?>

                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    </div>
                </div>
                
                
            </div>
        </div>

    </form>

    <div class="container container-responsive-now">
        <div class="container-fluid">
            <div class="row" id="content-central-checkout">
                <?php echo $__env->make('producto/include/checkout_prod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <script src="<?php echo e(asset('js/jsCheckout.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JesusM\Desktop\proyectoTaller\mueblesNet\resources\views/producto/checkoutProduct.blade.php ENDPATH**/ ?>