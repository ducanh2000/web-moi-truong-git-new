<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/trang-chu', function () {
    return view('pages.trang-chu');
})->name('trang-chu');

Route::get('/trang-chu-vn', function () {
    return view('pages.home-vn');
})->name('trang-chu-vn');

Route::prefix('nghiep-vu')->group(function(){

    Route::get('cho-vay', function () {
        return view('pages.hoat-dong-nghiep-vu-cho-vay-lai-suat-uu-dai');
    })->name('cho-vay');

    Route::get('vay-von', function () {
        return view('pages.hoat-dong-nghiep-vu-ho-tro-lai-suat-vay-von-sau-dau-tu');
    })->name('vay-von');

    Route::get('tai-tro', function () {
        return view('pages.hoat-dong-nghiep-vu-tai-tro-va-dong-tai-tro');
    })->name('tai-tro');

    Route::get('co-che-phat-trien', function () {
        return view('pages.hoat-dong-nghiep-vu-co-che-phat-trien-sach');
    })->name('co-che-phat-trien');

    Route::get('tro-gia', function () {
        return view('pages.hoat-dong-nghiep-vu-tro-gia-san-pham-bao-ve-moi-truong');
    })->name('tro-gia');

    Route::get('ky-quy', function () {
        return view('pages.hoat-dong-nghiep-vu-ky-quy');
    })->name('ky-quy');

    Route::get('von-oda', function () {
        return view('pages.hoat-dong-nghiep-vu-von-oda');
    })->name('von-oda');

    Route::get('khac', function () {
        return view('pages.hoat-dong-nghiep-vu-khac');
    })->name('khac');

});

Route::prefix('hop-tac-phat-trien')->group(function(){

    Route::get('qh-quoc-te', function () {
        return view('pages.hop-tac-phat-trien-qh-quoc-te');
    })->name('qh-quoc-te');

    Route::get('qh-trong-nuoc', function () {
        return view('pages.hop-tac-phat-trien-qh-trong-nuoc');
    })->name('qh-trong-nuoc');

    Route::get('ht-quoc-te', function () {
        return view('pages.hop-tac-phat-trien-ht-quoc-te');
    })->name('ht-quoc-te');

    Route::get('ht-trong-nuoc', function () {
        return view('pages.hop-tac-phat-trien-ht-trong-nuoc');
    })->name('ht-trong-nuoc');
});

Route::get('/van-ban-che-do', function () {
    return view('pages.van-ban-che-do');
})->name('van-ban-che-do');


// BÁO CÁO THƯỜNG NIÊN
Route::get('/bao-cao-thuong-nien', function () {
    return view('pages/bao-cao-thuong-nien');
})->name('bao-cao-thuong-nien');


// THƯ VIỆN
Route::get('thu-vien','libraryController@getall')->name('thu-vien');

Route::get('video-chitiet/{id}','libraryController@detail')->name('video-chitiet');

//Hoi-dap
Route::get('/hoi-dap','contactcontroller@question')->name('hoi-dap');

//back-end

// Route::get('login','LoginController@GetLogin')->name('login');
// Route::post('login','LoginController@PostLogin')->name('postlogin');


Route::group(['prefix' => 'admin',], function() {
            Route::get('login','LoginController@GetLogin')->middleware('CheckLogout')->name('login');
            Route::post('login','LoginController@PostLogin')->name('postlogin');
    });
Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function(){
    Route::get('/','introducecontroller@admin')->name('index');
    Route::get('logout','LoginController@GetLogout')->name('logout');
    Route::group(['prefix' => 'introduce'], function(){
        Route::get('listintro','introducecontroller@getlist')->name('getlist');
        Route::get('addintro','introducecontroller@getadd')->name('getadd');
        Route::post('addintro','introducecontroller@postadd')->name('postadd');
        Route::get('editintro/{id}','introducecontroller@getedit')->name('getedit');
        Route::post('editintro/{id}','introducecontroller@postedit')->name('postedit');
        Route::get('delintro/{id}','introducecontroller@getdel')->name('getdel');
    });
    Route::group(['prefix' => 'services'], function(){
        Route::get('listservices','servicescontroller@getlist')->name('getlistsv');
        Route::get('addservices','servicescontroller@getadd')->name('getaddsv');
        Route::post('addservices','servicescontroller@postadd')->name('postaddsv');
        Route::get('editservices/{id}','servicescontroller@getedit')->name('geteditsv');
        Route::post('editservices/{id}','servicescontroller@postedit')->name('posteditsv');
        Route::get('delservices/{id}','servicescontroller@getdel')->name('getdelsv');
    });
    Route::group(['prefix' => 'actions'], function(){
        Route::get('listactions','actionscontroller@getlist')->name('getlistac');
        Route::get('addactions','actionscontroller@getadd')->name('getaddac');
        Route::post('addactions','actionscontroller@postadd')->name('postaddac');
        Route::get('editactions/{id}','actionscontroller@getedit')->name('geteditac');
        Route::post('editactions/{id}','actionscontroller@postedit')->name('posteditac');
        Route::get('delactions/{id}','actionscontroller@getdel')->name('getdelac');
    });
    Route::group(['prefix' => 'news'], function(){
        Route::get('listnews','newscontroller@getlist')->name('getlistn');
        Route::get('addnews','newscontroller@getadd')->name('getaddn');
        Route::post('addnews','newscontroller@postadd')->name('postaddn');
        Route::get('editnews/{id}','newscontroller@getedit')->name('geteditn');
        Route::post('editnews/{id}','newscontroller@postedit')->name('posteditn');
        Route::get('delnews/{id}','newscontroller@getdel')->name('getdeln');
    });
    Route::group(['prefix' => 'document'], function(){
        Route::get('listdoc','documentcontroller@getlist')->name('getlistdoc');
        Route::get('adddoc','documentcontroller@getadd')->name('getadddoc');
        Route::post('adddoc','documentcontroller@postadd')->name('postadddoc');
        Route::get('editdoc/{id}','documentcontroller@getedit')->name('geteditdoc');
        Route::post('editdoc/{id}','documentcontroller@postedit')->name('posteditdoc');
        Route::get('deldoc/{id}','documentcontroller@getdel')->name('getdeldoc');
    });
    Route::group(['prefix' => 'banner'], function(){
        Route::get('listbanner','bannercontroller@getlist')->name('getlistbn');
        Route::get('addbanner','bannercontroller@getadd')->name('getaddbn');
        Route::post('addbanner','bannercontroller@postadd')->name('postaddbn');
        Route::get('editbanner/{id}','bannercontroller@getedit')->name('geteditbn');
        Route::post('editbanner/{id}','bannercontroller@postedit')->name('posteditbn');
        Route::get('delbanner/{id}','bannercontroller@getdel')->name('getdelbn');
    });
    Route::group(['prefix' => 'library'], function(){
        Route::get('listlibrary','librarycontroller@getlist')->name('getlistlr');
        Route::get('addlibrary','librarycontroller@getadd')->name('getaddlr');
        Route::post('addlibrary','librarycontroller@postadd')->name('postaddlr');
        Route::get('editlibrary/{id}','librarycontroller@getedit')->name('geteditlr');
        Route::post('editlibrary/{id}','librarycontroller@postedit')->name('posteditlr');
        Route::get('dellibrary/{id}','librarycontroller@getdel')->name('getdellr');
    });
    Route::prefix('footer')->group(function () {
        Route::get('list','footerController@list')->name('footer.list');
        Route::get('add','footerController@add')->name('footer.add');
        Route::post('add','footerController@store')->name('footer.add');
        Route::get('edit/{id}','footerController@edit')->name('footer.edit');
        Route::post('edit/{id}','footerController@update')->name('footer.edit');
        Route::get('delete/{id}','footerController@delete')->name('footer.delete');
    });
    Route::prefix('contact')->group(function () {
        Route::get('listcontact','contactcontroller@getlist')->name('getlistcon');
        Route::get('editcontact/{id}','contactcontroller@getedit')->name('geteditcon');
        Route::post('editcontact/{id}','contactcontroller@postedit')->name('posteditcon');
        Route::get('delete/{id}','contactcontroller@getdel')->name('getdelcon');
    });
    Route::prefix('customer')->group(function () {
        Route::get('listcustomer','infocus@getlist')->name('getlistin');
        Route::get('delete/{id}','infocus@getdel')->name('getin');
    });

    Route::get('profile','ExamplesController@GetProfile');
    Route::get('register','ExamplesController@GetRegister')->name('register');
    Route::post('register','ExamplesController@PostRegister')->name('register');
    Route::get('list','ExamplesController@GetList')->name('listtit');
    Route::get('edit','ExamplesController@EditList');
    Route::get('del/{id}','ExamplesController@DelUser')->name('del');

    Route::prefix('user')->group(function () {
        Route::get('list','UserController@list')->name('user.list');
        Route::get('add','UserController@add')->name('user.add');
        Route::post('add','UserController@store')->name('user.add');
        Route::get('edit/{id}','UserController@edit')->name('user.edit');
        Route::post('edit/{id}','UserController@update')->name('user.edit');
        Route::get('delete/{id}','UserController@delete')->name('user.delete');
    });
    
});
Route::get('gioithieu','introducecontroller@getgt')->name('getgt');
Route::get('gioithieu/{slug}/{id}','introducecontroller@getcontent')->name('getcontent');
Route::get('dichvu/{slug}/{id}','servicescontroller@getcontentsv')->name('getcontentsv');
Route::get('hoatdong/{slug}/{id}','actionscontroller@getcontentac')->name('getcontentac');
Route::prefix('tin-tuc')->group(function(){
    Route::get('/','newscontroller@gettt')->name('gettt');
    Route::get('detail/{slug}/{id}','newscontroller@getdt')->name('getdt');
});

Route::prefix('van-ban')->group(function(){
    Route::get('/','documentcontroller@getvb')->name('getvb');
});
Route::prefix('bao-cao')->group(function(){
    Route::get('/','BaseController@getbc')->name('getbc');
});
Route::get('lienhe','contactcontroller@getlh')->name('getlh');
Route::post('lienhe','contactcontroller@postadd')->name('postaddlh');


Route::get('/','introducecontroller@gethome')->name('xxx');

Route::post('sendinfocustomer','infocus@in')->name('postinfo');

