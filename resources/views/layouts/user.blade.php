@include('customer.includes.head')
 <!-- Page Wrapper -->
 <div id="wrapper">
    @include('customer.includes.header')
    @yield ('content')
 </div>
<!-- End of Main Content -->
@include('customer.includes.footer')
@include('customer.includes.scripts')
    </body>
</html>