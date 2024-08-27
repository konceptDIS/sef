<!-- Bootstrap bundle JS -->
<script src="{{asset('/dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('/dashboard/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/plugins/simplebar/js/simplebar.min.js')}}"></script> --}}
<script src="{{asset('/dashboard/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/pace.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
<script src="{{asset('/dashboard/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<!-- Vector map JavaScript -->
<script src="{{asset('/dashboard/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!--app-->
<script src="{{asset('/dashboard/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/app.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('.datatable-kdis').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@stack('js')

<script src="{{asset('/dashboard/assets/js/index.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/script.js')}}"></script>
{{-- <script>
new PerfectScrollbar(".review-list")
new PerfectScrollbar(".chat-talk")
</script> --}}
