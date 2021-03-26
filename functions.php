<?php

// 自動で挿入されるｐタグを消去
add_action('init', function() {
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_content', 'wpautop');
  });
  add_filter('tiny_mce_before_init', function($init) {
  $init['wpautop'] = false;
  $init['apply_source_formatting'] = true;
  return $init;
  });


//スマホ表示分岐
function is_mobile(){
  $useragents = array(
      'iPhone', // iPhone
      'iPod', // iPod touch
      'Android.*Mobile', // 1.5+ Android *** Only mobile
      'Windows.*Phone', // *** Windows Phone
      'dream', // Pre 1.5 Android
      'CUPCAKE', // 1.5+ Android
      'blackberry9500', // Storm
      'blackberry9530', // Storm
      'blackberry9520', // Storm v2
      'blackberry9550', // Storm v2
      'blackberry9800', // Torch
      'webOS', // Palm Pre Experimental
      'incognito', // Other iPhone browser
      'webmate' // Other iPhone browser

  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// MW WP Form バリデーション追加
function my_required_phone( $validation, $data ) {
  $lists = $data['lists'];
  if( isset( $lists ) && $lists === 'ご自宅葬（コース）お申し込み' ) {
    $validation->set_rule( 'yourcourse', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
    $validation->set_rule( 'yourdate', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
    $validation->set_rule( 'yourtime', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
    $validation->set_rule( 'yourdate2', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
    $validation->set_rule( 'yourtime2', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
    $validation->set_rule( 'yourdate3', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
    $validation->set_rule( 'yourtime3', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
    $validation->set_rule( 'yourdate4', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
    $validation->set_rule( 'yourtime4', 'noEmpty', array( 'message' => '連絡方法に「ご自宅葬（コース）お申し込み」を選択した場合、入力は必須です。') );
  } else if( isset( $lists ) && $lists === 'ご自宅葬（単品）お申し込み' ) {
    $validation->set_rule( 'yourcourse02', 'noEmpty', array( 'message' => '連絡方法に「ご⾃宅葬(単品)お申し込み」を選択した場合、入力は必須です。') );
  }
  return $Validation;
}

add_filter( 'mwform_validation_mw-wp-form-24', 'my_required_phone', 10, 2 );
