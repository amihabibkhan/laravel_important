// nothing just have to use the code bellow instead of links() only

{{ $users->appends(Request::except('page'))->links() }}
