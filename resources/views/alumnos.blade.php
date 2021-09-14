@extends('plantilla.layaout')

@section('title')
	Panel de administración
@endsection

@section('contenido')

<div id='appAlumnos'>
  

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de alumnos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('administracion')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Registro de alumnos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <div class="row center">
          <div class="col-lg-12">
              <button class="btn btn-primary" data-toggle="modal" data-target="#registro_alumnos" type="button">Registrar nuevo alumno</button>
          </div>
       </div>
       <br>
      <div>
        <table class="table caption-top">
        <caption>Alumnos registrados</caption>
        <thead>
          <tr>
            <th scope="col">Matricula.</th>
            <th scope="col">Alumno</th>  
            <th scope="col">Correo</th>
            <th scope="col">Celuar</th>
            <th scope="col">Nivel escolar</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">Estatus</th>
            <th colspan="2">Opciones</th>                     
          </tr>
        </thead>
        <tbody>
          <tr v-for="alumno in alumnos">
            
              <td>@{{alumno.matricula}}</td>
              <td>@{{alumno.primer_apellido}} @{{alumno.segundo_apellido}}  @{{alumno.nombre}}</td>
              <td>@{{alumno.correo}}</td>
              <td>@{{alumno.celular}}</td>
              <td>@{{alumno.nivel.nivel}}</td>
              <td>@{{alumno.fecha_ingreso}}</td>
              <td>@{{alumno.activo}}</td>


              <td width="10px">
                  <a href="#">
                    <i class="far fa-trash-alt fa-lg" aria-hidden="true"></i>
                  </a>
              </td>  
              <td width="10px">
                  <a href="#" @click="showModal()">
                   <i class="fas fa-edit fa-lg"></i>
                  </a>
              </td> 
            </tr>
        </tbody>
      </table>
      </div>
    </div>

   
   
    <!-- </div> -->

    <!-- </div> -->
    <!-- /.content-header -->
<!-- Modal para el formulario del registro de los moovimientos -->
<div class="modal fade" id="registro_alumnos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de alumnos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-row">
            <div class="col">
              <label for="inputfolio">Matricula</label>
              <input type="text" class="form-control" placeholder="15070101">
            </div>
            <div class="col">
              <label for="inputfolio">Nombre(s)</label>
              <input type="text" class="form-control" placeholder="Samy Azael">
            </div>
            <div class="col">
              <label for="inputEmail4">Apellido Paterno</label>
              <input type="text" class="form-control" placeholder="Lopez">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Apellido Materno</label>
              <input type="text" class="form-control" placeholder="Acosta">
            </div>
             <div class="col">
              <label for="inputEmail4">Genero</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Masculino</option>
                <option>Femenino</option>
              </select>
            </div>
            <div class="col">
              <label for="inputEmail4">Correo Electronico</label>
              <input type="text" class="form-control"placeholder="samy.lopez@bica.edu.mx">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Estatus</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Activo</option>
                <option>Baja</option>
              </select>
            </div>
             <div class="col">
              <label for="inputEmail4">Grupo</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>1 A</option>
                <option>1 B</option>
              </select>
            </div>
            <div class="col">
              <label for="inputEmail4">Nivel Escolar</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Secundaria</option>
                <option>Preparatoria</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Modalidad escolar</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Ninguna</option>
                <option>Internado</option>
                <option>Externo</option>
              </select>
            </div>
            <div class="col">
              <label for="inputEmail4">Beca</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option></option>
                <option>Ninguna</option>
                <option>Especial</option>
                <option>Completa</option>
              </select>
            </div>
            <div class="col">
              <label for="inputEmail4">Numero telefonico</label>
              <input type="text" class="form-control" placeholder="9889677449">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="inputEmail4">Fecha de ingreso</label>
                <input type="date" class="form-control" name="fecha" id="fecha" v-model="fecha">
            </div>
            <div class="col">
              <label for="inputEmail4">Foto</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Buscar..</label>
              </div>
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

  </div>
<!-- FIN INSTACNIA VUE -->


@endsection

@push('scripts')

  <script src="{{asset('js/vue-resource.js')}}"></script>
  <script src="{{asset('js/apis/apiAlumnos.js')}}"></script>


  @endpush