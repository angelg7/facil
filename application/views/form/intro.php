<!Doctypee html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Mi Formulario</title>
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>
    <body background="<?php echo base_url('img/navidad.jpg'); ?>">
        <div class="container">
            <h3>Formulario Basico</h3>
            <div class="row">
                <form method="post" action="<?php echo base_url('formulario/guardar'); ?>">
                    <div class=col-md-6>
                       
                        <div class="form-group input-group">
                            <span class="input-group-addon">ID: </span>
                            <input type="text" readonly class="form-control" name="id" value="<?php echo $form->id ?>">
                        </div> 
                        
                        <div class="form-group input-group">
                            <span class="input-group-addon">Nombre: </span>
                            <input type="text" class="form-control" name="Nombre" value="<?php echo $form->Nombre ?>">
                        </div> 
                        
                        <div class="form-group input-group">
                            <span class="input-group-addon">Descripcion: </span>
                            <input type="text" class="form-control" name="Descripcion" value="<?php echo $form->Descripcion ?>">
                        </div>  
                        
                        <div class="form-group input-group">
                            <span class="input-group-addon">Precio: </span>
                            <input type="text" class="form-control" name="Precio" value="<?php echo $form->Precio ?>">
                        </div> 
                        <br>
                        <div class="text-left"> 
                        <button class="btn btn-success" type="submit">Guardar </button>
                        </div>
                    
                    
                    </div>
                
                </form>
            </div>
            <div>
            <h3>Registros</h3>
                <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                    foreach($forms as $form){
                        
                        echo "<tr>
                        <td>{$form->id}</td>
                        <td>{$form->Nombre}</td>
                        <td>{$form->Descripcion}</td>
                        <td>{$form->Precio}</td>
                        ";
                        
                        
                    }
                    
                    ?> 
                </tbody>    
                
                </table>
            
            </div>
        </div>
    </body>
</html>