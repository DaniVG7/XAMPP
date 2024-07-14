<?php
header('Content-Type: application/json');
echo '{"cursos":';
echo json_encode($cursos);
echo '}';