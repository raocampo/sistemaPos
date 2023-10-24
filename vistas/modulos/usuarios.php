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

<div class="modal fade" id="modalAgregarUsuario">

  <div class="modal-dialog">

    <div class="modal-content">

      <form action="" role="form" method="post" enctype="multipart/form-data">

        <div class="modal-header" style="background: #3c8dbc; color: #fff;">

          <h4 class="modal-title">Agregar Usuario</h4>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

          <div class="box-body">

            <div class="form-group">

              <div class="input-group">

                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <div class="form-group">

              <div class="input-group">

                <div class="input-group-prepend">

                  <span class="input-group-text"><i class="fa fa-key"></i></span>

                </div>

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" required>

              </div>

            </div>

            <div class="form-group">

              <div class="input-group">

                <div class="input-group-prepend">

                  <span class="input-group-text"><i class="fa fa-lock"></i></span>

                </div>

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <div class="form-group">

              <div class="input-group">

                <div class="input-group-prepend">

                  <span class="input-group-text"><i class="fa fa-users"></i></span>

                </div>


                <select class="form-control input-lg" name="nuevoPerfil" id="">
                  <option value="">Seleccionar perfil</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Especial">Especial</option>
                  <option value="Vendedor">Vendedor</option>
                </select>

              </div>

            </div>

            <div class="form-group">

              <div class="panel">SUBIR FOTO</div>

              <input type="file" id="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 200Mb</p>

              <img src="/vistas/img/usuarios/default/perfil.png" class="img-thumbnail" width="100px" alt="perfil">

            </div>


          </div>

        </div>

        <div class="modal-footer justify-content-between">

          <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Agregar</button>

        </div>

      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->