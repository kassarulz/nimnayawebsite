<?php

use App\Comment;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/addedlessons', function () {
    return view('addedlessons');
});
Route::get('/note', function () {
    return view('note');
});
Route::get('/assignSubject', function () {
    return view('assignSubject');
});
Route::get('/subject', function () {
    return view('subject');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/teacher', function () {
    return view('teacher');
});
Route::get('/subject', function () {
    return view('subject');
});
Route::get('/studenthome', function () {
    return view('studenthome');
});
Route::get('/subjectsgrade6', function () {
    return view('subjectsgrade6');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/layouts.notification', function () {
    return view('confirmThread');
});
Route::get('/subjectsgrade7', function () {
    return view('subjectsgrade7');
});

Route::get('/subjectsgrade8', function () {
    return view('subjectsgrade8');
});
Route::get('/subjectsgrade9', function () {
    return view('subjectsgrade9');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/addexam', function () {
    return view('addexam');
});
Route::get('/addstudent', function () {
    return view('addstudent');
});
Route::get('/lesson', function () {
    return view('lesson');
});
Route::get('/auth/admin-login', function () {
    return view('auth/admin-login');
});
Route::get('/6mathschapters', function () {
    return view('6mathschapters');
});
Route::get('/6mathslessons', function () {
    return view('6mathslessons');
});
Route::get('/viewallusers', function () {
    return view('viewallusers');
});
Route::get('/viewchapters', function () {
    return view('viewchapters');
});
Route::get('/createsubject', function () {
    return view('createsubject');
});
Route::get('/editsubject', function () {
    return view('editsubject');
});
Route::get('/creategrade', function () {
    return view('creategrade');
});
Route::post('/contact/submit','MessagesController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::post('/lesson','LessonController@submit');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Route::get('/profile/{name}','ProfileController@profile');
Route::get('profile','ProfileController@profile');
Route::post('profile','ProfileController@update_avatar');

Route::post('/homepage/submit','LessonController@submit');
//Route::post('/lesson/submit','savelessonController@submit');
Route::get('/addedlessons','savelessonController@getLessons');
//Route::post('/homepage','homepageController@getView');
Route::post('/note','noteController@submit');
Route::get('/assignSubject','homepageController@index');
//Route::get('/subject','fetchusertypeController@subject');
//Route::post('/auth/login','loginController@direct');
Route::post('/login.custom',['uses' =>'LoginManageController@login','as'=>'login.custom']);

Route::group(['middleware'=>'auth'],function(){
Route::get('/studenthome',function(){
	return view('studenthome');
})->name('studenthome');
Route::get('/homepage',function(){
	return view('homepage');
})->name('homepage');

Route::post('/subject','AssignsubjectController@submit');



});

Route::prefix('admin')->group(function(){
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/','AdminController@index')->name('admin.dashboard');

});
Route::get('/navbar',function(){
$notification=auth()->user()->unreadNotifications;
foreach($notifications as $notification){
    dd($notification->data['user']['name']);
}


});
//Route::get('lesson','LessonController@getgrades');
Route::get('updateinfo/{id}','ProfileController@update');
Route::post('edit/{id}','ProfileController@edit');
Route::get('subjectsgrade6','subjectController@getSubjects');
Route::get('/viewsubjects','subjectController@getSubjectsAll');
Route::post('/createsubject/submit','subjectController@submit');







/*****************************************************************************
*****************************************************************************
****************************************************************************/
        Route::get('/pdfsS1','StudentReport1@reportPdfsS1'); 
        Route::get('/StudentReport1','StudentReport1@reportS1');

        Route::get('/pdfsS2','StudentReport2@reportPdfsS2'); 
        Route::get('/StudentReport2','StudentReport2@reportS2');  
    
        Route::get('/pdfsS3','StudentReport3@reportpdfsS3'); 
        Route::get('/StudentReport3','StudentReport3@reportS3');
    
        Route::get('/pdfsT1','TeacherReport1@reportPdfT1');  
        Route::get('/TeacherReport1','TeacherReport1@reportT1');


        Route::get('/pdfT2','TeacherReport2@reportpdfT2');
        Route::get('/TeacherReport2','TeacherReport2@reportT2');

        Route::get('/pdfT3','TeacherReport3@reportpdfT3'); 
        Route::get('/TeacherReport3','TeacherReport3@reportT3');

        Route::get('/studentreports', function () {
        return view('studentreports');
        });

        Route::get('/teacherreports', function () {
        return view('teacherreports');
        });

        Route::get('/pdfsA1','AdminReport1@reportPdfA1'); 
        Route::get('/AdminReport1','AdminReport1@reportA1');

        Route::get('/pdfsA2','AdminReport2@reportPdfsA2'); 
        Route::get('/AdminReport2','AdminReport2@reportA2');

        Route::get('/pdfsA3','AdminReport3@reportPdfsA3'); 
        Route::get('/AdminReport3','AdminReport3@reportA3');

        Route::get('/adminReports', function () {
        return view('adminReports');
        });

         


        //Route::get('/adminReports', function () {
        //return view('adminReports');
       // });
         Route::get('/comment', function () {
        $comments = Comment::all();
       return view('comment')->with('comment',$comments);
   //return view('mihiran'); first status
        });

        Route::post('/comment','CommentController@store');


         Route::get('/viewsubjects/delete/{id}',[

'uses'=>'subjectController@delete',

'as' => 'viewsubjects.delete'



    ]);

Route::get('/viewsubjects/update/{id}',[

'uses'=>'subjectController@update',

'as' => 'viewsubjects.update'



    ]);
Route::post('/viewsubjects/save/{id}',[
'uses' => 'subjectController@save',
'as' =>'viewsubjects.save'

    ]);

Route::post('/creategrade/submit','GradeController@submit');
Route::get('/subject','AssignsubjectController@getSubjects');


Route::post('/addexam/submit','ExamController@submit');
Route::get('/addexam', function () {
    return view('addexam');
});


Route::get('/subjectsgrade/{grade}','LessonController@lessons_to_grade');

Route::get('/subject_lessons/{sub}/{grade}','LessonController@lessons_to_subject');

Route::get('/lesson_chapter/{lesson}/{grade}/{sub}','LessonController@lesson_chapter');

Route::get('showfile/{file}','LessonController@show_file');
Route::post('/doexam/submit','MessagesController@submit');