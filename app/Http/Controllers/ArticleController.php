<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/23
 * Time: 13:59
 */

namespace App\Http\Controllers;


class ArticleController extends Controller
{
    function findAritcle($id=1){
        $article = Article::find($id);
        echo $article->title;
        return;
    }

}