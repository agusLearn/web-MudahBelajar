<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class CreateArticleController extends Controller
{
    // view for form article
    public function viewCreateArticle_form(){
        
        $dataUser = $this->getDataUser();

        $userID = $dataUser['id'];
        $dataCategory = Category::all();
        return view('adminPages.createArticle', ['category' => $dataCategory, 'user' => $userID]);
    }

    public function prosesCreateArticle(Request $inputArtikel)
    {
        $idUser = Crypt::decrypt($inputArtikel->input('userID'));
        $title = $inputArtikel->input('title');
        $img = $inputArtikel->input('imgArticle');
        $content = $inputArtikel->input('contentArticle');
        $category = $inputArtikel->input('categoryArticle');
        // dd($inputArtikel);

        // proses input ke Database
        // $article = new Article();
        // $article->user_id = $idUser;
        // $article->titleArticle = $title;
        // $article->image = $img;
        // $article->contentArticle = $content;
        // $article->category_id = $category;
        // $article->save();
        // // Article::create([
        //     'userID' => $idUser,
        //     'titleArticle' => $title,
        //     'imgArticle' => $img,
        //     'contentArtile' => $content,
        //     'category_id' => $category
        // ]);

        return redirect()->route('createArticlePages');
    }

    // get User Data
    public function getDataUser()
    {
        $user  = Auth::user();
        $idUser = $user->id;
        $nameUser = $user->name;

        // encryp id User
        $idEncrypt = Crypt::encrypt($idUser);

        $userArray =[
            'id' => $idEncrypt,
            'name' => $nameUser
        ];
        
        return $userArray;
    }
}
