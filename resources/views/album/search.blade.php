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
        </style>
</head>
<body>
    @if($albums1->isEmpty() && $song1->isEmpty())
        <img src="img/no record found.png">
        {{  die;}}
@endif
<div class="cnt1">
    <table>
    
    <tr>
        <th>Album name</th>
        <th>Artist name</th>
     
    </tr>
    @foreach($albums1 as $album)
    <tr>
        <td>{{$album->album_name}}</td>
        <td>{{$album->artist_name}}</td><br> 
    
      
        @foreach ($album->songs as $song )
      
        
        </tr>
            <td>
                <audio controls >
                    <source src="{{Storage::url($song->song)}}" type="audio/ogg">
                        Your browser does not support the audio element.
                  </audio>
            </td>
        <tr>
            @endforeach
            
        </tr>
    </table>

@endforeach

<table>
</div>


        
  
    <tr>
    {{-- <th>song name</th> 
    <th>song</th>   
   --}}
    @foreach ( $song1 as $songs    )
    <tr>
     <td>{{$songs->song_name}}</td>
     <td> 
        <audio controls autoplay>
            <source src="{{Storage::url($songs->song)}}" type="audio/ogg/mp3">
                Your browser does not support the audio element.
          </audio>
</td>
    </tr>   
    @endforeach
   
   
 
    
</table>

</body>
</html>