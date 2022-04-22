<script>
    $(".btn-del").click(function() {
        let data = $(this).data("name");
        // alert(data);
        $.ajax({
            url: "./query/user_del.php",
            method: "POST",
            data: {
                name: data
            },
            success: function() {
                $("#div_content").load("./php/dt_user.php");
            }
        });
    });
</script>
    