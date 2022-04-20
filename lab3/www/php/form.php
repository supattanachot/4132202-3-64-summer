<form>
    <div>
        <label> Name : </label>
        <input type="text" name="name">
    </div>
    <div>
        <label> Surname : </label>
        <input type="text" name="sname">
    </div>
    <div>
        <label> Age : </label>
        <input type="text" name="age">
    </div>
    <div>
        <label> sex : </label>
        <select name="age">
            <option value="">กรุณาเลือก</option>
            <option value="1">ชาย</option>
            <option value="2">หญิง</option>
</select>
</div>
<button type="submit">SAVE</button>
<button tyoe="reset">RESET</button>
</form>

<script>
    $("#frm_add").submit(function(e) {
        e.preventDefault();

        let data = $(this).setialize()
        // console.log(data);

        $.ajax({
            url: "./query/user_add.php",
            method: "POST",
            data: data,
            success: function(msg){
                console.log(msg);
            }
        });
    });
</script>