function deleteNote() {
    $('.delete-button').on('click', function(e){
        e.preventDefault();

        var id = $(this).data('id');
        var row = $(this).closest('tr');
        $.ajax({
               url: location.origin+'/notes/delete',
               type: 'post',
               data: {id: id},
               success: function(){
                   row.remove();
               }
           });
    });
}

$(document).ready(function(){
    deleteNote();
});
