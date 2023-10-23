<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

          <h1>Administrar <small>Usuarios</small></h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Administrar Usuarios</li>
          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">

          Agregar Usuario

        </button>


      </div>

      <div class="card-body">

        <table class="table table-bordered table-striped">

          <thead>

            <tr>

              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Ultimo Ingres</th>
              <th>Acciones</th>

            </tr>

          </thead>

          <tbody>

            <tr>
              <td>1</td>
              <td>Usuario Administrador</td>
              <td>admin</td>
              <td><img src="../img/usuarios/default/usuario.png" alt="usuario"></td>
              <td>Administrador</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2023-10-22 20:30:15</td>
              <td>
                <div class="btn-group">
                  <button class="btn badge-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn badge-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>Usuario Operador</td>
              <td>operador</td>
              <td><img src="" alt=""></td>
              <td>Operador</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2023-10-22 20:30:15</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

          </tbody>

        </table>

      </div>

      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>

<!-- modal para agregar usuario -->

<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>