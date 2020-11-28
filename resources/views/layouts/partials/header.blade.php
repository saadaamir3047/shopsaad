@inject('request', 'Illuminate\Http\Request')
<!-- Main Header -->
<header class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
{{--  <a href="{{route('home')}}" class="logo">--}}

{{--    <span class="logo-lg">{{ Session::get('business.name') }}</span>--}}
{{--  </a>--}}

  <!-- Header Navbar -->
{{--///////////////////////////////////--}}


  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="navbar-collapse" id="navbar-mobile">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          &#9776;
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
          </ul>

        </div>
        <ul class="nav navbar-nav float-right">
{{--          <li class="nav-item d-none d-lg-block" ><a title="@lang('lang_v1.calculator')"  id="btnCalculator" class="nav-link nav-link-expand" data-toggle="popover" data-trigger="click"  data-content='@include("layouts.partials.calculator")' data-html="true" data-placement="bottom"><i class="fa fa-calculator icon-maximize"></i></a></li>--}}
{{--          <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>--}}
{{--            <div class="search-input">--}}
{{--              <div class="search-input-icon"><i class="feather icon-search primary"></i></div>--}}
{{--              <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="template-list">--}}
{{--              <div class="search-input-close"><i class="feather icon-x"></i></div>--}}
{{--              <ul class="search-list search-list-main"></ul>--}}
{{--            </div>--}}
{{--          </li>--}}
          <li class="mt-15 pt-1"><b>{{ @format_date('now') }}</b></li>
          <li class="dropdown dropdown-notification nav-item">
            @include('layouts.partials.header-notifications')
          </li>
          <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ Auth::User()->first_name }} {{ Auth::User()->last_name }}</span><span class="user-status">Available</span></div>
              <span>
{{--                @if(!empty(Session::get('business.logo')))--}}
                  <img class="round" src="{{ url( 'https://i.pinimg.com/474x/20/62/69/20626905851e066e66764c3385fa4352.jpg' . Session::get('business.logo') ) }}"  alt="avatar" height="40" width="40">
{{--                @endif--}}
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{action('UserController@getProfile')}}" @lang('lang_v1.profile')><i class="feather icon-user"></i> Edit Profile</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="{{action('Auth\LoginController@logout')}}" @lang('lang_v1.sign_out')><i class="feather icon-power"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>






{{--  ///////////////////////////////--}}



{{--  <nav class="navbar navbar-static-top" role="navigation">--}}


{{--  @if(Module::has('Superadmin'))--}}
{{--    @includeIf('superadmin::layouts.partials.active_subscription')--}}
{{--  @endif--}}

{{--  <!-- Navbar Right Menu -->--}}
{{--    <div class="navbar-custom-menu">--}}

{{--      @if(Module::has('Essentials'))--}}
{{--        @includeIf('essentials::layouts.partials.header_part')--}}
{{--      @endif--}}

{{--      <button id="btnCalculator" title="@lang('lang_v1.calculator')" type="button" class="btn btn-success btn-flat pull-left m-8 hidden-xs btn-sm mt-10 popover-default" data-toggle="popover" data-trigger="click" data-content='@include("layouts.partials.calculator")' data-html="true" data-placement="bottom">--}}
{{--        <strong><i class="fa fa-calculator fa-lg" aria-hidden="true"></i></strong>--}}
{{--      </button>--}}

{{--      @if($request->segment(1) == 'pos')--}}
{{--        <button type="button" id="register_details" title="{{ __('cash_register.register_details') }}" data-toggle="tooltip" data-placement="bottom" class="btn btn-success btn-flat pull-left m-8 hidden-xs btn-sm mt-10 btn-modal" data-container=".register_details_modal"--}}
{{--                data-href="{{ action('CashRegisterController@getRegisterDetails')}}">--}}
{{--          <strong><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></strong>--}}
{{--        </button>--}}
{{--        <button type="button" id="close_register" title="{{ __('cash_register.close_register') }}" data-toggle="tooltip" data-placement="bottom" class="btn btn-danger btn-flat pull-left m-8 hidden-xs btn-sm mt-10 btn-modal" data-container=".close_register_modal"--}}
{{--                data-href="{{ action('CashRegisterController@getCloseRegister')}}">--}}
{{--          <strong><i class="fa fa-window-close fa-lg"></i></strong>--}}
{{--        </button>--}}
{{--      @endif--}}

{{--      @if(in_array('pos_sale', $enabled_modules))--}}
{{--        @can('sell.create')--}}
{{--          <a href="{{action('SellPosController@create')}}" title="@lang('sale.pos_sale')" data-toggle="tooltip" data-placement="bottom" class="btn btn-success btn-flat pull-left m-8 hidden-xs btn-sm mt-10">--}}
{{--            <strong><i class="fa fa-th-large"></i> &nbsp; @lang('sale.pos_sale')</strong>--}}
{{--          </a>--}}
{{--        @endcan--}}
{{--      @endif--}}

{{--      @if(Module::has('Repair'))--}}
{{--        @includeIf('repair::layouts.partials.header')--}}
{{--      @endif--}}

{{--      @can('profit_loss_report.view')--}}
{{--        <button type="button" id="view_todays_profit" title="{{ __('home.todays_profit') }}" data-toggle="tooltip" data-placement="bottom" class="btn btn-success btn-flat pull-left m-8 hidden-xs btn-sm mt-10">--}}
{{--          <strong><i class="fas fa-money-bill-alt fa-lg"></i></strong>--}}
{{--        </button>--}}
{{--      @endcan--}}

    <!-- Help Button -->
{{--      @if(auth()->user()->hasRole('Admin#' . auth()->user()->business_id))--}}
{{--        <button type="button" id="start_tour" title="@lang('lang_v1.application_tour')" data-toggle="tooltip" data-placement="bottom" class="btn btn-success btn-flat pull-left m-8 hidden-xs btn-sm mt-10">--}}
{{--          <strong><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></strong>--}}
{{--        </button>--}}
{{--      @endif--}}

{{--      <div class="m-8 pull-left mt-15 hidden-xs" style="color: #fff;"><strong>{{ @format_date('now') }}</strong></div>--}}

{{--      <ul class="nav navbar-nav">--}}
{{--      @include('layouts.partials.header-notifications')--}}
{{--      <!-- User Account Menu -->--}}
{{--        <li class="dropdown user user-menu">--}}
{{--          <!-- Menu Toggle Button -->--}}
{{--          <a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
{{--            <!-- The user image in the navbar-->--}}
{{--            @php--}}
{{--              $profile_photo = auth()->user()->media;--}}
{{--            @endphp--}}
{{--            @if(!empty($profile_photo))--}}
{{--              <img src="{{$profile_photo->display_url}}" class="user-image" alt="User Image">--}}
{{--          @endif--}}
{{--          <!-- hidden-xs hides the username on small devices so only the image appears. -->--}}
{{--            <span>{{ Auth::User()->first_name }} {{ Auth::User()->last_name }}</span>--}}
{{--          </a>--}}
{{--          <ul class="dropdown-menu">--}}
{{--            <!-- The user image in the menu -->--}}
{{--            <li class="user-header">--}}
{{--              @if(!empty(Session::get('business.logo')))--}}
{{--                <img src="{{ url( 'uploads/business_logos/' . Session::get('business.logo') ) }}" alt="Logo"></span>--}}
{{--              @endif--}}
{{--              <p>--}}
{{--                {{ Auth::User()->first_name }} {{ Auth::User()->last_name }}--}}
{{--              </p>--}}
{{--            </li>--}}
{{--            <!-- Menu Body -->--}}
{{--            <!-- Menu Footer-->--}}
{{--            <li class="user-footer">--}}
{{--              <div class="pull-left">--}}
{{--                <a href="{{action('UserController@getProfile')}}" class="btn btn-default btn-flat">@lang('lang_v1.profile')</a>--}}
{{--              </div>--}}
{{--              <div class="pull-right">--}}
{{--                <a href="{{action('Auth\LoginController@logout')}}" class="btn btn-default btn-flat">@lang('lang_v1.sign_out')</a>--}}
{{--              </div>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </li>--}}
{{--        <!-- Control Sidebar Toggle Button -->--}}
{{--      </ul>--}}
{{--    </div>--}}
{{--  </nav>--}}
</header>