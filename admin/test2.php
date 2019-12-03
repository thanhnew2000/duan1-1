	<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        <script   src="../public/ckeditor/ckeditor.js"></script>
    <body>
 
        <form method="post" action="">
            Sở thích: <br/>
            <input type="checkbox" name="name[]" value="1"/> Đi du lịch <br/>
            <input type="checkbox" name="name[]" value="2"/> Ăn hải sản <br/>
            <input type="checkbox" name="name[]" value="3"/> Xem phim ma <br/>
            <input type="checkbox" name="name[]" value="4"/> Lập trình web <br/>
            <input type="submit" name="submit-form" value="Đăng"/>
            <textarea name=""  id="abcdefg" class="ckeditor">  ss</textarea>
        </form>
    </body>
        <script>
           CKEDITOR.replace( "abcdefg" );
       </script 
</html>