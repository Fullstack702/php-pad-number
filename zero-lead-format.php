$numStr = strval($num);

while (strlen( $numStr) < 10) {
    $numStr = '0'.$numStr;
}
echo $numStr
