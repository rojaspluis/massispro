
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Principal, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>MAS 1 PRO</title>


  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body>

  <section id="container" class="">
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

 
      <a href="index.html" class="logo">MAS1 <span class="lite">PRODUCCIONES</span></a>


      <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">

          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Luis Rojas </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Cerrar Sesión</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Principal</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_tools"></i>
                          <span>Configuracion</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="tipousuario.html">Tipo Usuario</a></li>
              <li><a class="" href="tipocliente.php">Tipo Cliente</a></li>
              <li><a class="" href="tipodocumento.html">Tipo Documento</a></li>
            </ul>
          </li>

          <li>
            <a class="" href="usuarios.html">
                          <i class="icon_profile"></i>
                          <span>Usuarios</span>

                      </a>

          </li>

          <li>
            <a class="" href="clientes.html">
                          <i class="icon_group"></i>
                          <span>Clientes</span>

                      </a>

          </li>

          <li>
            <a class="" href="documentos.html">
                          <i class="icon_document_alt"></i>
                          <span>Documentos</span>

                      </a>

          </li>

        </ul>

      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Tipo Clientes</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Principal</a></li>
              <li><i class="fa fa-table"></i>Lista Tipo Clientes</li>
    
            </ol>
          </div>
        </div>



        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
            
       <div>
        <a class="btn btn-primary" data-toggle="modal" href="#myModal-2">Nuevo Tipo Clientes</a>

       </div>
             
               
       <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
              <h4 class="modal-title">Tipo Clientes</h4>
            </div>
            <div class="modal-body">
              <form class="form-inline" role="form">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">Descripción</label>
                  <input type="text" class="form-control sm-input" id="exampleInputEmail5" placeholder="">
                </div>

        
                <button type="submit" class="btn btn-success">Crear</button>
              </form>

            </div>

          </div>
        </div>
      </div>



              <br>
              

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Id</th>
                    <th><i class="icon_calendar"></i> Descripción</th>
                    <th><i class="icon_cogs"></i> E/E</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Juridica</td>
                    
                    <td>
                      <div class="btn-group">
                        
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </section>
    </section>

    <div class="text-right">
      <div class="credits" style="text-align: center">
          DEMO SENATI <a href="https://mas1tv.pe/">PRO-MAS1</a>
        </div>
    </div>
  </section>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="js/scripts.js"></script>


</body>

</html>
