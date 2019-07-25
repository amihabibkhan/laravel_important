// First Command to install ck editor: composer require unisharp/laravel-ckeditor

// Service provider is required although its laravel 5.5 above: Unisharp\Ckeditor\ServiceProvider::class,

// Second command to vendor publish: php artisan vendor:publish --tag=ckeditor

// only for ck editor use (not with filemanager)
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
  
// filemanager first command: composer require unisharp/laravel-filemanager:~1.8
// second command:  php artisan vendor:publish --tag=lfm_config
// third command: php artisan vendor:publish --tag=lfm_public

// if need: 
 php artisan route:clear
 php artisan config:clear
 php artisan storage:link
 
 
 // ck editor with file manager
 
 <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('article-ckeditor', options = {
        height: '320px',
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    });
</script>
