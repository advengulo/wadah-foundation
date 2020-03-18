//Sidebar Collapse
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

//DataTables
$(document).ready(function() {
    $('#dataTable').DataTable();
});

//Setup - add a text input to each footer cell
$('#dataTable thead #search-top th').each(function(i) {
    var title = $(this).text();
    var events = 'onchange="SearchCol(this,'+i+')"'
        events+= ' onkeyup="SearchCol(this,'+i+')"'
    $(this).html('<input type="text" '+events+' placeholder="Search '+title+'" />');
   });
   // Search Specific Column
   function SearchCol(input,col_index){
    var query = $(input).val()
    $("#dataTable").DataTable().column(col_index).search(query).draw()
}

$(document).ready(function() {
    $('#dataTablePaud').DataTable({
        // "ordering": false
        "aaSorting": []
    });
});
$('#dataTablePaud thead #search-top th').each(function(i) {
    var title = $(this).text();
    var events = 'onchange="SearchCol(this,'+i+')"'
        events+= ' onkeyup="SearchCol(this,'+i+')"'
    $(this).html('<input type="text" '+events+' placeholder="Search '+title+'" />');
   });
   // Search Specific Column
   function SearchCol(input,col_index){
    var query = $(input).val()
    $("#dataTablePaud").DataTable().column(col_index).search(query).draw()
}

