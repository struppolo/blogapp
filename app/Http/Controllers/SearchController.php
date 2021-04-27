<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    public function search(Request $request){

    
    $testo = $request->testo;
    $posts = DB::table('posts')
                    ->join('users', 'users.id', '=', 'posts.user_id')
                    ->where('testo','LIKE', '%' . $request->testo . '%')
                    ->orWhere('titolo','LIKE', '%' . $request->testo . '%')
                    ->orderBy('titolo', 'asc')
                    ->orderBy('testo', 'asc')
                    ->get();
    
  
    return view('search', compact('posts','testo') );
    }
}
