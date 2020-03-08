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
//echo
        $x=20;
        $y=10;
        $result = $x<=>$y;
        
        if ($x===$y) {
            echo "identyczne";
        }else {
            echo "nieidentyczne";
        }
        
        echo gettype $x;
        echo gettype $y;
        //operatory rzutowania
        $tekst1="123ssd";
        $x1 = (int)$text1;
        echo $x1,"<br>";
        echo getype ($text1);
        echo getype ($x1);
        
        $text2 = 0;
        $x2 = (bool)$text2;
        echo $x2;
        
        
        $text3 = 1-;
        $x3 = (uset)$text2;
        echo $text3;
        echo $x3;
        echo gettype ($text3)
        echo gettype ($x3),"<hr>"; //null
        
        //roziar typu intiger 
        echo PHP_INT_SIZE,"<br>"; //8
        echo PHP_INT_MAX,"<br>"; //8
        
        //kontrola typu zmiennych 
        $x=10;
        echo is_int($x); //1
        echo is_string($x);
        echo is_bool($x);
        echo is_float($x);
        echo is_null($x),"<hr>";
        
        //operator ignorowania bledow
        $w;
        echo @$w;
        echo @gettype ($w); // null
        
        //zmienne superglobalne
        //$_GET, $_POST, $_cookie, $_files,$_session,$_server
        
        echo $_SERVER['SERVER_PORT'],<BR>;// 80
        echo $_SERVER['SERVER_name'],<BR>;// 80
        echo $_SERVER['script_name'],<BR>;// 80
        echo $_SERVER['DOCUMENT_ROOT'],<BR>;// 80
        
        $fileLocal = $_server['DOCUENT_ROOT'];
        $fileLocal = .$_server['SCRIPT_NAME'];
            ecgo $fileLocal,"<hr>";
        
        // stale - nazwy z duzych liter
        define('SURNAME',"Kowal");
        echo SURNAME;
        
        define('name',"Anna",true);
        echo name;
        
        define('namE',"Anna",false);
        echo name;
        
        //stale predefiniowane
        echo PHP_VERSION;
        echo PHP_OS; //WINNT
        echo __LINE__; // linia kodu
        echo __FILE__; //ciaezka do anazyw pliku
        echo __DIR__; //sciezka do katalogu
        
        //dolaczanie pliku //podpinamy to w innym pliku html
        <?php
            echo <<<X
       <hr>
       Plik o nazwie:  3_1_file.php
       <hr>
       X; 
       ?>
        
        html: //do tego co wyzej
        
        <body>
            <h3>Plik główny</h3>
            <?php
            include './3_1file.php';
            include_once './3_1file.php';
            
            reguire './3_1file.php';
            reguire_once './3_1file.php';
            
            ?>
        <h3>Koniec plik głównego</h3> 
           
        </body>
        
        4 plik string.php
        
        
        
        
            
            
            
            
    ?>
    </body>
</html>
