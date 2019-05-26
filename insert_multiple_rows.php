$id = session('Pid');
Schedule::insert([
   ['photographer_id' => $id, 'date' => 1],
   ['photographer_id' => $id, 'date' => 2],
   ['photographer_id' => $id, 'date' => 3],
   ['photographer_id' => $id, 'date' => 4],
]);
