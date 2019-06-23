

<?php 
#من تنشر ملف عوف 
# لحقوق حبي 
# هدووء

##  ch:- @olwcx11  # Dev:- @dev_a  ##
ob_start();
$dev_i = '844063091:AAG53sbiJJ4OhGEKk8snvo257mdZEP4sAOM'; 
define('API_KEY',$dev_i);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);       
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$olwcx11 = $message->chat->id;
$text = $message->text; 
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$Ailnoor = '@olwcx11'; // معرف قناتك

##  ch:- @olwcx11  # Dev:- @dev_a  ##
if($text == "/start"){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$Ailnoor&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$olwcx11,
'text'=>"• عـذراََ ! 🤚🏿

• يجب عليك الاشتراك في قناة اولا➕
• لـ استخدام البوت 🃏

• القناة 🥤:- $Ailnoor
",
]);return false;}}

if ($text == "/start"){
	bot('sendmessage',[
	'chat_id'=>$olwcx11,
	'text'=>"• مرحبا بك في بوت 🙎🏻‍♂️
• فـك الحظر 🗑

• يقوم هذه بـ ارسال عدد من الرسائل التي تقوم ب اخيتارها   🌙 

• بدون حاجه الى ذهاب والطلب من الاشخاص 📻

• جديدنا 🎟:- @olwcx11",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"١٠ :- رسائل 📨"]],
[['text'=>"٥٠ :- رسالة 📩"],['text'=>"٢٥ :- رسالة 📩"]],]])]);}

##  ch:- @olwcx11  # Dev:- @dev_a  ##

 #ال 10 رسائل
if($text == "١٠ :- رسائل 📨"){
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>"تـم ارسـال [ ١٠ ] رسائل 📨",
]);
}
##  ch:- @olwcx11  # Dev:- @dev_a  ##
# ال 25 رساله
if($text == "٢٥ :- رسالة 📩"){
   bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>"تـم ارسـال [ ٢٥ ] رسالة 📨",
]);}
##  ch:- @olwcx11  # Dev:- @dev_a  ##
#الخمسين رساله
if($text == "٥٠ :- رسالة 📩"){
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
 bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
  bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>".",
]);
bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>"تـم ارسـال [ ٥٠ ] رسالة 📨",
]);}
$dev_a = 612393384;
$u = explode("\n",file_get_contents("data/b.txt"));
$c = count($u)-1;
if ($update && !in_array($olwcx11, $u)) {
    file_put_contents("data/b.txt", $chat_id."\n",FILE_APPEND);
  }
  ##  ch:- @olwcx11  # Dev:- @dev_a  ##
  if ($text == 'الاعضاء' and $olwcx11 == $dev_a) {
bot('sendMessage',[
'chat_id'=>$olwcx11,
'text'=>"مستخدمين البوت 🤖 الخاص بك :- $c"]);}
if($text == "الاوامر" and $olwcx11 == $dev_a){
    bot('sendMessage',[
    'chat_id'=>$olwcx11,
    'text'=>"اخـتر ما تريـد الان 💡",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"عدد الاعضـاء 🙎🏻‍♂️",'callback_data'=>"count"]],
            [['text'=>"اذاعـة 🥤",'callback_data'=>"send_all"]],
        ] ])]);}
if($data == "count" and $chat_id2 == $dev_a){
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عدد مشتركين البوت📬 : $c",
        'show_alert'=>true,
]);}
##  ch:- @olwcx11  # Dev:- @dev_a  ##
$mode = file_get_contents("data/a.txt");
if($data == "send_all" and $chat_id2 == $dev_a){
    file_put_contents("data/a.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك",   'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"الغاء🚫",'callback_data'=>"off"]],]])]);}
if($text and $mode == "yas" and $olwcx11 == $dev_a){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text", ]);}} 
if($data == "off"){
    file_put_contents("data/a.txt","no");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"تم الالغاء",]);
}
##  ch:- @olwcx11  # Dev:- @dev_a  ##
