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


class IndexController extends Controller
{
    public function showIndex()
    {
        $songs = Song::all();
        return view('users/index-unlogged', compact('songs'));
    }

    public function SongDetail()
    {
        return view('users/individual-song');
    }

    public function search(Request $request)
    {
        // $search = $request->name;
        // $songs = Song::Query()
        // ->where('name','LIKE', '&'.$search.'&')
        // ->get();

        $search = $request->name;
    
        $songs = Song::where('name', 'LIKE', '%'.$search.'%')
            ->get();

        
        return view('users/search-result', compact('songs'));
    }
    
}
?>