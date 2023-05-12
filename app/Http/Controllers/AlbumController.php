<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Album;
use App\Models\song;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $albums=Album::all();
        // $albums = Album::query();
        // $songs=song::query();
        // if($request->search){
        //     $albums->where('album_name','like','%'.$request->search.'%');
        //    $songs->where('song_name','like','%'.$request->search.'%');
        //     $album= $albums->with('songs')->get();
        //    // $users = Album::query()->with('songs')->get();

        //     $song1= $songs->get();
            
        //     return view('album.search',compact('album','song1'));
        // }else
        return view('album.index',compact('albums'));






        }

    public function create()
    {
       return view('album.create');
    }

    
    public function store(Request $request)
    {
        $request->validate(
            [
             'albumname'=>'required',
             'artistname'=>'required',
            ]
            );
            $album=Album::create([
                'album_name'=>$request['albumname'],
                'artist_name'=>$request['artistname'],
              
                
            ]);
            $album->save();
            if($album->save()){
            return redirect('/')->with('message','Album Created Succesfully...');
    
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request , $id)
    {
        $edit= Album::all();
        $getAlbumRow=Album::where('id',$id)->first();
     
        return view('album.editAlbum',compact('edit','getAlbumRow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate(
            [
             'albumname'=>'required',
             'artistname'=>'required',
            ]
            );
        $data=Album::find($id);
            $data->update([
     
             'album_name'=>$request['albumname'],
             'artist_name'=>$request['artistname'],
            
      
         ]);
         return redirect('/')->with('message','Album Edited Succesfully...'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        
        $delete=Album::where('id',$id)->delete(); 
        return redirect('/')->with('message','Album Deleted Succesfully...');
    }
    public function addSongs(Request $request, $id){
        $edit= Album::find($id);
     return view('album.addSongs' ,compact('edit'));
    }
    public function storeSongs(Request $request ,$id){
    
       
        $request->validate(
            [
             'song_name'=>'required',
             'artist_name'=>'required',
            'song_file'=>'required|mimes:mp3/audio,wav,mp3',
            ]);
            $song1=$request->song_file;
           
            $song =$song1->getClientOriginalName();
         
           // $song1->move(public_path('upload'),$song);
            $song1->storeAs('public/upload',$song);
            $song_save= new song;
            $song_save->song= $song;
          //  $song_save->save();
            

            
    $song2=song::create([
        'song_name'=>$request['song_name'],
        'artist_name'=>$request['artist_name'],
        'album_id'=>$id, 
        'song'=>'upload/'.$song,    
        
    ]);
    $song2->save();
    if($song2->save()){
    return redirect('/')->with('message','Song Added Succesfully...');

    }
            // $file=$request->file('song');
            // $file->move('public/upload',$file->getClientOriginalName());
            // $file_name=$file->getClientOriginalName();
            //  $insert= new song();
            //  $insert->song=$file_name;
            //  $insert->save();


    }
    public function viewSongs(Request$request, $id){
        $view=Album::get();
        $getAlbumRow=Album::where('id',$id)->first();
       
       $view3=song::get();
      // dd($view2);
      $view2=song::where('album_id',$id)->get();
    //echo "<pre>";
    //print_r($view2->song_name);die;
      return view('album.viewSongs',compact('view','getAlbumRow','view2'));
       
       // return view('album.viewSongs',compact('getAlbumRow','view2')); 


    }
    public function search(Request $request){
     //   print_r($request->search);die;
        $albums = Album::query();
        $songs=song::query();
        if($request->search){
            $albums->where('album_name','like','%'.$request->search.'%');
           $songs->where('song_name','like','%'.$request->search.'%');
            $albums1= $albums->with('songs')->get();
           
       
           // $users = Album::query()->with('songs')->get();
            $song1= $songs->get();
            
            return view('album.search',compact('albums1','song1'));
    }
}

}


// $file=$request->file('song');
// $file->store('upload','public');
// $file_name=$file->getClientOriginalName();