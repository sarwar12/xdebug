<?php 
for($i = 0; $i<10; $i++){
    $result = getResult($i);
    echo "==Displaying Result== \n";
    displayResult($i, $result);
}

function getResult($i){
    return $i % 2 == 0 ? 'even': 'odd';
}

function displayResult($i, $result){
    printf("%d is %s", $i, $result);
}