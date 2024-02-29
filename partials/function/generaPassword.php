<?php
// Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
    function generaPassword($lunghezzaPassword) {
        $lettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $caratteriSpeciali = '!@#$%^&*';
        $password = '';
        $caratteriTotali = $lettere . $caratteriSpeciali;
        $lunghezzaCaratteriTotali = strlen($caratteriTotali);
        for ($i = 0; $i < $lunghezzaPassword; $i++) {
            $index = rand(0, $lunghezzaCaratteriTotali - 1);
            $password .= $caratteriTotali[$index];
        }
        return $password;
    }

?>