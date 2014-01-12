<?php
function redirect_to( $location = NULL ) {
  if ($location != NULL){
    header("Location: {$location}");
    exit;
  }
}

function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}


function check_phone ($phone ="")
	{
		
		$motif ='`^0[1-68][0-9]{8}$`'; 
			if(!preg_match($motif,$phone) && strlen($phone) != 10) 
			{ 
			return false; 
			} 
			else 
			{ 
			return true;
			}  
	}
	
function controller_exists($class_name) {
  $class_name = strtolower($class_name);
  $path = "Controller/{$class_name}.php";
  if(file_exists($path)) 
  {
    return true;
  }
  else 
  {
		return false;
  }
}

function controller__autoload($controller_name = '')
	{
		$controller = strtolower($controller_name);
		include "Controller/{$controller_name}.php";

	}
function check_fields (){
	global $errors;
	$arguments = func_get_args();
	foreach ($arguments as $argument ){
		if(!isset($_POST[$argument]) or empty($_POST[$argument]))
		{
			$errors[] = $argument;
		}
	}
}
function hash_password ($pswd)
{
	return sha1($pswd);
}

function does_email_exist($email = "") {
		$result = mysql_query ( "SELECT * FROM users WHERE email = '{$email}'" );
		$num_rows = mysql_num_rows($result);
		if ( $num_rows == 0)
		{
			return true;
		}else
		{
			return false;
		}
  }

 function test_valid_gmail($email = "")
	{
		$atom   = '[-a-z0-9!#$%&\'*+\\/=?^_`{|}~]';   // caractères autorisés avant l'arobase
        $domain = '([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // caractères autorisés après l'arobase (nom de domaine)
        $regex = '/^' . $atom . '+' .'(\.' . $atom . '+)*' .'@' .'(gmail{1,63}\.)+com{2,63}$/i';          
     if (preg_match($regex, $email)) {
         
          	return true;
         }
        else {
		    return false;
		}
	}
function include_layout_template($template="") {
	include('includes'.DS.'layouts'.DS.$template);
}

function datetime_to_text($datetime="") {
  $unixdatetime = strtotime($datetime);
  return strftime("%d.%m.%Y", $unixdatetime);
}
function get_day_from_date($datetime="")
{
	$unixdatetime = strtotime($datetime);
  return strftime("%d", $unixdatetime);
}
function this_date_minus_1_day($datetime="")
{
	$unixdatetime = strtotime($datetime);
    $day   = strftime("%d", $unixdatetime);
    $day2   = $day-1; 
	$month = get_month_from_date($datetime);
	$year  = get_year_from_date($datetime);
	return $year.'-'.$month.'-'.$day2;
}

function this_date_plus_days($datetime="",$nbr=0)
{
	$unixdatetime = strtotime($datetime);
    $day   =get_day_from_date($datetime);
	$month = get_month_from_date($datetime);
	$year  = get_year_from_date($datetime);

	if($nbr > 0)
		{  $days = $day + $nbr;
		   if($days > 31)
		   	{
		   		$day_final = 40 - 31;
		   		$m_final   = $month + 1;
		   		if($m_final > 12)
		   			{
		   				$m_final = $m_final - 12;
		   				$year_final = $year + 1; 
		   			}
		   		else { $year_final = $year ; }
		   	}
		   	else
		   	{
		   		$day_final = $days;	
		   	}
		}

	if($nbr < 0)
		{  $days = $day + $nbr;
		   if($days < 0)
		   	{
		   		$day_final = -1 * $days;
		   		$m_final   = $month - 1;
		   		if($m_final < 1)
		   			{
		   				$m_final = -1 * ($m_final);
		   				$year_final = $year - 1; 
		   			}
		   		else { $year_final = $year ; }
		   	}
		   	else
		   	{
		   		$day_final = $days;
		   		$m_final = ($month);
		   		$year_final = $year;
		   	}
		}
	
	return $year_final.'-'.$m_final.'-'.$day_final;
}

function this_date_plus_months($datetime="",$month="00")
{
	$unixdatetime = strtotime($datetime);
	$day    = strftime("%d", $unixdatetime);
    $mois   = strftime("%m", $unixdatetime);
    $year   = strftime("%Y", $unixdatetime);
    $somme = $mois + $month;
    if( $somme > 12)
    {
    	$month = $somme - 12;
    	$year = $year +1;
    	
    }
    else
    {
    	$month = $somme;
    	
    }
    
	return $year.'-'.$month.'-'.$day;
}
function get_month_from_date($datetime="")
{
	$unixdatetime = strtotime($datetime);
  return strftime("%m", $unixdatetime);
}
function get_year_from_date($datetime="")
{
	$unixdatetime = strtotime($datetime);
  return strftime("%Y", $unixdatetime);
}
function generate_random_string($length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
	$str ='';
	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}


function countryCityFromIP($ipAddr)
{
ip2long($ipAddr)== -1 || ip2long($ipAddr) === false ? trigger_error("Invalid IP", E_USER_ERROR) : "";
$ipDetail=array();
$xml = file_get_contents("http://api.hostip.info/?ip=".$ipAddr);

preg_match("@<Hostip>(\s)*<gml:name>(.*?)</gml:name>@si",$xml,$match);

$ipDetail['city']=$match[2]; 

preg_match("@<countryName>(.*?)</countryName>@si",$xml,$matches);

$ipDetail['country']=$matches[1];

preg_match("@<countryAbbrev>(.*?)</countryAbbrev>@si",$xml,$cc_match);
$ipDetail['country_code']=$cc_match[1]; 
return $ipDetail;

}


?>