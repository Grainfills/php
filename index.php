<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP test</title>
    <script src="https://libs.cdnjs.net/jquery/3.4.1/jquery.js"></script>
</head>

<body>
    <form action="action.php" method="get">
        <p>姓名: <input type="text" name="name" id="name" /></p>
        <p>年龄: <input type="text" name="age" id="age" /></p>
        <p><input type="button" id="sub" value="提交" /></p>
    </form>
    <script>
        $('#sub').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'action.php',
                data: {
                    username: $('#name').val()
                },
                dataType: 'json',
                type: 'get',
                success: function(res) {
                    console.log(res.msg)
                    if (res.code == '200') {
                        var txt1 = `<p>${res.msg}</p>`; // 使用 HTML 标签创建文本
                        var txt2 = $("<p></p>").text(`${res.username}`); // 使用 jQuery 创建文本
                        $("body").append(txt1, txt2);
                    }
                },
                error: function(e) {
                    console.log(e)
                }
            })
        })
    </script>


</body>

</html>