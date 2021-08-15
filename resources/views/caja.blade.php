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
            <h1 class="m-0">Adminitración de la caja</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('administracion')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Caja</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="row center">
          <div class="col-lg-12">
              <button class="btn btn-primary" data-toggle="modal" data-target="#caja" type="button">Nuevo registro de caja</button>
          </div>
      </div>
       <br>
      <div>
        <table class="table caption-top">
        <caption>Registro de la caja</caption>
        <thead>
          <tr>
            <th scope="col">Folio.</th>
            <th scope="col">Fondo</th>
            <th scope="col">Total</th>
            <th scope="col">Fecha de Inicio</th>
            <th scope="col">Fecha de cierre</th>
            <th colspan="2">Opciones</th>         
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">001</th>
            <td>BICA</td>
            <td>$15000</td>
            <td>12/08/2021</td>
            <td>20/08/2021</td>
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
    
<!-- Modal para el formulario del registro de la caja -->
<div class="modal fade" id="caja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de la caja</h5>
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
             <div class="col">
              <label for="inputEmail4">Fondo Fijo</label>
              <input type="text" class="form-control" placeholder="Fondo fijo">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Total</label>
             <input type="text" class="form-control" placeholder="$000.00">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Fecha de apertura</label>
              <input type="date" class="form-control" name="fecha" id="fechaApertura" v-model="fechaApertura">
            </div>
            <div class="col">
              <label for="inputEmail4">Fecha de cierre</label>
              <input type="date" class="form-control" name="fecha" id="fechaCierre" v-model="fechaCierre">
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