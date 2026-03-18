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
            <h1 class="m-0">Administración de movimientos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('administracion')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Movimientos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="row center">
          <div class="col-lg-12">
              <button class="btn btn-primary" data-toggle="modal" data-target="#movimiento" type="button">Registrar nuevo movimiento</button>
          </div>
      </div>
       <br>
      <div>
        <table class="table caption-top">
        <caption>Movimientos realizados</caption>
        <thead>
          <tr>
            <th scope="col">Folio.</th>
            <th scope="col">Tipo de movimiento</th>
            <th scope="col">Fecha</th>
            <th scope="col">Monto</th>
            <th scope="col">Concepto</th>
            <th scope="col">Cuenta</th>
            <th scope="col">Pago</th>
            <th scope="col">Caja</th>
            <th colspan="2">Opciones</th>         
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">001</th>
            <td>Compras</td>
            <td>12/08/2021</td>
            <td>$2000</td>
            <td>Compra uniformes deportivos</td>
            <td>BICA</td>
            <td>Efectivo</td>
            <td>$18500</td>
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
<div class="modal fade" id="movimiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de movimientos</h5>
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
              <label for="inputEmail4">Tipo de movimiento</label>
              <input type="text" class="form-control" placeholder="Tipo de movimiento">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Fecha</label>
              <input type="date" class="form-control" name="fecha" id="fecha" v-model="fecha">
            </div>
            <div class="col">
              <label for="inputEmail4">Monto</label>
              <input type="text" class="form-control" placeholder="$000.00">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Concepto</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
           <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Cuenta</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>BICA</option>
                <option>Mission Camp</option>
              </select>
            </div>
            <div class="col">
              <label for="inputEmail4">Tipo de pago</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Efectivo</option>
                <option>Deposito</option>
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

@push('scripts')

@endpush

<input type="hidden" name="route" value="{{url('/')}}">
