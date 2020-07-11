// where paginate(30)

<td>{{ $loop->index + 1 + ((request()->page == 1 || !request()->page) ? 0 : ((request()->page - 1) * 30)) }}</td>
