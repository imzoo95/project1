<?
    $connect=mysql_connect( "localhost", "zhuo95", "tjy679916@") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysql_select_db("zhuo95",$connect);
?>
<!--db연결시키는 코드
각각 페이지별로 연결시키는것보다 인클루드 시킨 페이지 하나만 수정하는게 편함
-->