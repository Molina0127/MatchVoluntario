<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="<?php echo e(asset('site/css/main.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('site/css/register.css')); ?>">
            <title>Cadastro</title>
        </head>
        
        <body>
    


<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>

            <?php $__env->startSection('register'); ?>
            <div class="main-login">
                <div class="left-login">
                    <h1>Cadastre-se aqui!</h1>
                    <img src="<?php echo e(asset('site/img/img_register.svg')); ?>" class="image" alt="animação">
                </div>
                <div class="right-login">
                    <div class="card-login">
                        <h1>Cadastro</h1>
                    
                    <?php if(session()->has('user_savemsg')): ?>
                        <p class="alert alert-sucess">
                            <?php echo e(session()->get('user_savemsg')); ?>

                        </p>
                    <?php endif; ?>

                        <?php echo Form::open(['route' => 'saveUsuario']); ?>

                        <?php echo csrf_field(); ?>

                        <div class="textfield">
                            <label for="nome"><?php echo e(__('Nome')); ?></label>

                            <div class="textfield">
                                <input id="nome" type="text" class="form-control <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Digite aqui" name="nome" value="<?php echo e(old('nome')); ?>" required autocomplete="nome" autofocus>

                                <?php $__errorArgs = ['nome'];
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
                            <label for="sobrenome"><?php echo e(__('Sobrenome')); ?></label>

                            <div class="textfield">
                                <input id="sobrenome" type="text" class="form-control <?php $__errorArgs = ['sobrenome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="sobrenome" value="<?php echo e(old('sobrenome')); ?>" required autocomplete="sobrenome" autofocus>

                                <?php $__errorArgs = ['sobrenome'];
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
                            <label for="email"><?php echo e(__('Email')); ?></label>

                            <div class="textfield">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="nome@email.com" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php $__errorArgs = ['email'];
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
                            <label for="cep"><?php echo e(__('CEP')); ?></label>

                            <div class="textfield">
                                <input id="cep" type="text" class="form-control <?php $__errorArgs = ['cep'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cep" placeholder="00000-000" value="<?php echo e(old('cep')); ?>" onblur="pesquisacep(this.value);" required autocomplete="cep" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="cidade"><?php echo e(__('Cidade')); ?></label>

                            <div class="textfield">
                                <input id="cidade" type="text" class="form-control <?php $__errorArgs = ['cidade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cidade" value="<?php echo e(old('cidade')); ?>" readonly required autocomplete="cidade" autofocus>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="estado"><?php echo e(__('Estado')); ?></label>

                            <div class="textfield">
                                <input id="estado" type="text" class="form-control <?php $__errorArgs = ['estado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="estado" value="<?php echo e(old('estado')); ?>" readonly required autocomplete="estado" autofocus>
                            </div>
                        </div>  

                        <div class="textfield">
                            <label for="nasc"><?php echo e(__('Data de nascimeto')); ?></label>

                            <div class="textfield">
                                <input id="dn" type="date" class="form-control <?php $__errorArgs = ['datanasc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="datanasc" placeholder="DD/MM/AAAA" value="<?php echo e(old('datanasc')); ?>" required autocomplete="datanasc" autofocus>

                                <?php $__errorArgs = ['datanasc'];
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

                        <div class="form-group <?php if($errors->has('categoria_id')): ?> has-error <?php endif; ?>">
                        <?php echo Form::label('Categoria de preferência'); ?>

                       <?php echo Form::select ('categoria_id[]', $categorias, null, ['class' => 'form-control', 'required', 'id' => 'categoria_id', 'multiple']); ?>

                        <?php if($errors->has('categoria_id')): ?>
                            <span class="help-block"><?php echo $errors->first('categoria_id'); ?></span>
                        <?php endif; ?>
                    </div>


                        <div class="textfield">
                            <label for="cpf"><?php echo e(__('CPF')); ?></label>

                            <div class="textfield">
                                <input id="cpf" type="text" class="form-control <?php $__errorArgs = ['cpf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cpf"  placeholder="123.456.789-10" value="<?php echo e(old('cpf')); ?>" required autocomplete="cpf" autofocus maxlength="14">

                                <?php $__errorArgs = ['cpf'];
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

                        <button class="btn-login">Cadastrar</button>
                    </form>
                </div>
        </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('site/js/data.js')); ?>"></script>

    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
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
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";

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
    <?php $__env->stopSection(); ?>



</body>


</html>

<?php echo $__env->make('layouts.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Desktop\Nova Pasta\FastSolutions\Desenvolvimento\resources\views/site/usuarios/register.blade.php ENDPATH**/ ?>