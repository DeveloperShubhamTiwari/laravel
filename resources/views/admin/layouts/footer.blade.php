<!-- js -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/admin') }}/vendors/scripts/core.js"></script>
<script src="{{ asset('assets/admin') }}/vendors/scripts/script.min.js"></script>
<script src="{{ asset('assets/admin') }}/vendors/scripts/process.js"></script>
<script src="{{ asset('assets/admin') }}/vendors/scripts/layout-settings.js"></script>
<script src="{{ asset('assets/admin') }}/src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
<script src="{{ asset('assets/admin') }}/src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
<script src="{{ asset('assets/admin') }}/src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
<script src="{{ asset('assets/admin') }}/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="{{ asset('assets/admin') }}/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('assets/admin') }}/vendors/scripts/dashboard2.js"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   let table = new DataTable('#myTable');
    @if ($errors->any())
         @foreach ($errors->all() as $error)
             toastr.error("{{ $error }}");
         @endforeach
     @endif
   
     @if (Session::has('success'))
         toastr.success("{{ Session::get('success') }}");
     @endif
   
     @if (Session::has('error'))
         toastr.error("{{ Session::get('error') }}");
     @endif
   
   
   
     function deleteData(href){
   Swal.fire({
   title: 'Are you sure?',
   text: "You won't be able to revert this!",
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
   if (result.isConfirmed) {
       window.location = href;
       
   }
   })
   }
</script>
</body>
</html>