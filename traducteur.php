<?php

function translate($mot, $sens) {
    $dictionnaire = [
        'salut' => 'hi',
        'bonjour' => 'hello',
        'au revoir' => 'goodbye',
        'chat' => 'cat',
        'chien' => 'dog',
        'cheval' => 'horse',
        'horse' => 'cheval',
        'dog' => 'chien',
        'cat' => 'chat',
        'goodbye' => 'au revoir',
        'hello' => 'bonjour',
        'hi' => 'salut',
    ];

    $mot = strtolower($mot);

    if (array_key_exists($mot, $dictionnaire)) {
        return $sens === 'FrenchToEnglish' ? $dictionnaire[$mot] : array_search($mot, $dictionnaire);
    } else {
        return " Mot inconnu";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mot = $_POST['word'];
    $sens = $_POST['sens'];

    $resultat = translate($mot, $sens);

    include 'index.php';
}
?>
