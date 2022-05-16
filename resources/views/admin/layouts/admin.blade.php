@include('admin.layouts.header')

@include('admin.layouts.sidebar')

<!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16"> 
    @yield('content')
  </div>
  <!-- end content -->

@include('admin.layouts.script')