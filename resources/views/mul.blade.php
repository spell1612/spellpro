<html>
    <head>
        <title>memepage</title>
    </head>
    <body>
        <form method="post" action='/prod'>
                Number 1 <input type="text" name="num1"><br>
                Number 2 <input type="text" name="num2"><br>
                <input type="submit" value="Multiply">
                {{csrf_field()}}
        </form>
    </body>
   
</html>