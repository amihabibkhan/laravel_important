// in modal have to make a relationship to batch table
// relation with user table many to many
    public function users(){
        return $this->belongsToMany('App\User', 'batch_users');
    }


// in controller where from want to get user
$user = User::whereDoesntHave('batches', function (Builder $query) use ($id){
                $query->where('batches.id', $id);
        })->get(); 
