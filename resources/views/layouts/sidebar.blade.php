<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">    

        <li class="menu-sidebar"><a href="{{ url('/') }}"><span class="fa fa-calendar-minus-o"></span> Beranda</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('allpost') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>

            <li><a href="{{ url('addpost') }}"><i class="fa fa-circle-o"></i> Add new post</a></li>

            <li><a href="{{ url('#') }}"><i class="fa fa-circle-o"></i> Preview</a></li>
          </ul>
        </li>
      </ul>
    </section>