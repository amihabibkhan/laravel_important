@section('main_content') 
    <div class="row clearfix">
            <div class="col-md-8">
                <div class="card">
                    <div class="header bg-orange">
                        <h2>
                            Category List
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table text-center table-bordered">
                            <tr>
                                <th class="text-center">Serial</th>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a onclick="edit_category('{{ route('portfolio_category.update', $category->id) }}', '{{ $category->name }}')" class="btn btn-success" style="margin-right: 10px"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('portfolio_category.destroy', $category->id) }}" style="display: inline-block" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No Data Found</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hidden" id="edit_card">
                    <div class="header" id="edit_card_header">
                        <h2>
                            Update Category
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('portfolio_category.store') }}" id="update_category_form" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <div class="form-line" style="margin-bottom: 10px">
                                    <input type="text" id="category_name" class="form-control" name="name" placeholder="Category Name">
                                </div>
                                @if($errors->has('name'))
                                    <span style="color: red;">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Update Category">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="header bg-orange">
                        <h2>
                            Create a New Category
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('portfolio_category.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <div class="form-line" style="margin-bottom: 10px">
                                    <input type="text" class="form-control" name="name" placeholder="Category Name">
                                </div>
                                @if($errors->has('name'))
                                    <span style="color: red;">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Create Category">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection

@section('theme_js')
    <script>
        var edit_count = 1;
        function edit_category(route, name) {
            edit_count = edit_count + 1;
            if (edit_count % 2 == 0){
                document.getElementById('edit_card_header').classList.remove('bg-green');
                document.getElementById('edit_card_header').classList.add('bg-black');
            }else {
                document.getElementById('edit_card_header').classList.add('bg-green');
                document.getElementById('edit_card_header').classList.remove('bg-black');
            }
            document.getElementById('edit_card').classList.remove('hidden');
            document.getElementById('update_category_form').setAttribute('action', route);
            document.getElementById('category_name').value = name;
        }
    </script>
@endsection
