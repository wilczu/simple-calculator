<?php
    session_start();

    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    //Sprawdzenie czy zmienna wpisana w pole ma poprawna wartosc
    
    if($liczba1 == 0 && $liczba2 == 0)
    {
        header('Location: index.php');
        $_SESSION['error'] = 'Czy to dzialanie ma sens ?';
        if(isset($_SESSION['equals'])) unset($_SESSION['equals']);
        exit();                
    }
    
    if(strlen($liczba1) >=11 || strlen($liczba2) >=11)
    {
        header('Location: index.php');
        $_SESSION['error'] = 'Wartosc wpisana w polu jest zbyt duża';
        if(isset($_SESSION['equals'])) unset($_SESSION['equals']);
        exit();        
    }

    if(!(is_numeric($liczba1) && is_numeric($liczba2)))
    {
        header('Location: index.php');
        $_SESSION['error'] = 'Wartosc wpisana w polu jest bledna !';
        if(isset($_SESSION['equals'])) unset($_SESSION['equals']);
        exit();
        
    }
    else
    {

        //usuwanie zmiennych
        if(isset($_SESSION['error'])) unset($_SESSION['error']);
        if(isset($_SESSION['equals'])) unset($_SESSION['equals']);

       //dodawanie
        function dodawanie($liczba1,$liczba2)
        {
            $wynik = $liczba1 + $liczba2;
            header('Location: index.php');
            $_SESSION['equals'] = $liczba1." + ".$liczba2." = ".$wynik;
        }
        //odejmowanie
        function odejmowanie($liczba1, $liczba2)
        {
            $wynik = $liczba1 - $liczba2;
            header('Location: index.php');
            $_SESSION['equals'] = $liczba1." - ".$liczba2." = ".$wynik;        
        }
        //mnozenie
        function mnozenie($liczba1, $liczba2)
        {
            $wynik = $liczba1 * $liczba2;
            header('Location: index.php');
            $_SESSION['equals'] = $liczba1." * ".$liczba2." = ".$wynik;        
        }
        //dzielenie
        function dzielenie($liczba1, $liczba2)
        {
            if($liczba1 == 0 || $liczba2 == 0)
            {
                header('Location: index.php');
                $_SESSION['error'] = 'Nie da sie podzielic tej liczby przez 0 !';
                if(isset($_SESSION['equals'])) unset($_SESSION['equals']);
                exit();                
            }
            $wynik = $liczba1 / $liczba2;
            header('Location: index.php');
            $_SESSION['equals'] = $liczba1." ÷ ".$liczba2." = ".$wynik;          
        }

        $operacja = $_POST['funkcja'];

        switch($operacja)
        {
            case "dodaj":
                dodawanie($liczba1, $liczba2);
                break;
            case "odejmij":
                odejmowanie($liczba1, $liczba2);
                break;
            case "mnoz":
                mnozenie($liczba1, $liczba2);
                break;
            case "dziel":
                dzielenie($liczba1, $liczba2);
                break;
            default:
                header('Location: index.php');
                $_SESSION['error'] = 'Error!';
                if(isset($_SESSION['equals'])) unset($_SESSION['equals']);
                exit();
                break;
        }
    }    
?>