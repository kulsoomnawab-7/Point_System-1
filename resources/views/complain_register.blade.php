<?php
use App\Models\facultyreg;

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Complain Issue</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    /* This is to be able to center the content in the middle of the page; */
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
  
  /*
  This following statements selects each category individually that contains an input element that is a checkbox and is checked (or selected) and chabges the background color of the span element.
  */
  @media (max-width: 896px) {
        #container
        {
          margin-top: 8px;
        }
      }
    
     #img
      {
        background-color: #F0F3F6;
        /* background-image: url("images/pc (2).png"); */
      }
      #class{
        background-image: linear-gradient(412.25deg, #0DDBB9 0%,     rgba(255, 255, 255, 0) 500.19%);

      }
      select {
  display: block;
  margin: 10px 0;
}
.form-group {
  border: solid 1px #eee;
  margin-bottom: 10px;
}
  </style>
  </head>
  <body id="img" >
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link ml-5" href="/register_complains" style="color:black;">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="/view_complains" style="color:black;">Complain View</a> -->
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="#">Action 1</a>
              <a class="dropdown-item" href="#">Action 2</a>
            </div>
          </li> -->
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0"> -->
    
        <li class="dropdown nav-icon mr-2" style="list-style:none;">
            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user" style="color:black;">
                <div class="d-lg-inline-block">
                    <i data-feather="mail"></i>{{session('sessionusername')}}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> 
                <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                  {{ __('Log Out') }}
                </button>
              </a>
            </div>
        </li>
          <!-- <ul style="list-style:none;">
            <li>{{session('sessionusername')}}  </li>
          </ul> -->
          <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>
      </div>
    </nav><br>

      @foreach($system as $sf)
      <div class="container">
        <div class="row">
          <div class="col-md10 offset-md-2">
            <h1 for="" style="color:#0DDBB9;">Selected Lab {{$sf->Lab_id}} <span style="margin-left:20px;">Selected Host Name {{$sf->Host_Name}}<span></h1>
          </div>
        </div>
      </div>
      @endforeach

      @foreach($fetch as $f)
          @endforeach
      <center><h1 style="color:#0DDBB9;">Select Issue For Complain</h1></center>
      <div class="container offset-md-2">
        <div class="row">
          <div class="col-md-6 mt-5">
          <!-- Button trigger modal -->
          <!-- Button trigger modal -->
          <button type="button" id="class" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId1" style="height:11rem; width:18rem;">
            <img src="images/workstation.png" alt="Hardware"  class="mr-2" style="height:5rem;"><p style="font-family: 'Times New Roman', Times, serif; font-size:2rem;">Hardware</p>
          </button>
        
          <!-- Modal -->
          <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Hardware issue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <form action="{{URL::to('/hardwareissue')}}" method="post">
               @csrf
                <div class="modal-body">
              <input type="hidden" value="1" name="role1">
                <label for=""><h5>Select Hardware Issues</h5></label>
                    <select class="form-control" name="hardware" id="" required>
                      <option selected disabled>Select Item</option>
                      @foreach($hardware as $hard)
                        <option value="{{$hard->id}} "> 
                            {{ $hard->hardware_name }} 
                        </option>
                      @endforeach    
                    </select>
                  <br>

                  <label class="btn btn-primary" style="background-color: red;">
                      <input type="checkbox" name="status" value="0">Not Working
                    </label>
                    <label class="btn btn-primary">
                      <input type="checkbox" name="status"  value="0">Working
                    </label> 

                    <label class="btn btn-primary">
                      <input type="checkbox" name="status"  value="0" id="myCheck" onclick="myFunction()">Other Issue
                    </label> 
                      <br><br>  
                  
                  <div class="form-group">

                </div>
                    <div class="form-group" id="text" style="display:none">
                      <label for="parent-conditional-choice"><h5>Other Type of Hardware Issues</h5></label>
                      <input type="text" placeholder="Enter Other Issue" name="other_issue" id="child-conditional-choice-1" value="" class="form-control">
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
          </div>

          <div class="col-md-6 mt-5">
            <!-- Button trigger modal -->
            <button type="button" id="class" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId2" style="height:11rem; width:18rem;">
              <img src="https://cdn-icons-png.flaticon.com/128/7991/7991055.png" class="mr-2" alt="software" style="height:5rem;"><p style="font-family: 'Times New Roman', Times, serif; font-size:2rem;">Software</p>
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Software issue</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <form action="{{URL::to('/softwareissue')}}" method="post">
              @csrf
                  <div class="modal-body">
                  <input type="hidden" value="2" name="role1">

                  <label for=""><h5>Select Software Issues</h5></label>

                  <select class="form-control" name="software" id="">
                    <option selected disabled>Select Item</option>
                    @foreach($software as $soft)
                        <option value="{{$soft->id}}"> 
                            {{ $soft->software_name }} 
                        </option>
                    @endforeach    
                  </select>
                  <br>
                 
                 
                  <label class="btn btn-primary" style="background-color: red;">
                    <input type="checkbox" name="status" value="0">Not Working
                  </label>
                  <label class="btn btn-primary">
                    <input type="checkbox" name="status"  value="0">Working
                  </label> 

                  <label class="btn btn-primary">
                    <input type="checkbox" name="status" id="myCheck2"  value="0" onclick="myFunction2()">Other Issue
                  </label> 
                    <br><br>  
                
                <div class="form-group">

              </div>
                  <div class="form-group" id="text2" style="display:none">
                    <label for="parent-conditional-choice"><h5>Other Type of Hardware Issues</h5></label>
                    <input type="text" placeholder="Enter Other Issue" name="other_issue" id="child-conditional-choice-1" value="" class="form-control">
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
          </div>

          <div class="col-md-6 mt-5">
            <!-- Button trigger modal -->
            <button type="button" id="class" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId3" style="height:11rem; width:18rem;">
              <img src="https://cdn-icons-png.flaticon.com/512/2885/2885417.png"  class="mr-2" alt="network" style="height:5rem;"><p style="font-family: 'Times New Roman', Times, serif; font-size:2rem;">Network</p></button>
            
            <!-- Modal -->
            <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Network issue</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="{{URL::to('/networkissue')}}" method="post">
                  @csrf
                    <div class="modal-body">
                    <input type="hidden" value="3" name="role1">

                    <label for=""><h5>Select Network Issues</h5></label>
                    <select class="form-control" name="network" id="">
                      <option selected disabled>Select Item</option>
                      @foreach($Network as $Network)
                          <option value="{{$Network->id}}"> 
                              {{ $Network->Network_issue }} 
                          </option>
                      @endforeach    
                    </select>
                    <br>
              
                    <label class="btn btn-primary" style="background-color: red;">
                      <input type="checkbox" name="status" value="0">Not Working
                    </label>
                    <label class="btn btn-primary">
                      <input type="checkbox" name="status"  value="0">Working
                    </label> 

                    <label class="btn btn-primary">
                      <input type="checkbox" name="status" id="myCheck3"  value="0" onclick="myFunction3()">Other Issue
                    </label> 
                      <br><br>  
                  
                  <div class="form-group">

                </div>
                    <div class="form-group" id="text3" style="display:none">
                      <label for="parent-conditional-choice"><h5>Other Type of Hardware Issues</h5></label>
                      <input type="text" placeholder="Enter Other Issue" name="other_issue" id="child-conditional-choice-1" value="" class="form-control">
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
          </div>

          
          <div class="col-md-6 mt-5">
            <!-- Button trigger modal -->
            <button type="button" id="class" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId" style="height:11rem; width:18rem;">
              <img src="images/othertoolsjpg-removebg-preview.png" alt="other" class="mr-2" style="height:5rem;">
              <p style="font-family: 'Times New Roman', Times, serif; font-size:2rem;">Other</p>
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Other issue</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="{{URL::to('/otherissue')}}" method="post">
                    @csrf
                  <div class="modal-body">
                  <input type="hidden" value="4" name="role1">
           
                    <label for=""><h5>Other Issues</h5></label><br> 
                  <input type="text" placeholder="Enter other issue" name="other" class="form-control">

                  <br>
                  <!-- <?php
                      $login =DB::table("facultyregs")->where(["email"=>session('sessionuseremail')])->first();
                  ?>
                    @if(isset($login))
                      @if($login->role==2)
                        <input type="text" placeholder="Enter Other issue" class="form-control" name="installation" required>
                      @endif
                    @endif
                    <br> -->
                   </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

function myFunction2() {
  var checkBox = document.getElementById("myCheck2");
  var text = document.getElementById("text2");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

function myFunction3() {
  var checkBox = document.getElementById("myCheck3");
  var text = document.getElementById("text3");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

  </body>
</html> 					 