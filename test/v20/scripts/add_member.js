$(document).ready(function(){
    function load_data(start, length)
    {
        var dataTable = $('#members_table').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
           "retrieve": true,
            "ajax" : {
                url:"fetch_member.php",
                method:"POST",
                data:{start:start, length:length}
            },
            "drawCallback" : function(settings){
                var page_info = dataTable.page.info();
                $('#totalpages').text(page_info.pages);
                var html = '';
                var start = 0;
                var length = page_info.length;
                for(var count = 1; count <= page_info.pages; count++)
                {
                    var page_number = count - 1;
                    html += '<option value="'+page_number+'" data-start="'+start+'" data-length="'+length+'">'+count+'</option>';
                    start = start + page_info.length;
                }
                $('#pagelist').html(html);
                $('#pagelist').val(page_info.page);
            }
        });
    }
    load_data();
    $('#pagelist').change(function(){
        var start = $('#pagelist').find(':selected').data('start');
        var length = $('#pagelist').find(':selected').data('length');
        load_data(start, length);
        var page_number = parseInt($('#pagelist').val());
       var test_table = $('#members_table').dataTable();
        test_table.fnPageChange(page_number);
    });  
});