<div class="container-fluid">

    <div class="row">

        <!--Services info-->
        <div class="col-md-9 col-sm-9 col-xs-9" align="center">
            <img align="left" src="img/mapa1.jpg" width="300" height="600">
            <h1>¿VIAJAS?</h1> <br>
            <h1>MundoBlog es perfecto para ti</h1> <br>
            Pues encontraste la página correcta para contar tu historias,<br>
            también podrás ver tips de otros viajeros y demás... <br>
              
            <br> Este blog fue creado para dar a concer lugares hermosos del mundo, <br>
            saber en cuál época del año es mejor viajar, cómo encontrar boletos de viaje 
            y hoteles económicos.<br>
            
            <!--Info card-->
            <div class="card-group">
                <img src="img/guia.jpg" width="150" height="200" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Aprende más de guías de viaje</h5>
                </div>
            </div>
           
        </div>
         

        <!--Last 5 comments-->
        <div class="col-md-3 col-sm-3 col-xs-3" align="center">
            <h5> Mira aquí los últimos comentarios </h5>
            <!--Link to post a new blog-->
            <a href="?c=ver_todos">Ver todos los blogs</a>
            <!--List of the last blogs-->
            <div class="card">     
                <?php include 'controller/ultimos.php';?>
                <?php foreach($rows as $row) {?>
                <div class="card-custom">
                    <!--Title of the blog-->
                    <div class="card-header">
                        <?php echo $row->title;?>
                    </div>
                    <!--Message of the blog-->
                    <div class="card-body">
                        <p class="card-text"><?php echo $row->message; ?></p>
                    </div>
                    <?php } ?> 
                </div>
            </div>
        </div>
    </div>
</div>
  
