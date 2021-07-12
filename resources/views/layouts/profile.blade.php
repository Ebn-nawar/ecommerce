@include('admin.users.Userprofile.includes.head')
 <!-- Page Wrapper -->
 <div id="wrapper">
    @include('admin.users.Userprofile.includes.main')
    @yield ('content')
 </div>
<!-- End of Main Content -->
@include('admin.users.Userprofile.includes.scripts')

    </body>
</html>