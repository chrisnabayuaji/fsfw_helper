<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

  if(!function_exists('isUrlExist')) {
    function isUrlExist($url){
      $ch = curl_init($url);    
      curl_setopt($ch, CURLOPT_NOBODY, true);
      curl_exec($ch);
      $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

      if($code == 200){
        $status = true;
      }else{
        $status = false;
      }
      curl_close($ch);
      
      return $status;
    }
  }

  if(!function_exists('dateId2dateSys')) {
    function dateId2dateSys($date)
    {
      if ($date == '' || $date == null) {
        return '';
      }else{
        $raw = explode("-", $date);
        return $raw[2].'-'.$raw[1].'-'.$raw[0];
      }
    }
  }

  if(!function_exists('dateSys2dateId')) {
    function dateSys2dateId($date)
    {
      if($date == '' || $date == null){
        return '';
      }else{
        $raw = explode("-", $date);
        return $raw[2].'-'.$raw[1].'-'.$raw[0];
      }
    }
  }

  if(!function_exists('dateDifference')) {
    function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' ){
      $datetime1 = date_create($date_1);
      $datetime2 = date_create($date_2);
      
      $interval = date_diff($datetime1, $datetime2);
      
      return $interval->format($differenceFormat);
    }
  }

  if(!function_exists('monthId')) {
    function monthId($m){
      $m = intval($m);
      switch ($m) {
        case 1:
          return 'Januari';
          break;
        
        case 2:
          return 'Februari';
          break;

        case 3:
          return 'Maret';
          break;

        case 4:
          return 'April';
          break;

        case 5:
          return 'Mei';
          break;
        
        case 6:
          return 'Juni';
          break;

        case 7:
          return 'Juli';
          break;
        
        case 8:
          return 'Agustus';
          break;

        case 9:
          return 'September';
          break;

        case 10:
          return 'Oktober';
          break;

        case 11:
          return 'November';
          break;
        
        case 12:
          return 'Desember';
          break;
      }
    }
  }

  if(!function_exists('listMonthId')) {
    function listMonthId(){
      $data = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
      );
      return $data;
    }
  }

  if(!function_exists('dateId')) {
    function dateId($date){
      if($date == '' || $date == null){
        return '';
      }if ($date == '0000-00-00'){
        return '';
      }else{
        $raw = explode("-", $date);
        return $raw[2].' '.month_id($raw[1]).' '.$raw[0];
      }
    }
  }

  if (!function_exists('timeElapsed')) {
    function timeElapsed($datetime, $full = false) {
      $now = new DateTime;
      $ago = new DateTime($datetime);
      $diff = $now->diff($ago);

      $diff->w = floor($diff->d / 7);
      $diff->d -= $diff->w * 7;

      $string = array(
          'y' => 'tahun',
          'm' => 'bulan',
          'w' => 'minggu',
          'd' => 'hari',
          'h' => 'jam',
          'i' => 'menit',
          's' => 'detik',
      );
      foreach ($string as $k => &$v) {
          if ($diff->$k) {
              $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
          } else {
              unset($string[$k]);
          }
      }

      if (!$full) $string = array_slice($string, 0, 1);
      return $string ? implode(', ', $string) . ' yg lalu' : 'baru saja';
    }
  }

  if (!function_exists('wordLimiter')){
    function wordLimiter($str, $limit = 100, $end_char = '&#8230;'){
      if (trim($str) === ''){
        return $str;
      }

      preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $limit.'}/', $str, $matches);

      if (strlen($str) === strlen($matches[0])){
        $end_char = '';
      }

      return rtrim($matches[0]).$end_char;
    }
  }

  if (!function_exists('numId2numSys')){
    function numId2numSys($v){
      $res = str_replace('.', '', $v);
      $res = str_replace(',', '.', $res);
      return $res;
    }
  }

  if (!function_exists('numSys2numId')){
    function numSys2numId($v)
    {
      if(is_numeric($v)){
        $res = number_format($v, 0, ",", ".");
        return $res;
      }else{
        return $v;
      }
    }
  }