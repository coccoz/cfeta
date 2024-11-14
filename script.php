<?php
    session_start();

    $cf = $_GET["cf"];
    $e = $_GET["e"];

    if (!isset($_SESSION['registrazioni'])) 
    { 
        $_SESSION['registrazioni'] = array();
    }


    $_SESSION['registrazioni'][$cf] = $e; // Mostra dati inviati

    echo "<h1>Dati inviati</h1>"; 

    echo "<p>Codice Fiscale: $cf</p>"; 

    echo "<p>Età: $e</p>"; // Mostra registrazioni effettuate

    echo "<h2>Registrazioni fino ad ora:</h2>"; 
    
    echo "<ul>"; 

    foreach ($_SESSION['registrazioni'] as $cf => $e) 
    { 
        echo "<li>$cf: $e anni</li>"; 
    } 
    echo "</ul>"; 

    echo '<br><a href="./form.html">Torna indietro</a>';
?>