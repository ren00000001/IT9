<?php
require 'config.php';

// Get the item ID from the request
$data = json_decode(file_get_contents('php://input'), true);
$itemId = $data['id'];

try {
    // Call the stored procedure to archive the item
    $stmt = $pdo->prepare("CALL archive_item(?)");
    $stmt->execute([$itemId]);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>