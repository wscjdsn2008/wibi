<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
    *添加博客的页面
    */
    public function create()
    {
        dd('添加博客的页面');
    }

    /**
     *执行添加
     */
    public function store(Request $request)
    {
        dd('执行添加');
    }

    /**
     * 展示一条博客
    */
    public function show($id)
    {
        dd('展示一条博客'.$id);
    }

    /**
     * 编辑博客的页面
     */
    public function edit($id)
    {
        dd('编辑博客的页面'.$id);
    }

    /**
     * 执行博客的更新
    */
    public function update(Request $request, $id)
    {
        dd('执行博客的更新'.$id);
    }

    /**
     * 删除博客
     */
    public function destroy($id)
    {
        dd('删除博客'.$id);
    }
    /**
     * 更新博客状态
     */
    public function status($id)
    {
        dd('更新博客状态'.$id);
    }
    }
}
