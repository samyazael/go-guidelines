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
            <h1 class="m-0">Administración de las cuentas financieras</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('administracion')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Cuentas financieras</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
       <div class="row center">
          <div class="col-lg-12">
              <button class="btn btn-primary" data-toggle="modal" data-target="#registro_cuenta" type="button">Registrar nuevo cuenta</button>
          </div>
       </div>
       <br>
      <div>
        <table class="table caption-top">
        <caption>Cuentas registradas</caption>
        <thead>
          <tr>
            <th scope="col">Folio.</th>
            <th scope="col">Nombre de la cuenta</th>         
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">001</th>
            <td>Bethel Internacional Christian Academy</td>
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
   
    </div>
    <!-- /.content-header -->

<!-- Modal para el formulario del registro de los moovimientos -->
<div class="modal fade" id="registro_cuenta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de cuentas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-row">
            <div class="col">
              <label for="inputfolio">Folio</label>
              <input type="text" class="form-control" disabled="false">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Nombre de la cuenta</label>
              <input type="text" class="form-control" placeholder="Gospel garden">
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