// composer require intervention/image;
// provider
    Intervention\Image\ImageServiceProvider::class,
// class aliecs
    'Image' => Intervention\Image\Facades\Image::class,
    
// done and ready to use

$public_path = public_path('storage/' . $storage_path);

// resize
$img = Image::make($public_path)->resize(width,heidth,callback);
 
//crop by square size
$user->profile_pic = $request->file('profile_picture')->store('profile_picture');
$public_path = public_path('storage/' . $user->profile_pic);
Image::make($public_path)->fit(200, 200)->save($public_path);

// crop by not squre size but defined aspect size
  $img = Image::make($public_path);
  // get width of image
  $height = $img->height();
  //ratio of height
  $ratioOfWidth = ceil(($height * 90.31) / 100);
  // crop image width squre size
  $img->crop($ratioOfWidth, $height)->resize(310,null, function ($constraint){
      $constraint->aspectRatio();
  });
  $img->save();
