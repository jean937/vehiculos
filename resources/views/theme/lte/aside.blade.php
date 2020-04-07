<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Jean Carlos Aldas Garrido</p>

        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">


        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Registro  Cliente Alquiler </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="fa fa-circle-o"href="{{ route('productos.create') }}">{{ __('Ingreso cliente Registro') }}</i> </a></li>
            <li><a class="fa fa-circle-o"href="{{ route('productos.index') }}">{{ __('consultas cliente registro') }}</i> </a></li>


          </ul>
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Marcas Vehiculo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a class="fa fa-circle-o"href="{{ route('marcas.create') }}">{{ __('Ingreso marcas') }}</i> </a></li>
            <li><a class="fa fa-circle-o"href="{{ route('marcas.index') }}">{{ __('consultas marcas') }}</i> </a></li>
          </ul>
        </li>

        <li class="treeview ">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Categoria Vehiculo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="fa fa-circle-o"href="{{ route('categorias.create') }}">{{ __('Ingreso categorias') }}</i> </a></li>
            <li><a class="fa fa-circle-o"href="{{ route('categorias.index') }}">{{ __('consultas categorias') }}</i> </a></li>


          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Detalle Registro</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="fa fa-circle-o"href="http://localhost:8000/vehiculo">{{ __('Registro Detalles') }}</i> </a></li>


          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Salir</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="fa fa-circle-o"href="http://localhost:8000/">{{ __('Cerrar seccion') }}</i> </a></li>


          </ul>
        </li>




      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
