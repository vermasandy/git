<!DOCTYPE html>
<html>
<body>
<p>Click the button to get your coordinates.</p>
<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";}
    }
    
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
}
</script>

</body>
</html>
<?php
define("SWAPM_REDEEMED_AMOUNT", "2.00");
echo $a = "you have qualified for ".'$'.SWAPM_REDEEMED_AMOUNT." and thanku";
function getUserLatLng(){
	echo $ip = $_SERVER['REMOTE_ADDR'];
	$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
	// $details->city; // -> "Mountain View"
	$latlngStr = $details->loc; // -> "lat,lng"
	$latlng = explode(",",$latlngStr);
	$data['lat'] = $latlng[0];
	$data['lng'] = $latlng[1];
	return $data;
}
$aa = getUserLatLng();
print_r($aa);
die;
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
echo $details->city; // -> "Mountain View"
echo"<pre>";print_r($details);
die;
echo $phn = "(305)555-1212";
if(!empty($phn)){
	//remove the special characters and extra number from the phone no
	$phonE = preg_replace('/(\W*)/', '', $phn);
	$phoneLen = strlen($phonE);
	$diff = $phoneLen-10;
	$phone = substr($phonE,$diff,$phoneLen);
}else{
	$phone = "";
}
echo $phone; die;
$a = 4.49;
echo round($a);
echo implode("\t", "sandeep verma") . "\n";
echo $current_date = strtotime(date('Y-m-d'));// current date
echo"<pre>";
echo $a = strtotime("2017-06-05 07:46:01");
echo $b = date("Y-m-d",$a);
function round_two_decimal_places($unpadded){
	$padded = sprintf('%0.2f', $unpadded); // 520 -> 520.00 or 0.1-> 0.10
	return $padded;
}
$unpadded = round_two_decimal_places(round(.152,2));

//The seller will receive $20 – $0.10 transaction fee (0.5%) and - $1.35 Swapm service fee
function check_cases($case,$price){
	switch ($case) {	
		case "1": 
			$amnt = round_two_decimal_places(round($price,2));
			$notification_message = "The payment of ".'$'."$amnt for flight number abc, seat number 123, has been released by Swapm";
	        return $notification_message;
			break;
		case "2": 
			$notification_message = "The payment of ".'$'."55 for flight number 321, seat number 456, has been released by Swapm";
	        return $notification_message;
			break;
		default:
		$emailSent =  "You have sent new notification!!";
		return true;
	}
}
$case = 1;
$price=0.1;
echo check_cases($case,$price);
//echo round_two_decimal_places($unpadded);
//echo $padded = sprintf('%0.2f', $unpadded); // 520 -> 520.00
echo"<pre>";
$reffer_count = 100;
echo $sweep_ent = floor($reffer_count/50);
echo"<pre>";
echo $distance = round(39.999999999999,2);
echo"<pre>";
echo $str = "parants are god";
// $strlenght = strlen($str); //15 with space
$strAftrReplace = str_replace(' ', "", $str);
$strlenght = strlen($strAftrReplace);
$strArray = str_split($str);
$strArray2 = str_split($str);
$stringArray = array();
foreach($strArray as $arrayChar){
	$charFirstLoop = $arrayChar;
	echo"<pre>";
	$countChar = 0;
	foreach($strArray2 as $secondArrayChar){
		echo"<pre>";
		if($secondArrayChar==$charFirstLoop){
			$countChar++;
		}
		$countArray[] = $countChar;
	}
	if($charFirstLoop==" "){
		$charFirstLoop = "space";
	}else{
		$charFirstLoop = $charFirstLoop;
	}
	// $stringArray[] = $charFirstLoop; 
	//print_r($stringArray);
	if(!in_array($charFirstLoop, $stringArray)){
		echo $charFirstLoop." char are ".$countChar." time(s)";
	}
	$stringArray[] = $charFirstLoop; 
}
die;
echo $a = strtotime("2016-08-29 03:16:45");
echo date("m/d/Y",$a);
$sellerAmnt = 140;
echo"<pre> swapm_service_fee ";
echo $swapm_service_fee = round(1.49,2);
echo"<pre> buyer_transaction_fee ";
echo $buyer_transaction_fee = round($sellerAmnt*(3.4/100),2) + round(0.30,2);
echo"<pre> buyer_application_fee ";
echo $buyer_application_fee = round($swapm_service_fee,2);
echo"<pre> buyer_paid_amount ";
echo $buyer_paid_amount = round($sellerAmnt+$buyer_application_fee+$buyer_transaction_fee,2);
echo"<pre> seller_transaction_fee ";
echo $seller_transaction_fee = round($sellerAmnt*(0.5/100),2);
echo"<pre> seller_application_fee ";
echo $seller_application_fee = round($swapm_service_fee,2);
echo"<pre> seller_get_amount ";
echo $seller_get_amount = round($sellerAmnt-($seller_application_fee+$seller_transaction_fee),2);
echo"<pre> total_application_fee ";
echo $total_application_fee = round($seller_application_fee+$buyer_application_fee,2);
die;
//$20 + $1.35 service fee + $0.98 transaction fee (3.4% + $0.30)
//The seller will receive $20 – $0.10 transaction fee (0.5%) and - $1.35 Swapm service fee
function send_email($case,$email,$userfullName){
	$headers .= "From: Swapm <support@Swapm.com> \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "Reply-To: Swapm <support@Swapm.com>\r\n";
    $headers .= "Return-Path: Swapm <support@Swapm.com>\r\n";
    $to =  $email;
	$name = ucfirst($userfullName);	
	switch ($case) {	
		case "1": 
			$notification_message = "The payment of ".'$'."60 for flight number abc, seat number 123, has been released by Swapm";
			// $to =  $email;
	  //       $name = ucfirst($userfullName);
	        // $headers .= "From: Swapm <support@Swapm.com> \r\n";
	        // $headers .= "MIME-Version: 1.0\r\n";
	        // $headers .= "Content-Type: text/html; charset=utf-8\r\n";
	        // $headers .= "Reply-To: Swapm <support@Swapm.com>\r\n";
	        // $headers .= "Return-Path: Swapm <support@Swapm.com>\r\n";
	        $message_html .= '<table>';
	        $message_html .= '<tr><td>' . '<b>' . Hello . '&nbsp;' . $name  . '</b>'  . '</td></tr>';
	        $message_html .= '<tr><td>&nbsp;</td></tr>';
	        $message_html .= '<tr><td>'.$notification_message.'</td></tr>';
	        $message_html .= '<tr><td>&nbsp;</td></tr>';
	        $message_html .= '<tr><td>Thanks</td></tr>';
	        $message_html .= '<tr><td>Swapm Support Team</td></tr>';
	        $message_html .= '</table>';
	        $message_html .= '</body></html>';
	        $retval = mail($to,'Release Payment',$message_html,$headers);
	        $emailSent =  "You have sent new notification!!";
	        return $emailSent;
			break;
		case "2": 
			$notification_message = "The payment of ".'$'."55 for flight number 321, seat number 456, has been released by Swapm";
			// $to =  $email;
	  //       $name = ucfirst($userfullName);
	        // $headers .= "From: Swapm <support@Swapm.com> \r\n";
	        // $headers .= "MIME-Version: 1.0\r\n";
	        // $headers .= "Content-Type: text/html; charset=utf-8\r\n";
	        // $headers .= "Reply-To: Swapm <support@Swapm.com>\r\n";
	        // $headers .= "Return-Path: Swapm <support@Swapm.com>\r\n";
	        $message_html .= '<table>';
	        $message_html .= '<tr><td>' . '<b>' . Hello . '&nbsp;' . $name  . '</b>'  . '</td></tr>';
	        $message_html .= '<tr><td>&nbsp;</td></tr>';
	        $message_html .= '<tr><td>'.$notification_message.'</td></tr>';
	        $message_html .= '<tr><td>&nbsp;</td></tr>';
	        $message_html .= '<tr><td>Thanks</td></tr>';
	        $message_html .= '<tr><td>Swapm Support Team</td></tr>';
	        $message_html .= '</table>';
	        $message_html .= '</body></html>';
	        $retval = mail($to,'Release Payment',$message_html,$headers);
	        $emailSent =  "You have sent new notification!!";
	        return $emailSent;
			break;
		default:
		$emailSent =  "You have sent new notification!!";
		return true;
	}
}
//echo send_email('2','sandeep.verma@kindlebit.com','sandeep verma');
die;
define("NOTI_SOUND", "defaultabc");
echo NOTI_SOUND;
define("NOTI_SOUND", "sound123");
echo NOTI_SOUND;
echo $push_notification_sound = NOTI_SOUND;
die;
phpinfo();
echo $a = strtotime("2016-08-17 02:55:00 PM");
echo"<pre>";
echo $b = strtotime("2016-08-31 01:50:00 PM");
echo"<pre>";
echo $secondsPermit_expire = $b - $a;
echo"<pre>";
if($secondsPermit_expire>0){
	echo $getWeek = floor($secondsPermit_expire / 604800);
}else{
	echo"nothing";
}
echo"<pre>";
echo ini_get('post_max_size');
echo ini_get('upload_max_filesize');
if(count($_POST) || isset($_POST['updateD']))
{
	echo $_POST['updateD'];
	var_dump($_POST); die;
}
die;
$SrchBySort = "";
$SrchByPage = "&456&765";
echo $SrchBySortNPageQry = "$SrchBySort$SrchByPage";
date_default_timezone_set('US/Eastern');
echo $date1 = date('Y-m-d H:i:s')."<br>";
date_default_timezone_set('America/Chicago');
echo $date2 = date('Y-m-d H:i:s')."<br>";
date_default_timezone_set('Europe/London');
echo $date2 = date('Y-m-d H:i:s')."<br>";
date_default_timezone_set('America/New_York');
echo $date2 = date('Y-m-d H:i:s')."<br>";
die;
echo $b;
echo"<pre>";
echo $current_date_time = date('Y-m-d h:i A');
echo"<pre>";
echo $curr_time = strtotime($current_date_time);
echo"<pre>";
echo $flight_date = strtotime('2016-08-11 10:28 AM');
echo"<pre>";
if($flight_date<$curr_time){
	echo "flight expirod";
}else{
	echo"flight not expirod";
}
die;
$date1 = date('Y-m-d H:i:s');
$date2 = "2016-08-10 14:15:15";
$seconds = strtotime($date1) - strtotime($date2);
echo $minute = $seconds / 60;
echo "<pre>";
echo $hours = floor($seconds / 3600);
die;
echo $last_login = date('Y/m/d h:i:s a', time());
echo $last_login1 = date('Y/m/d h:i:s a');
die;
echo strtotime("2016-08-11 05:00 AM");
echo "<pre>";
echo strtotime("2016-08-11 05:00 PM");
die;
$stripe_verification_status="unverified";
echo $stripe_verification_status1 = ($stripe_verification_status =='verified' ? 1 : 0);
die;
echo $current_balance = number_format(42500/100,0);
 echo "<pre>";
	$var_1 = 'Boeing 737-800 (winglets) Passenger/BBJ2';
	$var_2 = 'Canadair CRJ700 V3';

	similar_text($var_1, $var_2, $percent);

	echo $percent;
	// 27.272727272727
 echo "<pre>";
	similar_text($var_2, $var_1, $percent);

	echo $percent;
	// 18.181818181818



    echo $string1 = "Boeing 737-800 (winglets) Passenger/BBJ2";
    echo "<pre>";
    $str = trim(preg_replace('/\s*\([^)]*\)/', '', $string1));
    $removeWords = array(
	    "Passenger",
	    "Freighter"
	);
	$str = trim(str_replace($removeWords, "", $str));
	//$str = trim(str_replace($removeWords, "", $str),"  ");
	echo $str . "<br>";
	//echo $str = str_replace("  ", "", $str);
	echo "<br>";
	echo $result = rtrim(substr($str, 0, stripos($str, "/"))," ");

    $string2 = "Boeing 737-800 MCE new";
    $pos = strpos($string, "Boeing 737-800");
    // if ($pos === false) {
    //     print "Not found\n";
    // } else {
    //     print "Found at $pos!\n";
    // }
die;
function badgesCount($receiverId){
	$getNotiCount = 2;
	return $getNotiCount+1;
}
echo badgesCount($receiverId);
echo $server_name = $_SERVER['HTTP_HOST'];
echo $date3 ='2016-07-18 05:00 PM';
echo"<pre>";
$ex = explode('-',$date3);
print_r($ex);
$exp = explode(" ",$ex[2]);
print_r($exp);
echo $flight_date = date("Y-m-d h:i A",strtotime("$date -3 days"));
die;
echo $str = preg_replace('/\\\\/', '', $var);
echo stripslashes("Barry\\\'s Test on 7-7-16");
function input_val($inval)
{
	$inputvalue = trim($inval);
	//$inputvalue =mysql_real_escape_string($inputvalue);
	$inputvalue = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $inputvalue);
	return $inputvalue;
}
echo $old_date_time = date('d-M-Y h:i A');
echo"<pre>";
echo $date_time = date('Y-m-d h:i A', strtotime($old_date_time));
echo"<pre>";
echo $date_time1 = date('Y-m-d h:i A');
die;
$flight_number="123";
$to_seat_info_id="#rt5";
$price = "50";
echo $message = "Your flight number: $flight_number has an offer for your seat id: $to_seat_info_id is: ".'$'."$price";
$str = 'sandeep';
echo substr($str, 0,2);
$flight_date = strtotime(date("Y-m-d h:i A",strtotime('2016-06-25 05:00 PM')));
//$flight_date = strtotime('2016-06-23 05:00 PM');
echo"<pre>";
// $likeDate = strtotime('2016-05-12 12:40:03');
echo date('Y-m-d h:i A');
$todayDate = strtotime(date('Y-m-d h:i A'));
echo $hrs = floor((($todayDate - $flight_date)/(60*60)));
if($hrs>=24){
	echo"greater";
}else{
	echo"less";
}
echo"<pre>";
echo $flight_date = date("Y-m-d h:i A",strtotime('2016-06-23 05:00 PM +24 Hours'));
die;
echo $last_test_date = date('Y-m-d',strtotime('2016-02-15'));
echo "<pre>";
echo $next_test_due_date = date("Y-m-d", strtotime("$last_test_date +5 Month + 1 Day"));
die;
echo "<pre>";
echo $mystring2 = "ä%&^#!()*r Mauricio_abc@123 AndrÃ©s ?? mauricioandrÃ©s4eda I am in Pursuit of GOD'S Purpose!!! CatÃ³lico Ø§Ù„Ø¬Ù‡Ø±Ø§Ø¡";
echo "<pre>";
echo utf8_encode($mystring2);
echo input_val("abc_12@ja CatÃ³lico v#rm$ sandy");
echo input_val("Barry\\\'s Test on 7-7-16");
function input_val1($inval)
{
	$inputvalue = trim($inval);
	//$inputvalue =mysql_real_escape_string($inputvalue);
	$inputvalue = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $inputvalue);
	return $inputvalue;
}
echo "<pre>";
die;
define("WEB_ROOT",'http://' . $_SERVER['HTTP_HOST'] . '/seatswaps/'); WEB_ROOT;
echo "<pre>";
$url = WEB_ROOT."webapp/confirm.php?".email . "=" .$email. "&" .token . "=" . $token; 
 //echo date("Y-m-d", strtotime("2016-01-31 +6 Month"));
//header('Content-Type: text/html; charset=utf-8');
echo $mystring1 = "Hej, detta är min svenska budskap! ä%&^#!()*r Mauricio_abc@123 AndrÃ©s ?? mauricioandrÃ©s4eda I am in Pursuit of GOD'S Purpose!!! CatÃ³lico Ø§Ù„Ø¬Ù‡Ø±Ø§Ø¡";

echo $mystring2 = "ä%&^#!()*r Mauricio_abc@123 AndrÃ©s ?? mauricioandrÃ©s4eda I am in Pursuit of GOD'S Purpose!!! CatÃ³lico Ø§Ù„Ø¬Ù‡Ø±Ø§Ø¡";
$text = "Hoy será un gran día";
echo "<pre>";
iconv('UTF-8', 'ASCII//TRANSLIT', "Thîs îs à vêry wrong séntènce! AndrÃ©s");
echo "<pre>";
echo $string = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $mystring2);
//function to remove the accented characters from the input value
function removeAccentedChar($str){
	$new_str = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $str);
	return $new_str;
}

die;
$somearray['mystring4'] = utf8_encode($mystring1);
$somearray['mystring1'] = $mystring1;
$somearray['mystring3'] = $mystring1;
$somearray['mystring2'] = $mystring2;
$somearray['mystring5'] = utf8_encode($mystring2);
echo $json = json_encode($somearray);
die;
 //  header('Content-Type: text/html; charset=utf-8');
	// echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
  //echo $str = "Hi Mauricio Andrés, I'd like to connect with you on bTru.";
  $text = "Mauricio AndrÃ©s";
  // $str = array_map('utf8_encode', $str);
  // Remove all none utf-8 symbols
echo $text = htmlspecialchars_decode(htmlspecialchars($text, ENT_IGNORE, 'UTF-8'));
// remove non-breaking spaces and other non-standart spaces
echo $text = preg_replace('~\s+~u', ' ', $text);
// replace controls symbols with "?"
echo $text = preg_replace('~\p{C}+~u', '?', $text);
  echo "<pre>";
  echo iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', $str);

  $a= 'Ã©';
  //$a= 'Ã';
   //echo utf8_encode($a);
  $string = "ʿABBĀSĀBĀD";
   echo iconv('UTF-8', 'ISO-8859-1//TRANSLIT//IGNORE', $string);
	echo $current_date = date('Y-m-d h:i:s');
	echo $qry = "update xo_user_subscription set status='1' where subscription_end_date<'$current_date'";

  ?>

  <table border="1" style="width:100%;">
    <tbody>
        <tr align="center">
            <td rowspan="2">
            <b>Registered Users (701) </b> </td>
            <td colspan="3">
            <b> JBT Verified Users (3) </b></td>
        </tr>
        <tr align="center">
            <td> <b>BP Users (3) </b></td>
            <td> <b> HIV Users (2) </b></td>
            <td> <b>Both Users (3) </b></td>
        </tr>
    </tbody>
</table>
<style type="text/css">
#abc { visibility: hidden; }
#abc:after { content:'goodbye'; visibility: visible; }
</style>
<div id="abc">test</div>
<?php


function doLoop() {
    for($i=0;$i<100;$i++) {
        if($i == 50) {
            continue; //It's not 50, skip it
        }
        //Otherwise
        printf("Loop: $i");
    }
}
function doBreak() {
    for($i=0;$i<100;$i++) {
        if($i != 49) {
            continue; //It's not 49 yet, continue
        } //Otherwise, break
        printf("Loop: $i");
        break;
    }
}
//doLoop();
//doBreak();
if (!in_array('Haitianw', array('Native Hawaiian','Bi-Racial' ,'Hispanic','Haitian'))){
	echo 'true';
}else{
	echo 'false';
}
$que_year = "2015";
//Code to display the Races and their count who have given the test 
// this is the races: "'Black or African American','White','Hispanic','Haitian','Asian','Bi-Racial','American Indian','Alaska Native','Native Hawaiian'"
$racesArray = array('Black or African American','White','Hispanic','Haitian','Asian','Bi-Racial','American Indian','Alaska Native','Native Hawaiian');
$raceArrayLen = count($racesArray);
for($i=0;$i<$raceArrayLen;$i++){
	if (in_array($racesArray[$i], array('Native Hawaiian','American Indian','Alaska Native')) && $que_year== "2015"){
		continue;
	}
	else
	{
		if(isset($_REQUEST['Filter'])){
			$selectSrchUserId = "";
			//get the user id who satisfied the search conditions
			$selectSrchUserId = mysql_query("select id from jbt_testeeUsers where select_race = '$racesArray[$i]' $regYear and ((id in ($testeelifeRiskUserId) $testeeUserID) $riskLifeUserID $lifeRiskUserIDs)");
			$countRowsSrch = mysql_num_rows($selectSrchUserId);
			if($countRowsSrch>0){
				$testeeUsrIdRaces = "";
				while($fetchUserIdRace = mysql_fetch_assoc($selectSrchUserId)){
					$testeeUsrIdRaces.= $fetchUserIdRace['id'].',';
				}
				if(!empty($testeeUsrIdRaces)){
					$testeeUsrIdRaces = rtrim($testeeUsrIdRaces,',');
				}else{
					$testeeUsrIdRaces = "NULL";
				}
			}else{
				$testeeUsrIdRaces = "NULL";
			}
			$totalTesteeRecordRaces = "";
			$totalTesteeRecordRaces = mysql_num_rows(mysql_query("select id from test_details where testee_id in ($testeeUsrIdRaces) $dateQryRace group by testee_id"));
			if(empty($totalTesteeRecordRaces)){
				$totalTesteeRecordRaces = 0;
			}
			echo "<div class='race-field'><div class='race-field-head'>".$racesArray[$i]."</div><div class='race-field-val'> " .$totalTesteeRecordRaces. " </div></div>";										
		}else {
			echo "select id from jbt_testeeUsers where select_race = '$racesArray[$i]' $regYear and ((id in ($testeelifeRiskUserId) $testeeUserID) $riskLifeUserID $lifeRiskUserIDs)";
			$selectSrchUserId = mysql_query("select id from jbt_testeeUsers where select_race = '$racesArray[$i]' $regYear and ((id in ($testeelifeRiskUserId) $testeeUserID) $riskLifeUserID $lifeRiskUserIDs)");
			$countRowsSrch = mysql_num_rows($selectSrchUserId);
			if($countRowsSrch>0){
				$testeeUsrIdRaces = "";
				while($fetchUserIdRace = mysql_fetch_assoc($selectSrchUserId)){
					$testeeUsrIdRaces.= $fetchUserIdRace['id'].',';
				}
				if(!empty($testeeUsrIdRaces)){
					$testeeUsrIdRaces = rtrim($testeeUsrIdRaces,',');
				}else{
					$testeeUsrIdRaces = "NULL";
				}
			}else{
				$testeeUsrIdRaces = "NULL";
			}
			$totalTesteeRecordRaces = "";
			$totalTesteeRecordRaces = mysql_num_rows(mysql_query("select id from test_details where testee_id in ($testeeUsrIdRaces) $dateQryRace group by testee_id"));
			if(empty($totalTesteeRecordRaces)){
				$totalTesteeRecordRaces = 0;
			}
			echo "<div class='race-field'><div class='race-field-head'>".$racesArray[$i]."</div><div class='race-field-val'> " .$totalTesteeRecordRaces. " </div></div>";
		}
	}
}
print_r($raceAry);
$abc = '1,2,3,4,6,8,10,11,14,18';
$abcd = '12,14,15,18';
$testeeId = 'or id in($abc)';
$a1 = explode(',',$abc);
$a2 = explode(',',$abcd);
//print_r($aa);
//print_r($bb);
// $a1=array(1,2,3,4);
// $a2=array(2,4,5,1);

$result=array_intersect($a1,$a2);
if($result){
	echo"result: ";
	print_r($result);
	echo $new = implode(',',$result);
}else{
	echo"nothing";
}
$s = 'Yesno(1)';
echo $result = preg_replace("/[^a-zA-Z]+/", "", $s);
?>
<form method="post" action="" id="myform">
    <div id="gridSort">
    <input type="hidden" name="selected_sort" value="<?php echo !empty($_POST['sort']) ? strip_tags($_POST['sort']) : ''; ?>" />
    <input type="hidden" name="selectionList_view" value="<?php echo !empty($_POST['Listview']) ? strip_tags($_POST['Listview']) : ''; ?>" />
   <input  type="hidden" name="selectionGrid_view" value="<?php echo !empty($_POST['Gridview']) ? strip_tags($_POST['Gridview']) : ''; ?>" />
        <span>View Results As:</span> <span>
        <input type="submit" class="listButtons" name="Lisview" value="List"> </span> <span>
        <input  type="submit" class="resultButtons" name="Gridview" value="Grid"></span>
         <select id="sortSelect" class="sortSelect" size="1" name="sort" onchange="this.form.submit();" >
                <option value="2016" selected>Version 2</option>
                <option value="2015">version 1</option>
                <option value="PriceLowToHigh">Price - Low</option>
                <option value="PriceHighToLow">Price - High</option>
        </select> 
    </div>
    
</form>
<form action="" name="version" method="POST">
	<div id="version"  style="float:right;">    
        <span>Report version:</span>
        <span>
			<select name="version" id="versionSelect" class="versionSelect" size="1" onchange="this.form.submit();">
				<option value="2016">2016</option>
				<option value="2015">2015</option>
			</select> 
        </span>
	</div>
</form>

<script type="text/javascript">
document.getElementById('sortSelect').value ="<?php if(! $_POST['sort']):?>"Sort"<?php  else:  echo $_POST['sort']; endif;?>";
</script>
<pre>
<?php 
	//print_r($_POST);
	print_r($_POST['sort']);
 ?>
</pre>

<!DOCTYPE html>
<html>
<body>
<form name="bmi1" id="bmi1" action="" method="post">
	age<input type="text" name="age" id="age" value="">
    height<input type="text" name="height" id="height" value="">
    weight<input type="text" name="weight" id="weight" value="">
    <input type="text" id="total" name="total" value="8">
    <!-- <input type="button" name="calc" id="calc" value="calculate BMI"> -->
    <button id="calc" type="button" style="border: none; background: none; padding: 0;color:blue;"><b>Calculate BMI?</b></button>
    <span id="showBMI" style="display:none"> Your Calculated BMI is: 
    	<span id="bmi"></span>
    </span>
</form>
<!-- Height	Weight	(lbs.)	
4’ 10”	119-142	143-190	191+
4’ 11”	124-147	148-197	198+
if(height =='59'){
	if(weight>=124 && weight<=147){
		weight_status = 1;
	}else if(weight>=148 && weight<=197){
		weight_status = 2;
	}else if(weight>=198){
		weight_status = 3;
	}
}
5’ 0”	128-152	153-203	204+
if(height =='60'){
	if(weight>=128 && weight<=152){
		weight_status = 1;
	}else if(weight>=153 && weight<=203){
		weight_status = 2;
	}else if(weight>=204){
		weight_status = 3;
	}
}
5’ 1”	132-157	158-210	211+
if(height =='61'){
	if(weight>=132 && weight<=157){
		weight_status = 1;
	}else if(weight>=158 && weight<=210){
		weight_status = 2;
	}else if(weight>=211){
		weight_status = 3;
	}
}
5’ 2”	136-163	164-217	218+
if(height =='62'){
	if(weight>=136 && weight<=163){
		weight_status = 1;
	}else if(weight>=164 && weight<=217){
		weight_status = 2;
	}else if(weight>=218){
		weight_status = 3;
	}
}
5’ 3”	141-168	169-224	225+
if(height =='63'){
	if(weight>=141 && weight<=168){
		weight_status = 1;
	}else if(weight>=169 && weight<=224){
		weight_status = 2;
	}else if(weight>=225){
		weight_status = 3;
	}
}
5’ 4”	145-173	174-231	232+
if(height ==64){
	if(weight>=145 && weight<=173){
		weight_status = 1;
	}else if(weight>=174 && weight<=231){
		weight_status = 2;
	}else if(weight>=232){
		weight_status = 3;
	}
}
5’ 5”	150-179	180-239	240+
5’ 6”	155-185	186-246	247+
5’ 7”	159-190	191-254	255+
5’ 8”	164-196	197-261	262+
5’ 9”	169-202	203-269	270+
5’ 10”	174-208	209-277	278+
5’ 11”	179-214	215-285	286+
6’ 0”	184-220	221-293	294+
6’ 1”	189-226	227-301	302+
6’ 2”	194-232	233-310	311+
6’ 3”	200-239	240-318	319+
6’ 4”	205-245	246-327	328+
	1 point	2 points	3 points -->
<!-- if(height =='58'){
		if(w>=119 && w<=142){
			ws = 1;
		}else if(w>=143 && w<=190){
			ws = 2;
		}else if(w>=191){
			ws = 3;
		}
	}
} -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	$("#calc").click(function(){
    	
    	var age = $("#age").val();
    	var height = $("#height").val();
    	var weight = $("#weight").val();
    	if(age!='' && height!='' && weight!=''){
	    	//English Units: BMI = Weight (lb) / (Height (in) x Height (in)) x 703
	    	var bmi = Math.round(weight/(height*height)*703);
	    	//alert(bmi);
	    	$("#showBMI").show();
	    	$("#bmi").html(bmi);
	    	//document.getElementById("bmi").innerHTML=bmi;
	    	//document.getElementById("total").value=bmi;
	    	var weight_status=0;
	    	if(height ==58){
				if(weight>=119 && weight<=142){
					weight_status = 1;
				}else if(weight>=143 && weight<=190){
					weight_status = 2;
				}else if(weight>=191){
					weight_status = 3;
				}
			}else if(height ==59){
				if(weight>=124 && weight<=147){
					weight_status = 1;
				}else if(weight>=148 && weight<=197){
					weight_status = 2;
				}else if(weight>=198){
					weight_status = 3;
				}
			}else if(height ==60){
				if(weight>=128 && weight<=152){
					weight_status = 1;
				}else if(weight>=153 && weight<=203){
					weight_status = 2;
				}else if(weight>=204){
					weight_status = 3;
				}
			}else if(height ==61){
				if(weight>=132 && weight<=157){
					weight_status = 1;
				}else if(weight>=158 && weight<=210){
					weight_status = 2;
				}else if(weight>=211){
					weight_status = 3;
				}
			}else if(height ==62){
				if(weight>=136 && weight<=163){
					weight_status = 1;
				}else if(weight>=164 && weight<=217){
					weight_status = 2;
				}else if(weight>=218){
					weight_status = 3;
				}
			}else if(height ==63){
				if(weight>=141 && weight<=168){
					weight_status = 1;
				}else if(weight>=169 && weight<=224){
					weight_status = 2;
				}else if(weight>=225){
					weight_status = 3;
				}
			}else if(height ==64){
				if(weight>=145 && weight<=173){
					weight_status = 1;
				}else if(weight>=174 && weight<=231){
					weight_status = 2;
				}else if(weight>=232){
					weight_status = 3;
				}
			}else if(height ==65){
				if(weight>=150 && weight<=179){
					weight_status = 1;
				}else if(weight>=180 && weight<=239){
					weight_status = 2;
				}else if(weight>=240){
					weight_status = 3;
				}
			}else if(height ==66){
				if(weight>=155 && weight<=185){
					weight_status = 1;
				}else if(weight>=186 && weight<=246){
					weight_status = 2;
				}else if(weight>=247){
					weight_status = 3;
				}
			}else if(height ==67){
				if(weight>=159 && weight<=190){
					weight_status = 1;
				}else if(weight>=191 && weight<=254){
					weight_status = 2;
				}else if(weight>=255){
					weight_status = 3;
				}
			}else if(height ==68){
				if(weight>=164 && weight<=196){
					weight_status = 1;
				}else if(weight>=197 && weight<=261){
					weight_status = 2;
				}else if(weight>=262){
					weight_status = 3;
				}
			}else if(height ==69){
				if(weight>=169 && weight<=202){
					weight_status = 1;
				}else if(weight>=203 && weight<=269){
					weight_status = 2;
				}else if(weight>=270){
					weight_status = 3;
				}
			}else if(height ==70){
				if(weight>=174 && weight<=208){
					weight_status = 1;
				}else if(weight>=209 && weight<=277){
					weight_status = 2;
				}else if(weight>=278){
					weight_status = 3;
				}
			}else if(height ==71){
				if(weight>=179 && weight<=214){
					weight_status = 1;
				}else if(weight>=215 && weight<=285){
					weight_status = 2;
				}else if(weight>=286){
					weight_status = 3;
				}
			}else if(height ==72){
				if(weight>=184 && weight<=220){
					weight_status = 1;
				}else if(weight>=221 && weight<=293){
					weight_status = 2;
				}else if(weight>=294){
					weight_status = 3;
				}
			}else if(height ==73){
				if(weight>=189 && weight<=226){
					weight_status = 1;
				}else if(weight>=227 && weight<=301){
					weight_status = 2;
				}else if(weight>=302){
					weight_status = 3;
				}
			}else if(height ==74){
				if(weight>=194 && weight<=232){
					weight_status = 1;
				}else if(weight>=233 && weight<=310){
					weight_status = 2;
				}else if(weight>=311){
					weight_status = 3;
				}
			}else if(height ==75){
				if(weight>=200 && weight<=239){
					weight_status = 1;
				}else if(weight>=240 && weight<=318){
					weight_status = 2;
				}else if(weight>=319){
					weight_status = 3;
				}
			}else if(height ==76){
				if(weight>=205 && weight<=245){
					weight_status = 1;
				}else if(weight>=246 && weight<=327){
					weight_status = 2;
				}else if(weight>=328){
					weight_status = 3;
				}
			}
			alert(weight_status);
			var final_score = $("#diabetes_score").val();
			final_score=parseInt(weight_status)+parseInt(final_score);
			alert(final_score);
    	}else{
    		alert('Please fill all age, height and weight');
    	}
    });
</script>


    <title>allwon only numbers in textbox using JavaScript</title>
    <script language="Javascript" type="text/javascript">
 
        function onlyNos(e, t) {
            try {
            	//alert(e);
            	//alert(t);
                if (window.event) {
                    var charCode = window.event.keyCode;
                    //alert(charCode);
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>
        <input type="text" onkeypress="return onlyNos(event,this);" />


<p>Select a new car from the list.</p>

<select id="mySelect" onchange="myFunction()">
  <option value="Audi">Audi
  <option value="BMW">BMW
  <option value="Mercedes">Mercedes
  <option value="Volvo">Volvo
</select>
<!-- English Units: BMI = Weight (lb) / (Height (in) x Height (in)) x 703 -->
<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>

</body>
</html>

Yes
<input class="calc" type="radio" name="radio1" value="10" />
No
<input class="calc" type="radio" name="radio1" value="0" /><br />
Yes
<input class="calc" type="radio" name="radio2" value="Yes(10)" />
No
<input class="calc" type="radio" name="radio2" value="0" /><br />
Yes
<input class="calc" type="radio" name="radio3" value="yes(5)" />
No
<input class="calc" type="radio" name="radio3" value="15" /><br/>
<div id="tolal_score" style="display: none">Total Score: 
	<span id="diab_score"></span>
</div>
Total Score: 
<input type="text" name="sum" id="diabetes_score" value="0"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function calcscore(){
    var score = 0;
    $(".calc:checked").each(function(){
    	var fullstr = $(this).val();
    	var  strVal = fullstr.replace ( /[^\d.]/g, '' ); 
        score+=parseInt(strVal,10);
    });
    $("input[name=sum]").val(score)
    $("#diab_score").html(score);
}
$().ready(function(){
    $(".calc").change(function(){
		$("#tolal_score").show();
        calcscore();
    });
});

</script>


<a href="#" role="button">Link Button</a>
<input type="button" value="Foobar" style="border: none; background: none; padding: 0;" />


<script>
var  str1 = "yes(1)".replace ( /[^\d.]/g, '' ); 
var str2 = "NO(0)".replace ( /[^\d.]/g, '' ); 
var str3= "Yes(2)".replace ( /[^\d.]/g, '' ); 
total = parseInt(str1)+parseInt(str2)+parseInt(str3);
//alert(total); 
</script>

<?php /*
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form id="myForm">
<input type="radio" name="radioName" value="1" /> 1 <br />
<input type="radio" name="radioName" value="2" /> 2 <br />
<input type="radio" name="radioName1" value="3" /> 3 <br />
<input type="radio" name="radioName1" value="4" /> 4 <br />
<input type="text" name="sum" value="" id="sum" /> 

</form>
<script>
$('input[name=radioName]:checked', '#myForm').val()


$('#myForm input').on('change', function() {
   //alert($('input[name=radioName]:checked', '#myForm').val()); 
   var x = $('input[name=radioName]:checked', '#myForm').val(); 
   var y = $('input[name=radioName1]:checked', '#myForm').val(); 
   //alert(x);
   //alert(y);
   if(x!='' && y!=''){
   	var z = x+y;
   }
    $("#sum").val(z);
    //document.getElementById("sum").innerHTML = "You selected: " + z;
});
</script>
 <?php
 $b =0;
 echo $a = 20-21;
 if($a>0){
 	echo 'true';
 }else{
 	echo 'false';
 }
//2	Lifestyle Assessment	USA
//$qryGetSwipedUser = mysql_query("SELECT id,user_id,frnd_id,like_date FROM xo_user_like WHERE user_id = '$login_id' and like_status IN(0,1) and accept_status IN(0,1,2)");
					//$cntnumRow1 = mysql_num_rows($qryGetSwipedUser);
					//if($cntnumRow1>0){
						$countSwipedId = 0;
						$i=0;

						$like_date = array('2016-05-12 11:40:03','2016-05-12 01:40:03','2016-05-12 18:40:03','2016-05-12 23:40:03','2016-05-13 11:40:03','2016-05-12 04:40:03');
						while($i<=7){
							//$like_date = $fetchAllUsrLike1['like_date'];
							$like_dislike_date = strtotime($like_date[$i]);
							$curr_date = strtotime(date('Y-m-d H:i:s'));
							echo $likeDislike_hrs_diff = floor(($curr_date - $like_dislike_date)/(60*60));
							echo"<pre>";
							if($likeDislike_hrs_diff<=50){
								$countSwipedusrId = $countSwipedId++;
							}else{
								$countSwipedusrId = $countSwipedId;
							}
							$i++;
						}
						echo $countSwipedusrId;
						echo $showUser = 20-$countSwipedusrId;
					// }else{
					// 	$countSwipedId = 0;
					// }
 die;
 $likeDate = strtotime('2016-05-12 12:40:03');
 $todayDate = strtotime(date('Y-m-d H:i:s'));
 echo $hrs = floor((($todayDate - $likeDate)/(60*60)));
	echo"<pre>";
 $receiverName = 'sandeep';
 echo $receiverName.": You have new matches!! ";
 function risk_bp_assmnt_count($qid,$option1,$riskBpQuesOptionID,$riskBpQuesOptionsID,$testeeUserIdRskBp,$testeeUserIdRskBpSrch1,$dateQryRiskBp){
 	echo $qid;
 }
 $qid = 45;
 echo '<td>'.risk_bp_assmnt_count($qid,$option1,$riskBpQuesOptionID,$riskBpQuesOptionsID,$testeeUserIdRskBp,$testeeUserIdRskBpSrch1,$dateQryRiskBp).'</td>';
 $question = 'hello how r u?';
 echo '<td> &nbsp;</td>';
 echo '<td style="background:#f7f6f6;border-bottom:none;">'.$question;'</td>';
//2<=3
$arr1 = array(1,2,3,4,6);
$arr2 = array(2,3,4,5);
$diff = array_intersect($arr1, $arr2);
print_r($diff);
$diffArray = array_diff($arr1, $arr2);
print_r($diffArray);
die;
if (in_array(1, array('1','2','3','4'))){
	echo 'true';
}else{
	echo 'false';
}
$a=25;
$ab = 25;
if($a==$ab){
	echo 'Both are equal';
}else if($a<=$ab){
	echo"less or Equal";
}else{
	echo"Not equal";
}
//for loop
for($i=0;$i<=10;$i++){
	echo $i.'<br>';
}
//while loop
$x=1;
while($x<=10){
	echo $x.'<br>';
	$x++;
}
echo'*****************';
//do while loop
$z=5;
do{
	echo $z.'<br>';
	$z++;
}
while($z<14);

"select id from jbt_testeeUsers where select_race = '$raceBlack' and (id in ($testeelifeRiskUserId) $testeeUserID) $riskLifeUserID $lifeRiskUserID"
//select id,first_name,select_race from jbt_testeeUsers where select_race='WHITE' and ((id in(1487) and id in (1487,576,582,578,584)) or id in(NULL) or id in (582))
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="mailto:sandy@gmail.com">Mail Me</a>
</body>
</html>