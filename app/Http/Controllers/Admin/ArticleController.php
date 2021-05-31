<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ArticleController extends Controller
{   
    // 
    
    public function TableArticle()
    {
        return view('adminPages.v_dataArticle');
    }

    
}
