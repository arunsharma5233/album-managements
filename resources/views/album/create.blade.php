<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <h1>Create Album</h1>
    <div class="container">
       
        <form action="{{url('/store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Album name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="albumname" >
              </div>
              <span class="text-danger">
                @error('albumname')
                {{$message}}
              
                @enderror
              </span>



              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Artist name</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="artistname" >
              </div>
              <span class="text-danger">
                @error('artistname')
                {{$message}}
              
                @enderror
              </span>
              
                    {{-- ******************************************                 Submit********************************************** --}}
            <button type="submit" class="btn btn-primary">submit</button>
            <div class="reset1">
                <a href="{{url('/Adduser')}}" class="reset  ">Reset</a>
                 </div>
                </div>
        </div>

{{-- ***************************************Reset****************************** --}}
               
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>