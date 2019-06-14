// in Order model to Photographer

public function photographers()
  {
      return $this->belongsToMany('App\Photographer', 'order_details', 'order_id', 'photographer_id');
  }
  
  // order_details is pivot table
