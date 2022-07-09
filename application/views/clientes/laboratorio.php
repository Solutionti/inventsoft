<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buen Viaje - Usuarios</title>
    <!-- <link rel="icon" href="<?php echo base_url(); ?>public/img/theme/logo2.ico" type="image/ico" />  -->
    <link id="pagestyle" href="<?php echo base_url(); ?>public/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.css">
	<link href="<?php echo base_url(); ?>public/fontawesome/css/brands.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/fontawesome/css/solid.css" rel="stylesheet">
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
                <p class="mb-0 h6">Usuarios</p>
                <button class="btn btn-primary btn-xs ms-auto" data-bs-toggle="modal" href="#Agregarusuario" role="button"> <i class="fas fa-plus"></i> Agregar</button>
              </div>
            </div>
            <div class="card-body">
             <div class="table-responsive">
               <table class="table table-responsive table-hover">
                 <thead>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Opciones</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Nombre</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Usuario</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Correo</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Telefono</th>
                   <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Estado</th>
                 </thead>
                 <tbody>
                  <?php foreach($administrador->result() as $usuarios) { ?>
                    <tr>
                <td>
                <div class="row">
                  <a 
                    class="icon icon-shape icon-sm me-1 bg-gradient-danger shadow mx-3"
                    href="<?php echo base_url(); ?>administracion/eliminarusuario/<?php echo $usuarios->codigo_usuario; ?>"
                  >
                    <i class="fas fa-times text-white opacity-10"></i>
                  </a>
                  <a 
                    class="icon icon-shape icon-sm  bg-gradient-info shadow"
                    onclick="verUsuarios(<?php echo $usuarios->codigo_usuario; ?>);" 
                  >
                    <i class="fas fa-pen text-white opacity-10"></i>
                  </a>
                </div>
                <td class="text-xs text-dark mb-0"><?php echo $usuarios->nombre." ".$usuarios->apellido; ?></td>
                <td class="text-xs text-dark mb-0"><?php echo $usuarios->usuario; ?></td>
                <td class="text-xs text-dark mb-0"><?php echo $usuarios->email; ?></td>
                <td class="text-xs text-dark mb-0"><?php echo $usuarios->telefono; ?></td>
                <td class="text-xs text-success mb-0"><?php echo $usuarios->estado; ?></td>
              </tr>
                  <?php } ?>
                 </tbody>
               </table>
             </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="Agregarusuario" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group input-group-sm">
                <label>Apellido</label>
                <input type="text" class="form-control" id="apellido">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group input-group-sm">
                <label>Nombre</label>
                <input type="text" class="form-control" id="nombre">
            </div>
          </div>
        </div>
        <div class="form-group input-group-sm">
            <label>Tipo de Usuario</label>
              <select class="form-control" id="tp_usuario">
                <option value="">Seleccione el tipo de usuario</option>
                <option value="Administrador">Administrador</option>
                <option value="Patologo">Vendedor</option>
              </select>
        </div>
        <div class="form-group input-group-sm">
            <label>Telefono</label>
            <input type="number" class="form-control" id="telefono">
        </div>
        
        <div class="form-group input-group-sm">
            <label>Correo</label>
            <input type="email" class="form-control" id="correo">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group input-group-sm">
                <label>Usuario</label>
                <input type="text" class="form-control" id="usuario">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group input-group-sm">
                <label>Contraseña</label>
                <input type="password" class="form-control" id="password">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="crearusuario">Guardar</button>
      </div>
    </div>
  </div>
</div>


  <script src="<?php echo base_url(); ?>public/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/plugins/chartjs.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>
</html>