<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return User::all();
});

Route::get('home', function()
{
	return View::make("home")->with("current","home");
});


Route::get('login', function()
{
	return View::make("staffLogin");
});

Route::get('users/{id}/forms', function($id)
{

	$oUser = User::find($id);
	
	if($oUser->role ==0){
		return View::make("forms")->with("user",$oUser);

	}else{
		return View::make("adminForms")->with("user",$oUser)->with("forms",FormTemplate::all());		
	}

	// $oUser = User::find($id);
	// return View::make("forms");
	// ->with("user",$oUser);
});

Route::get('admin/{id}/forms', function($id)
{
	// $oUser = User::find($id);
	return View::make("adminForms");
	// ->with("user",$oUser);
});



Route::post('login', function()
{
	$aLoginDetails = array(
		'email' => Input::get('email'),
		'password' => Input::get('password')
		);

	if(Auth::attempt($aLoginDetails)){
		return Redirect::to("users/".Auth::user()->id);
	}else{
		return Redirect::to("login")->with("error","Incorrect login details");

		// return Hash::make("1");
	}
});


Route::get('users/{id}', function($id)
{
	
	if(!((Auth::user()->id == $id) || (Auth::user()->role == 2))){

		return Redirect::to("login");

	}

	$oUser = User::find($id);

	if($oUser->role ==0){
		return View::make("staffDetails")->with("user",$oUser);	

	}else{
		return View::make("adminDetails")->with("user",$oUser);	
	}
	

})->before("auth");


Route::put('users/{id}',function($id){

		$sField = Input::get("field");
		$sValue = Input::get("value");

		$oService = Service::find($id);
		$oService->$sField = $sValue;

		$oService->save();
		
		return $sValue;
});


// Route::get('users/{id}', function($id)
// {
	
// 	$oUser = User::find($id);
// 	return View::make("staffDetails")->with("user",$oUser);	
	

// });

// Route::get('admin/{id}', function($id)
// {
// 	$oUser = User::find($id);
// 	return View::make("adminDetails")->with("user",$oUser);	
// });


Route::get('staff/manage', function()
{	
	return View::make("adminManageStaff")->with("users",User::all());

})->before("auth|auth.admin");



Route::post('staff', function()
{	
	$oStaff = new User();
	$oStaff->email = Input::get("email");
	$oStaff->password = Hash::make("bla");
	$oStaff->save();
	return Redirect::to("home");

});






Route::get('blog', function()
{
	return View::make("blog")->with("posts",Post::all())->with("current","blog")->with("title","Blog");	
});

Route::get('post/{id}', function($id)
{
	$oPost = Post::find($id);
	return View::make('blogSingle')->with("post",$oPost)->with("current","blog");	
});


Route::put('post/{id}',function($id){

		$sField = Input::get("field");
		$sValue = Input::get("value");

		$oService = Service::find($id);
		$oService->$sField = $sValue;

		$oService->save();
		
		return $sValue;
});


Route::get('form/new', function()
{
	return View::make('addForm');
});

Route::post('formNew', function()
{
	$sNewName = Input::get("title").".".Input::file("form")->getClientOriginalExtension();
	Input::file("form")->move("staffforms",$sNewName);
		//create new product
		

	$aDetails = Input::all();
	$aDetails['url'] = $sNewName;

	$oProduct = FormTemplate::create($aDetails);

		//redirect to product list
	return Redirect::to("home");
});



Route::get('services', function()
{
	// $oService = Service::find($id);
	return View::make('services')->with("services",Service::all())->with("current","services");
});

Route::get('services/new', function()
{
	return View::make('servicesNew');
});

Route::get('post/new', function()
{
	return View::make('postNew');
});


Route::put('services/{id}',function($id){

		$sField = Input::get("field");
		$sValue = Input::get("value");

		$oService = Service::find($id);
		$oService->$sField = $sValue;

		$oService->save();
		
		return $sValue;
});

Route::post('servicesNew', function()
{
	$aServiceInput = Input::All();

	$aRules = array(
		'title' => 'required',
		'content' => 'required',
		);

	$oValidator = Validator::make($aServiceInput, $aRules);



	if($oValidator->fails()){
		return Redirect::to('services/new')->withErrors($oValidator)->withInput();
		// return Redirect::to('home');
	}else{
		$aDetails = Input::All();
		Service::create($aServiceInput);
		return Redirect::to('services');
	}

});

Route::post('postNew', function()
{
	$aPostInput = Input::All();

	$aRules = array(
		'title' => 'required',
		'content' => 'required'
		
		);

	$oValidator = Validator::make($aPostInput, $aRules);

	if($oValidator->fails()){
		return Redirect::to('post/new')->withErrors($oValidator)->withInput();

	}else{
		$aDetails = Input::All();
		Post::create($aPostInput);
		return Redirect::to('blog');
	}

});


Route::get('successstories', function()
{
	// $oService = Service::find($id);
	$allSuccessStories = SuccessStory::all();
	return View::make('successStories')->with("successstories",$allSuccessStories)->with("current","successstories");
});


Route::get('successstories/{id}', function($id)
{
	$oSuccessStory = SuccessStory::find($id);
	return View::make('successStory')->with("successstory",$oSuccessStory)->with("current","successstories");	
});

Route::get('contact', function()
{
	return View::make('contact');
});

Route::get('about', function()
{
	return View::make('about');
});
