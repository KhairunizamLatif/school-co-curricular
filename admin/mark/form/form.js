$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url:"find.php",
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
        var username = $("#username").val();
        var password = $("#password").val();
        var classes = $("#classes").val();
        var classes_code = $("#classes_code").val();
        var status = $("#status").val();

        $.ajax({
            url:"add.php",
            method:"POST",
            data:{code:code, name:name, username:username, password:password, classes:classes, classes_code:classes_code, status:status },
            dataType:"text",
            success:function(data)
            {
                alert(data);
                fetch_data();
            }
        })
    });
});