@php
  $all_notifications = auth()->user()->notifications;
  $unread_notifications = $all_notifications->where('read_at', null);
  $total_unread = count($unread_notifications);
@endphp
{{--<!-- Notifications: style can be found in dropdown.less -->--}}
{{--<li class="dropdown notifications-menu pt-1">--}}
{{--  <a href="#" class="dropdown-toggle load_notifications" data-toggle="dropdown" id="show_unread_notifications" data-loaded="false">--}}
{{--    <i class="fas fa-bell"></i>--}}
{{--    <span class="label label-warning notifications_count">@if(!empty($total_unread)){{$total_unread}}@endif</span>--}}
{{--  </a>--}}
{{--  <ul class="dropdown-menu">--}}
{{--    <!-- <li class="header">You have 10 unread notifications</li> -->--}}
{{--    <li>--}}
{{--      <!-- inner menu: contains the actual data -->--}}

{{--      <ul class="menu" id="notifications_list">--}}
{{--      </ul>--}}
{{--    </li>--}}
{{--    --}}
{{--    @if(count($all_notifications) > 10)--}}
{{--      <li class="footer load_more_li">--}}
{{--        <a href="#" class="load_more_notifications">@lang('lang_v1.load_more')</a>--}}
{{--      </li>--}}
{{--    @endif--}}
{{--  </ul>--}}
{{--</li>--}}

{{--<input type="hidden" id="notification_page" value="1">--}}
{{--//////////////////--}}

<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i></a>
  <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right" id="notifications_list">
    <li class="dropdown-menu-header">
      <div class="dropdown-header m-0 p-2">
        <span class="notification-title">App Notifications</span>
      </div>
    </li>
    <li class="scrollable-container media-list">
      <a class="d-flex justify-content-between" href="javascript:void(0)">
        <div class="media d-flex align-items-start">
          <div class="media-body">
            @if(!empty($total_unread)){{$total_unread}}
            @else
              <?php
                    print 'No Notification Found';
              ?>
            @endif

          </div>
        </div>
      </a>
    </li>
    @if(count($all_notifications) > 10)
    <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">@lang('lang_v1.load_more')</a></li>
    @endif
  </ul>
</li>
<input type="hidden" id="notification_page" value="1">