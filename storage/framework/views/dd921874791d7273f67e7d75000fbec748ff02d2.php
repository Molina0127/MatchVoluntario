<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
        <div class="main-login">
            
            

                <div class="left-login">
                    <h1>Cadastre sua Ong aqui<h1>
                </div>

                <div class="right-login">
                    <div class="card-login">
                        <h1>Cadastro</h1>

                        <form action="<?php echo e(route('saveOng')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="textfield">
                            <label for="ong_name">Nome</label>
                            <input type="text" name="ong_name" id="nome" placeholder="Digite aqui" value="<?php echo e(old('name')); ?>">
                        </div>
                    
                        <div class="textfield">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" placeholder="00.000.0000/00" value="<?php echo e(old('cnpj')); ?>">
                        </div>
                    
                        <div class="textfield">
                            <label for="owner">Proprietario</label>
                            <input type="text" name="owner" id="proprietario" placeholder="Nome Proprietário" value="<?php echo e(old('proprietario')); ?>">
                        </div>
                        
                        <div>
                            <button class="btn-login">Salvar</button>
                        </div>
                        
                    </div>



                
                
                
            </form>
        </div>
            

    </body>
</html>


<?php /**PATH D:\Downloads\FastSolutions\Desenvolvimento\resources\views/site/ongs/create.blade.php ENDPATH**/ ?>