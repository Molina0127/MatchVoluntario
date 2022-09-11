<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="<?php echo e(asset('site/css/main.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('site/css/register.css')); ?>">

        <title>Cadastrar Nova Ong</title>
        
        <style>
            label{
                float: left;
                display: block;
                width: 90px;
            }
        </style>
        
    </head>

    <body>
    
    

    <?php $__env->startSection('content'); ?>

        <div class="main-login">
                <div class="left-login">
                    <h1>Cadastre sua Ong aqui<h1>
                </div>

                <div class="right-login">
                    <div class="card-login">
                        <h1>Cadastro</h1>

                        
                    <?php if(session()->has('ong_savemsg')): ?>
                        <p class="alert alert-sucess">
                            <?php echo e(session()->get('ong_savemsg')); ?>

                        </p>
                    <?php endif; ?>

                    <?php if(session()->has('failcnpj_msg')): ?>
                        <p class="alert alert-danger">
                            <?php echo e(session()->get('failcnpj_msg')); ?>

                        </p>
                    <?php endif; ?>
                        <form action="<?php echo e(route('saveOng')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="textfield">
                            <label for="ong_name"><?php echo e(__('ONG')); ?></label>

                            <div class="textfield">
                                <input id="ong_name" type="text" class="form-control <?php $__errorArgs = ['ong_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ong_name" value="<?php echo e(old('ong_name')); ?>" required autocomplete="ong_name" autofocus>

                                <?php $__errorArgs = ['ong_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <label for="ong_image">Buscar Foto</label>
                            <input type="file" id="ong_image" name="ong_image" class="form-control-file">
                        </div>
                    
                        <div class="textfield">
                            <label for="cnpj"><?php echo e(__('CNPJ')); ?></label>

                            <div class="textfield">
                                <input id="cnpj" type="text" class="form-control <?php $__errorArgs = ['cnpj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cnpj" placeholder="00.000.000/0000-00" value="<?php echo e(old('cnpj')); ?>" required autocomplete="cnpj" autofocus>

                                <?php $__errorArgs = ['cnpj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    
                        <div class="textfield">
                            <label for="owner"><?php echo e(__('Proprietário')); ?></label>

                            <div class="textfield">
                                <input id="owner" type="text" class="form-control <?php $__errorArgs = ['owner'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="owner" value="<?php echo e(old('owner')); ?>" required autocomplete="owner" autofocus>

                                <?php $__errorArgs = ['owner'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="description"><?php echo e(__('Descrição')); ?></label>

                            <div class="textfield">
                                <input id="description" type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" value="<?php echo e(old('description')); ?>" required autocomplete="description" autofocus>

                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="ong_cep"><?php echo e(__('CEP')); ?></label>

                            <div class="textfield">
                                <input id="ong_cep" type="text" class="form-control <?php $__errorArgs = ['ong_cep'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ong_cep" placeholder="00000-000" value="<?php echo e(old('ong_cep')); ?>" onblur="pesquisacep(this.value);" required autocomplete="ong_cep" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="ong_city"><?php echo e(__('Cidade')); ?></label>

                            <div class="textfield">
                                <input id="ong_city" type="text" class="form-control <?php $__errorArgs = ['ong_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ong_city" value="<?php echo e(old('ong_city')); ?>" readonly required autocomplete="ong_city" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="ong_state"><?php echo e(__('Estado')); ?></label>

                            <div class="textfield">
                                <input id="ong_state" type="text" class="form-control <?php $__errorArgs = ['ong_state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ong_state" value="<?php echo e(old('ong_state')); ?>" readonly required autocomplete="ong_state" autofocus>
                            </div>
                        </div>            
                        
                        <br>
                        
                        <div class="form-group <?php if($errors->has('categoria_id')): ?> has-error <?php endif; ?>">
                        <?php echo Form::label('Categoria'); ?>

                       <?php echo Form::select ('categoria_id[]', $categorias, null, ['class' => 'form-control', 'required', 'id' => 'categoria_id', 'multiple' => 'max:2']); ?>

                        <?php if($errors->has('categoria_id')): ?>
                            <span class="help-block"><?php echo $errors->first('categoria_id'); ?></span>
                        <?php endif; ?>
                    </div>

                    <br>
                                                

                        <div class="textfield">
                            <label for="password"><?php echo e(__('Senha')); ?></label>

                            <div class="textfield">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div>
                            <?php echo Form::submit('Salvar', ['class' => 'btn-login']); ?>

                            <?php echo Form::close(); ?>

                        </div>
                    </form>                        
                </div>

            </form>
        </div>
            
    <?php $__env->stopSection(); ?>

        <script>

            function limpa_formulário_cep() {
                    //Limpa valores do formulário de cep.
                    document.getElementById('ong_city').value("");
                    document.getElementById('ong_state').value=("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('ong_city').value=(conteudo.localidade);
                    document.getElementById('ong_state').value=(conteudo.uf);
                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }
                
            function pesquisacep(valor) {

                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('ong_city').value="...";
                        document.getElementById('ong_state').value="...";

                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            };

        </script>

    </body>    
</html>



<?php echo $__env->make('layouts.ong_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\Nova Pasta\FastSolutions\Desenvolvimento\resources\views/site/ongs/create.blade.php ENDPATH**/ ?>