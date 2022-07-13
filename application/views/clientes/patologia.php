<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buen Viaje - Inventarios</title>
    <!-- <link rel="icon" href="<?php echo base_url(); ?>public/img/theme/logo2.ico" type="image/ico" />  -->
    <link id="pagestyle" href="<?php echo base_url(); ?>public/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.css">
	<link href="<?php echo base_url(); ?>public/fontawesome/css/brands.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/fontawesome/css/solid.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/css/datatable.css" rel="stylesheet">
</head>
<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://cdn.pixabay.com/photo/2020/10/01/17/11/store-5619201_960_720.jpg'); background-position-y: 50%; background-repeat: no-repeat; background-size: 100%">
    <span class="mask bg-default opacity-6"></span>
  </div>

  <div class="main-content position-relative max-height-vh-100 h-100">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Buen viaje</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">usuarios</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">usuarios</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="<?php echo base_url(); ?>cerrarsesionclientes" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Cerrar Sesión</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
    <!-- <div class="card shadow-lg mx-4 card-profile-bottom"> -->
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?php echo base_url(); ?>public/img/theme/team-41.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1 text-white">
              <?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido"); ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm text-white">
                <?php echo $this->session->userdata("rol"); ?>
              </p>
            </div>
          </div>
          <div class="col-lg-8 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "  href="<?php echo base_url(); ?>clientes/inicio">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Inicio</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link mb-0 px-0 py-1  d-flex align-items-center justify-content-center "  href="<?php echo base_url(); ?>clientes/laboratorio" >
                    <i class="ni ni-app"></i>
                    <span class="ms-2">Usuarios</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "  href="<?php echo base_url(); ?>clientes/patologia">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Inventarios</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "  href="<?php echo base_url(); ?>clientes/ventas" >
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Ventas</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "  href="<?php echo base_url(); ?>clientes/gastos" >
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Gastos</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "  href="<?php echo base_url(); ?>clientes/ecografias" >
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Reportes</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 h6">Inventarios</p>
                <button class="btn btn-primary btn-xs ms-auto mx-2" data-bs-toggle="modal" href="#productos" role="button"> <i class="fas fa-shopping-basket"></i> Agregar Producto</button>
                <button class="btn btn-primary btn-xs  mx-2" data-bs-toggle="modal" href="#consulta" role="button"> <i class="fas fa-search"></i> Consulta</button>
                <button class="btn btn-primary btn-xs mx-2" data-bs-toggle="modal" href="#entrada" role="button"> <i class="fas fa-plus"></i> Entrada</button>
                <button class="btn btn-primary btn-xs mx-2" data-bs-toggle="modal" href="#salida" role="button" > <i class="fas fa-minus"></i> Salida</button>
              </div>
            </div>
            <div class="card-body">
             <div class="table-responsive">
               <table class="table table-responsive table-borderless table-hover" id="tabla-productos">
                 <thead>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Opciones</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Codigo</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Nombre</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Categoria</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Valor</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Cantidad</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Stock</th>
                 </thead>
                 <tbody>
                   <?php foreach($producto->result() as $productos) { ?>
                    <tr>
                    <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"></td>
                    <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->codigo; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->nombre; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->categorias; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->precio; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->cantidad; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->stock ?></td>
                </tr>
                   <?php } ?> 
                 </tbody>
               </table>
             </div>
            </div>
          </div>
        </div>

        <!-- MODAL PRODUCTOS-->

  <div class="modal fade" id="productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Agregar producto</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Categoria</label>
                    <select id="categoria_p" class="form-control form-control-sm">
                      <option value="">Seleccione una categoria</option>
                      <?php foreach($categoria->result() as $categorias) { ?>
                        <option value="<?php echo $categorias->codigo_categoria; ?>"><?php echo $categorias->nombre; ?></option>
                      <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" id="nombre_p" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Codigo</label>
                    <input type="number" id="codigo_p" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Codigo de barras</label>
                    <input type="number" id="codigo_barras_p" class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Unidad medida</label>
                    <select id="medida_p" class="form-control form-control-sm">
                        <option value="Caja">Caja</option>
                        <option value="Galones">Galones</option>
                        <option value="Gramos">Gramos</option>
                        <option value="Hora">Hora</option>
                        <option value="Kilos">Kilos</option>
                        <option value="Litros">Litros</option>
                        <option value="Metros">Metros</option>
                        <option value="Pies">Pies</option>
                        <option value="Pulgadas">Pulgadas</option>
                        <option value="Servicio">Servicio</option>
                        <option value="Unidades">Unidades</option>
                        <option value="Yardas">Yardas</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="number" id="cantidad_p" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Precio por unidad</label>
                    <input type="number" id="precio_p" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Moneda</label>
                    <select id="moneda_p" class="form-control form-control-sm">
                        <option value="COP">Pesos ( COP )</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea id="descripcion_p" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Imagen</label>
              <input type="file" class="form-control form-control-sm">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardar_productos">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- CONSULTA DE KARDEX -->

<div class="modal fade" id="consulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Consulta de kardex</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <label>Seleccione la accion a buscar</label>
            <select class="form-control form-control-sm">
              <option value="">Seleccione una opción</option>
              <option value="">Consulta de kardex</option>
              <option value="">Consulta de inventario</option>
            </select>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-4">
            <div class="form-group">
              <label>Producto</label>
              <select class="form-control form-control-sm">
                <option value=""></option>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Fecha inicial</label>
              <input type="date" class="form-control form-control-sm">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Fecha final</label>
              <input type="date" class="form-control form-control-sm">
            </div>
          </div>
          <div class="col-md-2 mt-4">
            <button class="btn btn-success btn-sm mt-2"> <i class="fas fa-search"></i> Buscar</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-responsive table-stripped">
                <thead>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">#</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">FECHA TRANSACCIÓN</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">TIPO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">MOTIVO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">ENTRADA</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">SALIDA</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">SALDO</th>
                </thead>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="">Sección</label>
            <select class="form-control form-control-sm">
              <option value=""> Cafeteria Buen viaje </option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="">Por stock</label>
            <select class="form-control form-control-sm">
              <option value=""> Todos </option>
              <option value=""> stock < 0 </option>
              <option value=""> stock = 0 </option>
              <option value=""> stock > 0 </option>
            </select>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-responsive table-stripped">
                <thead>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">CODIGO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">PRODUCTO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">CATEGORIA</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">COSTO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">FECHA INGRESO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">STOCK</th>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardar_productos">Guardar</button>
      </div>
    </div>
  </div>
</div>

        <!-- MODAL ENTRADA -->

  <div class="modal fade" id="entrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Ingreso de productos a la cafeteria</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Producto</label>
                    <select id="producto_e" class="form-control form-control-sm">
                      <option  value="">Seleccione un producto</option>
                      <?php foreach($producto->result() as $productos) { ?>
                        <option  value="<?php echo $productos->codigo; ?>"><?php echo $productos->nombre; ?></option>
                      <?php }?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="number" id="cantidad_e" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" id="stock_e" class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Sección</label>
                    <select id="seccion_e" class="form-control form-control-sm">
                      <option value="Salud madre y mujer">Sede principal</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Motivo de ingreso</label>
                    <select id="motivo_e" class="form-control form-control-sm">
                      <option value="">Seleccione el motivo del ingreso</option>
                      <option value="Compra">Compra de Insumos</option>
                      <option value="Obsequio">Obsequio Empresarial</option>
                      <option value="Temporal">Ingreso Temporal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Comentarios</label>
                    <textarea id="comentarios_e" class="form-control"></textarea>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardar_e">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!--SALIDA DE PRODUCTOS  -->
<div class="modal fade" id="salida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Salida de productos de la cafeteria</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Producto</label>
                    <select id="producto_s" class="form-control form-control-sm">
                    <option  value="">Seleccione un producto</option>
                      <?php foreach($producto->result() as $productos) { ?>
                        <option  value="<?php echo $productos->codigo; ?>"><?php echo $productos->nombre; ?></option>
                      <?php }?>
                    
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="number" id="cantidad_s" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" id="stock_s" class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Sección</label>
                    <select id="seccion_s" class="form-control form-control-sm">
                      <option value="Salud madre y mujer">Sede principal</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Motivo de salida</label>
                    <select id="motivo_s" class="form-control form-control-sm">
                      <option value="">Seleccione el motivo del ingreso</option>
                      <option value="Gasto interno">Salida por gasto interno</option>
                      <option value="Vencimiento">Salida por Vencimiento</option>
                      <option value="Prestamo">Salida por prestamo</option>
                      <option value="Temporal">Salida Temporal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Comentarios</label>
                    <textarea id="comentarios_s" class="form-control"></textarea>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="guardar_s">Guardar</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url(); ?>public/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/argon-dashboard.min.js?v=2.0.2"></script>
  <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/datatable.js"></script>
  <script src="<?php echo base_url(); ?>public/js/scripts/inventarios.js"></script>
  
</body>
</html>