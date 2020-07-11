{{ $loop->index + 1 + ((request()->page != 1) ? request()->page * 10 : 0) }}
