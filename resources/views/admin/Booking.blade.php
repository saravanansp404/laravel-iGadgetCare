@include('admin.menu')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Booking</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
 
         

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Booking</h3>
                <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
        


                <table id="example1" class="table table-responsive table-sm   table-bordered table-striped">
                <thead>
                  <tr>
                  <th >S.no</th>
                    <th class="invisible_class">id</th>
                    <th  >Date</th>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Moblie</th>
                    <th >Address</th>
                    <th >Booking Token</th>
                    <th >Mobile Brand</th>
                    <th >Mobile Problem</th>
                    <th >Other Problem</th>
                    <th >working person</th>
                    <th >Status</th>
                  
                    <th>Action</th>
                 
                  </tr>
                  </thead>
    <tbody><?php $i = 1; ?>
    @foreach ($news as $news)
      <tr class="data-row">
      <td class=" iteration"><?php echo  $i++;?></td>
        <td class=" iteration invisible_class">{{ ($news->id )}}</td>
        <td class=" name">{{ ($news->date )}}</td>
        <td class=" word-break description"> {{ ($news->name )}}</td>
        <td class=" word-break email "> {{ ($news->email )}}</td>
        <td class=" word-break moblie"> {{ ($news->moblie )}}</td>
        <td class=" word-break address"> {{ ($news->address )}}</td>
        <td class=" word-break message"> {{ ($news->booktoken )}}</td>
        <td class=" word-break mobliebrand"> {{ ($news->mobliebrand )}}</td>
        <td class=" word-break moblieproblem"> {{ ($news->moblieproblem )}}</td>
        <td class=" word-break otherproble"> {{ ($news->otherproble )}}</td>
        <td class=" word-break worker"> {{ ($news->worker )}}</td>
        <td class=" word-break status"> {{ ($news->status )}}</td>

        <td class="align-middle">
        <a  data-val="{{ ($news->booking_id )}}" data-toggle="modal" data-target="#my-modal-de" class="btn btn-danger"><i class="fas fa-trash"></i> Delete </a>

        <a href="#"  class="btn btn-success" data-val="{{ ($news->booking_id )}}" data-toggle="modal" data-target="#my-modal"><i class="fas fa-edit"></i> Assign </a>        </td>
      </tr>
@endforeach
 
    </tbody>
  </table>


  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="http://edcloudsolution.com/">Edcolud</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

<div class="modal fade" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="my-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <!-- <p class="modal-body-id"></p> -->
       

          <form action="/admin/status" method="POST">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <input type="hidden" name="id" id="modal-body-id">
          <?php $md_date=date("Y-m-d"); ?>
          <input type="hidden" name="md_date" value="{{$md_date}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Working Person </label>
    <input type="text" name="workingperson" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <label for="exampleInputEmail1">Status </label>

<select name="status" class="form-control" aria-label="Default select example">
  <option  selected disabled>Choose Status</option>
  <option value="waiting for service">waiting for service</option>
  <option value=" in process"> in process</option>
  <option value="completed">completed</option>
  <option value="delivered">delivered</option>
</select>


<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="my-modal-de" tabindex="-1" role="dialog" aria-labelledby="my-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <!-- <p class="modal-body-id"></p> -->
       <p>
         Are you sure you want to delete this Booking?
       </p>

          <form action="/admin/bookingdelete" method="POST">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <input type="hidden" name="did" id="modal-body-did">

  <button type="submit" class="btn btn-primary">Delete</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<style>
    .invisible_class{
        display: none;
    }
    table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
    top: 50%;
    left: 5px;
    height: 1em;
    width: 1em;
    margin-top: 6px;
    display: block;
    position: absolute;
    color: white;
    border: .15em solid white;
    border-radius: 1em;
    box-shadow: 0 0 0.2em #444;
    box-sizing: content-box;
    text-align: center;
    text-indent: 0 !important;
    font-family: "Courier New",Courier,monospace;
    line-height: 1em;
    content: "+";
    background-color: #0275d8;
}
.alert-success {
    color: #fff;
    background-color: #28a745;
    border-color: #23923d;
    margin-top: 4%;
}
.alert-danger{
  margin-top: 4%;
}
</style>
<script>$('#my-modal').on('show.bs.modal', function (event) {
  var myVal = $(event.relatedTarget).data('val');
//   $(this).find(".modal-body-id").text(myVal);
  $("#modal-body-id").val(myVal);
});</script>
<script>$('#my-modal-de').on('show.bs.modal', function (event) {
  var myVal = $(event.relatedTarget).data('val');
//   $(this).find(".modal-body-id").text(myVal);
  $("#modal-body-did").val(myVal);
});</script>
<script>
  $(document).ready(function() {
  /**
   * for showing edit item popup
   */

  $(document).on('click', "#edit-item", function() {
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#edit-modal').modal(options)
  })

  // on modal show
  $('#edit-modal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
    var row = el.closest(".data-row");

    // get the data
    // var id = el.data('item-id');
    var id = row.children(".iteration").text();
    var name = row.children(".name").text();
    var named = row.children(".named").text();
    var description = row.children(".description").text();
    var email = row.children(".email").text();
    var moblie = row.children(".moblie").text();
    var message = row.children(".message").text();
    var myBookId = $(this).data('data-item-id');

    // fill the data in the input fields
    $("#modal-input-id").val(id);
    $(".modal-body #bookId").val( myBookId );
    $("#modal-input-name").val(name);
    $("#modal-input-named").val(named);
    $("#modal-input-email").val(email);
    $("#modal-input-moblie").val(moblie);
    $("#modal-input-message").val(message);
    $("#modal-input-description").val(description);

  })

  // on modal hide
  $('#edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })
})
</script>