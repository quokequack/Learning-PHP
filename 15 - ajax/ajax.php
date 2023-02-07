<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='ajax.js'></script>
    <title>AJAX | PHP</title>
</head>
<body> 
    <div class='container'>
        <form id='form1' action='meuFormData.php'>
            <label for='directors'>Director</label>
            <input type='text' id='username' name='director'>
            <label for='movie'>Movie</label>
            <input type='text' id='movie' name='movie'>
            <input type='submit' value='Submit'>
        </form>
        <div id='mensagem'></div>
    </div>
    <script>
        const form = document.getElementById('form1');
        form.addEventListener('submit', myFormData);
    </script>
</body>
</html>