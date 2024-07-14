<?php
header('Content-Type: application/json;chatset=utf-8');
echo '{"Plantas":';
echo json_encode($json);
echo '}';