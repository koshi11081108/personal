<?php

function set_count( $file_name = "counter.txt"){
	if( file_exists($file_name) ){

		// ファイルを読み込む
		// カウンターの数字を増やす
		$count = (int)file_get_contents($file_name) +1;
		
		// ファイルに書き込む
		file_put_contents($file_name, $count);		

	}else{
		// ファイルが存在しなかった場合の処理
		// ファイルを作成する
		$handle = fopen($file_name , 'w+');
		$count = 1;
		
		fwrite($handle, $count);
		fclose($handle);
	}
	
	// ここを追加
	return $count;
}
