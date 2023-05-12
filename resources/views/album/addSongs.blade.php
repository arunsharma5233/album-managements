<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Songs</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
         
       <h1> ADD SONGS </h1>
       <div class="container">
       
        <form action="{{url('/storeSongs',$edit->id)}}" method="post" enctype="multipart/form-data"  onsubmit="return validate()">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Song name</label>
                <input type="text" class="form-control" id="albumName" name="song_name" value="{{old('song_name', $edit->song_name)}}" >
              </div>
              <span class="text-danger" id="albumNameErr">
                @error('song_name')
                {{$message}}
              
                @enderror
              </span>



              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Artist name</label>
                <input type="text" class="form-control" id="aName" name="artist_name" value="{{old('artist_name', $edit->artist_namee)}}" >
              </div>
              <span class="text-danger" id = "aNameErr">
                @error('artist_name')
                {{$message}}
              
                @enderror
              </span>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Add song</label>
                <input type="file" class="form-control" id="aSong" name="song_file" accept="audio/mpeg/mp3" >
              </div>
              <span class="text-danger" id = "aSongErr">
                @error('song_file')
                {{$message}}
              
                @enderror
              </span>
              
                    {{-- ******************************************                 Submit********************************************** --}}
                    <div>

                      <input type="submit" value="submit" name= "submit" class="btn btn-primary">
                    </div>
            <div class="reset1">
                <a href="{{url('/addSongs')}}" class="reset">Reset</a>
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
        var song= document.getElementById('aSong');
        files= song.value;
        
      
        if(album =='' ){
    document.getElementById('albumNameErr').innerHTML = "Hey.. you  forgot the album name";
    return false;
  }
  else if(album != ""){
    document.getElementById('albumNameErr').innerHTML = "";
  }


  if(artist =='' ){
    document.getElementById('aNameErr').innerHTML = "Hey.. you  forgot the artist name";
    return false;
  }
  if (file.length==0){
    document.getElementById('aSongErr').innerHTML = "Hey.. you  forgot the song file";
    
  }else{
    var filename =files[0].name;
    var extension = filename.substr(filename.lastIndexOf("."));
    var allowedExtensionsRegx = /(\.mp3|\.wav|\.audio|\.ogg)$/i;
    var isAllowed = allowedExtensionsRegx.test(extension);
    if(isAllowed){
      document.getElementById('aSongErr').innerHTML = "";
    }else{
      document.getElementById('aSongErr').innerHTML = "Hey.. you  forgot the song file";
    }
  }

      }
      </script>

   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>