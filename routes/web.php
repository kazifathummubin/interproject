<?php



//    Route::get('/', function () {
//        return view('welcome');
//    });
//



//    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::get('/registration2', 'backendController@register')->name('back.register');

    Route::get('/', 'fontendController@index')->name('font.index');
    Route::get('/about', 'fontendController@about')->name('font.about');
    Route::get('/product', 'fontendController@product')->name('font.product');
    Route::get('product/byCategory/{id}','fontendController@productbyCategory')->name('font.byCategory');
    Route::get('/project', 'fontendController@project')->name('font.project');
    Route::get('project/byCategory/{id}','fontendController@projectbyCategory')->name('fontproject.byCategory');
    Route::get('/technology', 'fontendController@technology')->name('font.technology');
    Route::get('/news', 'fontendController@news')->name('font.news');
    Route::get('/contact', 'fontendController@contact')->name('font.contact');
    Route::get('/service', 'fontendController@service')->name('font.service');

    Route::group(['middleware'=>'auth'], function () {
    Route::get('/admin', 'backendController@index')->name('back.index');

        Route::get('/admin/about', 'AboutController@index')->name('about.index');
    Route::get('/admin/about/create', 'AboutController@create')->name('about.create');
    Route::get('/admin/about/{id}/show', 'AboutController@show')->name('about.show');
    Route::post('/admin/about/store', 'AboutController@store')->name('about.store');
    Route::get('/admin/about/{id}/edit', 'AboutController@edit')->name('about.edit');
    Route::put('/admin/about/{id}', 'AboutController@update')->name('about.update');
    Route::delete('/admin/about/{id}', 'AboutController@destroy')->name('about.destroy');



    Route::get('admin/product/trash','ProductController@trash')->name('product.trash');
    Route::get('admin/product/restore/{id}','ProductController@restore')->name('product.restore');
    Route::delete('admin/product/delete/{id}','ProductController@delete')->name('product.delete');

    Route::get('/admin/product', 'ProductController@index')->name('product.index');
    Route::get('/admin/product/create', 'ProductController@create')->name('product.create');
    Route::get('/admin/product/{id}', 'ProductController@show')->name('product.show');
    Route::post('/admin/product/', 'ProductController@store')->name('product.store');
    Route::get('/admin/product/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::put('/admin/product/{id}', 'ProductController@update')->name('product.update');
    Route::delete('/admin/product/{id}', 'ProductController@destroy')->name('product.destroy');


    Route::get('admin/product/byCategory/{id}','ProductController@byCategory')->name('product.byCategory');
    Route::get('admin/product/find/','ProductController@find')->name('product.find');

    Route::get('/admin/category', 'CategoryController@index')->name('category.index');
    Route::get('/admin/category/create', 'CategoryController@create')->name('category.create');
    Route::get('/admin/category/{}', 'CategoryController@show')->name('category.show');
    Route::post('/admin/category', 'CategoryController@store')->name('category.store');
    Route::get('/admin/category/{category}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('/admin/category/{category}', 'CategoryController@update')->name('category.update');
    Route::delete('/admin/category/{id}', 'CategoryController@destroy')->name('category.destroy');

    Route::get('admin/project/byCategory/{id}','ProjectController@byCategory')->name('project.byCategory');
    Route::get('/admin/project', 'ProjectController@index')->name('project.index');
    Route::get('/admin/project/create', 'ProjectController@create')->name('project.create');
//  Route::get('/admin/project/', 'ProjectController@show')->name('project.show');
    Route::post('/admin/project', 'ProjectController@store')->name('project.store');
    Route::get('/admin/project/{id}/edit', 'ProjectController@edit')->name('project.edit');
    Route::put('/admin/project/{id}', 'ProjectController@update')->name('project.update');
    Route::delete('/admin/project/{id}', 'ProjectController@destroy')->name('project.destroy');


    Route::get('/admin/technology', 'TechnologyController@index')->name('technology.index');
    Route::get('/admin/technology/create', 'TechnologyController@create')->name('technology.create');
    Route::get('/admin/technology/{id}/show', 'TechnologyController@show')->name('technology.show');
    Route::post('/admin/technology', 'TechnologyController@store')->name('technology.store');
    Route::get('/admin/technology/{id}/edit', 'TechnologyController@edit')->name('technology.edit');
    Route::put('/admin/technology/{id}', 'TechnologyController@update')->name('technology.update');
    Route::delete('/admin/technology/{id}', 'TechnologyController@destroy')->name('technology.destroy');


    Route::get('/admin/news', 'NewsController@index')->name('news.index');
    Route::get('/admin/news/create', 'NewsController@create')->name('news.create');
//  Route::get('/admin/news/', 'NewsController@show')->name('news.show');
    Route::post('/admin/news/store', 'NewsController@store')->name('news.store');
    Route::get('/admin/news/{id}/edit', 'NewsController@edit')->name('news.edit');
    Route::put('/admin/news/{id}', 'NewsController@update')->name('news.update');
    Route::delete('/admin/news/{id}', 'NewsController@destroy')->name('news.destroy');


    Route::get('/admin/contact', 'ContactController@index')->name('contact.index');
    Route::get('/admin/contact/create', 'ContactController@create')->name('contact.create');
//  Route::get('/admin/contact/', 'ContactController@show')->name('contact.show');
    Route::post('/admin/contact', 'ContactController@store')->name('contact.store');
    Route::get('/admin/contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
    Route::put('/admin/contact/{id}', 'ContactController@update')->name('contact.update');
    Route::delete('/admin/contact/{id}', 'ContactController@destroy')->name('contact.destroy');


    Route::get('/admin/service', 'ServiceController@index')->name('service.index');
    Route::get('/admin/service/create', 'ServiceController@create')->name('service.create');
    Route::get('/admin/service/{id}/show', 'ServiceController@show')->name('service.show');
    Route::post('/admin/service', 'ServiceController@store')->name('service.store');
    Route::get('/admin/service/{id}/edit', 'ServiceController@edit')->name('service.edit');
    Route::put('/admin/service/{id}', 'ServiceController@update')->name('service.update');
    Route::delete('/admin/service/{id}', 'ServiceController@destroy')->name('service.destroy');


    Route::get('/admin/topper', 'TopperController@index')->name('topper.index');
    Route::get('/admin/topper/create', 'TopperController@create')->name('topper.create');
//  Route::get('/admin/topper/', 'TopperController@show')->name('topper.show');
    Route::post('/admin/topper', 'TopperController@store')->name('topper.store');
    Route::get('/admin/topper/{id}/edit', 'TopperController@edit')->name('topper.edit');
    Route::put('/admin/topper/{id}', 'TopperController@update')->name('topper.update');
    Route::delete('/admin/topper/{id}', 'TopperController@destroy')->name('topper.destroy');


    Route::get('/admin/menu', 'MenuController@index')->name('menu.index');
    Route::get('/admin/menu/create', 'MenuController@create')->name('menu.create');
//  Route::get('/admin/menu/', 'MenuController@show')->name('menu.show');
    Route::post('/admin/menu', 'MenuController@store')->name('menu.store');
    Route::get('/admin/menu/{id}/edit', 'MenuController@edit')->name('menu.edit');
    Route::put('/admin/menu/{id}', 'MenuController@update')->name('menu.update');
    Route::delete('/admin/menu/{id}', 'MenuController@destroy')->name('menu.destroy');

    Route::get('/admin/submenu', 'SubmenuController@index')->name('submenu.index');
    Route::get('/admin/menu/submenu', 'SubmenuController@create')->name('submenu.create');
//  Route::get('/admin/submenu/', 'SubmenuController@show')->name('submenu.show');
    Route::post('/admin/submenu', 'SubmenuController@store')->name('submenu.store');
    Route::get('/admin/submenu/{id}/edit', 'SubmenuController@edit')->name('submenu.edit');
    Route::put('/admin/submenu/{id}', 'SubmenuController@update')->name('submenu.update');
    Route::delete('/admin/submenu/{id}', 'SubmenuController@destroy')->name('submenu.destroy');

        Route::get('/admin/slider', 'SliderController@index')->name('slider.index');
        Route::get('/admin/menu/slider', 'SliderController@create')->name('slider.create');
//  Route::get('/admin/submenu/', 'SliderController@show')->name('submenu.show');
        Route::post('/admin/slider', 'SliderController@store')->name('slider.store');
        Route::get('/admin/slider/{id}/edit', 'SliderController@edit')->name('slider.edit');
        Route::put('/admin/slider/{id}', 'SliderController@update')->name('slider.update');
        Route::delete('/admin/slider/{id}', 'SliderController@destroy')->name('slider.destroy');



        Route::get('/admin/footer', 'FooterController@index')->name('footer.index');
    Route::get('/admin/footer/create', 'FooterController@create')->name('footer.create');
//  Route::get('/admin/footer/', 'FooterController@show')->name('footer.show');
    Route::post('/admin/footer', 'FooterController@store')->name('footer.store');
    Route::get('/admin/footer/{id}/edit', 'FooterController@edit')->name('footer.edit');
    Route::put('/admin/footer/{id}', 'FooterController@update')->name('footer.update');
    Route::delete('/admin/footer/{id}', 'FooterController@destroy')->name('footer.destroy');


    Route::get('/admin/logo', 'LogoController@index')->name('logo.index');
    Route::get('/admin/logo/create', 'LogoController@create')->name('logo.create');
//  Route::get('/admin/footer/', 'LogoController@show')->name('footer.show');
    Route::post('/admin/logo', 'LogoController@store')->name('logo.store');
    Route::get('/admin/logo/{id}/edit', 'LogoController@edit')->name('logo.edit');
    Route::put('/admin/logo/{id}', 'LogoController@update')->name('logo.update');
    Route::delete('/admin/logo/{id}', 'LogoController@destroy')->name('logo.destroy');


    Route::get('/admin/home_about', 'HomeAboutController@index')->name('home_about.index');
    Route::get('/admin/home_about/create', 'HomeAboutController@create')->name('home_about.create');
//  Route::get('/admin/home_about/', 'HomeAboutController@show')->name('home_about.show');
    Route::post('/admin/home_about', 'HomeAboutController@store')->name('home_about.store');
    Route::get('/admin/home_about/{id}/edit', 'HomeAboutController@edit')->name('home_about.edit');
    Route::put('/admin/home_about/{id}', 'HomeAboutController@update')->name('home_about.update');
    Route::delete('/admin/home_about/{id}', 'HomeAboutController@destroy')->name('home_about.destroy');

    Route::get('/admin/home_category', 'HomeCategoryController@index')->name('home_category.index');
    Route::get('/admin/home_category/create', 'HomeCategoryController@create')->name('home_category.create');
//    Route::get('/admin/home_category/', 'HomeCategoryController@show')->name('home_category.show');
    Route::post('/admin/home_category', 'HomeCategoryController@store')->name('home_category.store');
    Route::get('/admin/home_category/{id}/edit', 'HomeCategoryController@edit')->name('home_category.edit');
    Route::put('/admin/home_category/{id}', 'HomeCategoryController@update')->name('home_category.update');
    Route::delete('/admin/home_category/{id}', 'HomeCategoryController@destroy')->name('home_category.destroy');
//
    Route::get('/admin/home_product', 'HomeProductController@index')->name('home_product.index');
    Route::get('/admin/home_product/create', 'HomeProductController@create')->name('home_product.create');
//    Route::get('/admin/home_product/', 'HomeProductController@show')->name('home_product.show');
    Route::post('/admin/home_product', 'HomeProductController@store')->name('home_product.store');
    Route::get('/admin/home_product/{id}/edit', 'HomeProductController@edit')->name('home_product.edit');
    Route::put('/admin/home_product/{id}', 'HomeProductController@update')->name('home_product.update');
    Route::delete('/admin/home_product/{id}', 'HomeProductController@destroy')->name('home_product.destroy');
//
    Route::get('/admin/home_service', 'HomeServiceController@index')->name('home_service.index');
    Route::get('/admin/home_service/create', 'HomeServiceController@create')->name('home_service.create');
//    Route::get('/admin/home_service/', 'HomeServiceController@show')->name('home_service.show');
    Route::post('/admin/home_service', 'HomeServiceController@store')->name('home_service.store');
    Route::get('/admin/home_service/{id}/edit', 'HomeServiceController@edit')->name('home_service.edit');
    Route::put('/admin/home_service/{id}', 'HomeServiceController@update')->name('home_service.update');
    Route::delete('/admin/home_service/{id}', 'HomeServiceController@destroy')->name('home_service.destroy');

});

Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
