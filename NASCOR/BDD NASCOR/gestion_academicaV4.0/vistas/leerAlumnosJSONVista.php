<?php
header('Content-Type: application/json');
echo '{"alumnos":';
echo json_encode($json);
echo '}';