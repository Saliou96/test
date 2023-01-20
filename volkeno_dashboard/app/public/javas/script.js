$('thead').on('click','.addRow',function(){
    var tr = '<tr>'+
        '<td><input type="text" class="form-control" id="floatingInputGrid" name="n_serie[]"></td>'+
        '<td><input type="text" class="form-control" id="floatingInputGrid" name="description[]"></td>'+
        '<td><input type="text" class="form-control" id="floatingInputGrid" name="fabriquant[]"></td>'+
        '<td><input type="text" class="form-control" id="floatingInputGrid" name="n_identifiant[]"></td>'+
        '<td><input type="text" class="form-control" id="floatingInputGrid" name="statut" disabled value="M"></td>'+
        "<th><a href='javascritp:;' class='btn btn-danger delete'>-</a></th>"+
        '</tr>';

    $('tbody').append(tr);
});

    $('tbody').on('click','.delete',function(){
        $(this).parent().parent().remove();
    });

