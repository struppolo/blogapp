<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }


    public function index(){
        return Post::all();
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'titolo' => 'required|max:255',
            'testo' => 'required',
       

        ]);
    $post = new Post;
    $post->titolo = $request->titolo;
    $post->testo = $request->testo;
    $post->user_id = 2;

    $post->save();
    return response()->json('Post Created',201);

    }

    public function update(Request $request, $id)
    {
    
    if($post = Post::find($id)){
    $post->titolo = $request->titolo;
    $post->testo = $request->testo;
    $post->save();
    return response()->json('Post Updated',200);
    } else {    
    return response()->json('Post not found',404);
    }
    }

    public function destroy($id)
    {
    if($post = Post::find($id)){
    $post->delete();
    return response()->json('Post Deleted',200);
    } else {
    return response()->json('Post not found',404);
    }
    }

    public function show($id)
    {
    return Post::find($id);
    }
}
