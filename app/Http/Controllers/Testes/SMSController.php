<?php

namespace App\Http\Controllers\Testes;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SMSController extends Controller
{
    public function enviar_sms_teste()
    {

      $api_key = 'jO3NSQ7Q1xaJUjyPV10vwWsy8eCHzDei';
      $project_id = 'PJ424705cda6df085a';
      $phone_id = 'PN38d3eb626d7b3278';

      if ($_SERVER['REQUEST_METHOD'] == 'GET')
      {
          $to_number = '842729086';
          $content = 'Hello world';

          $curl = curl_init();
          curl_setopt($curl, CURLOPT_URL,
              "https://api.telerivet.com/v1/projects/$project_id/messages/outgoing");
          curl_setopt($curl, CURLOPT_USERPWD, "{$api_key}:");
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(
              'content' => $content,
              'phone_id' => $phone_id,
              'to_number' => $to_number,
          ), '', '&'));

          // if you get SSL errors, download SSL certs from https://telerivet.com/_media/cacert.pem .
          // curl_setopt($curl, CURLOPT_CAINFO, dirname(__FILE__) . "/cacert.pem");

          $json = curl_exec($curl);
          $network_error = curl_error($curl);
          curl_close($curl);

          if ($network_error)
          {
              $message_html = "<div style='color:#900'>".htmlspecialchars($network_error)."</div>";
          }
          else
          {
              $res = json_decode($json, true);

              if (isset($res['error']))
              {
                  $message_html = "<div style='color:#900'>".htmlspecialchars($res['error']['message'])."</div>";
              }
              else
              {
                  $message_html = "Message sent! (status: ". htmlspecialchars($res['status']). ")";
                  $content = '';
              }
          }
      }
      else
      {
          $message_html = '';
          $to_number = '';
          $content = '';
      }

    }
}
