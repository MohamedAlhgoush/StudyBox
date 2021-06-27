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


Auth::routes();

Route::group(['prefix' => '/university/{uni_id}'],function(){

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'],function(){
  Route::match(['get','post'], '/approve_instructor', 'Users\InstructorController@approveInstructorView');
  Route::match(['get','post'], '/addfaculty', 'Users\AdminController@viewAddFaculty');
  Route::match(['get','post'], '/addmajor', 'Users\AdminController@viewAddMajor');
  Route::match(['get','post'], '/viewmessages', 'Users\AdminController@viewmessages');
  Route::match(['get','post'], '/user', 'Users\AdminController@viewUsers')->name('view.user');
  Route::match(['get','post'], '/deletecourse/{id}', 'Users\AdminController@deleteCourse')->name('delete_course');
  Route::match(['get','post'], '/editcourse/{id}', 'Users\AdminController@EditCourse')->name('edit_course');
  Route::match(['get','post'], '/available_courses', 'Users\AdminController@availableCourse')->name('view.available_courses');

  Route::match(['get','post'], '/available_universities', 'Users\AdminController@availableUniversities');
  Route::match(['get','post'], '/deleteuniversity/{id}', 'Users\AdminController@deleteUniversity');

  Route::match(['get','post'], '/available_faculties', 'Users\AdminController@availableFaculties');
  Route::match(['get','post'], '/deletefaculties/{id}', 'Users\AdminController@deleteFaculties');

  Route::match(['get','post'], '/deletemajor/{id}', 'Users\AdminController@deleteMajor');
  
  Route::match(['get','post'], '/deleteuser/{id}', 'Users\AdminController@deleteUser')->name('delete_user');
  Route::match(['get','post'], '/add_Faculty/post', 'Users\AdminController@addFaculty')->name('add.faculty.post');
  Route::match(['get','post'], '/add_Major/post', 'Users\AdminController@addMajor');
  Route::match(['get','post'], '/read/{id}', 'Users\AdminController@read');
  Route::match(['get','post'], '/approve/{id}', 'Users\InstructorController@approve');
});
Route::group(['middleware' => 'App\Http\Middleware\AllUsers'],function(){
  Route::match(['get','post'], '/downloads/{id}/{category}', 'Users\FileController@single')->name('view.file');
  Route::match(['get','post'] , '/upload_document', 'Users\UploadController@viewUploadFile')->name('view.upload.file');
  Route::match(['get','post'], '/my_downloads', 'Users\DownloadController@myDownloads')->name('view.my_downloads');
  Route::match(['get','post'] , '/my_uploads', 'Users\UserController@myUploads')->name('view.my_uploads');
  Route::match(['get','post'], '/view_edit/{id}', 'Users\UploadController@edit')->name('edit_upload');
  Route::match(['get','post'] , '/view_editprofile/{id}', 'Users\StudentController@edit')->name('edit_profile');
  Route::match(['get','post'], '/vote/{id}', 'Users\FileController@vote');
  Route::match(['get','post'] , '/voteinstructor/{id}', 'Users\InstructorController@vote');
  Route::match(['get','post'] , '/delete/{id}', 'Users\UploadController@delete')->name('delete_upload');
  Route::match(['get','post'] , '/student/{id}', 'Users\StudentController@viewInStudentProfile')->name('view.student');
  Route::match(['get','post'] , '{id}/update_course/post', 'Users\CourseController@UpdateCourse')->name('edit.course.post');
  Route::match(['get','post'] , '/view/{id}','Users\FileController@view')->name('single.file.view');
  Route::match(['get','post'] , '/file/{id}', 'Users\FileController@single')->name('view.single.files');
  Route::match(['get','post'] , '/view/{id}','Users\FileController@viewPdf');
});

Route::group(['middleware' => 'App\Http\Middleware\InstructourandAdmin'],function(){
  Route::match(['get','post'], '/add_course', 'Users\CourseController@addCourse')->name('add.course');
  Route::match(['get','post'], '/add_course', 'Users\CourseController@addCourse')->name('view.add_course');
});

  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/universities', 'Users\CourseController@all')->name('view.all.universities');
  Route::get('/file/{id}', 'Users\FileController@single')->name('view.single.files');
  Route::get('/university', 'Users\UniversityController@single')->name('view.university');
  Route::get('/faculties', 'Users\FacultyController@all')->name('view.all.faculties');
  Route::get('/majors', 'Users\MajorController@all')->name('view.all.majors');
  Route::get('/courses', 'Users\CourseController@all')->name('view.all.courses');
  Route::get('/files', 'Users\FileController@all')->name('view.all.files');
  Route::get('/instructors', 'Users\InstructorController@all')->name('view.all.instructors');
  Route::get('/instructor/{id}', 'Users\InstructorController@viewInstructorProfile')->name('view.single.instructors');
  Route::get('/faculty/{faculty_id}', 'Users\FacultyController@single')->name('view.faculty');
  Route::get('/major/{major_id}', 'Users\MajorController@single')->name('view.major');
  Route::get('major/{major_id}/course/{course_id}', 'Users\CourseController@single')->name('view.course');
  Route::get('/instructor/{id}', 'Users\InstructorController@viewInstructorProfile')->name('view.instructor');
  Route::get('/instructors', 'Users\InstructorController@all')->name('view.all.instructor');
  Route::get('/search', 'SearchController@search')->name('users.search');
});

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'],function(){
  Route::match(['get','post'], '/addUniversity', 'Users\UniversityController@addUniversity')->name('add.university');
  Route::match(['get','post'], '/add_course/post', 'Users\CourseController@createCourse')->name('add.course.post');
  Route::match(['get','post'], '/create_university/post', 'Users\UniversityController@createuniversity');
});

Route::group(['middleware' => 'App\Http\Middleware\InstructourandAdmin'],function(){
  Route::match(['get','post'], '/add_course/post', 'Users\CourseController@createCourse')->name('add.course.post');
});

Route::group(['middleware' => 'App\Http\Middleware\AllUsers'],function(){
  Route::match(['get','post'], '/comment_instructor/post/{id}', 'Users\CommentController@addinstructorComment')->name('add.comment.post');
  Route::match(['get','post'], '/add_comment/post/{id}', 'Users\CommentController@addComment')->name('add.comment.post');
  Route::match(['get','post'], '/edit_document/{id}', 'Users\UploadController@update')->name('edit.file.post');
  Route::match(['get','post'], '/profile_edit/{id}', 'Users\StudentController@update')->name('edit.profile.post');
  Route::match(['get','post'], '/upload_document/post', 'Users\UploadController@uploadFile')->name('upload.file.post');
  Route::match(['get','post'], '/download/{id}', 'Users\FileController@download')->name('single.file.download');

});
Route::post('/contactus/post', 'Users\AdminController@contactus')->name('contact.us.post');
Route::get('/majors/json/{id}', 'Users\MajorController@getJsonMajors')->name('get.json.majors');
Route::get('/courses/json/{id}', 'Users\CourseController@getJsonCourses')->name('get.json.courses');
Route::get('/instructors/json/{id}', 'Users\InstructorController@getJsonInstructors')->name('get.json.instructors');
Route::get('/faculty/json/{id}', 'Users\FacultyController@getJsonFaculties')->name('get.json.Faculties');
Route::get('/', 'GeneralController@viewWelcome');
Route::get('/vision', 'GeneralController@viewVision');
Route::get('/contact', 'GeneralController@viewContact');
Route::get('/chart','HomeController@charts');
Route::get('/chart1','HomeController@charts1');
