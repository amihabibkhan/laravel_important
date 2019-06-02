use Illuminate\Support\Facades\Mail;

public function sendMail(){
  Mail::send(['text'=>'test'],['name'=>'Chobituli'],function ($message){
      $message->to('aminruhul78485@gmail.com', 'To Ruhul Amim')->subject('You are knocked');
      $message->from('mrashk197@gmail.com', 'From Chobituli.com');
  });
}

// first parameter required a view
// this is a simple plain text mail sending system
