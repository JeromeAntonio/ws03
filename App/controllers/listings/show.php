<?php

require basePath('Framework/Database.php');

$id = $_GET['id'] ?? null;

$sql = "SELECT * FROM listings WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindValue(':id', $id);

$stmt->execute();

$listing = $stmt->fetch(PDO::FETCH_ASSOC);

loadView('listings/show', [
    'listing' => $listing
]);
