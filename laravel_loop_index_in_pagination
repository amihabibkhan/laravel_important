// have to send paginate from controller

@if(isset($request->page))
    {{ ($request->page - 1) * $paginate + $loop->iteration }}
@else
    {{ $loop->iteration }}
@endif
