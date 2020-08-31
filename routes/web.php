<?php


//demo routes
Route::get('/dashboard',function(){
	return view('admin.dashboard')->with('page','dashboard');
})->middleware('auth');

//for main release comming soon page

/*Route::get('/',function(){
	return view('home')->with('page','home');
});*/

//old hame page
Route::get('/',function(){
	return view('index_blade')->with('page','home');
	});

/*Route::get('/adminhomeadmin',function(){
	return view('index_old');
});*/

//recitation Route
Route::get('/recitation','RecitationController@index')->name('recitationPage.index');
Route::get('/recitation/reload','RecitationController@reload')->name('recitation.reload');
Route::post('/recitation/ajax','RecitationController@ajax');
Route::post('/recitation/ajax2','RecitationController@ajax2');
Route::get('/recitation/poem/{id}','RecitationController@poem');
Route::get('/recitation/audio/{id}','RecitationController@audio');
Route::get('/recitation/vedio/{id}','RecitationController@vedio');

Route::get('ajaxRequest', 'RecitationController@ajaxRequest');
Route::post('ajaxRequest', 'RecitationController@ajaxRequestPost');
  //search button route
Route::post('/recitation/search', 'RecitationController@ajaxSearch');
Route::get('/recitation/search1', 'RecitationController@ajaxSearch1');
//search button route end

//Learning Routes
Route::get('/learning/recitation', 'LearningController@index1');
Route::get('/learning/news', 'LearningController@index2');
Route::get('/learning/presentation', 'LearningController@index3');
Route::get('/learning/show/{id}', 'LearningController@show');
//Learning Routes End

//Poem routes
Route::get('/poem', 'PoemController@index');
/*Route::get('/poem/show/{id}', 'PoemController@show');*/

//Come Learn Routes
Route::get('/book', 'RecitationBookController@index');
Route::get('/book/show/{id}', 'RecitationBookController@show');


//Cultural News 
Route::get('/culturalNews', 'CulturalNewsController@index');
Route::get('/culturalNews/show/{id}', 'CulturalNewsController@show');

//Cultural org
Route::get('/culturalOrg', 'CulturalOrgController@index');
Route::get('/culturalOrg/show/{id}', 'CulturalOrgController@show');

//notice Route
Route::get('/notice','NoticeController@index1')->name('notice.index');
Route::get('/notice/show/{id}','NoticeController@show')->name('notice.show');

//Comment Route
Route::get('/comment','CommentController@index')->name('comment.index');
Route::post('/comment/store','CommentController@store');

//uner construction page
Route::get('/under_cons',function(){
	return view('include.under_constraction')->with('page','Under construction');
});

Route::get('/contact',function(){
	return view('contact')->with('page','Contact');
});

//About us page
Route::get('/about_us', 'HomeController@about');

//auth routes
Auth::routes();



//author routes
Route::get('/admin/author','AdminAuthorController@index')->name('author.index');
Route::get('/admin/author/create','AdminAuthorController@create')->name('author.create');
Route::post('/admin/author','AdminAuthorController@store')->name('author.save');
Route::get('/admin/author/{id}','AdminAuthorController@show')->name('author.show');
Route::get('/admin/author/{id}/edit','AdminAuthorController@edit')->name('author.edit');
Route::put('/admin/author/{id}','AdminAuthorController@update')->name('author.update');
Route::get('/admin/author/delete/{id}','AdminAuthorController@delete')->name('author.delete');



//reciter routes

Route::get('/admin/reciter','AdminReciterController@index')->name('reciter.index');
Route::get('/admin/reciter/create','AdminReciterController@create')->name('reciter.create');
Route::post('/admin/reciter','AdminReciterController@store')->name('reciter.save');
Route::get('/admin/reciter/{id}','AdminReciterController@show')->name('reciter.show');
Route::get('/admin/reciter/{id}/edit','AdminReciterController@edit')->name('reciter.edit');
Route::put('/admin/reciter/{id}','AdminReciterController@update')->name('reciter.update');
Route::get('/admin/reciter/delete/{id}','AdminReciterController@delete')->name('reciter.delete');


//Publisher routes

Route::get('/admin/publisher','AdminPublisherController@index')->name('publisher.index');
Route::get('/admin/publisher/create','AdminPublisherController@create')->name('publisher.create');
Route::post('/admin/publisher','AdminPublisherController@store')->name('publisher.save');
Route::get('/admin/publisher/{id}','AdminPublisherController@show')->name('publisher.show');
Route::get('/admin/publisher/{id}/edit','AdminPublisherController@edit')->name('publisher.edit');
Route::put('/admin/publisher/{id}','AdminPublisherController@update')->name('publisher.update');
Route::get('/admin/publisher/delete/{id}','AdminPublisherController@delete')->name('publisher.delete');


//Book routes

Route::get('/admin/book','AdminBookController@index')->name('book.index');
Route::get('/admin/book/create','AdminBookController@create')->name('book.create');
Route::post('/admin/book','AdminBookController@store')->name('book.save');
Route::get('/admin/book/{id}','AdminBookController@show')->name('book.show');
Route::get('/admin/book/{id}/edit','AdminBookController@edit')->name('book.edit');
Route::put('/admin/book/{id}','AdminBookController@update')->name('book.update');
Route::get('/admin/book/delete/{id}','AdminBookController@delete')->name('book.delete');


//Poem routes

Route::get('/admin/poem','AdminPoemController@index')->name('poem.index');
Route::get('/admin/poem/create','AdminPoemController@create')->name('poem.create');
Route::post('/admin/poem','AdminPoemController@store')->name('poem.save');
Route::get('/admin/poem/{id}','AdminPoemController@show')->name('poem.show');
Route::get('/admin/poem/{id}/edit','AdminPoemController@edit')->name('poem.edit');
Route::put('/admin/poem/{id}','AdminPoemController@update')->name('poem.update');
Route::get('/admin/poem/delete/{id}','AdminPoemController@delete')->name('poem.delete');


//recitation routes

Route::get('/admin/recitation','AdminRecitationController@index')->name('recitation.index');
Route::get('/admin/recitation/create','AdminRecitationController@create')->name('recitation.create');
Route::post('/admin/recitation','AdminRecitationController@store')->name('recitation.save');
Route::get('/admin/recitation/{id}','AdminRecitationController@show')->name('recitation.show');
Route::get('/admin/recitation/{id}/edit','AdminRecitationController@edit')->name('recitation.edit');
Route::put('/admin/recitation/{id}','AdminRecitationController@update')->name('recitation.update');
Route::get('/admin/recitation/delete/{id}','AdminRecitationController@delete')->name('recitation.delete');

//Admin Notice routes
Route::get('/admin/notice','AdminNoticeController@index')->name('admin.notice.index');
Route::get('/admin/notice/create','AdminNoticeController@create')->name('admin.notice.create');
Route::post('/admin/notice/create','AdminNoticeController@store');
Route::get('/admin/notice/{id}/edit','AdminNoticeController@edit')->name('admin.notice.edit');
Route::post('/admin/notice/{id}','AdminNoticeController@update');
Route::get('/admin/notice/show/{id}','AdminNoticeController@show')->name('admin.notice.show');
Route::get('/admin/notice/delete/{id}','AdminNoticeController@delete')->name('admin.notice.delete');

//Admin comment Route
Route::get('/admin/comment','AdminCommentController@index')->name('admin.comment.index');
Route::get('/admin/comment/active/{id}','AdminCommentController@changeStatus')->name('admin.comment.change');
Route::get('/admin/comment/delete/{id}','AdminCommentController@delete')->name('admin.comment.index');

//Admin culturalNews Route
Route::get('/admin/culturalNews/index', 'AdminCulturalNewsController@index');
Route::get('/admin/culturalNews/create', 'AdminCulturalNewsController@create');
Route::post('/admin/culturalNews/store','AdminCulturalNewsController@store');
Route::get('/admin/culturalNews/edit/{id}', 'AdminCulturalNewsController@edit');
Route::post('/admin/culturalNews/update/{id}','AdminCulturalNewsController@update');
Route::get('/admin/culturalNews/show/{id}', 'AdminCulturalNewsController@show');
Route::get('/admin/culturalNews/delete/{id}', 'AdminCulturalNewsController@delete');


//Admin culturalOrg Route
Route::get('/admin/culturalOrg/index', 'AdminCulturalOrgController@index');
Route::get('/admin/culturalOrg/create', 'AdminCulturalOrgController@create');
Route::post('/admin/culturalOrg/store', 'AdminCulturalOrgController@store');
Route::get('/admin/culturalOrg/edit/{id}', 'AdminCulturalOrgController@edit');
Route::post('/admin/culturalOrg/update/{id}', 'AdminCulturalOrgController@update');
Route::get('/admin/culturalOrg/show/{id}', 'AdminCulturalOrgController@show');
Route::get('/admin/culturalOrg/delete/{id}', 'AdminCulturalOrgController@delete');

//Admin Recitation Learning Route
Route::get('/admin/learning/index', 'AdminLearningController@index');
Route::get('/admin/learning/create', 'AdminLearningController@create');
Route::post('/admin/learning/store', 'AdminLearningController@store');
Route::get('/admin/learning/edit/{id}', 'AdminLearningController@edit');
Route::post('/admin/learning/update/{id}', 'AdminLearningController@update');
Route::get('/admin/learning/show/{id}', 'AdminLearningController@show');
Route::get('/admin/learning/delete/{id}', 'AdminLearningController@delete');
