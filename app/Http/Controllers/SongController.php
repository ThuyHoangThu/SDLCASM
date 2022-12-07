<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Song;
use App\Models\Order;

class SongController extends Controller
{
    //
    public function AdminLogin()
    {
        return view('admin/admin-login');
    }

    public function AdminLogged(Request $request)
    {
        $usr = $request->username;
        $pwd = $request->password;
        if ($usr=='admin' && $pwd=='adminpwd') 
        {        
        
        return view('admin/admin-index');
        }
        else
        {
            return redirect()->route('song.login')->with('message', 'Invalid username or password');
        }
    }

    public function AdminIndex()
    {
        return view('admin/admin-index');
    }
        
    
    public function listSong()
    {
        $songs = Song::all();
        return view('admin/list-song', compact('songs'));
    }

    public function listOrder()
    {
        $orders = Order::all();
        return view('admin/list-order', compact('orders'));
    }

    public function add()
    {
        return view('admin/add');
    }

    public function store(Request $request)
    {
        
        if ($request->isMethod('POST')){
            
            $newSong = new Song();
            $newSong->name = $request->name;
            $newSong->price = $request->price;
            $newSong->release = $request->release;
            $newSong->genres = $request->genres;
            $newSong->instrument = $request->instrument;
            $newSong->thumbnail = $request->file('thumbnail');
            $imgname = date('YmdHi').$newSong->thumbnail->getClientOriginalName();
            $newSong->thumbnail->move(public_path('public/thumbnail'), $imgname);
            $newSong['thumbnail']= $imgname;
            $newSong->song_url = $request->song_url;
            $newSong->save();
            return redirect() ->route('song.management')
            -> with('success', 'Song added successfully');
        }
    }

    public function edit($id)
    {
        $song = Song::find($id);
        return view('admin/update', ['song' => $song]);
    }

    public function update(Request $request)
    {
        if ($request->isMethod('POST')){
            $song = Song::find($request->input('id'));
            if ($song != null) {
                
                $song->name = $request->name;
                $song->price = $request->price;
                $song->release = $request->release;
                $song->genres = $request->genres;
                $song->instrument = $request->instrument;
                $song->thumbnail = $request->file('thumbnail');
                $imgname = date('YmdHi').$song->thumbnail->getClientOriginalName();
                $song->thumbnail->move(public_path('public/thumbnail'), $imgname);
                $song['thumbnail']= $imgname;
                $song->song_url = $request->song_url;
                $song->save();   
                return redirect() ->route('song.management')
                -> with('success', 'Song is updated successfully');
            } 
            else
            {
                return redirect() ->route('song.management')
                -> with('Error', 'Song is not updated');
            }
        }
        
    }

    public function destroy($id)
    {
        $song = Song::find($id);
        $song->delete();
        return redirect()->route('song.management')
        ->with('success', 'Song is deleted successfully');
    }

    public function unlogged_detail($id)
    {
        $song = Song::find($id);
        return view('users/individual-song', ['song' => $song]);
    }

    public function logged_detail($id)
    {
        $song = Song::find($id);
        $user = Auth::user()->name;
        return view('users/logged-individual-song',compact ('user'), ['song' => $song]);
    }

    public function cart()
    {
        return view('users/cart');
    }

    public function checkout($id)
    {
        $song = Song::find($id);
        return view('users/cart', ['song' => $song]);
    }

    public function Orderstore(Request $request)
    {
        
        if ($request->isMethod('POST')){
            
            $newOrder = new Order();
            $newOrder->song = $request->song;
            $newOrder->price = $request->price;
            $newOrder->quantity = $request->quantity;    
            $newOrder->email = $request->email;        
            $newOrder->save();
            return view('users/order-confirmation');
           
        }
    }
}
