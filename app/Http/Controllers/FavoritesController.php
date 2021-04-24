<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りするアクション
     * $micropost_id 投稿id
     **/
     public function store($micropost_id)
     {
         //認証済みユーザがお気に入りする
         \Auth::user()->favorite($micropost_id);
         //前のURLへリダイレクトさせる
         return back();
     }
     
     /**
     * 投稿をお気に入り解除するアクション
     * $micropost_id 投稿id
     **/
     public function destroy($micropost_id)
     {
         //認証済みユーザがお気に入りする
         \Auth::user()->unfavorite($micropost_id);
         //前のURLへリダイレクトさせる
         return back();
     }
     
    /*public function index()
    {
        // ユーザ一覧をidの降順で取得
        $favorites = \Micropost::orderBy('id', 'desc')->paginate(10);

        // ユーザ一覧ビューでそれを表示
        return view('users.favorites', [
            'favorites' => $favorites,
        ]);
    }*/
}
