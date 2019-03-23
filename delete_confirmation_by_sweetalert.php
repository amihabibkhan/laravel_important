
<button class="btn btn-pill-right btn-danger"
        onclick="delete{{ $content->id }}()" title="Delete">Delete
</button>
<script>
    function delete{{ $content->id }}(){
        swal({
            title: "Are you sure to Delete?",
            icon: "error",
            buttons: ["No", "Yes"],
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    location.href = "{{ route('admin.deleteContent', $content->id) }}"
                }
            });
    }
</script>
