 <?php
  

function send_LINE($msg){
 $access_token = 'i8EqPYOcF6T/rJUM5xyCStl2SpH0kP9TuxS56eOaOdJymt1cKnZtal9UYhllBY1qHXWHoxMs6lj3UwleXiryVqDBLgpa+bnNojQNLi/o2SbFWtexawkedo95CLfRCjUPOH1WWse4iKrDmLaIg3qDDwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U9c987bba274c704e4f6cbb2fe40149a9',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
