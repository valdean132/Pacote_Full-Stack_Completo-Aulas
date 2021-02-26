<?php
    $pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

    /*
    $tables = $pdo->query("SHOW TABLES");
    $tables = $tables->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($tables);
    echo '</pre>';
    */

    $sql = 'CREATE TABLE cursos(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome_curso VARCHAR(30) NOT NULL
    )';

    $pdo->exec($sql);
?>