<?php
$deployment = getenv("COLOR");

$deployment = getenv("COLOR");
if ( $deployment == 'blue') {
  $color = 'blue';
} elseif ($deployment == 'green')  {
  $color = 'green';
} else {
  $color = 'green';
}

$data = [ 'color' => $deployment ];
echo json_encode( $data );
http_response_code(200);
?>
