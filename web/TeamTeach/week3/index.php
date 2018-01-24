<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title></title>
    </head>
    <body>
        <form method="post" action="results.php">
            Name: <input type="text" name="name"><br>
            
            Email: <input type="text" name="email"><br>
            
            Major:<br>
            <input type="radio" name="major" value="Computer Science"> Computer Science<br>
            <input type="radio" name="major" value="Web Design and Development"> Web Design and Development<br>
            <input type="radio" name="major" value="Computer Information Technology"> Computer Information Technology<br>
            <input type="radio" name="major" value="Computer Engineering"> Computer Engineering<br>
            
            Comment:<br>
            <textarea rows="4" cols="50" name="comment"></textarea><br>
            
            <input type="checkbox" name="country[]" value="na"> North America<br>
            <input type="checkbox" name="country[]" value="sa"> South America<br>
            <input type="checkbox" name="country[]" value="eu"> Europe<br>
            <input type="checkbox" name="country[]" value="as"> Asia <br>
            <input type="checkbox" name="country[]" value="au"> Australia<br>
            <input type="checkbox" name="country[]" value="af"> Africa<br>
            <input type="checkbox" name="country[]" value="an"> Antarctica<br>
            
            <input type="submit" name="submit" value="Submit">
        </form>
        
    
    
    </body>
</html>