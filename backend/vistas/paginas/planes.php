<div class="content-wrapper" style="min-height: 717px;">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Temporadas</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Temporadas</li>

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

              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#crearPlan">Crear nueva temporada</button>  

            </div>
            <!-- /.card-header -->

            <div class="card-body">

              <table class="table table-bordered table-striped dt-responsive tablaPlanes" width="100%">

                <thead>

                  <tr>

                    <th style="width:10px">#</th> 
                    <th>Título</th>
                    <th style="width:250px">Imagen</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                  </tr>   

                </thead>

                <tbody>


                </tbody>



              </table>
              
            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->

        </div>

      </div>

    </div>

  </section>
  <!-- /.content -->

</div>

<!--=====================================
Modal Crear Plan
======================================-->

<div class="modal" id="crearPlan">

  <div class="modal-dialog">

    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title">Crear Temporada</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-suitcase-rolling"></span>
            </div>

            <input type="text" class="form-control" name="tipoPlan" placeholder="Ingresa el nombre del plan" required> 

          </div>

          <div class="form-group">

            <div class="form-group my-2">

              <div class="btn btn-default btn-file">

                  <i class="fas fa-paperclip"></i> Adjuntar Imagen del plan 

                  <input type="file" name="subirImgPlan">
                 
              </div>

              <img class="previsualizarImgPlan img-fluid py-2">

               <p class="help-block small">Dimensiones: 480px * 382px | Peso Max. 2MB | Formato: JPG o PNG</p>

            </div>

            <p>Escriba la descripción de la temporada:</p>

            <textarea id="descripcionPlan" name="descripcionPlan" style="width: 100%"></textarea>

          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">

          <div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>

          <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </div>

        <?php

          $registroPlan = new ControladorPlanes();
          $registroPlan -> ctrRegistroPlan();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
Modal Editar Plan
======================================-->

<div class="modal" id="editarPlan">

  <div class="modal-dialog">

    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!-- Modal Header -->
        <div class="modal-header bg-info">
          <h4 class="modal-title">Editar Plan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <input type="hidden" class="form-control" name="idPlan">

          <div class="input-group mb-3">
           
            <div class="input-group-append input-group-text">
              <span class="fas fa-suitcase-rolling"></span>
            </div>

            <input type="text" class="form-control" name="editarPlan" required> 

          </div>

          <div class="form-group">

            <div class="form-group my-2">

              <div class="btn btn-default btn-file">

                  <i class="fas fa-paperclip"></i> Cambiar imagen de la temporada 

                  <input type="file" name="editarImgPlan">

                  <input type="hidden" name="imgPlanActual">
                 
              </div>

              <img class="previsualizarImgPlan img-fluid py-2">

               <p class="help-block small">Dimensiones: 480px * 382px | Peso Max. 2MB | Formato: JPG o PNG</p>

            </div>

            <p>Escriba la descripción de la temporada:</p>

            <textarea id="editarDescripcionPlan" name="editarDescripcionPlan" style="width: 100%"></textarea>

          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">

          <div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>

          <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

        </div>

        <?php

          $editarPlan = new ControladorPlanes();
          $editarPlan -> ctrEditarPlan();

        ?>

      </form>

    </div>

  </div>

</div>