<?php

goto a;
echo "Hello World";

a:
echo "Hello A";


$counter = 1;

while (true) {
    echo "ini adalah while true ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "ini adalah perintah end";
