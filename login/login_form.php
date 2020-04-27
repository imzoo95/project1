<?
	session_start();
    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION);  
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="./login_form.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
<div id="wrap">
       
    <form  name="member_form" method="post" action="login.php"> 
        
		<div id="title">
			<img src="../images/5stardium.JPG" alt="5stardium">
		</div>
           
        <div class="login_wrap">
            <!--<div class="id_pw_title">
            <ul>
                    <li>아이디</li>
                    <li> 비밀번호</li>
                </ul>`
            </div>-->
            <div class="id_pw_input">
                <ul>
                    <li>
                        <input type="text" name="id" class="login_input" placeholder="아이디를 입력하세요">
                    </li>
                    <li>
                        <input type="password" name="pass" class="login_input" placeholder="비밀번호를 입력하세요">
                    </li>
                </ul>
                	
                <div class="login_button">
                    <input type="submit"> <!--타입 서브밋과 같음 , 타입 이미지는 src 속성도 사용할수있음-->
                </div>					
            </div>
            
        </div>

            <div id="join_button"><!--<img src="../img/no_join.gif">-->&nbsp;&nbsp;&nbsp;&nbsp;<a href="../member/member_form.php"><!--<img src="../img/join_button.gif">--></a></div>

	    </form>


</div> <!-- end of wrap -->

</body>
</html>