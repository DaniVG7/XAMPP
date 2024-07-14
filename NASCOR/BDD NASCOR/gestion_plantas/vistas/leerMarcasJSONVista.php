<?php
header('Content-Type: application/json;chatset=utf-8');
echo '{"Marcas":';
echo json_encode($json);
echo '}';