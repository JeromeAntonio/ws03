<?php

require basePath('Framework/Database.php');

$sql = 'SELECT * FROM listings';

$stmt = $conn->prepare($sql);

$stmt->execute();

$listings = $stmt->fetchAll(PDO::FETCH_ASSOC);

loadView('home', [
    'listings' => $listings
]);
