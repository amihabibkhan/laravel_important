// javascript run function
<script>
    function call_ajax(){ 
        var id = '556';
        var nid = '445';
        jQuery.ajax({
            url: "{{url( route('change_slider_status') )}}",
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            },

            data: {id: id, nid: nid},
            method: "POST",
            success: function (data) {
                alert(data.test);
            }
        }); 
    }
</script>

// have to cratea a post route
// controller
public function changeStatus(Request $request)
    {
    // necessery program
        return response()->json([
            'test' => $request->nid
        ]);
    }
