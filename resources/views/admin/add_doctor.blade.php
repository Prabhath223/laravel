<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
<style type="text/css">
    label{
        display: block;
      width: 150px;
      text-align: right; /* Align text to the right of the label */
      padding-right: 10px; /* Add some right padding for separation */
      margin-bottom: 10px;
    }
    input, select, file {
      width: 30%;
      padding: 5px; /* Add some padding for input fields */
      margin-bottom: 10px; /* Add some bottom margin for separation */
    }
    .btn{
        width:15%;
    }

</style>

 @include('admin.css')
  </head>

  <body>
    <div class="container-scroller">

         @include('admin.sidebar')
         @include('admin.navbar')

        <div class="container-fluid page-body-wrapper"  style="width: 50000px; padding-top:50px;">
            <div class="container" align="center" style="padding:60px;">



            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    x
</button>
                {{session()->get('message')}}
            </div>
@endif




                <form method="POST" action= "{{url('upload_doctor')}}" enctype="multipart/form-data">
                    @csrf
                    <div  style="padding:10px;" >
                       <label>Doctor Name</label>
                       <input type="text" style="color:black;" name="name" placeholder="Write name" required=
                       "">
                    </div>

                    <div style="padding:10px; " >
                       <label>Phone</label>
                       <input type="text" style="color:black;" name="number" placeholder="Write phone number" required=
                       "">
                    </div>

                    <div style="padding:10px;">

                    <label>Speciality</label>
                        <select name="speciality" required="" style="color:black;" >
                      <option >--Select--</option>
                       <option value="Skin">Skin</option>
                       <option value="Heart">Heart</option>
                       <option value="Eye">Eye</option>
                       <option value="Nose">Nose</option>
                       </select>
                    </div>

                   <div style="padding:10px;">
                       <label>Room Number</label>
                       <input type="text" style="color:black;" name="room" placeholder="Write room number" required=
                       "">
                    </div>

                    <div style="padding:10px;" >
                       <label>Doctor Image</label>
                       <input type="file" name="file">
                    </div>

                    <div style="padding:10px;" >

                       <input type="submit" class="btn btn-success" >
                    </div>


                </form>

            </div>
        </div>

    @include('admin.script')
    </div>
  </body>
</html>
