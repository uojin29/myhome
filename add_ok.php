<!DOCTYPE html>
<html>
<head></head>
<body>
<p>이름 : <?php echo $_POST['uname']; ?></p>
<p>아이디 : <?php echo $_POST['uid']?></p>
<p>비밀번호 : <?php echo $_POST['pwd']; ?></p>
<!--<p>이메일 : --><?php //echo $_POST['email']; ?><!--</p>-->
<p>휴대폰 번호 : <?php echo $_POST['p_num']; ?></p>
<p>성별 : <?php echo $_POST['gender']; ?></p>
<?php
if(isset($_POST["hobby"])) {
    $hobby=implode('와 ',$_POST["hobby"]);
    print $hobby;
} else {
    print "저의 취미는 없습니다.";
}
?>
<!--<p>고향 : --><?php //echo $_POST['city']; ?><!--</p>-->
<!--<p>자기소개 : --><?php //echo $_POST['content']; ?><!--</p>-->
<!--<p>생일 : --><?php //echo $_POST['from_date']; ?><!--</p>-->
</body>
</html>