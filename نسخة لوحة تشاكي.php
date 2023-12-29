<?php
ob_start();
$API_KEY = "6817395973:AAH99oe-6V4YC3mo3fTamCjUibzshoqlAGw"; 
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$ARMOF = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ARMOF";
$marcus8 = file_get_contents($url); 
return json_decode($marcus8);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$name = $message->from->first_name;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $update->message->from->id;
$from_id2 = $update->callback_query->from->id;
$username = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$name2 = $update->callback_query->from->first_name;
$message_id2 =  $update->callback_query->message->message_id;
$taz = 6730428261;
$admins = explode("\n",file_get_contents("admis.txt"));
$type = $message->chat->type;
$mem = file_get_contents("members.txt");
$exmem = explode("\n",$mem);
$co_mem = count($exmem)-1;
$start = file_get_contents("start.txt");
$snd = file_get_contents("snd.txt");
$ch = file_get_contents("ch.txt");
$chh = file_get_contents("chh.txt");
$onof = file_get_contents("onof.txt");
$start = file_get_contents("start.txt");


if($type=="private"){
if(!in_array($from_id,$exmem)){
file_put_contents('members.txt',"$from_id\n",FILE_APPEND);
}
}

if($text == "/start" and $from_id == $taz){
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "
قائمة الادمن 🔽
يمكنك التعديل واضافه ردود واضافه قنوات اشتراك اجباري بكل سهوله
⎯ ⎯ ⎯ ⎯
",
'reply_to_message_id' =>$message->message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "الاحصائيات📈",'callback_data' =>'count']],
[['text' => "تغير الstart📮",'callback_data' => 'start'],['text'=> "ققنوات الاشتراك📊",'callback_data'=>"chanel"]],
[['text' => "الاشعاراتℹ️",'callback_data' => 'onof'],['text' => "الادمنية👨‍💼",'callnack_data' => 'admins']],
[['text' => "اذاعه📨",'callback_data' =>'sendmessage']],
]])]);}

if($data == "count" and $from_id2 == $taz){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
عدد اعضاء بوتك '.$co_mem.'
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);}


if($data == "start" and $from_id2 == $taz){
 file_put_contents("snd.txt","start");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- قم بارسال رسالة الستارت الجديده 
#علما انه يمكنك استخدام الدوال التاليه
الاسم : لطبع الاسم
المعرف : لطبع المعرف
الايدي : لطبع الايدي
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);}

if($text != "/start" and !$data and $snd == "start" and $from_id == $taz){
   file_put_contents("start.txt",$text);
$text = str_replace('الاسم',$name,$text);
$text = str_replace('المعرف',$username,$text);
$text = str_replace('الايدي',$from_id,$text);
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "
- تم حفظ كليشة الستارت الكليشه
$text 
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);unlink("snd.txt");}

if($data == "chanel" and $from_id2 == $taz){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
اهلا عزيزي لاضافة قناتك اضغط على الزر بالاسفل
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "اضافه قناه",'callback_data' =>'add']],
[['text' => "عرض القنوات",'callback_data' =>'view']],
[['text' => "حذف القنوات",'callback_data' =>'del']],
[['text' => "back",'callback_data' =>'back']],
]])]);unlink("snd.txt");}

if($data == "add" and $from_id2 == $taz){
  file_put_contents("snd.txt","ch1");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- قم بارسال معرف قناتك دون @
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);}

if($text != "/start" and !$data and $snd == "ch1" and $from_id == $taz){
 file_put_contents("ch.txt",$text);
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "
- تم حفظ قناتك قناتك $text
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "اضافة قناه اخرى",'callback_data' =>'add1']],
[['text' => "back",'callback_data' =>'back']],
]])]);unlink("snd.txt");}

if($data == "add1" and $from_id2 == $taz){
  file_put_contents("snd.txt","ch2");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- قم بارسال معرف قناتك دون @
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);}

if($text != "/start" and !$data and $snd == "ch2" and $from_id == $taz){
 file_put_contents("chh.txt",$text);
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "
- تم حفظ قناتك قناتك $text
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "عرض القنوات",'callback_data' =>'view']],
[['text' => "back",'callback_data' =>'back']],
]])]);unlink("snd.txt");}


if($data == "view" and $from_id2 == $taz){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- قنوات الاشتراك الاجباري عزيزي المدير
قناه واحد : - @$ch
قناه اثنين : - @$chh
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);}

if($data == "del" and $from_id2 == $taz){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- تم حذف قنوات الاشتراك
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);
unlink("ch.txt");
unlink("chh.txt");
}


if($data == "onof" and $onof == null and $from_id2 == $taz){
	file_put_contents("onof","on");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- تم تفعيل اشعارات الدخول عزيزي المدير
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);}

if($data == "onof" and $onof != null and $from_id2 == $taz){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- تم الغاء تفعيل اشعارات الدخول
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);unlink("onof.txt");}


if($data == "admins" and $from_id2 == $taz){
	file_put_contents("snd.txt","admin");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- قم بارسال ايدي الادمن ملاحظه يستطيع الادمن فقط مشاهدة الاحصائيات
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);}

if($text != "/start" and !$data and $snd == "admins" and $from_id == $taz){
     file_put_contents("admins.txt","$text\n",FILE_APPEND);
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "
- تم رفع الادمن بنجاح
",

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);unlink("snd.txt");}


if($data == "sendmessage" and $from_id2 == $taz){
	file_put_contents("snd.txt","send");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
- قم بارسال رسالتك ملاحظه تدعم التوجيه
",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);}

if($text != "/start" and !$data and $snd == "send" and $from_id == $taz){
  for($i=0;$i<$co_mem;$i++){
bot('sendmessage',[
'chat_id' =>$co_mem[$i],
'text' => $text,
]);
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => " 
تم نشر اذاعتك بنجاح عدد مشتركين بوتك $co_mem
",
'reply_to_message_id' =>$message->message_id, 

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "back",'callback_data' =>'back']],
]])]);unlink("snd.txt");}



if($data == "back" and $from_id2 == $taz){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' => "
قائمة الادمن 🔽
يمكنك التعديل واضافه ردود واضافه قنوات اشتراك اجباري بكل سهوله
⎯ ⎯ ⎯ ⎯
",
'reply_to_message_id' =>$message->message_id, 

"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text' => "الاحصائيات📈",'callback_data' =>'count']],
[['text' => "تغير الstart📮",'callback_data' => 'start'],['text'=> "ققنوات الاشتراك📊",'callback_data'=>"chanel"]],
[['text' => "الاشعاراتℹ️",'callback_data' => 'onof'],['text' => "الادمنية👨‍💼",'callnack_data' => 'admins']],
[['text' => "اذاعه📨",'callback_data' =>'sendmessage']],
]])]);unlink("snd.txt");}


$op = file_get_contents("ch.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$op&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- عَليڪ ﺄلاشتراك بقناة ﺂلبوت الاولى 💛.
لأستخدام البوت بشڪل صَحيح 💚.
اشترك ثم اضغط /start من جديد 💘. * @$op * ؛
",
'reply_to_message_id'=>$message->message_id,
]);return false;}


$oop = file_get_contents("chh.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$oop&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- عَليڪ ﺄلاشتراك بقناة ﺂلبوت الثانيه 💛.
لأستخدام البوت بشڪل صَحيح 💚.
اشترك ثم اضغط /start من جديد 💘.* @$oop * ؛",
'reply_to_message_id'=>$message->message_id,
]);return false;}


if($text == "/start" and in_array($from_id,$admins)){
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "
- عدد اعضاء البوت '.$co_mem.'
",
'reply_to_message_id' =>$message->message_id, 
]);}

if($text == "/start" and $from_id != $taz and $start != null){
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "$start",
'reply_to_message_id' =>$message->message_id, 
]);
}else{
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "- welcome to my bot ",
'reply_to_message_id' =>$message->message_id, 
]);
}}

if($text == "/start" and $onof == "on" and $from_id != $taz){
bot('sendmessage',[
'chat_id' => $taz,
'text' => "

مرحبا مطوري هناك عضو جديد دخل للبوت

اسمه : - [$name](tg://user?id=$from_id)
معرفه :- @$username
ايديه : - $from_id
",
]);}

##محتوي بوتك كامل 


echo "this admin copy tshaky team write by motazaldrsy";