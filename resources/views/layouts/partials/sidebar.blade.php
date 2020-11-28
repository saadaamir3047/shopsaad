<!-- Left side column. contains the logo and sidebar -->


<aside class="main-sidebar ">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="margin-top: -62px;">

	<a href="{{route('home')}}">
{{--		<span class="logo-lg">{{ Session::get('business.name') }}</span>--}}
        <div>
            <img src="https://www.freelogodesign.org/Content/img/logo-samples/flooop.png" style="width: 100%;height: 131px;">
        </div>

	</a>

    <!-- Sidebar Menu -->
    {!! Menu::render('admin-sidebar-menu', 'adminltecustom'); !!}

    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
