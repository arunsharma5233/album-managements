<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;}
  .cnt1{
    margin-top: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .cnt2{
    margin-top: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
        </style>

</head>
<body>
    <div class="cnt1">
   <table>
    <tr>
        <th>Album name
        </th>
        <th>Artist name
        </th>
    </tr>
    <tr>

        <td>
            {{$getAlbumRow->album_name}}
            </td>
            <td>
                {{$getAlbumRow->artist_name}}
                </td>
    </table>

     <br>
     <br>
    </div>
    <div class="cnt2">
    <table>
        <tr>
            <th>Song Name</th>
            <th>artist name</th>
            <th>Songs</th>
        </tr>
        @foreach ($view2 as $view )
        <tr>
            <td>{{$view->song_name}}</td>
            <td>{{$view->artist_name}}</td>
            <td> 
                <audio controls autoplay>
                    <source src="{{Storage::url($view->song)}}" type="audio/ogg/mp3">
                        Your browser does not support the audio element.
                  </audio>
        </td>
        <tr>
         
     @endforeach
     {{-- "{{asset('storage/upload/'.$view)}}"  --}}

    </table>
    </div>

</body>
</html>