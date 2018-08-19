$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url:"table_classes.php",
            method:"POST",
            success:function(data){
                $('#myTable').html(data);
            }
        });
    }
    fetch_data();
    $(document).on('click', '#button', function(){
        var code = $("#code").val();
        var name = $("#name").val();
        var tch_name = $("#tch_name").val();
        var tch_code = $("#tch_code").val();
        var date = $("#date").val();

        $.ajax({
            url:"add_classes.php",
            method:"POST",
            data:{code:code, name:name, tch_name:tch_name, tch_code:tch_code, date:date},
            dataType:"text",
            success:function(data)
            {
                alert(data);
                fetch_data();
            }
        })
    });

    $(document).on('click', '.btn_delete', function(){
        var id=$(this).data("id8");
        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                url:"delete_classes.php",
                method:"POST",
                data:{id:id},
                dataType:"text",
                success:function(data){
                    alert(data);
                    fetch_data();
                }
            });
        }
    });

    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        var action = 'fetch_single';
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{id:id, action:action},
            dataType:"json",
            success:function(data)
            {
                $('#first_name').val(data.first_name);
                $('#last_name').val(data.last_name);
                $('#user_dialog').attr('title', 'Edit Data');
                $('#action').val('update');
                $('#hidden_id').val(id);
                $('#form_action').val('Update');
                $('#user_dialog').dialog('open');
            }
        });
    });
});