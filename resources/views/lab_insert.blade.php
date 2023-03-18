@extends('layouts.admin_dashboard')
@section('dashboard')

<!doctype html>
<html lang="en">
  <head>
    <title>Labs</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
      .cat label span {
    text-align: center;
    padding: 3px 0;
    display: block;
  }
  
  .cat label input {
    position: absolute;
    display: none;
    color: #fff !important;
  }
  /* selects all of the text within the input element and changes the color of the text */
  .cat label input + span{color: #fff;}
  
  
  /* This will declare how a selected input will look giving generic properties */
  .cat input:checked + span {
      color: #ffffff;
  }
  
    </style>
    </head>
  <body id="img">


  <br> 
  <!-- <br><br><br> -->
  <div class="container">
    <!-- <h1>Labs</h1> -->
    <div class="row">
        <div class="col-md-12">

      <!-- Button trigger modal -->
      <button type="button" style="background-color:#0DDBB9;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
        Insert Lab
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{URL::to('/labsinst_')}}" method="post">

            <div class="modal-body">
            @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="form3Example1c" class="form-control" name="intlab" required/>
                      <label class="form-label" for="form3Example1c">Number of Pc</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example3c" class="form-control" name="labnumb" required/>
                      <label class="form-label" for="form3Example3c">Lab Number</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="form3Example4c" class="form-control" name="utlstatus" required/>
                      <label class="form-label" for="form3Example4c">Utilization Status</label>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
        </div>
      </div>

<br>
<div class="container">
        <center>  
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Labs</p>
        </center>
    <div class="row">

        <div class="col-md-12">
        <div class="table-responsive">

        <table id="table_id" class="display">
        <thead>
            <tr>
              <!-- <th>Ip</th> -->
              <th>Number of Pc</th>
              <th>Lab Number</th>
              <th>Utilization Status</th>
              <th>Update</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lab as $ls)
        <tr>
          <!-- <td>{{$ls->id}}</td> -->
            <td>{{$ls->No_of_pcs}}</td>
            <td>{{$ls->lab_number}}</td>
            <td>{{$ls->Utilization_status}}</td>
            <td>
              <button class="btn btn-primary" style="background-color:#0DDBB9; color:white;" id="updatebtn" data-id="{{$ls->id}}">Update</button>
            </td>

        </tr>
        @endforeach

        </tbody>
    </table>
        </div>
        </div>

    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Lab</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form action="{{URL:: to ('updaterecords')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
          <input type="hidden" class="form-control" name="inputuserid" id="userid">
          <br>
          <label class="form-label" for="form3Example1c">Number of Pc</label>
          <input type="text" class="form-control" name="inputnumberinput" id="numberinput">
          <br>
          <label class="form-label" for="form3Example1c">Lab Number</label>
          <input type="text" class="form-control" name="inputlabnumberinput" id="labnumberinput" >
          <br>
          <label class="form-label" for="form3Example1c">Utilization Status</label>
          <input type="text" class="form-control" name="inputUtilization_status" id="Utilization_status">
          <br>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

  <script>

    
  $(document).ready( function () {

    $(document).on("click" , "#updatebtn" ,function(){
  //alert("clicked");
  var uid = $(this).attr("data-id");
  //console.log(uid);
  // $("#updatemodal").modal("show");

  $.ajax({

    url:"/getdata",
    type:"POST",
    data:"labid_="+uid+
    "&_token={{csrf_token()}}",

    success:function(result)
    {
      $("#updatemodal").modal("show");
      var res = JSON.parse(result);
      $("#userid").val(res["id"]);
      $("#numberinput").val(res["No_of_pcs"]);
      $("#labnumberinput").val(res["lab_number"]);
      $("#Utilization_status").val(res["Utilization_status"]);
    },

    error:function()
    {
      alert("error found");
    }

  });
});


    $('#table_id').DataTable();
} );
</script>
  </body>
</html>
@endsection