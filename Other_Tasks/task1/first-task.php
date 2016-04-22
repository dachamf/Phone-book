<?php

/**
 * @return array
 */
function removeDuplicates(array $mixed)
{
    $array = null;


    foreach ($mixed as $mix) {
        //Check if array is initialized.
        if ($array != null) {
            //Flag which check whether the item is repeated.
            $match = false;
            foreach ($array as $member) {
                if ($mix == $member) {
                    $match = true;
                }
            }
            if ($match != true) {
                // If item is not repeated add it to array.
                $array[] = $mix;
            }
        } else {
            //Add first item into array.
            $array[] = $mix;
        }
    }
    //Return filtered array.
    return $array;
}

$array = array(1, 2, 3, 3, 3, 4, 4, 10, 13, 15, 15, 17);
//Call removeDuplicates funcion.
$arrayFiltered = removeDuplicates($array);
?>

<?php foreach ($array as $arr) : ?>
    <?php echo $arr, ','; ?>
<?php endforeach; ?>
<br>
<?php foreach ($arrayFiltered as $arr) : ?>
    <?php echo $arr, ','; ?>
<?php endforeach; ?>
