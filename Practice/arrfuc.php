<?php

print("The elements in array which is created by range function:<br>");
foreach (range(1, 31) as $numbers) { //here the range function help us to creat a set  of array by giving start and end
    //you can also give char where to start and end
    echo("$numbers<br>\n");
}
