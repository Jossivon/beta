<<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          ACTIVIDADES
          <small>ACTIVIDADES DEL PROYECTO</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> INICIO</a></li>
          <li><a href="#">PROYECTOS</a></li>
        </ol>
      </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">

          <div class="box-header with-border">
              <button class="btn btn-info" data-toggle="modal" data-target="#modalAgregarFacu">
                Agregar Actividades
              </button>
          </div>

          <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tablas ">
              <caption>ACTIVIDADES</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Fecha Inicio</th>
                  <th scope="col">Fecha Finalización</th>
                  <th scope="col">Integrantes</th>

                  <th scope="col">Acciones</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <th scope="row">1.1</th>
                  <td>Diseñar e implementar una investigación sobre
                     el uso de abonos verdes en la producción de quinua.</td>
                  <td>enero 2019</td>
                  <td>marzo 2019</td>
                  <td>Lore Cj</td>


                  <td>
                    <div class="btn-group">
                      <button class="btn-warning"> <i class="fa fa-pencil"></i></button>
                      <button class="btn-danger"> <i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
   </section>
</div>

<!-- Modal ------->
<div class="modal fade" id="modalAgregarFacu"  role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
     <form  role="form method="post " enctype= "multipart/form-data" >
       <div class="modal-header" style="background: #39CCCC; color:white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" style="text-align: center;">AGREGAR ACTIVIDAD</h5>
        </div>

      <div class="modal-body">
        <div class="box-body">
            <!------------------- CÓDIGO --------------------------------------->
          <div class="form-group">
              <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-address-card"></i></div>
                    <input type="text" class="form-control input-lg" name="codigoactividad" placeholder="Código" required>
             </div>
             <br>
        <!-------------------------------- NOMBRE DE ACTIVIDAD --------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-book"></i></div>
                      <input type="text" class="form-control input-lg" name="nombreactividad" placeholder="Nombre de la Actividad" required>
                </div>
              </div>

              <!-------------------------------- FEHCA INICIO--------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control input-lg" name="fechainicio" placeholder="Fecha Inicio" required>
                </div>
              </div>

              <!------------------------------------FECHA FIN--------------------------------------------->
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-at"></i></div>
                            <input type="email" class="form-control input-lg" name="fechafin" placeholder="Fecha Fin">
                      </div>
                    </div>

              <!------------------------------------- INTEGRANTES --------------------------------------->
                    <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="text" class="form-control input-lg" name="integranteactividad" placeholder="Integrante de la actividad" >
                      </div>
                    </div>

                    </div>

              <!----------------------------------------- CARGO ----------------------------------------->
              <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-users"></i></div>
                      <select name="cargo" class="form-control input-lg">
                        <option value="">Coordinador de Facultad</option>
                        <option value="">Coordinador de Carrera</option>
                        <option value="">Docente</option>
                        <option value="">Estudiante</option>
                      </select>
                </div>
              </div>



       </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Agregar Actividad</button>
      </div>

    </form>
  </div>
 </div>
</div>
