<?php
error_reporting(0);

include 'conn.php';


header("Access-Control-Allow-Origin: *"); // Allow all origins
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Allow specific methods
header("Access-Control-Allow-Headers: Content-Type"); // Allow specific headers


if($_POST['type'] == "")
{
?>
<div class="container mb-5 mt-5">

    <?php
$show_edit_vh = "SELECT * FROM car_soft_company_registration";
$data_edit_vh = $db->query($show_edit_vh);
?>
    <table border='1'>
        <?php
$count = 0;
while($result = $data_edit_vh->fetchArray(SQLITE3_ASSOC)){
$count ++;

$num_new = $result['num_new'];
$date = $result['date'];
$company_code = $result['company_code'];
$company_name = $result['company_name'];
$address = $result['address'];
$gst_no = $result['gst_no'];
$pan_no = $result['pan_no'];
$phone = $result['phone'];
$state_name = $result['state_name'];
$city_name = $result['city_name'];

            ?>
        <tr>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $count; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $date; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $company_code; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $company_name; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $address; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $gst_no; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $pan_no; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $phone; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $state_name; ?>
            </td>
            <td style='border:1px solid; padding:5px;'>
                <?php echo $city_name; ?>
            </td>
        </tr>

        <?php
}
?>

    </table>
</div>


<?php
 

}elseif ($_POST['type'] == "setinput"){
    
    
  

}


?>