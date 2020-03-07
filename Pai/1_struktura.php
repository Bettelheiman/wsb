<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Struktura dokumentu</title>
    </head>

    <body>
    <?php
        $name="Janusz";
        $surname="Nowak";
          //  echo "$name";
          //  echo $name.$surname."<hr>";

        //heredoc
        echo <<<SHOW
        <hr>
        Imię: $name<br>
        Nazwisko: $surname<br>
        <hr>
SHOW;

    ?>
    </body>
</html>
