<?php

function replace_engine($matches)
{
	//ea($matches[0]);
    $Trim = ltrim($matches[0],'{{');
    $Trim = rtrim($Trim,'}}');
    //$Orig = preg_replace('/\[.*?\]/', '', $Trim);

    global  $$Trim; //$$Orig,
    //ea($Trim.':'.$Orig.'<br />:'.$$Trim);
    return $$Trim;
}

function replace_engine_constant($matches)
{
    $Trim = ltrim($matches[0],'{{');
    $Trim = rtrim($Trim,'}}');
    
    global $$Trim;
    return constant($$Trim);
}

function ea($Array)
{
    echo '<pre>';
    print_r($Array);
    echo '</pre>';
}


// validation checking function
function validation($ValidationCode)
{
    if($ValidationCode < 100)
    return null;
	
	$Style1 = 'style="color:#F70724;"';
	$Style2 = 'style="color:green; font-weight:bold;"';
	
	$Colour = $Style1;
	
    switch ($ValidationCode)
    {
        case 100:
        $Message = 'Please fill all the required (*) fields';
        break;
		case 105:
        $Message = 'Please enter an email address';
        break;
		case 106:
        $Message = 'Please enter a password';
        break;
        case 114:
        $Message = 'The username or password you entered is incorrect.';
        break;
        case 115:
        $Message = 'The username you entered does not exists.';
        break;
		case 126:
        $Message = 'The username not exists.';
		break;
		case 127:
        $Message = 'This account is inactive now.';
		break;
		case 128:
        $Message = 'There has some problem occurs during database operations.';
		break;
		case 134:
        $Message = 'Your account is inactive now. Please contact administrator.';
        break;
		case 135:
        $Message = 'Your account is not yet acticated.';
        break;
		case 136:
        $Message = 'The username already exists.';
        break;
		case 137:
        $Message = 'Upload Error: You have exceeded the size limit!';
        break;
		case 138:
        $Message = 'Upload Error: File size should be less than '.(MAX_SIZE/1024).'MB';
        break;
		case 139:
        $Message = 'Upload Error: Unknown extension!';
        break;
		case 140:
        $Message = 'The email address already exists.';
        break;
		case 141: //137:
        $Message = 'Images | &nbsp; Upload Error: You have exceeded the size limit!';
        break;
		case 142: //138:
        $Message = 'Images | &nbsp; Upload Error: File size should be less than '.(MAX_SIZE/1024).'MB';
        break;
		case 143: //139:
        $Message = 'Images | &nbsp; Upload Error: Unknown extension!';
        break;
		
		case 300:
        $Message = 'You are already logged in.';
        break;
		case 301:
        $Message = 'You are unable to perform this action. Please Try again.';
        break;
		case 302:
        $Message = 'Find some problem. Please Try again.';
        break;
		
		case '203':
		$Colour = $Style2;
        $Message = 'Logged in successfully';
        break;
        case 204:
		$Colour = $Style2;
        $Message = 'Log out successfully';
        break;	
		case 205:
		$Colour = $Style2;
        $Message = 'The block has been saved successfully.';
        break;
		case 206:
		$Colour = $Style2;
        $Message = 'The block has been updated successfully.';
        break;
		case 207:
		$Colour = $Style2;
        $Message = 'The block has been deleted successfully.';
        break;
		case 208:
		$Colour = $Style2;
        $Message = 'The page has been saved successfully.';
        break;
		case 209:
		$Colour = $Style2;
        $Message = 'The page has been deleted successfully.';
        break;
		case 210:
		$Colour = $Style2;
        $Message = 'The category has been updated successfully.';
        break;
		case 211:
		$Colour = $Style2;
        $Message = 'The category and talents under the category has been deleted successfully.';
        break;
		case 212:
		$Colour = $Style2;
        $Message = 'The testimonial has been saved successfully.';
        break;
		case 213:
		$Colour = $Style2;
        $Message = 'The testimonial has been updated successfully.';
        break;
		case 214:
		$Colour = $Style2;
        $Message = 'The testimonial has been deleted successfully.';
        break;
		case 215:
		$Colour = $Style2;
        $Message = 'The account details has been updated successfully.';
        break;
		case 216:
		$Colour = $Style2;
        $Message = 'The client details has been saved successfully.';
        break;
		case 217:
		$Colour = $Style2;
        $Message = 'The client details has been updated successfully.';
        break;
		case 218:
		$Colour = $Style2;
        $Message = 'The client details has been deleted successfully.';
        break;
		case 219:
		$Colour = $Style2;
        $Message = 'The album has been saved successfully.';
        break;
		case 220:
		$Colour = $Style2;
        $Message = 'The album has been updated successfully.';
        break;
		case 221:
		$Colour = $Style2;
        $Message = 'The album has been deleted successfully.';
        break;
		case 222:
		$Colour = $Style2;
        $Message = 'The banner has been saved successfully.';
        break;
		case 223:
		$Colour = $Style2;
        $Message = 'The banner settings has been saved successfully.';
        break;
		case 224:
		$Colour = $Style2;
        $Message = 'The banner settings has been reset successfully.';
        break;
		case 225:
		$Colour = $Style2;
        $Message = 'The album images has been updated successfully.';
        break;
		case 226:
		$Colour = $Style2;
        $Message = 'The menu has been saved successfully.';
        break;
		case 227:
		$Colour = $Style2;
        $Message = 'The menu has been updated successfully.';
        break;
		case 228:
		$Colour = $Style2;
        $Message = 'The menu has been deleted successfully.';
        break;
		
		case 225:
		$Colour = $Style2;
        $Message = 'The catalog details has been saved successfully.';
        break;
		case 226:
		$Colour = $Style2;
        $Message = 'The catalog details has been updated successfully.';
        break;
		case 227:
		$Colour = $Style2;
        $Message = 'The catalog details has been deleted successfully.';
        break;
		
		case 228:
		$Colour = $Style2;
        $Message = 'The product details has been saved successfully.';
        break;
		case 229:
		$Colour = $Style2;
        $Message = 'The product details has been updated successfully.';
        break;
		case 230:
		$Colour = $Style2;
        $Message = 'The product details has been deleted successfully.';
        break;
		
		case 231:
		$Colour = $Style2;
        $Message = 'The group details has been saved successfully.';
        break;
		case 232:
		$Colour = $Style2;
        $Message = 'The group details has been updated successfully.';
        break;
		case 233:
		$Colour = $Style2;
        $Message = 'The group details has been deleted successfully.';
        break;
		case 234:
		$Colour = $Style2;
        $Message = 'The settings has been updated successfully.';
        break;
		
		case 235:
		$Colour = $Style2;
        $Message = 'The testimonial category has been saved successfully.';
        break;
		case 236:
		$Colour = $Style2;
        $Message = 'The testimonial category has been updated successfully.';
        break;
		case 237:
		$Colour = $Style2;
        $Message = 'The testimonial category has been deleted successfully.';
        break;
		
		case 238:
		$Colour = $Style2;
        $Message = 'The news has been saved successfully.';
        break;
		case 239:
		$Colour = $Style2;
        $Message = 'The news has been updated successfully.';
        break;
		case 240:
		$Colour = $Style2;
        $Message = 'The news has been deleted successfully.';
        break;
		
		case 241:
		$Colour = $Style2;
        $Message = 'The sidebar navigation has been saved successfully.';
        break;
		case 242:
		$Colour = $Style2;
        $Message = 'The sidebar navigation has been updated successfully.';
        break;
		case 243:
		$Colour = $Style2;
        $Message = 'The sidebar navigation has been deleted successfully.';
        break;
				
		case 244:
		$Colour = $Style2;
        $Message = 'The product has been saved successfully.';
        break;
		case 245:
		$Colour = $Style2;
        $Message = 'The product has been updated successfully.';
        break;
		case 246:
		$Colour = $Style2;
        $Message = 'The product has been deleted successfully.';
        break;
		
		case 247:
		$Colour = $Style2;
        $Message = 'The product category has been saved successfully.';
        break;
		case 248:
		$Colour = $Style2;
        $Message = 'The product category has been updated successfully.';
        break;
		case 249:
		$Colour = $Style2;
        $Message = 'The product category has been deleted successfully.';
        break;
		
		case 250:
		$Colour = $Style2;
        $Message = 'The menu positions has been saved successfully.';
        break;
		
		case 251:
		$Colour = $Style2;
        $Message = 'The languages has been saved successfully.';
        break;
		
		case 252:
		$Colour = $Style2;
        $Message = 'The footer heading has been saved successfully.';
        break;
		case 253:
		$Colour = $Style2;
        $Message = 'The footer heading has been updated successfully.';
        break;
		case 254:
		$Colour = $Style2;
        $Message = 'The footer heading has been deleted successfully.';
        break;
		
		case 255:
		$Colour = $Style2;
        $Message = 'The shortcuts has been saved successfully.';
        break;
		case 256:
		$Colour = $Style2;
        $Message = 'The shortcuts has been updated successfully.';
        break;
		case 257:
		$Colour = $Style2;
        $Message = 'The shortcuts has been deleted successfully.';
        break;
		
		case 258:
		$Colour = $Style2;
        $Message = 'The shortcut category has been saved successfully.';
        break;
		case 259:
		$Colour = $Style2;
        $Message = 'The shortcut category has been updated successfully.';
        break;
		case 260:
		$Colour = $Style2;
        $Message = 'The shortcut category has been deleted successfully.';
        break;
		
		case 261:
		$Colour = $Style2;
        $Message = 'The booking details has been updated successfully.';
        break;
		case 262:
		$Colour = $Style2;
        $Message = 'The booking status has been updated successfully.';
        break;
		
		case 231:
		$Colour = $Style2;
        $Message = 'The page has been deleted successfully.';
        break;
		
		case 319:
		$Colour = $Style2;
        $Message = 'The PayPal settings has been saved successfully.';
        break;
		
        default:
        $Message = 'Wrong error code!!!';
        break;
    }
	
    $ReturnValue = $Message;
    return $ReturnValue;
}


function recursiveErrorDisplay($error_code, $error_numbers)
{
	$Return = '';
	$e_array  = explode('-', $error_numbers);
	
	$Return = '<div id="validation_message">';
	if (count($e_array) > 0)
	{
		foreach ($e_array as $err_k=>$error_number)
		{
		if (empty($error_number) || $error_number == '-')
		continue;
		
		$Return .= fnErrorCodes($error_code, $error_number);
		}
	}
	$Return .= '</div>';
	
	return $Return;
}

function fnErrorCodes($error_code, $error_number)
{
	switch ($error_code)
	{
	case 's':
	$Return = '
			  <!--  start success-message -->
			  <div class="row">
			  <div class="col-lg-12">
			  <div class="hpanel horange">
			  <div classs="panel-body">
				
			  <div class="alert alert-success">
			 	 <p class="text-default"><span class="label h-bg-green"><i class="fa fa-check"></i></span> '.validation($error_number).'</p>
			  </div>
			  
			  </div>
			  </div>
			  </div>
			  </div>
			  <!--  end success-message-->
			  ';
	break;
	
	case 'e':
	$Return = '
			  <!--  start error-message -->
			  <div class="row">
			  <div class="col-lg-12">
			  <div class="hpanel horange">
			  <div classs="panel-body">
			  
			  <div class="alert alert-danger">
			 	 <p class="text-danger"><span class="label h-bg-red"><i class="fa fa-warning"></i></span> '.validation($error_number).'</p>
			  </div>
			  
			  </div>
			  </div>
			  </div>
			  </div>
			  <!--  end error-message-->
			  ';
	break;
	
	case 'i': # info
	$Return = '
			  <!--  start info-message -->
			  <div class="msg msg-error" align="left">
			 	 <p><strong>'.validation($error_number).'</strong></p>
			  </div>
			  <!--  end info-message-->
			  ';
	break;
	
	case 'w': # warning
	$Return = '
			  <!--  start warning-message -->
			  <div class="msg msg-error" align="left">
			 	 <p><strong>'.validation($error_number).'</strong></p>
			  </div>
			  <!--  end warning-message-->
			  ';
	break;
	
	case 'ls': // Login	Success
	$Return = '
			  <!--  start success-message -->
			  <div class="msg msg-ok" align="left">
			 	 <p><strong>'.validation($error_number).'</strong></p>
			  </div>
			  <!--  end success-message-->
			  ';
	break;
	
	case 'le': // Login	Error
	$Return = '
			  <!--  start success-message -->
			  <div class="msg msg-error" align="left">
			 	 <p><strong>'.validation($error_number).'</strong></p>
			  </div>
			  <!--  end success-message-->
			  ';
	break;	
	}
	
	return $Return;
}

# select box
function buildOptions($options, $selectedOption)
{
	$Return = '';
	
	if (count ($options) > 0)
	{
	foreach ($options as $value => $text)
	{
		if ($value == $selectedOption)
		{
			$Return .= '<option value="'.$value.'" selected="selected">'.stripslashes($text).'</option>';
		}
		else
		{
			$Return .= '<option value="'.$value.'">'.stripslashes($text).'</option>';
		}
	}
	}
	
	return $Return;
}

# multiple select box
function buildOptionsMultiple($options, $selectedOption)
{
	$Return = '';
	
	if (count ($options) > 0)
	{
	foreach ($options as $value => $text)
	{
		if (in_array($value, $selectedOption))
		{
			$Return .= '<option value="'.$value.'" selected="selected">'.stripslashes($text).'</option>';
		}
		else
		{
			$Return .= '<option value="'.$value.'">'.stripslashes($text).'</option>';
		}
	}
	}
	
	return $Return;
}

# select box
function buildOptionsGroup($options, $selectedOption)
{
	$Return = '';
	
	if (count ($options) > 0)
	{
	foreach ($options as $optgroup => $options_array)
	{
		$Return .= '<optgroup label="'.$optgroup.'">';
		foreach ($options_array as $value => $text)
		{
			if ($value == $selectedOption)
			{
				$Return .= '<option value="'.$value.'" selected="selected">'.stripslashes($text).'</option>';
			}
			else
			{
				$Return .= '<option value="'.$value.'">'.stripslashes($text).'</option>';
			}
		}
		$Return .= '</optgroup>';
	}
	}
	
	return $Return;
}

# Radio
function buildRadioOptions($options, $selectedOption, $rdName, $ExtraParamArray)
{
	$Return = '';
	
    if (count($ExtraParamArray) > 0)
    {    
    $Left  = empty($ExtraParamArray['left']) ? '' : $ExtraParamArray['left'];
    $Right = empty($ExtraParamArray['right']) ? '' : $ExtraParamArray['right'];
    $Extra_param = empty($ExtraParamArray['extra_param']) ? '' : $ExtraParamArray['extra_param'];
    }
    
    foreach ($options as $value => $text)
    {
        if ($value == $selectedOption)
        {
        $Return .= $Left.'<span><input name="'.$rdName.'" type="radio" id="'.$rdName.'" value="'.$value.'" checked '.$Extra_param.'> '.$text.'</span>'.$Right;
        }
		else
		{
        $Return .= $Left.'<span><input name="'.$rdName.'" id="'.$rdName.'" type="radio" value="'.$value.'" '.$Extra_param.'/> '.$text.'</span>'.$Right;
        }
    }
	
    return $Return;
}


// validation checking function
function websiteValidation($ValidationCode)
{
    if($ValidationCode < 100)
    return null;
	
	$Style1 = 'style="color:#F70724;"';
	$Style2 = 'style="color:green; font-weight:bold;"';
	
	$Colour = $Style1;
	
    switch ($ValidationCode)
    {
        case 100:
        $Message = 'Please fill all the required (*) fields';
        break;
		case 105:
        $Message = 'Please enter an email address';
        break;
		case 106:
        $Message = 'Please enter a password';
        break;
        case 114:
        $Message = 'The username or password you entered is incorrect.';
        break;
        case 115:
        $Message = 'The username you entered does not exists.';
        break;
		case 122:
        $Message = 'Email address not exists.';
        break; 
		case 124: 
        $Message = 'Your account is not yet activated.
		    <br />Please check your mail for the activation link.';
        break;
		case 134:
        $Message = 'Your account is inactive now. Please contact administrator.';
        break;
		case 135:
        $Message = 'Your account is not yet acticated.';
        break;
		case 136:
        $Message = 'The username already exists.';
        break;
		case 137:
        $Message = 'Upload Error: You have exceeded the size limit!';
        break;
		case 138:
        $Message = 'Upload Error: File size should be less than '.(MAX_SIZE/1024).'MB';
        break;
		case 139:
        $Message = 'Upload Error: Unknown extension!';
        break;
		case 140:
        $Message = 'The email address already exists.';
        break;
		case 141: //137:
        $Message = 'Images | &nbsp; Upload Error: You have exceeded the size limit!';
        break;
		case 142: //138:
        $Message = 'Images | &nbsp; Upload Error: File size should be less than '.(MAX_SIZE/1024).'MB';
        break;
		case 143: //139:
        $Message = 'Images | &nbsp; Upload Error: Unknown extension!';
        break;
		case 144:
        $Message = 'The password is empty.';
        break;
		case 145:
        $Message = 'The password mismatch found.';
        break;
		
		case 146:
        $Message = 'Booking date Conflict!!! Either start or end date has already booked.';
        break;
		
		case 300:
        $Message = 'You are already logged in.';
        break;
		case 301:
        $Message = 'You are unable to perform this action. Please Try again.';
        break;
		case 302:
        $Message = 'Find some problem. Please Try again.';
        break;
		case 303:
        $Message = 'Please login to continue booking.';
        break;
        case 304:
		$Colour = $Style2;
        $Message = 'The payment has cancelled.';
        break;
        
		case 203:
		$Colour = $Style2;
        $Message = 'Logged in successfully';
        break;
        case 204:
		$Colour = $Style2;
        $Message = 'Log out successfully';
        break;
		case 205:
		$Colour = $Style2;
        $Message = 'The registration has been successfully completed.'; // customer
        break;
		case 206:
		$Colour = $Style2;
        $Message = 'The account details has been updated successfully.'; // customer
        break;
		case 207:
		$Colour = $Style2;
        $Message = 'The account has been deleted successfully.'; // customer
        break;
		case 208:
		$Colour = $Style2;
        $Message = 'Your account has been created successfully. Please continue booking.'; // customer
        break;
        case 209:
		$Colour = $Style2;
        $Message = 'Logged in successfully. Please continue booking.';
        break;
        
        case 210:
		$Colour = $Style2;
        $Message = 'The payment transaction has been completed and Booking is confirmed.';
        break;

        case 211:
		$Colour = $Style2;
        $Message = 'The post has been stored successfully.';
        break;
        case 212:
		$Colour = $Style2;
        $Message = 'The post has been updated successfully.';
        break;
        
        default:
        $Message = 'Wrong error code!!!';
        break;
    }
	
    $ReturnValue = $Message;
    return $ReturnValue;
}


function websiteRecursiveErrorDisplay($error_code, $error_numbers, $validation_function = 'validation')
{
	if (!function_exists($validation_function)) 
	{
		$validation_function = 'websiteValidation';
	} 
	
	$Return = '';
	$e_array  = explode('-', $error_numbers);
	
	$Return = '<div id="validation_message">';
	if (count($e_array) > 0)
	{
		foreach ($e_array as $err_k=>$error_number)
		{
		if (empty($error_number) || $error_number == '-')
		continue;
		
		$Return .= fnWebsiteErrorCodes($error_code, $error_number, $validation_function);
		}
	}
	$Return .= '</div>';
	
	return $Return;
}

function fnWebsiteErrorCodes($error_code, $error_number, $validation_function = 'websiteValidation')
{
	switch ($error_code)
	{
	case 's':
	$Return = '
			  <!--  start success-message -->
			  <div class="alert alert-success" role="alert">'.$validation_function($error_number).'</div>
			  <!--  end success-message-->
			  ';
	break;
	
	case 'e':
	$Return = '
			  <!--  start error-message -->
			  <div class="alert alert-danger" role="alert">'.$validation_function($error_number).'</div>
			  <!--  end error-message-->
			  ';
	break;
	
	case 'i':
	$Return = '
			  <!--  start info-message -->
			  <div class="alert alert-info" role="alert">'.$validation_function($error_number).'</div>
			  <!--  end info-message-->
			  ';
	break;
	
	case 'w':
	$Return = '
			  <!--  start warning-message -->
			  <div class="alert alert-warning" role="alert">'.$validation_function($error_number).'</div>
			  <!--  end warning-message-->
			  ';
	break;
	
	case 'ls': // Login	Success
	$Return = '
			  <!--  start success-message -->
			  <p class="success">'.$validation_function($error_number).'</p>
			  <!--  end success-message-->
			  ';
	break;
	
	case 'le': // Login	Error
	$Return = '
			  <!--  start success-message -->
			  <p class="error">'.$validation_function($error_number).'</p>
			  <!--  end success-message-->
			  ';
	break;	
	}
	
	return $Return;
}

// session destroy
function webLogoutUser()
{
    $SessionCheck = @webSessionAuthenticationCheck();
	if(!empty($SessionCheck))
	{
		$ReturnValue = 301; // You are not logged in
	}
	else
	{
		forcedLogoutUser();
		$ReturnValue = 204; // Logged out successfully
	}
	
	return $ReturnValue;
}

function forcedLogoutUser()
{
	//ea($_SESSION);die();
	session_unset();
	session_destroy();
}

//login user session checks
function webSessionAuthenticationCheck($UserType)
{
	if(!empty($UserType))
	{
		if(!isset($_SESSION['USERID']) || $_SESSION['USERTYPE'] != $UserType)
		{
		forcedLogoutUser();
		$ReturnValue = 301; //301; // You are not loged in
		}
		else
		$ReturnValue = 0; //300; // You are already loged in		
	}
	else
	{
		if(!isset($_SESSION['USERID']))
		$ReturnValue = 301; //301; // You are not loged in
		else
		$ReturnValue = 0; //300; // You are already loged in
	}
	/*
	if (isset($_SESSION['USERID']))
	{
		$databaseUserStabilityCheck = webDatabaseUserStabilityCheck();
		if ($databaseUserStabilityCheck)
		{
			forcedLogoutUser();
			$ReturnValue = 301; //301; // You are not loged in
		}
	}
	*/
	return $ReturnValue;
}

function webActivateLoginSessions($loginSessionArray)
{
	 if(count($loginSessionArray) > 0)
	 {
		 foreach ($loginSessionArray as $session_name=>$session_value)
		 {
		 $_SESSION[$session_name] = $session_value;
		 }
	 }
}

// find the session exists or not
function webLoginUser($Username, $Password, $Tablename, $UserType)
{
	global $mysqli;
	
    $_SESSION['SUPER_ADMIN'] = 0;
    $SessionCheck = webSessionAuthenticationCheck('');
	$UserType 	  = empty($UserType) ? '' : " AND type = '$UserType'";
	
    //echo "$SessionCheck";
    if(empty($SessionCheck))
    {
    	$ReturnValue = 300;  // You are already logged in
    }
	else if(empty($Username))
	{
		$ReturnValue = 105; // Please enter a username
	}
	else if(empty($Password))
	{
		$ReturnValue = 106; // Please enter a password
	}
	else
	{
		$query  = "SELECT * FROM ".PR_DATABASE.".$Tablename WHERE (email_address = '$Username') $UserType"; #
		$result = mysqli_query($mysqli, $query);
		$row    = mysqli_fetch_assoc($result);
		
		if (mysqli_num_rows($result) == 0) 
		{
			$ReturnValue = 10; // There is no user exists for this User Type.
		}
		else if (md5($Password) == $row['password'] && $Username == $row['email_address'])
		{
			$user_id                = $row['id']; 
			/*
			//$username               = $row['username'];
			$_SESSION['USERID']     = $user_id;
			//$_SESSION['USERNAME']   = $username;
			$_SESSION['FULLNAME']   = $row['fname'].' '.$row['lname'];
			$_SESSION['USER_EMAIL'] = $row['email_address'];
			*/
			
			$loginSessionArray = array('USERID'	    => $user_id,
									   'FULLNAME'   => $row['fname'].' '.$row['lname'],
									   'USER_EMAIL' => $row['email_address']
									  );
			webActivateLoginSessions($loginSessionArray);
			
			$ReturnValue 			= 40; // Logged in successfully
		}
		else
		{
			$ReturnValue = 50; // The username or password you entered is incorrect
		}
	}
	
    return $ReturnValue;
}

?>