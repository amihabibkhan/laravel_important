// upload image to server
        $image = $request->file('image')->store('gallery');
        $thumb = $request->file('image')->store('gallery_thumb');

        // get public path
        $image_public_path = public_path('storage/' . $image);
        $thumb_public_path = public_path('storage/' . $thumb);

        // get image size
        $height = Image::make($image_public_path)->height();
        $width = Image::make($image_public_path)->width();

        if ($height > $width){
            Image::make($thumb_public_path)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(300, 300)->save($thumb_public_path);
        }else{
            Image::make($thumb_public_path)->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->crop(300, 300)->save($thumb_public_path);
        }
        if ($width > 1000){
            $width = 1000;
        }

        Image::make($image_public_path)->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($image_public_path);
