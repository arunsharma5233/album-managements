<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Album managements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      .container{
        margin-top:50px;
        display:flex;
        justify-content:center;
        align-items:center;
      }
      table{
    width: 80%;
}
*{
  background-image: url("img/sng2.jpg");
  color: black;

}
.marq{

  margin-top: 20px;
  align-items: center;
  justify-content: center;
  display: flex;
}
marquee{
  color:red;
}
      </style>
  </head>
  <body>
    {{-- **************************   messages****************************** --}}
    @if(session()->has('message'))
    <div style="text-align: center; color:red; font-size:30px;" class="alert alert-success" >
        {{session()->get('message')}}
    </div>
    @endif
    {{-- ******************************************************************************* --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Album Managements</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/create">Create album</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            {{-- ********************search**************************** --}}
            <li class="nav-item mt-2">
              <form method="GET" action="/search">

                <input type="text"
                name="search"
                 placeholder="Find something"
                class="bg-transparent placeholder-black font-semibold text-sm"
                value="{{request('search')}}">

            </form>


            </li>
          </ul>
        </div>
      </nav>



     <div class="container">
     <table border = "2" >

    <tr>
    <th>Id</th>
    <th>Album name</th>
    <th>Artist name</th>
    <th  >Delete</th>
    <th> Add songs</th>
    <th>Edit album</th>
    <th>View Songs You Added</th>

    </tr>
    @foreach ($albums as $key=> $album)

    <tr>
    <td >{{ $key+1}}</td>
    <td>{{ $album->album_name }}</td>
    <td>{{ $album->artist_name}}</td>


{{-- ********************Delete album ********************************* --}}
  <td>
    <div>
        <a href="/delete/{{$album->id}}" onclick="return confirm('Are you sure.. You want to delete {{$album->album_name}}')" >
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="24" fill="currentColor" class="bi bi-trash3 " id="delete" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
              </svg>
        </a>
    </div>
  </td>
  {{-- *************************add songs******************** --}}
  <td>
   <a href="/addSongs/{{$album->id}}">

  <svg xmlns="http://www.w3.org/2000/svg" width="76" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
  <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
  <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
  <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
</svg></a>
  </td>
  <td>
    <div>
        <a href="/editAlbum/{{$album->id}}" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold  uppercase py-3 px-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="36" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
        </a>
    </div>
</td>
<td>
  <a href="/viewAddedSongs/{{$album->id}}"> <svg  class="arrow" xmlns="http://www.w3.org/2000/svg" width="44" height="34"  fill="currentColor" class="bi bi-arrow-right " viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
  </svg>
</a>
</td>
    </tr>

    @endforeach
    </table>


     </div>
     {{-- <div class="marq">
     <marquee width="60%" direction="up" height="100px">
      This is a sample scrolling text that has scrolls in the upper direction.
      </marquee>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>