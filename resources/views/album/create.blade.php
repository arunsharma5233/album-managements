<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <style>
    *{
      margin: 0%;
      padding: 0%;
    }
    body{
      background-image: url('img/sng1.jpg'); 
    }
    </style>

  <body>
    <h1>Create Album</h1>
    <div class="container">
       
        <form action="{{url('/store')}}" method="post" onsubmit="return validate()">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Album name</label>
                <input type="text" class="form-control" id="albumName" name="albumname" >
              </div>
              <span class="text-danger" id="albumNameErr">
                @error('albumname')
                {{$message}}
              
                @enderror
              </span>



              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Artist name</label>
                <input type="text" class="form-control" id="aName" name="artistname" >
              </div>
              <span class="text-danger" id = "aNameErr">
                @error('artistname')
                {{$message}}
              
                @enderror
              </span>
              
                    {{-- ******************************************                 Submit********************************************** --}}
                    <div>

                      <input type="submit" value="submit" name= "submit" class="btn btn-primary">
                    </div>
            <div class="reset1">
                <a href="{{url('/Adduser')}}" class="reset">Reset</a>
                 </div>
                </div>
        </div>

{{-- ***************************************Reset****************************** --}}
               
        </form>
    </div>

    <script>

      function validate(){
        var album = document.getElementById('albumName').value;
        var artist = document.getElementById('aName').value;
        
        // alert(album);
        // console.log(album);


  if(album =='' ){
    document.getElementById('albumNameErr').innerHTML = "album name cannot be empty";
    return false;
  }
  else if(album != ""){
    document.getElementById('albumNameErr').innerHTML = "";
  }


  if(artist =='' ){
    document.getElementById('aNameErr').innerHTML = "artist name cannot be empty";
    return false;
  }
  // else if(artist != ''){
  //   document.getElementById('aNameErr').innerHTML = "";
  // }
      }
    </script>
  </body>
</html>