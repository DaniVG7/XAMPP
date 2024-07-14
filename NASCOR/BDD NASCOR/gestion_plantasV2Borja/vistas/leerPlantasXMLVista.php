<?php
header("Content-Type: application/xml; charset=utf-8");
$txt = '<plantas>';
foreach ($plantas->plantas as $planta) {
	$txt .= '<planta>';
	$txt .= '<id><![CDATA['.$planta['id'].']]></id>';
	$txt .= '<nombre_cientifico><![CDATA['.$planta['Nombre_cientifico'].']]></nombre_cientifico>';
	$txt .= '<nombre_comun><![CDATA['.$planta['Nombre_comun'].']]></nombre_comun>';
	$txt .= '<descripcion><![CDATA['.$planta['Descripcion'].']]></descripcion>';
	$txt .= '<ubicacion><![CDATA['.$planta['Ubicacion'].']]></ubicacion>';	
	$txt .= '<stock><![CDATA['.$planta['stock'].']]></stock>';	
	$txt .= '</planta>';
}
$txt .= '</plantas>';
echo $txt;