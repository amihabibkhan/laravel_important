// php artisan make:notification NotificationName

Notification::send($admins, new PlaceOrderNotification($order));

// $admins defines receiver
// PlaceOrderNotification define Notification which created before
// $order define datas which will be available in Notification


// for queues
php artisan queue:table
php artisan migrate

// change the driver from env file from sync to database
QUEUE_DRIVER=database instead of QUEUE_CONNECTION=database

// in Notification file have to implement ShouldQueue after extends of class like this

class PlaceOrderNotification extends Notification implements ShouldQueue

// we can change default sender from config/mail.php

// to send with custom template
return (new MailMessage)->view('mail.to_admin', ['order' => $this->order]);
