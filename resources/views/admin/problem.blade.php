@include('admin.menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
       
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Problem</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      
         

            <div class="card">
              <div class="card-header">
              
                <button type="button" class="btn btn-primary align-self-right" data-toggle="modal" data-target="#exampleModal">
            Add Problem
</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
        


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th  >Problem Title</th>
                    <th>Action</th>
                    <!-- <th >Name</th>
                    <th >Email</th>
                    <th >Moblie</th>
                    <th >messages</th>
                    <th>Action</th> -->
                 
                  </tr>
                  </thead>
    <tbody>
    @foreach ($news as $news)
      <tr class="data-row">
        <td class=" iteration">{{ ($news->id )}}</td>
        <td class=" name">{{ ($news->problemtype )}}</td>
        
        <td class="align-middle">
        <a href="problemdelete/{{ $news->id }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete </a>
          
        </td>
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
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modal-label">View Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="attachment-body-content">
        <form id="edit-form" class="form-horizontal" method="POST" action="/dashboard/newsupdate">
        @csrf
        <div class="card text-black mb-0">
            <div class="card-header">
             
            </div>
            <div class="card-body">
              <!-- id -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-id">S.no  </label>
                <input type="text" readonly name="modal-input-id" class="form-control" id="modal-input-id" required>
               <p id="modal-input-id"></p>
              </div>
              <!-- /id -->
              <!-- name -->
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">date</label>
                <input type="text" readonly name="modal-input-name" class="form-control" id="modal-input-name" required autofocus>
              </div>
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Name</label>
                <input type="text" readonly name="modal-input-name" class="form-control" id="modal-input-description" required autofocus>
              </div>
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Email Id</label>
                <input type="text" readonly name="modal-input-name" class="form-control" id="modal-input-email" required autofocus>
              </div>
              <div class="form-group">
                <label class="col-form-label" for="modal-input-name">Moblie</label>
                <input type="text" readonly name="modal-input-name" class="form-control" id="modal-input-moblie" required autofocus>
              </div>
              <!-- /name -->
              <!-- description -->
            
              <div class="form-group">
                <label class="col-form-label" for="modal-input-description">Message</label>
                <!-- <input type="text" name="modal-input-description" class="form-control" id="modal-input-description" required> -->
                <textarea name="modal-input-description" class="form-control" id="modal-input-message" required  rows="5" ></textarea>
              </div>
              <!-- /description -->
              <!-- <button  type="submit"  class="btn btn-primary" >Update</button> -->
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
   
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/admin/addproblems" method="POST">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

  <div class="form-group">
    <label for="exampleInputEmail1">Add Problem</label>
    <input type="text" class="form-control" name="problem" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Problem">
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<style>.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    box-shadow: none;
    float: right;
}</style>

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

    // fill the data in the input fields
    $("#modal-input-id").val(id);
  
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