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
            <h1 class="m-0">Administración y pago de las colegiaturas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('administracion')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Colegiaturas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <h5>Selecciona por:</h5>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <form>
            <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Grado</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>1 Secundaria</option>
                <option>2 Secundaria</option>
              </select>
            </div>
          </div>
          </form>
        </div>
        <div class="col-sm">
           <form>
            <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Grupo</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>A</option>
                <option>B</option>
              </select>
            </div>
          </div>
          </form>
        </div>
        <div class="col-sm">
           <form>
            <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Mes</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Enero</option>
                <option>Febrero</option>
              </select>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <br>
      <div>
        <table class="table caption-top">
        <caption>Cobro de colegiaturas realizadas</caption>
        <thead>
          <tr>
            <th scope="col">Folio.</th>
            <th scope="col">Matricula</th>
            <th scope="col">Alumno</th>
            <th scope="col">Fecha de cobro</th>
            <th scope="col">Beca</th>
            <th scope="col">Total del pago</th>
            <th scope="col">Tipo de pago</th>
            <th colspan="2">Opciones</th>         
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">001</th>
            <td>15070101</td>
            <td>Raul Hernadez Guillermo</td>
            <td>12/08/2021</td>
            <td>$500</td>
            <td>$2500</td>
            <td>Efectivo</td>
              <td width="10px">
                  <a href="#" data-toggle="modal" data-target="#cobro_colegiatura">
                   <i class="fas fa-plus-circle fa-lg"></i>
                  </a>
              </td> 
              <td width="10px">
                  <a href="#" data-toggle="modal" data-target="#cobro_colegiatura">
                   <i class="fas fa-print fa-lg"></i>
                  </a>
              </td> 
        </tbody>
      </table>
      </div>
    </div>
    <!-- /.content-header -->

<!-- Modal para el formulario del cobro de colegiaturas -->
<div class="modal fade" id="cobro_colegiatura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro del pago de la colegiatura</h5>
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
              <label for="inputEmail4">Matricula</label>
              <input type="text" class="form-control" placeholder="15070101">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Grado</label>
              <input type="text" class="form-control" placeholder="1er">
            </div>
            <div class="col">
              <label for="inputEmail4">Grupo</label>
              <input type="text" class="form-control" placeholder="A">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Alumno</label>
              <input type="text" class="form-control" placeholder="Samy Azael Lopez Acosta">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Nivel escolar</label>
              <input type="text" class="form-control" placeholder="Secundaria">
            </div>
            <div class="col">
              <label for="inputEmail4">Beca</label>
              <input type="text" class="form-control" placeholder="$500">
            </div>
          </div>
           <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Total a cobrar</label>
              <input type="text" class="form-control" placeholder="$000.00">
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