<?php
/**
 * Created by PhpStorm.
 * User: bcc
 * Date: 3/9/2019
 * Time: 6:48 PM
 */

namespace App\Http\Composers;


use App\Category;
use Illuminate\View\View;

class SideBar
{
    public function compose(View $view)
    {

        $category_sidebar= Category::all();

        $view->with('category_sidebar', $category_sidebar);
    }

}
