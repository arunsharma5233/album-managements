<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit album</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Edit Album</h1>
    <div class="container">
       
        <form action="{{url('/update',$getAlbumRow->id)}}" method="post" >
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Album name</label>
                <input type="text" class="form-control" id="albumName" name="albumname" value="{{$getAlbumRow->album_name}}" >
              </div>
              <span class="text-danger" id="albumNameErr">
                @error('albumname')
                {{$message}}
              
                @enderror
              </span>



              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Artist name</label>
                <input type="text" class="form-control" id="aName" name="artistname"value="{{$getAlbumRow->artist_name}}" >
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>