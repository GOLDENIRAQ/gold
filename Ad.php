<?php 
ob_start();
$token = "6817395973:AAH99oe-6V4YC3mo3fTamCjUibzshoqlAGw";//توكنك
define("API_KEY",$token);
function bot($method,$datas=[]){
echo file_get_contents("https://api.telegram.org/bot".$API_KEY."/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
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
$Dev = array("6730428261","6730428261");///ايديك و ايدي الادمن
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $update->message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$from_id2 = $update->callback_query->message->from->id;
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$bot = '@'.bot('getme',['bot'])->result->username;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$data     = $update->callback_query->data;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
$admin = "6730428261";///ايديك
$DylerF = file_get_contents("Dyler.txt");
$DylerF0 = file_get_contents("Dyler0.txt");
$DylerF1= file_get_contents("Dyler1.txt");
$DylerF5 = file_get_contents("Dyler2.txt");
$DylerF6 = file_get_contents("Dyler3.txt");
$DylerF20 = json_decode(file_get_contents('php://input'));
$DylerF18 = $update->message;
$DylerF13 = $DylerF18->chat->id;
$DylerF17 = $DylerF18->text;
$meme = $DylerF20->callback_query->data;
$DylerF12 = $DylerF20->callback_query->message->chat->id;
$DylerF14 =  $DylerF20->callback_query->message->message_id;
$DylerF15 = $DylerF18->from->first_name;
$DylerF16 = $DylerF18->from->username;
$DylerF11 = $DylerF18->from->id;
$DylerF2 = explode("\n",file_get_contents("Dyler4.txt"));
$ArmoCH = explode("\n",file_get_contents("chall.txt"));
$DylerGROP = explode("\n",file_get_contents("DylerGR.txt"));
$DylerF3 = count($DylerF2)-1;
$DylerGROPnt = count($DylerGROP)-1;
$admin = 6730428261;//ايديك
$text_ch = $update->channel_post->text;
$ch_id = $update->channel_post->chat->id;
$getchall = file_get_contents("chall.txt");
$allgetch = explode("\n",$getchall);
$bot = file_get_contents("com.txt");
$cchcc = explode("\n",file_get_contents("chall.txt"));
$alllch = count($cchcc)-1;
$DylerF11 = $DylerF18->from->id;
$tc = $update->message->chat->type;
if($text_ch !== "/start" and !in_array($ch_id,$allgetch)){
file_put_contents("chall.txt","\n$ch_id",FILE_APPEND);
}
if($tc == 'private'){
if($message and !in_array($DylerF11, $DylerF2)) {
file_put_contents("Dyler4.txt", $DylerF11."\n",FILE_APPEND);
}}
if($tc == 'group' || $tc == 'supergroup'){
if($message and !in_array($chat_id, $DylerGROP)) {
file_put_contents("DylerGR.txt", $chat_id."\n",FILE_APPEND);
}}
$DylerF9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$DylerF0&user_id=".$DylerF11);
$DylerF10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$DylerF1&user_id=".$DylerF11);
if($DylerF18 && (strpos($DylerF9,'"status":"left"') or strpos($DylerF9,'"Bad Request: USER_ID_INVALID"') or strpos($DylerF9,'"status":"kicked"') or strpos($DylerF10,'"status":"left"') or strpos($DylerF10,'"Bad Request: USER_ID_INVALID"') or strpos($DylerF10,'"status":"kicked"'))!== false){
if($tc == 'private'){
bot('sendMessage', [
'chat_id'=>$DylerF13,
'text'=>'
📧- ▫️ عذراً عزيزي  ، ☡
⚠️- يجب عليك الإشتراك في قنوات البوت أولاً
🔇- اشترك ثم ارسل ( /start )📮!
'.$DylerF0.'
'.$DylerF1,
]);return false;}}
if($DylerF17 == "/admin" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>"مرحبآ بك ، 
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"Dyler"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"Dyler0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"Dyler"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"Dyler2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"Dyler4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"Dyler"]],
[['text'=>'• رسالة توجيه ، ⚠️' ,'callback_data'=>"Dyler5"],['text'=>'• رسالة نصية ، ⚠️' ,'callback_data'=>"Dyler6"]],
[['text'=>'• رساله قنوات توجيه ،⚙' ,'callback_data'=>"Dylerch"],['text'=>'• رساله قنوات نصية ، ⚙' ,'callback_data'=>"Dylerchtx"]],
[['text'=>'• رساله كروبات توجيه ، 👥' ,'callback_data'=>"DylerGro"],['text'=>'• رساله كروبات نصية ،👥' ,'callback_data'=>"DylerGr"]],
[['text'=>'- عدد القنوات ، 🐳' ,'callback_data'=>"Dyler77"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"Dyler7"],['text'=>'- عدد الكروبات ، 🐳' ,'callback_data'=>"Dyler777"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"Dyler"]],
[['text'=>'• تفعيل التنبيه ، 💬' ,'callback_data'=>"Dyler9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"Dyler10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 💬' ,'callback_data'=>"Dyler"]],
[['text'=>'• تفعيل التوجيه ، 💬' ,'callback_data'=>"Dyler11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"Dyler12"]],
   ] 
   ])
]);
}
if($meme == "Dyler" ){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
"text"=>"  • مرحبا بك ،
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"Dyler"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"Dyler0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"Dyler"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"Dyler2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"Dyler4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"Dyler"]],
[['text'=>'• رسالة توجيه ، ⚙' ,'callback_data'=>"Dyler5"],['text'=>'• رسالة نصية ،⚙' ,'callback_data'=>"Dyler6"]],
[['text'=>'• رساله قنوات توجيه ، 📋' ,'callback_data'=>"Dylerch"],['text'=>'• رساله قنوات نصية ، 📋' ,'callback_data'=>"Dylerchtx"]],
[['text'=>'• رساله كروبات توجيه ، 📮' ,'callback_data'=>"DylerGro"],['text'=>'• رساله كروبات نصية ، 📮' ,'callback_data'=>"DylerGr"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"Dyler7"]],
[['text'=>'- عدد القنوات ، 🐳' ,'callback_data'=>"Dyler77"],['text'=>'- عدد الكروبات ، 🐳' ,'callback_data'=>"Dyler777"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"Dyler"]],
[['text'=>'• تفعيل التنبيه ، 💬' ,'callback_data'=>"Dyler9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"Dyler10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 💬' ,'callback_data'=>"Dyler"]],
[['text'=>'• تفعيل التوجيه ، 💬' ,'callback_data'=>"Dyler11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"Dyler12"]],
   ] 
   ])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler0"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler0");
}
if($DylerF17 and $DylerF == "Dyler0" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler0.txt","$DylerF17");
unlink("Dyler.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'Dyler'],
['text'=>'• نعم ، 💬','callback_data'=>'Dyler1'],
]    
]])
]);    
}
if($meme == "Dyler1"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler0.txt");
}
if($meme == "Dyler2"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@dylerrr',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler1");
}
if($DylerF17 and $DylerF == "Dyler1" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler1.txt","$DylerF17");
unlink("Dyler.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'Dyler'],
['text'=>'• نعم ، 💬','callback_data'=>'Dyler3'],
]    
]])
]);    
}
if($meme == "Dyler3"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler1.txt");
}
if($meme == "Dyler4"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $DylerF0 📢 
- القناة الثانية ،  $DylerF1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler5"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $DylerF3 ] مشترك ، 🐙 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler2");
}
if($DylerF18 and $DylerF == "Dyler2" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم التوجيه بنجاح 🦕',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylerF2); $i++){
bot('forwardMessage', [
'chat_id'=>$DylerF2[$i],
'from_chat_id'=>$DylerF11,
'message_id'=>$DylerF18->message_id
]);
unlink("Dyler.txt");
}
}
if($meme == "Dyler6"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $DylerF3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler3");
}
if($DylerF17 and $DylerF == "Dyler3" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylerF2); $i++){
bot('sendMessage', [
'chat_id'=>$DylerF2[$i],
'text'=>$DylerF17
]);
unlink("Dyler.txt");
}
}
if($meme == "DylerGro"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $DylerGROPnt ] كروب ، 🐙 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","DylerGro");
}
if($message and $DylerF == "DylerGro" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم التوجيه بنجاح 🦕',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylerGROP);$i++){
bot('forwardMessage',[
'chat_id'=>$DylerGROP[$i],
'from_chat_id'=>$DylerF11,
'message_id'=>$message->message_id
]);
unlink("Dyler.txt");
}
}
if($meme == "DylerGr"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $DylerGROPnt ] كروب ، 🐠",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","DylerGr");
}
if($DylerF17 and $DylerF == "DylerGr" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم النشر بنجاح 🐋',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylerGROP);$i++){
bot('sendMessage',[
'chat_id'=>$DylerGROP[$i],
'text'=>$DylerF17
]);
unlink("Dyler.txt");
}
}
if($meme == "Dylerch"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $alllch ] قناة ، 🐙 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dylerch");
}
if($message and $DylerF == "Dylerch" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم التوجيه بنجاح 🦕',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($ArmoCH);$i++){
bot('forwardMessage',[
'chat_id'=>$ArmoCH[$i],
'from_chat_id'=>$DylerF11,
'message_id'=>$message->message_id
]);
unlink("Dyler.txt");
}
}
if($meme == "Dylerchtx"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $alllch ] قناة ، 🐠",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyleroch");
}
if($DylerF17 and $DylerF == "Dyleroch" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم النشر بنجاح 🐋',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($ArmoCH);$i++){
bot('sendMessage',[
'chat_id'=>$ArmoCH[$i],
'text'=>$DylerF17
]);
unlink("Dyler.txt");
}
}
if($meme == "Dyler7"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>"- عدد مشتركين البوت  [ $DylerF3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler77"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>"- عدد قنوات البوت  [ $alllch ] قناة ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler777"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>"- عدد كروبات البوت  [ $DylerGROPnt ] كروب ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler9"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler2.txt","Dyler");
}
if($DylerF17 == "/start" and $DylerF5 == "Dyler" and $DylerF11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$DylerF15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$DylerF16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$DylerF11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $DylerF3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "Dyler10"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler2.txt");
}
if($meme == "Dyler11"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler3.txt","Dyler");
}
if($DylerF18 and $DylerF6 == "Dyler" and $DylerF11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$DylerF11,
'message_id'=>$DylerF18->message_id
]);
}
if($DylerF18 and $DylerF6 == "Dyler" and $DylerF11 == $admin){
bot('sendMessage',[
'chat_id'=>$DylerF18->reply_to_message->forward_from->id,
    'text'=>$DylerF17,
    ]);
}
if($meme == "Dyler12"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler3.txt");
} $admin = "6730428261";//ايديك
$DylerF = file_get_contents("Dyler.txt");
$DylerF0 = file_get_contents("Dyler0.txt");
$DylerF1= file_get_contents("Dyler1.txt");
$DylerF5 = file_get_contents("Dyler2.txt");
$DylerF6 = file_get_contents("Dyler3.txt");
$DylerF20 = json_decode(file_get_contents('php://input'));
$DylerF18 = $update->message;
$DylerF13 = $DylerF18->chat->id;
$DylerF17 = $DylerF18->text;
$meme = $DylerF20->callback_query->data;
$DylerF12 = $DylerF20->callback_query->message->chat->id;
$DylerF14 =  $DylerF20->callback_query->message->message_id;
$DylerF15 = $DylerF18->from->first_name;
$DylerF16 = $DylerF18->from->username;
$DylerF11 = $DylerF18->from->id;
$DylerF2 = explode("\n",file_get_contents("Dyler4.txt"));
$ArmoCH = explode("\n",file_get_contents("chall.txt"));
$DylerGROP = explode("\n",file_get_contents("DylerGR.txt"));
$DylerF3 = count($DylerF2)-1;
$DylerGROPnt = count($DylerGROP)-1;
$admin = 6730428261;//ايديك
$text_ch = $update->channel_post->text;
$ch_id = $update->channel_post->chat->id;
$getchall = file_get_contents("chall.txt");
$allgetch = explode("\n",$getchall);
$bot = file_get_contents("com.txt");
$cchcc = explode("\n",file_get_contents("chall.txt"));
$alllch = count($cchcc)-1;
$DylerF11 = $DylerF18->from->id;
$tc = $update->message->chat->type;
if($text_ch !== "/start" and !in_array($ch_id,$allgetch)){
file_put_contents("chall.txt","\n$ch_id",FILE_APPEND);
}
if($tc == 'private'){
if($message and !in_array($DylerF11, $DylerF2)) {
file_put_contents("Dyler4.txt", $DylerF11."\n",FILE_APPEND);
}}
if($tc == 'group' || $tc == 'supergroup'){
if($message and !in_array($chat_id, $DylerGROP)) {
file_put_contents("DylerGR.txt", $chat_id."\n",FILE_APPEND);
}}
$DylerF9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$DylerF0&user_id=".$DylerF11);
$DylerF10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$DylerF1&user_id=".$DylerF11);
if($DylerF18 && (strpos($DylerF9,'"status":"left"') or strpos($DylerF9,'"Bad Request: USER_ID_INVALID"') or strpos($DylerF9,'"status":"kicked"') or strpos($DylerF10,'"status":"left"') or strpos($DylerF10,'"Bad Request: USER_ID_INVALID"') or strpos($DylerF10,'"status":"kicked"'))!== false){
if($tc == 'private'){
bot('sendMessage', [
'chat_id'=>$DylerF13,
'text'=>'
📧- ▫️ عذراً عزيزي  ، ☡
⚠️- يجب عليك الإشتراك في قنوات البوت أولاً
🔇- اشترك ثم ارسل ( /start )📮!
'.$DylerF0.'
'.$DylerF1,
]);return false;}}
if($DylerF17 == "/admin" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>"مرحبآ بك ، 
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ' ,'callback_data'=>"Dyler"]],
[['text'=>'• وضع قناة ، ' ,'callback_data'=>"Dyler0"],['text'=>'• حذف قناة ، ' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ' ,'callback_data'=>"Dyler"]],
[['text'=>'• وضع قناة ، ' ,'callback_data'=>"Dyler2"],['text'=>'• حذف قناة ، ' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ' ,'callback_data'=>"Dyler4"]],
[['text'=>'- أوامر الإذاعه ' ,'callback_data'=>"Dyler"]],
[['text'=>'• رسالة توجيه ' ,'callback_data'=>"Dyler5"],['text'=>'• رسالة نصية ' ,'callback_data'=>"Dyler6"]],
[['text'=>'• رساله قنوات توجيه ' ,'callback_data'=>"Dylerch"],['text'=>'• رساله قنوات نصية ، ⚙' ,'callback_data'=>"Dylerchtx"]],
[['text'=>'• رساله كروبات توجيه ، 👥' ,'callback_data'=>"DylerGro"],['text'=>'• رساله كروبات نصية ،👥' ,'callback_data'=>"DylerGr"]],
[['text'=>'- عدد القنوات ' ,'callback_data'=>"Dyler77"]],
[['text'=>'- عدد المشتركين ' ,'callback_data'=>"Dyler7"],['text'=>'- عدد الكروبات ' ,'callback_data'=>"Dyler777"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ' ,'callback_data'=>"Dyler"]],
[['text'=>'• تفعيل التنبيه ' ,'callback_data'=>"Dyler9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"Dyler10"]],
[['text'=>'- توجيه رسائل من الأعضاء ' ,'callback_data'=>"Dyler"]],
[['text'=>'• تفعيل التوجيه ' ,'callback_data'=>"Dyler11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"Dyler12"]],
   ] 
   ])
]);
}
if($meme == "Dyler" ){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
"text"=>"  • مرحبا بك ،
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ' ,'callback_data'=>"Dyler"]],
[['text'=>'• وضع قناة ، ' ,'callback_data'=>"Dyler0"],['text'=>'• حذف قناة ، ' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ' ,'callback_data'=>"Dyler"]],
[['text'=>'• وضع قناة ، ' ,'callback_data'=>"Dyler2"],['text'=>'• حذف قناة ، ' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ' ,'callback_data'=>"Dyler4"]],
[['text'=>'- أوامر الإذاعه ' ,'callback_data'=>"Dyler"]],
[['text'=>'• رسالة توجيه ، ⚙' ,'callback_data'=>"Dyler5"],['text'=>'• رسالة نصية ' ,'callback_data'=>"Dyler6"]],
[['text'=>'• رساله قنوات توجيه ' ,'callback_data'=>"Dylerch"],['text'=>'• رساله قنوات نصية ' ,'callback_data'=>"Dylerchtx"]],
[['text'=>'• رساله كروبات توجيه ' ,'callback_data'=>"DylerGro"],['text'=>'• رساله كروبات نصية ' ,'callback_data'=>"DylerGr"]],
[['text'=>'- عدد المشتركين ' ,'callback_data'=>"Dyler7"]],
[['text'=>'- عدد القنوات ' ,'callback_data'=>"Dyler77"],['text'=>'- عدد الكروبات ' ,'callback_data'=>"Dyler777"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ' ,'callback_data'=>"Dyler"]],
[['text'=>'• تفعيل التنبيه ' ,'callback_data'=>"Dyler9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"Dyler10"]],
[['text'=>'- توجيه رسائل من الأعضاء ' ,'callback_data'=>"Dyler"]],
[['text'=>'• تفعيل التوجيه ' ,'callback_data'=>"Dyler11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"Dyler12"]],
   ] 
   ])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler0"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى 
#مثال :
▪️@dylerrr',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler0");
}
if($DylerF17 and $DylerF == "Dyler0" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler0.txt","$DylerF17");
unlink("Dyler.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'Dyler'],
['text'=>'• نعم ','callback_data'=>'Dyler1'],
]    
]])
]);    
}
if($meme == "Dyler1"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler0.txt");
}
if($meme == "Dyler2"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية 
#مثال :
▪️@dylerrr',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler1");
}
if($DylerF17 and $DylerF == "Dyler1" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler1.txt","$DylerF17");
unlink("Dyler.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'Dyler'],
['text'=>'• نعم ','callback_data'=>'Dyler3'],
]    
]])
]);    
}
if($meme == "Dyler3"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler1.txt");
}
if($meme == "Dyler4"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $DylerF0  
- القناة الثانية ،  $DylerF1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler5"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $DylerF3 ] مشترك ، 🐙 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler2");
}
if($DylerF18 and $DylerF == "Dyler2" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم التوجيه بنجاح 🦕',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylerF2); $i++){
bot('forwardMessage', [
'chat_id'=>$DylerF2[$i],
'from_chat_id'=>$DylerF11,
'message_id'=>$DylerF18->message_id
]);
unlink("Dyler.txt");
}
}
if($meme == "Dyler6"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $DylerF3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyler3");
}
if($DylerF17 and $DylerF == "Dyler3" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylerF2); $i++){
bot('sendMessage', [
'chat_id'=>$DylerF2[$i],
'text'=>$DylerF17
]);
unlink("Dyler.txt");
}
}
if($meme == "DylerGro"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $DylerGROPnt ] كروب ، 🐙 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","DylerGro");
}
if($message and $DylerF == "DylerGro" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم التوجيه بنجاح 🦕',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylerGROP);$i++){
bot('forwardMessage',[
'chat_id'=>$DylerGROP[$i],
'from_chat_id'=>$DylerF11,
'message_id'=>$message->message_id
]);
unlink("Dyler.txt");
}
}
if($meme == "DylerGr"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $DylerGROPnt ] كروب ، 🐠",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","DylerGr");
}
if($DylerF17 and $DylerF == "DylerGr" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم النشر بنجاح 🐋',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($DylerGROP);$i++){
bot('sendMessage',[
'chat_id'=>$DylerGROP[$i],
'text'=>$DylerF17
]);
unlink("Dyler.txt");
}
}
if($meme == "Dylerch"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $alllch ] قناة ، 🐙 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dylerch");
}
if($message and $DylerF == "Dylerch" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم التوجيه بنجاح 🦕',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($ArmoCH);$i++){
bot('forwardMessage',[
'chat_id'=>$ArmoCH[$i],
'from_chat_id'=>$DylerF11,
'message_id'=>$message->message_id
]);
unlink("Dyler.txt");
}
}
if($meme == "Dylerchtx"){
bot('EditMessageText',[
'chat_id'=>$DylerF12,
'message_id'=>$DylerF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $alllch ] قناة ، 🐠",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler.txt","Dyleroch");
}
if($DylerF17 and $DylerF == "Dyleroch" and $DylerF11 == $admin){
bot("sendmessage",[
"chat_id"=>$DylerF13,
"text"=>'- تم النشر بنجاح 🐋',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
for($i=0;$i<count($ArmoCH);$i++){
bot('sendMessage',[
'chat_id'=>$ArmoCH[$i],
'text'=>$DylerF17
]);
unlink("Dyler.txt");
}
}
if($meme == "Dyler7"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>"- عدد مشتركين البوت  [ $DylerF3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler77"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>"- عدد قنوات البوت  [ $alllch ] قناة ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler777"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>"- عدد كروبات البوت  [ $DylerGROPnt ] كروب ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
}
if($meme == "Dyler9"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler2.txt","Dyler");
}
if($DylerF17 == "/start" and $DylerF5 == "Dyler" and $DylerF11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$DylerF15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$DylerF16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$DylerF11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $DylerF3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "Dyler10"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler2.txt");
}
if($meme == "Dyler11"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
file_put_contents("Dyler3.txt","Dyler");
}
if($DylerF18 and $DylerF6 == "Dyler" and $DylerF11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$DylerF11,
'message_id'=>$DylerF18->message_id
]);
}
if($DylerF18 and $DylerF6 == "Dyler" and $DylerF11 == $admin){
bot('sendMessage',[
'chat_id'=>$DylerF18->reply_to_message->forward_from->id,
    'text'=>$DylerF17,
    ]);
}
if($meme == "Dyler12"){
bot('EditMessageText',[
    'chat_id'=>$DylerF12,
    'message_id'=>$DylerF14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Dyler"]],
]])
]);
unlink("Dyler.txt");
unlink("Dyler3.txt");
} 