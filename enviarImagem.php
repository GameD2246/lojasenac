<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <fieldset>
                        <legend>Capa Produto</legend>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="arquivo">Selecione a imagem:</label>
                                <input type="file" class="form-control" id="arquivo" name="arquivo"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>                                
                            </div>
                        </form>
                    </fieldset>
                </div>
                
            </div>
        </div>
        
        
        
        
        
        
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
