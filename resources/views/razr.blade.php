<html>
    <title>memepage</title>
    <head>
        <body>
            <form method="post" action='/trash'>
                Number 1 <input type="text" name="num1"><br/>
                Number 2 <input type="text" name="num2"><br/>
                <input type="submit" value="Sum">
                {{csrf_field()}}
            </form>
        </body>
    </head>
</html>
       
