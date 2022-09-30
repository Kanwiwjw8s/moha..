<?php

ob_start();
$MROAN = "";
define('API_KEY',$MROAN);
echo file_get_contents("https://api.telegram.org/bot$MROAN/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$php88 = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."5660509069:AAG6Asg3iN8PHWMnUaM-yiUP2OmyWwNLmF0".$method."?$php88";
$php88 = file_get_contents($url);
return json_decode($php88);}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$admin = array("545973604", "175279237" ); 
$MROAN = file_get_contents("MROAN.txt");
$MROAN0 = file_get_contents("MROAN0.txt");
$MROAN1= file_get_contents("MROAN1.txt");
$MROAN5 = file_get_contents("MROAN2.txt");
$MROAN6 = file_get_contents("MROAN3.txt");
$MROAN20 = json_decode(file_get_contents('php://input'));
$MROAN18 = $update->message;
$MROAN13 = $MROAN18->chat->id;
$MROAN17 = $MROAN18->text;
$MROAN19 = $MROAN20->callback_query->data;
$MROAN12 = $MROAN20->callback_query->message->chat->id;
$MROAN14 =  $MROAN20->callback_query->message->message_id;
$MROAN15 = $MROAN18->from->first_name;
$MROAN16 = $MROAN18->from->username;
$MROAN11 = $MROAN18->from->id;
$MROAN2 = explode("\n",file_get_contents("MROAN4.txt"));
$MROAN3 = count($MROAN2)-1;
if ($MROAN18 && !in_array($MROAN11, $MROAN2)) {
    file_put_contents("MROAN4.txt", $MROAN11."\n",FILE_APPEND);
  }
$MROAN9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN0&user_id=".$MROAN11);
$MROAN10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN1&user_id=".$MROAN11);
if($MROAN18 && (strpos($MROAN9,'"status":"left"') or strpos($MROAN9,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN9,'"status":"kicked"') or strpos($MROAN10,'"status":"left"') or strpos($MROAN10,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MROAN13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$MROAN0.'
'.$MROAN1,
]);return false;}
if($MROAN17 == "/admin" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
}
if($MROAN19 == "MROAN" ){
bot('EditMessageText',[
'chat_id'=>$MROAN12,
'message_id'=>$MROAN14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
unlink("MROAN.txt");
}
if($MROAN19 == "MROAN0"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN0");
}
if($MROAN17 and $MROAN == "MROAN0" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN0.txt","$MROAN17");
unlink("MROAN.txt");
}
if($MROAN19 == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• نعم ، ✅','callback_data'=>'MROAN1'],
]    
]])
]);    
}
if($MROAN19 == "MROAN1"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN0.txt");
}
if($MROAN19 == "MROAN2"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN1");
}
if($MROAN17 and $MROAN == "MROAN1" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN1.txt","$MROAN17");
unlink("MROAN.txt");
}
if($MROAN19 == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• نعم ، ✅','callback_data'=>'MROAN3'],
]    
]])
]);    
}
if($MROAN19 == "MROAN3"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN1.txt");
}
if($MROAN19 == "MROAN4"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $MROAN0 📢 
- القناة الثانية ،  $MROAN1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($MROAN19 == "MROAN5"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $MROAN3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN2");
}
if($MROAN18 and $MROAN == "MROAN2" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('forwardMessage', [
'chat_id'=>$MROAN2[$i],
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
unlink("MROAN.txt");
}
}
if($MROAN19 == "MROAN6"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $MROAN3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN3");
}
if($MROAN17 and $MROAN == "MROAN3" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('sendMessage', [
'chat_id'=>$MROAN2[$i],
'text'=>$MROAN17
]);
unlink("MROAN.txt");
}
}
if($MROAN19 == "MROAN7"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- عدد مشتركين البوت  [ $MROAN3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($MROAN19 == "MROAN9"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN2.txt","MROAN");
}
if($MROAN17 == "/start" and $MROAN5 == "MROAN" and $MROAN11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$MROAN15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$MROAN16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$MROAN11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $MROAN3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($MROAN19 == "MROAN10"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN2.txt");
}
if($MROAN19 == "MROAN11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN3.txt","MROAN");
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 == $admin){
bot('sendMessage',[
'chat_id'=>$MROAN18->reply_to_message->forward_from->id,
    'text'=>$MROAN17,
    ]);
}
if($MROAN19 == "MROAN12"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN3.txt");
}


if($text ==  '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"' ) !== false){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>" • اهلآ بك ،  [$fn](tg://user?id=$chat_id)
♥️⁞ اهلأ بك في بوت اسئله جريئة 📘،.
📶⁞ هنالك 7 مستويات لجرئة الاسئله👙 📝،.
🔖⁞ آختر ما يناسبك وستجد ما تبحث عنه ايضأ 😉 ،.
🗄⁞ ثم آختر جنسك وأبدا ألعب🚬 ،.
📊⁞ إختر مستوى الاسئله وأبدا 🎥،.
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ابدا العب😎💗", 'callback_data'=>'help']],
[['text'=>"🎯سؤبر ماركت البوتات ",'url'=>'T.me/mroan8']],
]
])]);}
##
if($data=="home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"• اهلآ بك ،  [$fn](tg://user?id=$chat_id)
♥️⁞ اهلأ بك في بوت اسئله جريئة 📘،.
📶⁞ هنالك 7 مستويات لجرئة الاسئله👙 📝،.
🔖⁞ آختر ما يناسبك وستجد ما تبحث عنه ايضأ 😉 ،.
🗄⁞ ثم آختر جنسك وأبدا ألعب🚬 ،.
📊⁞ إختر مستوى الاسئله وأبدا 🎥،.
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ابدا العب😎💗", 'callback_data'=>'help']],
[['text'=>"🎯سؤبر ماركت البوتات ",'url'=>'T.me/mroan8']],
]
])]);}


if($data=="help"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
- أهلاً بك مجدداً [$Name](tg://user?id=$chat_id2)
- اليك قائمة اعدادات البوت اختر ماتريده لتنفيذه ، 
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"~اسئله جريئه 🔞",'callback_data'=>'X1']],
[['text'=>"~اسئله جريئه مستوى ثاني🔞",'callback_data'=>'X2']],
[['text'=>"~اسئله منحرفه👙👙",'callback_data'=>'X3']],
[['text'=>"~اسئله منحرفه مستوى ثاني👙",'callback_data'=>'X4']],
[['text'=>"~كدها عاديةة❤",'callback_data'=>'X5']],
[['text'=>"~اسئله للمتزوجين👩‍❤️‍💋‍👩",'callback_data'=>'X7']],
[['text'=>"-تحديث البوت📌.",'callback_data'=>'X8']],
[['text'=>"🎯سؤبر ماركت البوتات ",'url'=>'T.me/mroan8']],
[['text'=>"العودة 🔙",'callback_data'=>"home"]],
]
])
]);
}

if($data=="X1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروج تفركين كدامي لو يم امج 😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"يمك 😹😻",'callback_data'=>'Z1']],
[['text'=>"يم امج😟",'callback_data'=>'Z2']],
]
])
]);
}

if($data=="Z1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وف اذا يمي هنيالي عليج ونبي🤤
#استمري😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S1']],
]
])
]);
}

if($data=="Z2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وف ماكو احلا مـטּ النعال الي راح
يجيج مـטּ امج ءمنوره😹😹😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S1']],
]
])
]);
}

if($data=="S1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروج بين ابو الخيط لو عادي 😉😹👙",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ابو الخيط😹😻👄",'callback_data'=>'F1']],
[['text'=>"العادي😌",'callback_data'=>'F2']],]])]);}


if($data=="F1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
اح ام الخيط خلفيه وفيش مال مص ودفو 🤤😹💋
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S2']],]])]);}

if($data=="F2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
يول ام العادي تراهو صار قـَديـٰـٰم. 🙁💛 ۦٰ #احسه لباس ابوي 😹😹😹😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S2']],]])]);}


if($data=="S2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروج بين الفرك والـ اح اح 😉😹
لو بين الزواج #الراحه 😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"افرك🙊",'callback_data'=>'F3']],
[['text'=>"ازوج💋",'callback_data'=>'F4']],]])]);}


if($data=="F3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
تحب الفرك ام كس عساس متردين تتزوجين 😞😹😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S3']],]])]);}

if($data=="F4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
احح ام الزواج تحبه بل طبيعي 😹😹
#استمري 😹🚶‍♂
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S3']],]])]);}


if($data=="S3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
كم مره جابه او ذابه بل باسج🤤👙
مرتين 😉 » اكثر🙊
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مرتين🙊",'callback_data'=>'F5']],
[['text'=>"اكثر من اثنين🙊😻",'callback_data'=>'F6']],]])]);}


if($data=="F5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
ﻫــﺄﯾﮧ ام المرتين صدفه وكضت 😞😹😹😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S3']],]])]);}

if($data=="F6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
اح مبينه مفوله فول تعي نتزوج 💕😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S4']],]])]);}




if($data=="S4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
اخر مره دخلتي اصبعج بكسج ☹️😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اخاف😮",'callback_data'=>'F7']],
[['text'=>'من زمان','callback_data'=>'F8']],
[['text'=>"مصار هواي🙊😻",'callback_data'=>'F9']],]])]);}

if($data=="F7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح تعي خلي البوت يدخل اصبعه ويستكشف 😞😹💕",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S5']],]])]);}

if($data=="F8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"عفيه بالذيبه وشنو جان شعورج؟  💔😹🖕",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S5']],]])]);}

if($data=="F9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح تعي خلي البوت يدخل اصبعه ويستكشف 😞😹💕",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S5']],]])]);}



if($data=="S5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تحبين العير لو الخيار😉👙😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الخيار😻🙊",'callback_data'=>'F23']],
[['text'=>"العير",'callback_data'=>'F24']],]])]);}


if($data=="F23"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح فدوا للتحب الطبيعي تعي مصي
#وستمري 🤤😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S6']],]])]);}

if($data=="F24"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ام الخيار مبينه مجربتها 😹😹😹
#استمري",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S6']],]])]);}

if($data=="S6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اكثر شخص تتنايجين وياه،الموقع حبيبج😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"😢المواقع",'callback_data'=>'F26']],
[['text'=>"😋حبيبي",'callback_data'=>'F27']],
[['text'=>"ولا احد 😌",'callback_data'=>'F28']],]])]);}

if($data=="F26"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خدمات نيجني ؏ سريع • ﺗ؏َـﺂل ،🙌🏼Ֆ انيججج وبلاش دزي رساله نيجني 💕",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S7']],]])]);}

if($data=="F27"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اح بلعافيه عليج مبين شابع بيج 😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S7']],]])]);}


if($data=="F28"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ليشـۂ حياتتي 🙄😂✨ متحبين النيج",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S8']],]])]);}


if($data=="S8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شنو لون حلمتج  وشكد حجم ستيانج  😉😻
وردي 35✨🤤
إسمر 35 😻💋",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"وردي 35✨🤤",'callback_data'=>'F30']],
[['text'=>"اسمر35💋",'callback_data'=>'F31']],]])]);}


if($data=="F31"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح يسمره وفف شلون ديوس عليج
مال مص وكتل • مـٰــُِـ̯حہ ،💋 💕🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S9']],]])]);}


if($data=="F30"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اويلي هم ديوس ورديات وهم خلفيه
هنياله حبيبج اني منه اشبعج نيج 🤭😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S9']],]])]);}

if($data=="S9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروج بل نيج وضعيه 69🤤
لو وضعيه 56😻",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"وضعيه69🙊",'callback_data'=>'F32']],
[['text'=>"وضعيه 56😻",'callback_data'=>'F33']],
[['text'=>"ولا وحده",'callback_data'=>'F34']],]])]);}

if($data=="F32"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اححح مبينه متعلمه ؏ مص تتعي
خذيلج مضه ونيجه مني ☹️😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S10']],]])]);}


if($data=="F33"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خاب شكد قديمه بعد حولي ؏ وضعيه البزون وخلص 😑😹تعي انيجج 69",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S10']],]])]);}


if($data=="F34"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لعد ياوضعيه تحبين؟  $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S10']],]])]);}


if($data=="S10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>" لو خيروج تزينين شعرج☹️
لو انيجج منا لما امل 👙🙉😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ازين😟",'callback_data'=>'F54']],
[['text'=>"نيجني👄",'callback_data'=>'F55']],]])]);}

if($data=="F55"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وففف صايره شريفه وختارت ازين وهيه طابه ؏ بوت سكسي عار ونبي 😹😹😹😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ارجوع",'callback_data'=>'home']],]])]);}


if($data=="F54"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وففف بس تعالي واني اخليج تتونسين ؏ مدار ونبي 😞😹😹😹 $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="X2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو خيروج تلبسين لباس وطلعين بشارع لو تلبسين لباس وتجين بحضني",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بحضنك ",'callback_data'=>'F60']],
[['text'=>"بلشارع",'callback_data'=>'F61']],]])]);}

if($data=="F60"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| اوف تجين بلباس بس تروحين بدونه $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S11']],]])]);}

if($data=="F61"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| بشارع كلها شوفج وتتأذين بس يمي اداريج  $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S12']],]])]);}


if($data=="S11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| عندج ستعداد تفركين كدام ابوج لو اجي افركلج وحدنه",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"افركلي",'callback_data'=>'F63']],
[['text'=>"كدام ابويه",'callback_data'=>'F64']],]])]);}

if($data=="F63"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| افركلج صبح وليل وماكو ستراحه $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S12']],]])]);}

if($data=="F64"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| حتا تاكلين دك قنادر من الوالد 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S12']],]])]);}

if($data=="S12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| تلعبين بصدرج كدام ابوج لو اني العب بي",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"العب بصدري انت",'callback_data'=>'F65']],
[['text'=>"كدام ابويه",'callback_data'=>'F66']],]])]);}

if($data=="F65"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| العب بي وامصمص 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S13']],]])]);}

if($data=="F66"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| حتا تاكلين دك قنادر من الوالد 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S13']],]])]);}

if($data=="S13"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| تحطين اصبعج بلورا لو واحد يرضع بصدرج",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بصدري",'callback_data'=>'F67']],
[['text'=>"بلوره",'callback_data'=>'F68']],]])]);}

if($data=="F67"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ءوف لو يمج مو بس ارضع الحس 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S14']],]])]);}

if($data=="F68"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| الله يساعدة اذا اصبعج طويل 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S14']],]])]);}


if($data=="S14"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو خيروج تاكلين باجه لو امص شفايفج 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مص شفايفي",'callback_data'=>'F70']],
[['text'=>"اكل باجه",'callback_data'=>'F71']],]])]);}
if($data=="F70"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| اككل شفايفج ومص لسان وف",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S15']],]])]);}

if($data=="F71"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو متماصصه وياي مو احسن 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S15']],]])]);}

if($data=="S15"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو خيروج تنامين بغرفه كلها فار لو ادخل ايدي بستيانج😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"انام",'callback_data'=>'F72']],
[['text'=>"ادخل ايدك",'callback_data'=>'F73']],]])]);}

if($data=="F72"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو مدخل ايدي مو احسلج 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع ",'callback_data'=>'home']],]])]);}

if($data=="F73"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| وف ادخل ايدي وراسي هم",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="X3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"💗 اهلأ بك عزيزي في قسم الاسئله المنحرفة قم باختيار جنسك وإبدأ ألعب واستمتع 👅🔞✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بنت👩",'callback_data'=>'A1']],
[['text'=>"ولد👨",'callback_data'=>'A2']],
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="A1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"الباسج يالون 👙🙈 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"وردي🙊😻",'callback_data'=>'B1']],
[['text'=>"اسود👍💟",'callback_data'=>'B2']],]])]);}

if($data=="B1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وفف ام الوردي تكتل 😞😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S16']],]])]);}

if($data=="B2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هنياله عليج 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S16']],]])]);}

if($data=="S16"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"جبير",'callback_data'=>'B3']],
[['text'=>"صغير",'callback_data'=>'B4']],
[['text'=>"وسط",'callback_data'=>'B5']],]])]);}

if($data=="B3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بالعافيه ؏ ياخذج 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S17']],]])]);}

if($data=="B4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ووف اححح مال لحس ɵ̷̥̥᷄ˬɵ̷̥̥᷅",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S17']],]])]);}

if($data=="B5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اويلي مال رضع صدرج 💞😍😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S17']],]])]);}

if($data=="S17"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هم احد مـטּ كرايبج نايجج 🥺🤓 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اي🙊",'callback_data'=>'B6']],
[['text'=>"لا💔",'callback_data'=>' B7']],]])]);}


if($data=="B6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"الف ؏ـافيـٓـٰهۃ♥️🙈 عٖعـۤمٰرۤيۨ",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S18']],]])]);}
if($data=="B7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خطيه محرومه😂😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S18']],]])]);}

if($data=="S18"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"زروج كبار لوو صغار 🙄🔥؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"كبار💙",'callback_data'=>'B8']],
[['text'=>"صغار",'callback_data'=>'B9']],]])]);}

if($data=="B8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مال نيج وكتل 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S19']],]])]);}

if($data=="B9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مال نيج وكتل 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S19']],]])]);}

if($data=="S19"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"من تشتهين تفركين صدرج ٰلـۄ كسج 🤤 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"كسي😻😌",'callback_data'=>'B10']],
[['text'=>"صدري🙈",'callback_data'=>'B11']],]])]);}

if($data=="B10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اويلي مممكن نيجه 🔥🤤 $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S20']],]])]);}

if($data=="B11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح هسسهہٰ صدرج شكبره مـטּ الفرك ɵ̷̥̥᷄ˬɵ̷̥̥᷅",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S20']],]])]);}



if($data=="S20"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شنو اكثر شي يخدرج بجسمج 🤤😉؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ركبتي💙",'callback_data'=>'B12']],
[['text'=>"صدري😉🙊",'callback_data'=>'B13']],]])]);}

if($data=="B12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بمكن مصه حمبي؟ 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S21']],]])]);}
if($data=="B13"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بمكن مصه حمبي؟ 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S21']],]])]);}

if($data=="S21"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"كم مرۿ نايجيج من كدام 🤔😂 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ولامره 😻",'callback_data'=>'B14']],
[['text'=>"هواي😌",'callback_data'=>'B15']],]])]);}

if($data=="B14"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"عمرج خساره😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="B15"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هٰهٖٱ العريضه 🙂😂😂😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع 💗",'callback_data'=>'home']],]])]);}


if($data=="A2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروك تنيج بنت عمرها 11 😑😹
لو عجوز عمرها 60 سنه 😞💕😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بنت😂",'callback_data'=>'B16']],
[['text'=>"عجوز",'callback_data'=>'B17']],]])]);}

if($data=="B16"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"له له له تالي عمرك تنيج بعجوز 😹😹
`•اللّـہ̣̥` يساعدك يول 😹🚶‍♂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="X4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"🚫 عذرأ عزيزي هذا القسم غير متوفر حاليا تحت الصيانه نتأسف منك عزيزي جدأ وشكرا لك لاستخدامك خدمتنا . $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="X5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"♥️⁞ اهلأ بك عزيزي في قسم ( ڪدها عاديةة ) قم بأختيار جنسك وأبدا ألعب واستمتع 💘✨.",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بنت 🙊",'callback_data'=>'H1']],
[['text'=>"ولد😹",'callback_data'=>'H2']],
[['text'=>"رجوع",'callback_data'=>'home']],]])]);}

if($data=="H2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"انته زلمه مو مال لعبات
https://www.fuq.com",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="H1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"يا ام الكمـﮧـل😹/ڪدها 🌚💃
【تغسلين شعــرج بنفط🙊🙀/تكمشــين صرصر بأيدج😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"تكمشين صرصر",'callback_data'=>'H3']],
[['text'=>"تغسلين شعرج",'callback_data'=>'H4']],]])]);}

if($data=="H3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"يــلا عيــني💃💃

غنــي وياي🔇🔇
ام الكمل والصيــبان😹💃💃ها ها ام الكمــل والصيــبان😹💃💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S22']],]])]);}

if($data=="H4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احــم🌚😹

هايــمنو التكمــش صرصر🌚😹
متأكده 🌚😹 هذا ويهج 😹💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S23']],]])]);}

if($data=="S23"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"يابعــد روح البــوت والمطور😹
ڪدها 🙀

【تطلعين بــدون مكياج وكلنا العراق😹/

ترحــين لأمج تكليلــهه اني مزوجه بالسر🙊😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بدون مكياج",'callback_data'=>'R1']],
[['text'=>"اروح لامي",'callback_data'=>'R2']],]])]);}

if($data=="R1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"والله جــذابه😹
وعــلي جذابه?? والحسين جذابه😹
المصنهــره 😹المزنعــره😴😹
انــتي ويهج ليكول مطــور البوت😏😹
وطلعين بدون مكياج😹💃💃
نكطــع واهس الشباب بالــزواج😹💃💃🌚",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S24']],]])]);}

if($data=="R2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"كــفو🌚💪

وخــلج قويــه حبحياتي😼
ولتبجــين من اول راجــدي😹😹😹😹
💃💃💃💃💃💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S24']],]])]);}

if($data=="S24"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ڪدها 🌚😹

【تطلعين بدون ستيان👙/🌚😹/تنطين حلك لـ لوسفير 🌚😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اطلع بدون ستيان",'callback_data'=>'R3']],
[['text'=>"انطي حلك لوسفير",'callback_data'=>'R4']],]])]);}

if($data=="R3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وف🙊😹

وتعاي يم المطــور لوسفير😹💃
يريد يسولف وياج🌚😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="R4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"جذاااااااااااااااااااابه🌚😹

جذابه هو انتن تدورن حلوين🌚😹النوب تنطين حلك لـ لوسفير وووف😹💋",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="X8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ليله الدخله شونها حبي 😉😂 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"تخبل😍",'callback_data'=>'Q1']],
[['text'=>"تعب😻",'callback_data'=>'Q2']],]])]);}

if($data=="Q1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هٰهٖٱ حبي لازم ريحج زين لوو نتي متعوده 😂🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S30']],]])]);}


if($data=="Q2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"يـلا عمري تكبرين وتنسين 😌😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S30']],]])]);}

if($data=="S30"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شكم راس سويتو نتي وزوجج باليله الدخله 😍🙊😂 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اكثر من 5😻",'callback_data'=>'Q3']],
[['text'=>"اقل من 5😟",'callback_data'=>'Q4']],]])]);}


if($data=="Q3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ﭑدرِي كس لوو تكسي شعندج 😂😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S31']],]])]);}

if($data=="Q4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"عفية حبي خوش تسوين خوما نتي تكسي 🤤💔😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S31']],]])]);}

if($data=="S31"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"زوجج يحب صدرج 🙄❤️ ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اي💓",'callback_data'=>'Q5']],
[['text'=>"لاا😧",'callback_data'=>'Q6']],]])]);}

if($data=="Q5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لازم شابع منه كليوميه تنطي 💘😂😂✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S32']],]])]);}


if($data=="Q6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لازم شابع منه كليوميه تنطي 💘😂😂✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S32']],]])]);}

if($data=="S32"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"زوجج نايجج من وره لوو لاا 🤦‍♂😂 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"لاا🙊😻",'callback_data'=>'Q7']],
[['text'=>"يب👀❤",'callback_data'=>'Q8']],]])]);}

if($data=="Q7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"جربي حياتي جربي حلو 😂😔😍",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S33']],]])]);}

if($data=="Q8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شكد تحبين النيج لععد مممتتت 🔥🤤😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S33']],]])]);}

if($data=="S33"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"زوجج يريح لو ما يعرف 🖤😪 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"يي كلش🙊😻",'callback_data'=>'Q9']],
[['text'=>"لاا😤😥",'callback_data'=>'Q10']],]])]);}

if($data=="Q9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بالعافية عليكم حيااتي 🖤🤓",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S34']],]])]);}



if($data=="Q10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تعالي يمي اريحج حبعمري 🖤😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S34']],]])]);}


if($data=="S34"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هم خاينه زوجج وي غيره لوو لاا 😂😳 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"يي😂😂",'callback_data'=>'Q11']],
[['text'=>"لا🙋🙌",'callback_data'=>' Q12']],]])]);}

if($data=="Q11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خطيه لازم مايعرف ومايرحج 😂😒🤦‍♂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="Q12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اكيد من كسج لان عسل صاير 😍😂🙄",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="X8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- تم تحديث البوت بنجاح ، 📌 ",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


