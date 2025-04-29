<?php

use App\Http\Controllers\job_ListController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\models\job;
use App\Models\contact;
use App\Models\job_list;
use App\Models\User;



class about {
    public static function all():array{
        return [ [
            'id'=>1,
            'name'=>'Mustafa',
            'age'=>'23',
            'phone'=>'+201110792037'
          ],
          [
              'id'=>2,
              'name'=>'Mahmoud',
              'age'=>'18',
              'phone'=>'+201013037002'
            ],
          [
              'id'=>3,
              'name'=>'Abdelrahman',
              'age'=>'22',
              'phone'=>'+201099541885'
            ],
            [
              'id'=>4,
              'name'=>'Abdelaziz',
              'age'=>'22',
              'phone'=>'+201550462515'
            ]];
    }
}


    $contacts=[
        [
            'id'=>1,
            'name'=>'Mahmoud',
            'phone'=>'+201013037002'
        ],
        [
            'id'=>2,
            'name'=>'Mustafa',
            'phone'=>'+201110792037'
        ],
        [
            'id'=>3 ,
            'name'=>'Dalia',
            'phone'=>'+201019327502'
        ]
        ];



Route::get('/home',function(){
    return view('home');
});



Route::get('job_controller',[job_ListController::class,'index']);





//  ++++++++++++++++++           Jobs         ++++++++++++++                 //


Route::get('/jobs', function ()  {
    return view('jobs',[
        'jobs'=> job::jo()
]);
});

Route::get('/jobs/{id}', function ($id)  {



     $jobs = job::find($id);

    return view('job',['job'=>$jobs]);

});




//  ++++++++++++++++++           Job List          ++++++++++++++                 //

Route::resource('job_list',job_ListController::class);





//  ++++++++++++++++++           User          ++++++++++++++                 //


Route::get('/user',function(){
    return view('user',[
        'user'=> User::all()
    ]);
});






//  ++++++++++++++++++           Contact          ++++++++++++++                 //


Route::get('/contact',function() use($contacts){
    return view('contact',[
        'contacts'=> contact::con()
    ]);
});

Route::get('/contact/{id}',function($id) use($contacts){

      $con = contact::find($id);

    return view('contact2' , ['contact2'=>$con]);
});




//     Auth
Route::get('/register',[RegisterUserController::class,'create']);
Route::post('/register',[RegisterUserController::class,'store']);


Route::get('login',[SessionController::class,'create']);
Route::post('login',[SessionController::class,'store']);
Route::post('logout',[SessionController::class,'destroy']);
