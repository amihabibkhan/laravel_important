// with image intervention package 
// multiple image upload with watermark
// html file input field name must be like name="pages[]"

// upload pages
$watermark = public_path('images/water_mark_logo.png');
if ($request->hasFile('pages')){
    $all_images = $request->file('pages');
    if (!empty($all_images)) {
        foreach ($all_images as $single_image) {
            $storage_path = $single_image->store('pages');
            $public_path = public_path('storage/' . $storage_path);
            $img = Image::make($public_path)
                ->resize(750, 1060)
                ->insert($watermark, 'center');
            $img->save();
        }
    }
}
