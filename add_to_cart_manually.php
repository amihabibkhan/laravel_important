// add to cart
public function addToCart(Request $request, $id)
{
    $get_data = session('cart');
    if (is_array($get_data)){
        if (array_key_exists($id, $get_data)){
            return "already exists";
        }else{
            $get_data[$id] = $id;
            session(['cart' => $get_data]);
        }
    }else{
        $cart = [];
        $cart[$id] = $id;
        session(['cart' => $cart]);
    }
}

// remove from cart
public function removeFromCart(Request $request, $id)
{
    $get_data = session('cart');
    if (is_array($get_data) && array_key_exists($id, $get_data)){
        unset($get_data[$id]);
        session(['cart' => $get_data]);
        return back();
    }else{
        return back()->with('message', "Not yet added to cart");
    }
}
