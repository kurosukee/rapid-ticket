<?php

namespace App\BusinessAdmin\Controllers;

class IndexController extends Controller
{
    /**
     * トップページ／お知らせ一覧
     *
     * @return void
     */
    public function index()
    {
        return view('business-admin.index.index');
    }
}
