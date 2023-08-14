<?php
function hidden_number($num_list){
    $new_num = range($num_list[0], max($num_list));
    return array_diff($new_num, $num_list);
}

print_r(hidden_number(array(1,2,3,5,6,9,10)));
print_r(hidden_number(array(20,21,26,28,29,30)));
?>