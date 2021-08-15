@extends('plantilla.layaout')

@section('title')
	Panel de administración
@endsection

@section('contenido')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro y administración de usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('administracion')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="row center">
          <div class="col-lg-12">
              <button class="btn btn-primary" data-toggle="modal" data-target="#agregar_usuario" type="button">Registrar nuevo usuario</button>
          </div>
      </div>
      <br>
      <div>
        <table class="table caption-top">
        <caption>Lista de los usuarios</caption>
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Estatus</th>
            <th colspan="2">Opciones</th>         
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Samy Azael</td>
            <td>Lopez Acosta</td>
            <td>Vigente</td>
              <td width="10px">
                  <a href="#">
                    <i class="far fa-trash-alt fa-lg" aria-hidden="true"></i>
                  </a>
              </td>  
              <td width="10px">
                  <a href="#">
                   <i class="fas fa-edit fa-lg"></i>
                  </a>
              </td> 
        </tbody>
      </table>
      </div>
    </div>
    <!-- /.content-header -->
<!-- Modal para el formulario del registro de los moovimientos -->
<div class="modal fade" id="agregar_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-row">
            <div class="col">
              <label for="inputfolio">Clave</label>
              <input type="text" class="form-control" disabled="false">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Nombre(s)</label>
              <input type="text" class="form-control" placeholder="Samy Azael">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Apellidos</label>
              <input type="text" class="form-control" placeholder="Lopez Acosta">
            </div>
          </div>
          <div class="form-row">
              <div class="col">
                <label for="inputEmail4">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Contraseña">
              </div>
          </div>
          <div class="form-row">
              <div class="col">
                <label for="inputEmail4">Rol</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Administrador</option>
                <option>Empleado</option>
                </select>
              </div>
          </div>
          <div class="form-row">
              <div class="col">
                <label for="inputEmail4">Estatus</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Activo</option>
                <option>Inactivo</option>
                </select>
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- aqui termina el modal-->
  </div>
  <!-- /.content-wrapper -->

@endsection