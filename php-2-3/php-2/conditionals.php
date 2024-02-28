<?php

//conditionals

//if

$number = 1;

//if ($number === 1) {
//    print('true');
//}
//
////if else
//
//if ($number === 1) {
//    print('true');
//} else {
//    print('false');
//}


//ternary

$ternaryOperator = (1 < 2) ? 'true' : 'false';

//if elseif

//if (1 > 2) {
//    print("first block");
//} elseif (3 > 4) {
//    print("second block");
//}

//switch

//$status = 'ACTIVE';
//switch ($status) {
//    case 'DELETED':
//        print('is deleted');
//        break;
//    case 'ACTIVE':
//        print('is active');
//        break;
//    default:
//        print('was neither');
//}


//match

$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};
print($return_value);






