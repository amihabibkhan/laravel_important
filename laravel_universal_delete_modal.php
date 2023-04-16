// in admin layout


// modal
<div id="delete_modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Delete Confirmation !</h4>
    <div class="custom-modal-text">
        <h3 style="text-align: center; color: black">Are you sure to delete?</h3>
        <p>Please make sure that, you really need to delete it. Otherwise you can update also all of the content of this item.</p>
        <form action="" class="text-center" id="delete_modal_form" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger mr-2">Yes! Delete</button>
            <button type="button" onclick="Custombox.modal.close();" class="btn btn-primary">No! Thanks</button>
        </form>
    </div>
</div>

// function to set action in form dinamically 
function setActionToModal(get_action){
    document.getElementById('delete_modal_form').setAttribute('action', get_action)
}

// action button where need to use (call) custom delete modal
<a href="#delete_modal" class="dropdown-item"  onclick="setActionToModal('{{ route('video.destroy', $video->id) }}')" data-animation="fadein" data-plugin="custommodal"  data-overlayColor="#36404a"><i class="fa fa-trash"></i> DELETE</a>
