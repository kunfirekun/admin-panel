<?php
// Initialize the session
session_start();
 require_once 'admin/config.php';
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin/logout.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">
   
<!-- head sub start -->
<?php require_once "head.php";?>
<!-- head sub end -->

    <body data-layout="horizontal" data-topbar="dark">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
            <?php include'header.php'; ?>
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page" style="background-image:url(webb.png); background-size: auto;">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Manage Capital</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12">
                               
                                <div class="card-box" align="center">
                                    <h4>MANAGE CAPITAL & EXPENSES </h4>
                                        <p class="text-muted">Add the amount you are using for your business </p>
                                        <div align='center'>      <h4 class="mt-0 header-title"><button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-rounded width-md waves-effect waves-light">Manage Capital</button></h4></div>
                                        
    
                                        <div class="clearfix"></div>
    
                                       
                                </div> <!-- end card-box -->

                            </div>

                        </div>



                            <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                               
                              
                                   

                                    <table id="user_data" class="table table-bordered table-bordered dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                             <th width="10%">Item Id</th>
       <th width="15%">Capital Title</th>
       <th width="15%">Capital Desc</th>
        <th width="15%">Capital Amount</th>
         <th width="15%">Capital Category</th>
          <th width="15%">Capital Type</th>
     <th width="15%">Date</th>
       <th width="10%">Edit</th>
       <th width="10%">Delete</th>
                                        </tr>
                                        </thead>


                                      
                                    </table>
                                </div>
                            </div>
                        </div>


                      
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
               <?php include 'footer.php';?>  
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

    
      
         <script src="assets/js/vendor.min.js"></script>

        <!-- knob plugin -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
               <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>
        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/vfs_fonts.js"></script>
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#user_form')[0].reset();
  $('.modal-title').text("Add Capital");
  $('#action').val("Add");
  $('#operation').val("Add");

  
 });
 
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch_cash.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 3, 4],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#user_form', function(event){
  event.preventDefault();
  var names = $('#names').val();
  var cash_notes = $('#cash_notes').val();
   var amount = $('#amount').val();
   var category = $('#category').val();
   var type = $('#type').val();
    var created = $('#created').val();




  if(names != '' || category!='' )
  {
   $.ajax({
    url:"insert_cash.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#user_form')[0].reset();
     $('#userModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("All Fields are Required");
  }
 });
 
 $(document).on('click', '.update', function(){
  var user_id = $(this).attr("id");
  $.ajax({
   url:"fetch_single_cash.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#names').val(data.names);
    $('#cash_notes').val(data.cash_notes);
    $('#amount').val(data.amount);
    $('#category').val(data.category);
     $('#type').val(data.type);

    
    $('.modal-title').text("Edit Capital");
    $('#user_id').val(user_id);
     
   
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });
 
 $(document).on('click', '.delete', function(){
  var user_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"delete_cash.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     alert(data);
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });
 
 
});
</script>
   <script type="text/javascript">/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} </script>
        
    </body>

</html>

 <!-- sample modal content -->
                                    <div id="userModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                      <form method="post" id="user_form" enctype="multipart/form-data">
   <div class="modal-content">
  
    <div class="modal-body">
     <label>Enter Cash Title</label>
     <input type="text" name="names" id="names" class="form-control" placeholder="Enter the capital title" />
     <br />
    <label>Enter Cash Desc</label>
     <textarea name="cash_notes" id="cash_notes" class="form-control" placeholder="Enter the capital title" col="10" row= "6" /></textarea>
     <br />
     <label>Enter Cash Amount</label>
     <input type="text" name="amount" id="amount"  placeholder="Enter the capital amount" class="form-control" />
     <br />
    
      <label>Enter Cash Category</label>
      <select id="category" name="category" class="form-control">
  <option value="capital">Capital</option>
  <option value="expenditure">Expense</option>
  <option value="sale">Sale</option>
 
</select>
        <br />
     
      <label>Enter Cash Use</label>
      <select id="type" name="type" class="form-control">
          <option value="General Operations">General Operations</option>
  <option value="Social Media Ads">Social Media Ads</option>
  <option value="marketing">Marketing</option>
  <option value="affiliates">Affiliates</option>
  <option value="loan">Loan</option>
</select>

    </div>
          <div class="modal-footer">
              
                 <input type="hidden" name="created" id="created" value="<?php $day= date("d-m-Y") ; echo "$day";?>" />
                                                    <input type="hidden" name="user_id" id="user_id" />
                                                    <input type="hidden" name="operation" id="operation" />
                                                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="action" id="action" class="btn btn-primary waves-effect waves-light">Save</button>
                                                </div>
   </div>
  </form>
                                                </div>
                                                
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
