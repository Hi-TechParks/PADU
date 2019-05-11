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

/*Route::get('/', function () {
    return view('index');
});*/

/*Route::get('/dashboard', function () {
    return view('admin.dashboard');
});*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/message/{id}', 'HomeController@message')->name('message');
Route::get('/tour/{id}', 'HomeController@tour')->name('tour');


Route::get('/about', 'AboutController@index')->name('about');

/*Route::get('/history', function () {
    return view('history');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/at-a-glance', function () {
    return view('at-a-glance');
});

Route::get('/chairman', function () {
    return view('chairman');
});*/




/*Route::get('/academic', function () {
    return view('academic');
});*/
Route::get('/academic', 'AcademicController@index')->name('academic.index');
Route::get('/profile/{id}', 'AcademicController@show')->name('academic.show');



/*Route::get('/notice', function () {
    return view('notice');
});*/
Route::get('/notice', 'NoticeController@index')->name('notice.index');
Route::get('/notice/single/{id}', 'NoticeController@show')->name('notice.show');

/*Route::get('/event', function () {
    return view('event');
});*/
Route::get('/event', 'EventController@index')->name('event.index');
Route::get('/event/single/{id}', 'EventController@show')->name('event.show');



/*Route::get('/admission', function () {
    return view('admission');
});*/
Route::get('/admission', 'AdmissionController@index')->name('admission.index');
Route::get('/underGraduation', 'AdmissionController@underGraduation')->name('underGraduation');
Route::get('/graduation', 'AdmissionController@graduation')->name('graduation');
Route::get('/postGraduation', 'AdmissionController@postGraduation')->name('postGraduation');
Route::get('/mPhill', 'AdmissionController@mPhill')->name('mPhill');
Route::get('/phd', 'AdmissionController@phd')->name('phd');

Route::get('/admission/{id}', 'AdmissionController@admission')->name('admission');



/*Route::get('/alumni', function () {
    return view('alumni');
});*/
Route::get('/alumni/registration/create', 'RegistrationController@create')->name('registration.create');
Route::post('/alumni/registration/store', 'RegistrationController@store')->name('registration.store');
Route::get('/alumni', 'AlumniController@index')->name('alumni');
Route::get('/alumni/event', 'AlumniEventController@index')->name('alumni.event.index');
Route::get('/alumni/event/single/{id}', 'AlumniEventController@show')->name('alumni.event.show');
Route::get('/alumni/notice', 'AlumniNoticeController@index')->name('alumni.notice.index');
Route::get('/alumni/notice/single/{id}', 'AlumniNoticeController@show')->name('alumni.notice.show');

/*Route::get('/research', function () {
    return view('research');
});*/
Route::get('/publication', 'PublicationController@index')->name('publication');




// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');



// Admin Slider Route
Route::get('/admin/slide', 'AdminSliderController@index')->name('slide.index');
Route::get('/admin/slide/create', 'AdminSliderController@create')->name('slide.create');
Route::post('/admin/slide/store', 'AdminSliderController@store')->name('slide.store');
Route::get('/admin/slide/show/{id}', 'AdminSliderController@show')->name('slide.show');
Route::get('/admin/slide/edit/{id}', 'AdminSliderController@edit')->name('slide.edit');
Route::post('/admin/slide/update/{id}', 'AdminSliderController@update')->name('slide.update');
Route::get('/admin/slide/status/{id}', 'AdminSliderController@status')->name('slide.status');



// Admin Designation Route
Route::get('/admin/designation', 'AdminDesignationController@index')->name('designation.index');
Route::get('/admin/designation/create', 'AdminDesignationController@create')->name('designation.create');
Route::post('/admin/designation/store', 'AdminDesignationController@store')->name('designation.store');
Route::get('/admin/designation/edit/{id}', 'AdminDesignationController@edit')->name('designation.edit');
Route::post('/admin/designation/update/{id}', 'AdminDesignationController@update')->name('designation.update');
Route::get('/admin/designation/status/{id}', 'AdminDesignationController@status')->name('designation.status');



// Admin Member Route
Route::get('/admin/member', 'AdminMemberController@index')->name('member.index');
Route::get('/admin/member/create', 'AdminMemberController@create')->name('member.create');
Route::post('/admin/member/store', 'AdminMemberController@store')->name('member.store');
Route::get('/admin/member/show/{id}', 'AdminMemberController@show')->name('member.show');
Route::get('/admin/member/edit/{id}', 'AdminMemberController@edit')->name('member.edit');
Route::post('/admin/member/update/{id}', 'AdminMemberController@update')->name('member.update');
Route::get('/admin/member/status/{id}', 'AdminMemberController@status')->name('member.status');



// Admin Message Route
Route::get('/admin/message', 'AdminMessageController@index')->name('message.index');
Route::get('/admin/message/create', 'AdminMessageController@create')->name('message.create');
Route::post('/admin/message/store', 'AdminMessageController@store')->name('message.store');
Route::get('/admin/message/show/{id}', 'AdminMessageController@show')->name('message.show');
Route::get('/admin/message/edit/{id}', 'AdminMessageController@edit')->name('message.edit');
Route::post('/admin/message/update/{id}', 'AdminMessageController@update')->name('message.update');
Route::get('/admin/message/status/{id}', 'AdminMessageController@status')->name('message.status');



// Admin Program Category Route
Route::get('/admin/procate', 'AdminProgramCategoryController@index')->name('procate.index');
Route::get('/admin/procate/create', 'AdminProgramCategoryController@create')->name('procate.create');
Route::post('/admin/procate/store', 'AdminProgramCategoryController@store')->name('procate.store');
Route::get('/admin/procate/edit/{id}', 'AdminProgramCategoryController@edit')->name('procate.edit');
Route::post('/admin/procate/update/{id}', 'AdminProgramCategoryController@update')->name('procate.update');
Route::get('/admin/procate/status/{id}', 'AdminProgramCategoryController@status')->name('procate.status');



// Admin Program Route
Route::get('/admin/program', 'AdminProgramController@index')->name('program.index');
Route::get('/admin/program/create', 'AdminProgramController@create')->name('program.create');
Route::post('/admin/program/store', 'AdminProgramController@store')->name('program.store');
Route::get('/admin/program/edit/{id}', 'AdminProgramController@edit')->name('program.edit');
Route::post('/admin/program/update/{id}', 'AdminProgramController@update')->name('program.update');
Route::get('/admin/program/status/{id}', 'AdminProgramController@status')->name('program.status');


// Admin Program Admission Route
Route::get('/admin/admission', 'AdminAdmissionController@index')->name('admission.index');
Route::get('/admin/admission/create', 'AdminAdmissionController@create')->name('admission.create');
Route::post('/admin/admission/store', 'AdminAdmissionController@store')->name('admission.store');
Route::get('/admin/admission/show/{id}', 'AdminAdmissionController@show')->name('admission.show');
Route::get('/admin/admission/edit/{id}', 'AdminAdmissionController@edit')->name('admission.edit');
Route::post('/admin/admission/update/{id}', 'AdminAdmissionController@update')->name('admission.update');
Route::get('/admin/admission/status/{id}', 'AdminAdmissionController@status')->name('admission.status');


// Admin Program FAQ Route
Route::get('/admin/faq', 'AdminAdmissionFaqController@index')->name('faq.index');
Route::get('/admin/faq/create', 'AdminAdmissionFaqController@create')->name('faq.create');
Route::post('/admin/faq/store', 'AdminAdmissionFaqController@store')->name('faq.store');
Route::get('/admin/faq/show/{id}', 'AdminAdmissionFaqController@show')->name('faq.show');
Route::get('/admin/faq/edit/{id}', 'AdminAdmissionFaqController@edit')->name('faq.edit');
Route::post('/admin/faq/update/{id}', 'AdminAdmissionFaqController@update')->name('faq.update');
Route::get('/admin/faq/status/{id}', 'AdminAdmissionFaqController@status')->name('faq.status');
// Ajax Data Call
Route::post('/admin/faq/number', 'AdminAdmissionFaqController@number')->name('faq.number');




// Admin Notice Route
Route::get('/admin/notice', 'AdminNoticeController@index')->name('notice.index');
Route::get('/admin/notice/create', 'AdminNoticeController@create')->name('notice.create');
Route::post('/admin/notice/store', 'AdminNoticeController@store')->name('notice.store');
Route::get('/admin/notice/show/{id}', 'AdminNoticeController@show')->name('notice.show');
Route::get('/admin/notice/edit/{id}', 'AdminNoticeController@edit')->name('notice.edit');
Route::post('/admin/notice/update/{id}', 'AdminNoticeController@update')->name('notice.update');
Route::get('/admin/notice/status/{id}', 'AdminNoticeController@status')->name('notice.status');



// Admin Event Route
Route::get('/admin/event', 'AdminEventController@index')->name('event.index');
Route::get('/admin/event/create', 'AdminEventController@create')->name('event.create');
Route::post('/admin/event/store', 'AdminEventController@store')->name('event.store');
Route::get('/admin/event/show/{id}', 'AdminEventController@show')->name('event.show');
Route::get('/admin/event/edit/{id}', 'AdminEventController@edit')->name('event.edit');
Route::post('/admin/event/update/{id}', 'AdminEventController@update')->name('event.update');
Route::get('/admin/event/status/{id}', 'AdminEventController@status')->name('event.status');



// Admin Gallery Route
Route::get('/admin/gallery', 'AdminGalleryController@index')->name('gallery.index');
Route::get('/admin/gallery/create', 'AdminGalleryController@create')->name('gallery.create');
Route::post('/admin/gallery/store', 'AdminGalleryController@store')->name('gallery.store');
Route::get('/admin/gallery/show/{id}', 'AdminGalleryController@show')->name('gallery.show');
Route::get('/admin/gallery/edit/{id}', 'AdminGalleryController@edit')->name('gallery.edit');
Route::post('/admin/gallery/update/{id}', 'AdminGalleryController@update')->name('gallery.update');
Route::get('/admin/gallery/status/{id}', 'AdminGalleryController@status')->name('gallery.status');


// Admin Tour Route
Route::get('/admin/tour', 'AdminTourController@index')->name('tour.index');
Route::get('/admin/tour/create', 'AdminTourController@create')->name('tour.create');
Route::post('/admin/tour/store', 'AdminTourController@store')->name('tour.store');
Route::get('/admin/tour/show/{id}', 'AdminTourController@show')->name('tour.show');
Route::get('/admin/tour/edit/{id}', 'AdminTourController@edit')->name('tour.edit');
Route::post('/admin/tour/update/{id}', 'AdminTourController@update')->name('tour.update');
Route::get('/admin/tour/status/{id}', 'AdminTourController@status')->name('tour.status');



// Admin Job Category Route
Route::get('/admin/jobcate', 'AdminJobCategoryController@index')->name('jobcate.index');
Route::get('/admin/jobcate/create', 'AdminJobCategoryController@create')->name('jobcate.create');
Route::post('/admin/jobcate/store', 'AdminJobCategoryController@store')->name('jobcate.store');
Route::get('/admin/jobcate/show/{id}', 'AdminJobCategoryController@show')->name('jobcate.show');
Route::get('/admin/jobcate/edit/{id}', 'AdminJobCategoryController@edit')->name('jobcate.edit');
Route::post('/admin/jobcate/update/{id}', 'AdminJobCategoryController@update')->name('jobcate.update');
Route::get('/admin/jobcate/status/{id}', 'AdminJobCategoryController@status')->name('jobcate.status');



// Admin Alumni Route
Route::get('/admin/alumni', 'AdminRegistrationController@index')->name('alumni.index');
Route::get('/admin/alumni/create', 'AdminRegistrationController@create')->name('alumni.create');
Route::post('/admin/alumni/store', 'AdminRegistrationController@store')->name('alumni.store');
Route::get('/admin/alumni/show/{id}', 'AdminRegistrationController@show')->name('alumni.show');
Route::get('/admin/alumni/edit/{id}', 'AdminRegistrationController@edit')->name('alumni.edit');
Route::post('/admin/alumni/update/{id}', 'AdminRegistrationController@update')->name('alumni.update');
Route::get('/admin/alumni/status/{id}', 'AdminRegistrationController@status')->name('alumni.status');



// Admin Alumni Notice Route
Route::get('/admin/alumni/notice', 'AdminAlumniNoticeController@index')->name('alumni_notice.index');
Route::get('/admin/alumni/notice/create', 'AdminAlumniNoticeController@create')->name('alumni_notice.create');
Route::post('/admin/alumni/notice/store', 'AdminAlumniNoticeController@store')->name('alumni_notice.store');
Route::get('/admin/alumni/notice/show/{id}', 'AdminAlumniNoticeController@show')->name('alumni_notice.show');
Route::get('/admin/alumni/notice/edit/{id}', 'AdminAlumniNoticeController@edit')->name('alumni_notice.edit');
Route::post('/admin/alumni/notice/update/{id}', 'AdminAlumniNoticeController@update')->name('alumni_notice.update');
Route::get('/admin/alumni/notice/status/{id}', 'AdminAlumniNoticeController@status')->name('alumni_notice.status');



// Admin Alumni Event Route
Route::get('/admin/alumni/event', 'AdminAlumniEventController@index')->name('alumni_event.index');
Route::get('/admin/alumni/event/create', 'AdminAlumniEventController@create')->name('alumni_event.create');
Route::post('/admin/alumni/event/store', 'AdminAlumniEventController@store')->name('alumni_event.store');
Route::get('/admin/alumni/event/show/{id}', 'AdminAlumniEventController@show')->name('alumni_event.show');
Route::get('/admin/alumni/event/edit/{id}', 'AdminAlumniEventController@edit')->name('alumni_event.edit');
Route::post('/admin/alumni/event/update/{id}', 'AdminAlumniEventController@update')->name('alumni_event.update');
Route::get('/admin/alumni/event/status/{id}', 'AdminAlumniEventController@status')->name('alumni_event.status');



// Admin Publication Route
Route::get('/admin/publication', 'AdminPublicationController@index')->name('publication.index');
Route::get('/admin/publication/create', 'AdminPublicationController@create')->name('publication.create');
Route::post('/admin/publication/store', 'AdminPublicationController@store')->name('publication.store');
Route::get('/admin/publication/show/{id}', 'AdminPublicationController@show')->name('publication.show');
Route::get('/admin/publication/edit/{id}', 'AdminPublicationController@edit')->name('publication.edit');
Route::post('/admin/publication/update/{id}', 'AdminPublicationController@update')->name('publication.update');
Route::get('/admin/publication/status/{id}', 'AdminPublicationController@status')->name('publication.status');



// Admin Contact Email Route
Route::get('/admin/email', 'AdminContactEmailController@index')->name('email.index');
Route::get('/contact', 'AdminContactEmailController@create')->name('email.create');
Route::post('/admin/email/store', 'AdminContactEmailController@store')->name('email.store');
Route::get('/admin/email/show/{id}', 'AdminContactEmailController@show')->name('email.show');
Route::get('/admin/email/status/{id}', 'AdminContactEmailController@status')->name('email.status');


Route::get('/admin/address/edit/', 'AdminContactEmailController@edit')->name('address.edit');
Route::post('/admin/address/update/{id}', 'AdminContactEmailController@update')->name('address.update');


Route::get('/admin/about/edit/', 'AdminAboutUsController@edit')->name('about.edit');
Route::post('/admin/about/update/{id}', 'AdminAboutUsController@update')->name('about.update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
