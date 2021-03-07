<?php 

  if($admin["perfil"] != "Administrador"){

    echo '<script>

      window.location = "banner";

    </script>';

    return;

  }
  //Restringir acceso segun perfiles
?>    

<div class="content-wrapper" style="min-height: 717px;">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Usuarios</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Usuarios</li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">

      <div class="row">

        <div class="col-12">

          <!-- Default box -->
          <div class="card card-info card-outline">

            <div class="card-header">

              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#crearAdministrador">Crear nuevo usuario</button>

            </div>
            <!-- /.card-header -->

            <div class="card-body">
              
              <table class="table table-bordered table-striped dt-responsive tablaAdministradores" width="100%">
                
                <thead>
                  
                  <tr>
                    
                    <th style="width:10px">#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th style="width:50px">Foto</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th>Último Login</th>
                    <th>Acciones</th>

                  </tr>

                </thead>

                </tbody>

              </table>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
       
            </div>
            <!-- /.card-footer-->

          </div>
          <!-- /.card -->

        </div>

      </div>

    </div>

  </section>
  <!-- /.content -->

</div>


<!--=====================================
Modal Crear Administrador
======================================-->

<div class="modal" id="crearAdministrador">

  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">
      
        <div class="modal-header bg-info">
          
          <h4 class="modal-title">Crear Administrador</h4>

           <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">

          <!-- input nombre -->
          
          <div class="input-group mb-3">
             
            <div class="input-group-append input-group-text">
              
               <span class="fas fa-user"></span>

            </div>

            <input type="text" class="form-control" name="registroNombre" placeholder="Ingresa el nombre" required>   

          </div>

          <!-- input usuario -->

          <div class="input-group mb-3">
             
            <div class="input-group-append input-group-text">
              
               <span class="fas fa-user-lock"></span>

            </div>

            <input type="text" class="form-control" name="registroUsuario" placeholder="Ingresa el usuario" required>   

          </div>

          <!-- input password -->

          <div class="input-group mb-3">
             
            <div class="input-group-append input-group-text">
              
               <span class="fas fa-lock"></span>

            </div>

            <input type="password" class="form-control" name="registroPassword" placeholder="Ingresa la contraseña" required>   

          </div>

           <!-- seleccionar el perfil -->

          <div class="input-group mb-3">

            <div class="input-group-append input-group-text">
              
              <span class="fas fa-key"></span>
            
            </div>

            <select class="form-control" name="registroPerfil" required>

              <option value="">Seleccione perfil</option>

              <option value="Administrador">Administrador</option>

              <option value="Especial">Especial</option>

              <option value="Vendedor">Vendedor</option>

            </select>     

          </div>

          <!-- Foto -->
          <div class="form-group">

            <div class="form-group my-2">

              <div class="btn btn-default btn-file">

                  <i class="fas fa-paperclip"></i> Adjuntar Imagen de la Foto

                  <input type="file" name="subirFoto" id="subirFoto">
                 
              </div>

              <img class="previsualizarFoto img-fluid py-2">

               <p class="help-block small">Dimensiones: 359px * 254px | Peso Max. 2MB | Formato: JPG o PNG</p>

            </div>

          </div>
        </div>

        <div class="modal-footer d-flex justify-content-between">
          
          <div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>

          <div>
             <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </div>

        <?php 

          $registroAdministrador = new ControladorAdministradores();
          $registroAdministrador -> ctrRegistroAdministradores();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
Modal Editar Administrador
======================================-->

<div class="modal" id="editarAdministrador">

  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">
      
        <div class="modal-header bg-info">
          
          <h4 class="modal-title">Editar Administrador</h4>

           <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">

          <input type="hidden" name="editarId">

          <!-- input nombre -->
          
          <div class="input-group mb-3">
             
            <div class="input-group-append input-group-text">
              
               <span class="fas fa-user"></span>

            </div>

            <input type="text" class="form-control" name="editarNombre" value required>   

          </div>

          <!-- input usuario -->

          <div class="input-group mb-3">
             
            <div class="input-group-append input-group-text">
              
               <span class="fas fa-user-lock"></span>

            </div>

            <input type="text" class="form-control" name="editarUsuario" value required>   

          </div>

          <!-- input password -->

          <div class="input-group mb-3">
             
            <div class="input-group-append input-group-text">
              
               <span class="fas fa-lock"></span>

            </div>

            <input type="password" class="form-control" name="editarPassword" placeholder="Cambie la contraseña"> 
            <input type="hidden" name="passwordActual">     

          </div>

           <!-- seleccionar el perfil -->

          <div class="input-group mb-3">

            <div class="input-group-append input-group-text">
              
              <span class="fas fa-key"></span>
            
            </div>

            <select class="form-control" name="editarPerfil" required>

              <option class="editarPerfilOption"></option>

              <option value="">Seleccione perfil</option>

              <option value="Administrador">Administrador</option>

              <option value="Especial">Especial</option>

              <option value="Vendedor">Vendedor</option>

            </select>     

          </div>

          <div class="form-group">

            <div class="form-group my-2">

              <div class="btn btn-default btn-file">

                  <i class="fas fa-paperclip"></i> Adjuntar Imagen de la Foto

                  <input type="file" name="editarFoto">

                  <input type="hidden" name="imgFotoActual">
                 
              </div>

              <img class="previsualizarFoto img-fluid py-2">

               <p class="help-block small">Dimensiones: 359px * 254px | Peso Max. 2MB | Formato: JPG o PNG</p>

            </div>


          </div>


           <?php 

             $editarAdministrador = new ControladorAdministradores();
             $editarAdministrador -> ctrEditarAdministrador();

           ?>

        </div>

        <div class="modal-footer d-flex justify-content-between">
          
          <div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>

          <div>
             <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </div>

      </form>

    </div>

  </div>

</div>

