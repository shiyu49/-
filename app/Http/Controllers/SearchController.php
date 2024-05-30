<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Post;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        //キーワードを取得
        $keyword = $request->input('search');

        //もしキーワードが入力されている場合
        if(!empty($keyword))
        {   
            //料理名から検索
            $posts = DB::table('posts')
                    ->where('title', 'like', "%$keyword%")
                    ->get();
        }else{//キーワードが入力されていない場合
            $posts = DB::table('posts')->get();
        }
        //検索フォームへ
        return view('search.index',[
            'posts' => $posts,
            ]);
    }
}