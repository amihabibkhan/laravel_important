use Artisan;

class FrontEndController extends Controller
{ 
  public function install(){
      Artisan::call('storage:link');
  }
}
