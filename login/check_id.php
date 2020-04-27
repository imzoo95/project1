<meta charset="utf-8">
<?
   
   @extract($_POST);
   @extract($_GET);
   @extract($_SESSION);
    //$id='a'; id라는 변수가 넘어옴

    if(!$id) // 아이디가 없다면 
   {
      echo("아이디를 입력하세요."); //아이디를 입력하세요 라고 적어 둠
   }
   else
   {
      include "../lib/dbconn.php"; //DB연결하는것 
 
      $sql = "select * from member where id='$id' ";

      $result = mysql_query($sql, $connect);
      $num_record = mysql_num_rows($result);


     
      if ($num_record) // 레코드의 값이 있다면 참 
      {
       
         echo "<span style='color:red'>다른 아이디를 사용하세요.</span>"; //색상바꾸는 css를 직접 써놓음 
      }
      else
      {
         echo "<span style='color:green'>사용가능한 아이디입니다.</span>";
      }
    
 
      mysql_close();
   }

?>

