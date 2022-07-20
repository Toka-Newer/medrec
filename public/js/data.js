// function create_tr(table_id) {
//     let table_body = document.getElementById(table_id),
//         first_tr   = table_body.firstElementChild,
//         tr_clone   = first_tr.cloneNode(true);

//     table_body.append(tr_clone);

//     clean_first_tr(table_body.firstElementChild);
// }

// function clean_first_tr(firstTr) {
//     let children = firstTr.children;
    
//     children = Array.isArray(children) ? children : Object.values(children);
//     children.forEach(x=>{
//         if(x !== firstTr.lastElementChild)
//         {
//             x.firstElementChild.value = '';
//         }
//     });
// }



// function remove_tr(This) {
//     if(This.closest('tbody').childElementCount == 1)
//     {
//         alert("You Don't have Permission to Delete This ?");
//     }else{
//         This.closest('tr').remove();
//     }
// }


// xray

$(function () {
    $(document).on('click', '.btn-add', function (e) {
        e.preventDefault();

        var controlForm = $('.controls:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="fa fa-trash"></span>');
    }).on('click', '.btn-remove', function (e) {
        $(this).parents('.entry:first').remove();

        e.preventDefault();
        return false;
    });
});


