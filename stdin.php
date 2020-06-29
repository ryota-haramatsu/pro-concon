<!-- https://qiita.com/chimayu/items/118898f36d60a7a0ee6a -->
<?php
// 1:  cat test.txt | php index.php

// -----整数1つ-----
// $value = (int)fgets(STDIN);

// -----文字列1つ-----
// $value = rtrim(fgets(STDIN));

// -----整数半角スペース区切り-----
// $values = array_map('intval', explode(' ', fgets(STDIN)));
// var_dump($values);

// -----文字列半角スペース区切り-----
// $values = explode(' ', rtrim(fgets(STDIN)));
// var_dump($values);

// -----整数半角スペース区切り（分割代入）-----
// [$a, $b, $c] = array_map('intval', explode(' ', fgets(STDIN)));
// echo $a, $b, $c;

// -----文字列半角スペース区切り（分割代入）-----
// [$a, $b, $c] = explode(' ', rtrim(fgets(STDIN))));

// 複数業の数字
// while ($values = fgets(STDIN)){
//     echo $values;
// }

// trim ホワイトスペースの削除

// eplode 文字列を区切り文字で分割した結果を配列として返します。

// implode 
// 区切り文字で、配列の中身を連結したいときはimplode()を使用します。
// 引数には区切り文字として使用する文字列と、連結したい文字列の格納された配列を用意します。

// strtoupper

// mb_strtoupper

// strtolower

// mb_strtolower

// str_split — 文字列を配列に変換する

// str_replace — 検索文字列に一致したすべての文字列を置換する

// strpos — 文字列内の部分文字列が最初に現れる場所を見つける
// strpos(検索対象, 検索したい文字列)

// array_search — 指定した値を配列で検索し、見つかった場合に対応する最初のキーを返す
// array_search(検索したい文字列や数字, 配列)

// mb_substr_count — 部分文字列の出現回数を数える

