// min and max return a single value

// get minimum value from a table 
echo Photographer::min('budget_start');
echo Photographer::where('approve_status', 1)->min('budget_start');

// get maximum value from a table 
echo Photographer::max('budget_start');
echo Photographer::where('approve_status', 1)->max('budget_start');
