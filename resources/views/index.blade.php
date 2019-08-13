<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GetEasyBooks</title>
    </head>

    <body>
        
        <form action="/email" method="POST">

            {{ csrf_field() }}

			<p>Enter your email:</p>

			<input type="email" name="email" placeholder="example@mail.com">

			<input type="submit" value="Submit">

		</form>

    </body>

</html>
