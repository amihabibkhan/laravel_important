function rating_calculator($star, $ratings){
    $result = $star / $ratings;
    $rounded_result = round($result, 2);
    $whole = floor($rounded_result);
    $fraction = $rounded_result - $whole;
    if ($fraction > .50){
        $fraction = 1;
    }elseif ($fraction > .0){
        $fraction = .5;
    }
    return $whole + $fraction;
}
