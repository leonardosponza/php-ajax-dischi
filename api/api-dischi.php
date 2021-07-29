<?php
include_once __DIR__ . '/../db/dischi.php';

header('Content-Type: application/json');
echo json_encode($dischi);