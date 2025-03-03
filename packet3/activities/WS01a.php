<?php
// Box dimension
$height = 10;
$width = 12;
$length = 20;
$volume = $height * $width * $length;
$surface_area = 2 * ($height * $width + $height * $length + $width * $length);

echo "<h1>Box</h1>";
echo "<h3>Box with height of $height, width of $width and length of $length ";
echo "has a volume of $volume and surface area of $surface_area</h3>";

// Cylinder calculations
$diameter_cyl = 16;
$length_cyl = 25;
$pi = 3.1416;
$radius_cyl = $diameter_cyl / 2;
$volume_cyl = $pi * $radius_cyl * $radius_cyl * $length_cyl;
$surface_area_cyl = (2 * $pi * $radius_cyl * $length_cyl) + (2 * $pi * $radius_cyl * $radius_cyl);

echo "<h1>Cylinder</h1>";
echo "<h3>Cylinder with diameter of $diameter_cyl and length of $length_cyl ";
echo "has a volume of $volume_cyl and surface area of $surface_area_cyl</h3>";

// Sphere calculations
$diameter_sphere = 30;
$radius_sphere = $diameter_sphere / 2;
$volume_sphere = (4/3) * $pi * $radius_sphere * $radius_sphere * $radius_sphere;
$surface_area_sphere = 4 * $pi * $radius_sphere * $radius_sphere;

echo "<h1>Sphere</h1>";
echo "Diameter: $diameter_sphere<br>";
echo "Volume: $volume_sphere<br>";
echo "Surface Area: $surface_area_sphere";
?>