<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <a href="https://srcubeca.wordpress.com/"><img alt="User Image" class="img-circle" src="{{ asset('/images/SRcube_logo.png') }}"></a>
      </div>
      <div class="pull-left info">
          <p><a href="#"></a></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form -->
    <form action="#" class="sidebar-form" method="get">
      <div class="input-group">
        <input class="form-control" name="q" placeholder="Search..." type="text">
        <span class="input-group-btn">
          <button class="btn btn-flat" id="search-btn" name="search" type="submit"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>


        <li class="treeview">
            <a href="#">
                <i class="fa fa-user"></i>
                <span>Courses</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('courses.index') }}"><i class="fa fa-circle-o"></i><span>All Courses</span></a></li>
                <li><a href="{{ route('courses.create') }}"><i class="fa fa-circle-o"></i><span>Create New Course</span></a></li>
                <li><a href="{{ route('courses.create') }}"><i class="fa fa-circle-o"></i><span>Course Students</span></a></li>
            </ul>
        </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Teacher</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    @if (Auth::user()->roles[0]->name == "admin")
                        <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i><span>All Teachers</span></a></li>
                        <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i><span>Create Teacher</span></a></li>
                    @elseif (Auth::user()->roles[0]->name == "teacher")
                        <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i><span>Profile</span></a></li>
                    @endif
                </ul>
            </li>


        <li class="treeview">
            <a href="#">
                <i class="fa fa-user"></i>
                <span>Student</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('students.index') }}"><i class="fa fa-circle-o"></i><span>All Students</span></a></li>
                <li><a href="{{ route('students.create') }}"><i class="fa fa-circle-o"></i><span>Create Student</span></a></li>
            </ul>
        </li>

      <li class="header">Other Options</li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>


