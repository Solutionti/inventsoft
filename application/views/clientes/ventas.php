<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buen Viaje - Ventas</title>
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?php echo base_url(); ?>clientes/inicio">Buen viaje</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Ventas</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Ventas</h6>
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
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 h6">Sistema de Ventas</p>
                <!-- <button class="btn btn-primary btn-xs ms-auto" data-bs-toggle="modal" href="#Agregarusuario" role="button"> <i class="fas fa-plus"></i> Agregar</button> -->
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Codigo de barras</label>
                        <input type="text" class="form-control form-control-md">
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-5">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Producto" readonly>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-text">$</span>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" readonly>
                        </div> 
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="number" class="form-control" min="0" max="50" readonly>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <button class="btn btn-icon btn-2 bg-gradient-danger" type="button">
	                      <span class="fas fa-search"><i class="ni ni-bulb-61"></i></span>
                      </button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Recibo de efectivo</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Total</label>
                      <input type="text" class="form-control" readonly>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="table-responsive">
                      <table class="table table-stripped table-hover">
                        <thead class="bg-success ">
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Nro</th>
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Producto</th>
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Codigo</th>
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Cantidad</th>
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Total</th>
                        </thead>
                      </table>
                    </div>
            
                    
                  </div>
                </div>
                <div class="col-md-3 mb-4">
                  <div class="card card-pricing">
                    <div
                      class="card-header bg-gradient-success text-center pt-4 pb-5 position-relative"
                    >
                      <div class="z-index-1 position-relative">
                        <h5 class="text-white">Total Compra</h5>
                        <h1 class="text-white mt-2 mb-0">
                        <small>$</small>0</h1>
                        <h6 class="text-white">Total a devolver</h6>
                        <h4 class="text-white">0</h4>
                      </div>
                    </div>
                  <div class="position-relative mt-n5" style="height: 50px;">
                  <div class="position-absolute w-100">
                    <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                  <defs>
                    <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                  </defs>
                  <g class="moving-waves">
                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                  </g>
                </svg>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Documento</label>
                    <input type="text" class="form-control form-control-sm" value="FACTURA" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tipo pago</label>
                    <input type="text" class="form-control form-control-sm" value="CONTADO" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Sede</label>
                    <input type="text" class="form-control form-control-sm" value="Sede terminal" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>N° de venta</label>
                    <input type="text" class="form-control form-control-sm" value="001" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Impuesto</label>
                    <select class="form-control form-control-sm">
                      <option value="">A</option>
                      <option value="">B</option>
                      <option value="">C</option>
                      <option value="">D</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="form-control form-control-sm" value="<?php echo date("d-m-Y"); ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <div class="form-group text-center">
                    <button class="btn bg-gradient-primary">Otra venta</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group ">
                    <button class="btn bg-gradient-danger">Imprimir</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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