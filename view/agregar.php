<!--Post a blog page-->

<div class="container">

    <div class="row">

        
        <div class="col-md-12 col-sm-12 col-xs-12" align="center">
            <form class="form-horizontal" method="POST" action="?c=agregar" autocomplete="off">
              <h5> Llená el formulario para poder hacer pública tu historia</h5>    

            <!-- author -->   
              <div class="form-group">
                <label for="author" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="author" name="author" placeholder="Autor" required>
                </div>
              </div>

            <!-- title -->   
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Título de la historia</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="title" name="title" placeholder="Título" required>
                </div>
              </div>

            <!--message-->                     
              <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Comentario</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="message" name="message" placeholder="Escribe tu experiencia" required></textarea>
                </div>
              </div>

            <!--Submit button--> 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                    <input type="submit"  class="btn btn-light" value="Publicar">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>    
      