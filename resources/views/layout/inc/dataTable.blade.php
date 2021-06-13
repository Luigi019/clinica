@section('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" type="text/css">
@endsection

@section('js')
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js'></script>
<script>
$(document).ready(function() {
    $('#datatable').DataTable();
} );
 </script> 
@endsection