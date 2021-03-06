<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */


	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show()
	{
                    $file = Input::file('img1'); // your file upload input field in the form should be named 'file'
                    $destinationPath = public_path().'/uploads';
                    $filename = $file->getClientOriginalName();
                    //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
                    $uploadSuccess = Input::file('img1')->move($destinationPath, $filename);
                    $RandNumber   		= rand(0, 9999999999);
                    if( $uploadSuccess ) {
                                 require_once('ImageWorkshop/src/PHPImageWorkshop/ImageWorkshop.php');
                                chmod($destinationPath."/".$filename, 0777);
                                $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
                                unlink(public_path().'/uploads/'.$filename);
                                $layer->resizeInPixel(400, null, true);
//                                $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
//                                $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                                $dirPath =public_path().'/uploads/' ."rooms";
                                $filename = "_".$RandNumber.".png";
                                $createFolders = true;
                                $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                                $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                                $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                                chmod($dirPath ."/".$filename , 0777);
                                //connect & insert file record in database
                               $post =  Post::create(array(
                                "category"      =>Input::get('category'),
                                "name"           =>Input::get('name'),
                                "discr"            =>Input::get('discr'),
                                "event_date"    =>Input::get("dates"),
                                "user_id"        => 1
                            ));
                        Images::create(array(
                            'postid' => $post->id,
                            'name'   => $filename,
                            'discr'  => Input::get("txt1")
                        ));
                               if(Input::file('img2')){
                                   $this->processImage("img2",Input::get("txt2"),$post->id);
                               }

                        if(Input::file('img3')){
                            $this->processImage("img3",Input::get("txt3"),$post->id);
                        }

                        if(Input::file('img4')){
                            $this->processImage("img4",Input::get("txt4"),$post->id);
                        }

                        if(Input::file('img5')){
                            $this->processImage("img5",Input::get("txt5"),$post->id);
                        }

                        if(Input::file('img6')){
                            $this->processImage("img6",Input::get("txt6"),$post->id);
                        }

                        if(Input::file('img7')){
                            $this->processImage("img7",Input::get("txt7"),$post->id);
                        }

                        if(Input::file('img8')){
                            $this->processImage("img8",Input::get("txt8"),$post->id);
                        }

                        if(Input::file('img9')){
                            $this->processImage("img9",Input::get("txt9"),$post->id);
                        }

                        if(Input::file('img10')){
                            $this->processImage("img10",Input::get("txt10"),$post->id);
                        }

                       return View::make("admin.addpost")->with("msg",'Post Added Successfull');
                    } else {
                       return View::make("admin.addpost")->with("emsg",'error Uploading file');
                    }
	}

    public function processImage($imagefile,$discr,$id){
        $file = Input::file($imagefile); // your file upload input field in the form should be named 'file'
        $destinationPath = public_path().'/uploads';
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file($imagefile)->move($destinationPath, $filename);
        $RandNumber   		= rand(0, 9999999999);
        if( $uploadSuccess ) {
            require_once('ImageWorkshop/src/PHPImageWorkshop/ImageWorkshop.php');
            chmod($destinationPath."/".$filename, 0777);
            $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            unlink(public_path().'/uploads/'.$filename);
            $layer->resizeInPixel(400, null, true);
//            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
//            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."rooms";
            $filename = "_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            //connect & insert file record in database
            Images::create(array(
                'postid' => $id,
                'name'   => $filename,
                'discr'  => $discr
            ));
        }
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function edit()
	{
                               $post = Post::find(Input::get('id'));
                               $post->category = Input::get("category");
                               $post->subcategory = Input::get("subcategory");
                               $post->discr = Input::get("discr");
                               $post->name = Input::get("name");
                               $post->price = Input::get("price");
                               $post->save();
                              
                               
                               if(Input::file('img1')){
                                   $file = Input::file('img1'); // your file upload input field in the form should be named 'file'
                                    $destinationPath = public_path().'/uploads';
                                    $filename = $file->getClientOriginalName();
                                    //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
                                    $uploadSuccess = Input::file('img1')->move($destinationPath, $filename);
                                    $RandNumber   		= rand(0, 9999999999);
                                    if( $uploadSuccess ) {
                                                 require_once('ImageWorkshop/src/PHPImageWorkshop/ImageWorkshop.php');
                                                chmod($destinationPath."/".$filename, 0777);
                                                $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
                                                unlink(public_path().'/uploads/'.$filename);
                                                $layer->resizeInPixel(400, null, true);
                                                $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
                                                $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                                                $dirPath =public_path().'/uploads/' ."rooms";
                                                $filename = "_".$RandNumber.".png";
                                                $createFolders = true;
                                                $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                                                $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                                                $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                                                chmod($dirPath ."/".$filename , 0777);
                                                unlink(public_path().'/uploads/rooms/'.$post->img1);
                                                //connect & insert file record in database
                                               $post->img1  = $filename;
                                               $post->save();
                                               
                                    }
                               }
                               
                               
                               if(Input::file('img2')){
                                   $file = Input::file('img2'); // your file upload input field in the form should be named 'file'
                                    $destinationPath = public_path().'/uploads';
                                    $filename = $file->getClientOriginalName();
                                    //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
                                    $uploadSuccess = Input::file('img2')->move($destinationPath, $filename);
                                    $RandNumber   		= rand(0, 9999999999);
                                    if( $uploadSuccess ) {
                                                 require_once('ImageWorkshop/src/PHPImageWorkshop/ImageWorkshop.php');
                                                chmod($destinationPath."/".$filename, 0777);
                                                $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
                                                unlink(public_path().'/uploads/'.$filename);
                                                $layer->resizeInPixel(150, null, true);
                                                $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
                                                $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                                                $dirPath =public_path().'/uploads/' ."rooms";
                                                $filename = "_".$RandNumber.".png";
                                                $createFolders = true;
                                                $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                                                $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                                                $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                                                chmod($dirPath ."/".$filename , 0777);
                                                unlink(public_path().'/uploads/rooms/'.$post->img2);
                                                //connect & insert file record in database
                                               $post->img2  = $filename;
                                               $post->save();
                                               
                                    }
                               }
                               
                               
                               if(Input::file('img3')){
                                   $file = Input::file('img3'); // your file upload input field in the form should be named 'file'
                                    $destinationPath = public_path().'/uploads';
                                    $filename = $file->getClientOriginalName();
                                    //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
                                    $uploadSuccess = Input::file('img3')->move($destinationPath, $filename);
                                    $RandNumber   		= rand(0, 9999999999);
                                    if( $uploadSuccess ) {
                                                 require_once('ImageWorkshop/src/PHPImageWorkshop/ImageWorkshop.php');
                                                chmod($destinationPath."/".$filename, 0777);
                                                $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
                                                unlink(public_path().'/uploads/'.$filename);
                                                $layer->resizeInPixel(150, null, true);
                                                $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
                                                $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
                                                $dirPath =public_path().'/uploads/' ."rooms";
                                                $filename = "_".$RandNumber.".png";
                                                $createFolders = true;
                                                $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
                                                $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
                                                $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
                                                chmod($dirPath ."/".$filename , 0777);
                                                unlink(public_path().'/uploads/rooms/'.$post->img3);
                                                //connect & insert file record in database
                                               $post->img3  = $filename;
                                               $post->save();
                                    }
                               }
                           
                               return View::make('admin.editpost',  compact("post"))->with("msg",'Changes to Post Details Added Successfull');
                    
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function addslideshow(){
        $file = Input::file('img1'); // your file upload input field in the form should be named 'file'
        $destinationPath = public_path().'/uploads';
        $filename = $file->getClientOriginalName();
        //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('img1')->move($destinationPath, $filename);
        $RandNumber   		= rand(0, 9999999999);
        if( $uploadSuccess ) {
            require_once('ImageWorkshop/src/PHPImageWorkshop/ImageWorkshop.php');
            chmod($destinationPath."/".$filename, 0777);
            $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
            unlink(public_path().'/uploads/'.$filename);
            $layer->resizeInPixel(400, null, true);
//            $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
//            $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
            $dirPath =public_path().'/uploads/' ."slideshow";
            $filename = "_".$RandNumber.".png";
            $createFolders = true;
            $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
            $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
            chmod($dirPath ."/".$filename , 0777);
            //connect & insert file record in database
            Slideshow::create(array(
                'picture' => $filename
            ));
            $msg = "picture added successful";
            return View::make('admin.slideshow',compact("msg"));
        }else{
            $emsg = "Error During Uploading";
            return View::make('admin.slideshow',compact("emsg"));
        }
    }

        
//function outputs upload error messages, http://www.php.net/manual/en/features.file-upload.errors.php#90522
function upload_errors($err_code) {
	switch ($err_code) { 
        case UPLOAD_ERR_INI_SIZE: 
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini'; 
        case UPLOAD_ERR_FORM_SIZE: 
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form'; 
        case UPLOAD_ERR_PARTIAL: 
            return 'The uploaded file was only partially uploaded'; 
        case UPLOAD_ERR_NO_FILE: 
            return 'No file was uploaded'; 
        case UPLOAD_ERR_NO_TMP_DIR: 
            return 'Missing a temporary folder'; 
        case UPLOAD_ERR_CANT_WRITE: 
            return 'Failed to write file to disk'; 
        case UPLOAD_ERR_EXTENSION: 
            return 'File upload stopped by extension'; 
        default: 
            return 'Unknown upload error'; 
    } 
} 
       
}
