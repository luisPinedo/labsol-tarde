<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
    	/*
    	* select * from posts	
    	 */
    	//$posts = \DB::table('posts')->where('id','>',3)->get();
    	/*
    	return $posts;

    	$edad = 200;

    	$nombres = ['Angel', 'Martin', 'Alejandro', 'Santiago'];
    	 */
    	
    	/*$post = \DB::table('posts')
            ->where('id', 1)
            ->update(['activo' => false]);*/

        /*$post = \DB::table('posts')
        	->where('id', 3)
        	->delete();*/


    	$posts = \DB::table('posts')->get();

    	return view('post.index')
    		->with('datos',$posts);
    }
}
