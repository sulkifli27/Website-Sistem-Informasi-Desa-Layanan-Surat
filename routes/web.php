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

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::match(["GET", "POST"], '/register', function () {
    return redirect('/login');
})->name('register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'DashboardController@index')->name('dashboard');

    Route::group([
        'prefix' => 'kk'
    ], function () {
        Route::get('create', 'KkController@create')->name('kkcreate');
        Route::post('store', 'KkController@store')->name('kkstore');
        Route::get('index', 'KkController@index')->name('kkindex');
        Route::get('edit/{id}', 'KkController@edit')->name('kkedit');
        Route::put('store/{id}', 'KkController@update')->name('kkupdate');
        Route::delete('delete/{id}', 'KkController@destroy')->name('kkdelete');
    });

    Route::group([
        'prefix' => 'user'
    ], function () {
        Route::get('create', 'UserController@create')->name('usercreate');
        Route::post('store', 'UserController@store')->name('userstore');
        Route::get('index', 'UserController@index')->name('userindex');
        Route::get('edit/{id}', 'UserController@edit')->name('useredit');
        Route::put('store/{id}', 'UserController@update')->name('userupdate');
        Route::delete('delete/{id}', 'UserController@destroy')->name('userdelete');
    });

    Route::group([
        'prefix' => 'penduduk'
    ], function () {
        Route::get('create', 'PendudukController@create')->name('pendudukcreate');
        Route::post('store', 'PendudukController@store')->name('pendudukstore');
        Route::get('index', 'PendudukController@index')->name('pendudukindex');
        Route::get('edit/{id}', 'PendudukController@edit')->name('pendudukedit');
        Route::put('store/{id}', 'PendudukController@update')->name('pendudukupdate');
        Route::delete('delete/{id}', 'PendudukController@destroy')->name('pendudukdelete');
        Route::get('detail/{id}', 'PendudukController@show')->name('pendudukshow');
    });

    Route::group([
        'prefix' => 'kelahiran'
    ], function () {
        Route::get('create', 'KelahiranController@create')->name('kelahirancreate');
        Route::post('store', 'KelahiranController@store')->name('kelahiranstore');
        Route::get('index', 'KelahiranController@index')->name('kelahiranindex');
        Route::get('edit/{id}', 'KelahiranController@edit')->name('kelahiranedit');
        Route::put('store/{id}', 'KelahiranController@update')->name('kelahiranupdate');
        Route::delete('delete/{id}', 'KelahiranController@destroy')->name('kelahirandelete');
    });

    Route::group([
        'prefix' => 'kematian'
    ], function () {
        Route::get('create', 'KematianController@create')->name('kematiancreate');
        Route::post('store', 'KematianController@store')->name('kematianstore');
        Route::get('index', 'KematianController@index')->name('kematianindex');
        Route::get('edit/{id}', 'KematianController@edit')->name('kematianedit');
        Route::put('store/{id}', 'KematianController@update')->name('kematianupdate');
        Route::delete('delete/{id}', 'KematianController@destroy')->name('kematiandelete');
    });

    Route::get('datapenduduk/{nik}', 'KematianController@ajax');

    Route::group([
        'prefix' => 'kepindahan'
    ], function () {
        Route::get('create', 'KepindahanController@create')->name('kepindahancreate');
        Route::post('store', 'KepindahanController@store')->name('kepindahanstore');
        Route::get('index', 'KepindahanController@index')->name('kepindahanindex');
        Route::get('edit/{id}', 'KepindahanController@edit')->name('kepindahanedit');
        Route::put('store/{id}', 'KepindahanController@update')->name('kepindahanupdate');
        Route::delete('delete/{id}', 'KepindahanController@destroy')->name('kepindahandelete');
    });

    Route::group([
        'prefix' => 'pendatang'
    ], function () {
        Route::get('create', 'PendatangController@create')->name('pendatangcreate');
        Route::post('store', 'PendatangController@store')->name('pendatangstore');
        Route::get('index', 'PendatangController@index')->name('pendatangindex');
        Route::get('edit/{id}', 'PendatangController@edit')->name('pendatangedit');
        Route::put('store/{id}', 'PendatangController@update')->name('pendatangupdate');
        Route::delete('delete/{id}', 'PendatangController@destroy')->name('pendatangdelete');
    });
    Route::group([
        'prefix' => 'berita'
    ], function () {
        Route::get('create', 'BeritaController@create')->name('beritacreate');
        Route::post('store', 'BeritaController@store')->name('beritastore');
        Route::get('index', 'BeritaController@index')->name('beritaindex');
        Route::get('edit/{slug}', 'BeritaController@edit')->name('beritaedit');
        Route::put('store/{slug}', 'BeritaController@update')->name('beritaupdate');
        Route::delete('delete/{slug}', 'BeritaController@destroy')->name('beritadelete');
    });



    Route::group([
        'prefix' => 'suratkm'
    ], function () {
        Route::get('create', 'SuratkmController@create')->name('suratkmcreate');
        Route::post('store', 'SuratkmController@store')->name('suratkmstore');
        Route::get('index', 'SuratkmController@index')->name('suratkmindex');
        Route::get('detail/{id}', 'SuratkmController@show')->name('suratkmshow');
        Route::get('edit/{id}', 'SuratkmController@edit')->name('suratkmedit');
        Route::put('store/{id}', 'SuratkmController@update')->name('suratkmupdate');
        Route::get('/cetak_surat/{id}', 'SuratkmController@cetak_surat')->name('cetaksurat');
    });

    Route::group([
        'prefix' => 'suratketusaha'
    ], function () {
        Route::get('create', 'SuratketusahaController@create')->name('suratusahacreate');
        Route::post('store', 'SuratketusahaController@store')->name('suratusahastore');
        Route::get('index', 'SuratketusahaController@index')->name('suratusahaindex');
        Route::get('detail/{id}', 'SuratketusahaController@show')->name('suratusahashow');
        Route::get('edit/{id}', 'SuratketusahaController@edit')->name('suratusahaedit');
        Route::put('store/{id}', 'SuratketusahaController@update')->name('suratusahaupdate');
        Route::get('/cetak/{id}', 'SuratketusahaController@cetak_surat')->name('suratcetak');
    });
});

// ini route untuk halaman user frontend
Route::get('/', 'TampilanuserController@index')->name('indexuser');
Route::get('berita/{slug}/', 'TampilanuserController@detail_berita')->name('berita_detail');
Route::get('kontak', function () {
    return view('frontend.kontak');
})->name('kontak');

// route untuk surat kurang mampu di halaman user
Route::get('surat-kurang-mampu', 'TampilanuserController@suratkm')->name('suratkmampu');
Route::post('simpan', 'TampilanuserController@store')->name('suratkmampustore');
Route::put('store/{id}', 'TampilanuserController@update')->name('suratkmampuupdate');

// ajax
Route::get('datakk/{no_kk}', 'SuratkmController@ajax');
Route::get('datapenduduk/{nik}', 'KematianController@ajax');

// route untuk surat kurang mampu di halaman user
Route::get('surat-keterangan-usaha', 'TampilanuserController@suratusaha')->name('suratusaha');
Route::post('store', 'TampilanuserController@simpan')->name('suratusahasimpan');
Route::put('ubah/{id}', 'TampilanuserController@perbaharui')->name('suratusahaupdate');
Route::get('refresh_captcha', 'TampilanuserController@refreshCaptcha')->name('refresh_captcha');
