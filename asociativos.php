<?php
$aAuto = array();
$aAuto["color"] = array("Negro", "Verde");
$aAuto["marca"] = "Ford";
$aAuto["anio"] = 1908;
$aAuto["precio"] = "USD 800 a USD 1000";

echo "El auto " . $aAuto["marca"] . " del año " . $aAuto["anio"] . " es de color " . $aAuto["color"][0] . " y su precio es " . $aAuto["precio"];
