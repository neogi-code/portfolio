<html>
<body>
<?php
//send email
$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'] ;
$location = $_POST['location'];
$city = $_POST['city'];
$argue = $_POST['argue'];
$date = $_POST['date'];
$title = $_POST['title'];
$suggest = $_POST['suggest'];

$mailTo = 'mealtop@mealtop.com'; //받는 메일 주소
$mailSubject = $name."님께서 문의사항이 있습니다";//메일 제목
$mailContent = '이름 :'.$name.'<br>'//메일 내용
		.'연락처: '.$tel.'<br>'
		.'Email: '.$email.'<br>'
		.'가맹희망지역: '.$location.'&nbsp;'.$city.'<br>'
        .'상담유형: '.$argue.'<br>'
        .'상담희망일: '.$date.'<br>'
        .'제목: '.$title.'<br>'
        .'문의내용: '.$suggest.'<br>';
$mailHeader = "From: $name.<$email>\r\n";
$mailHeader .= "MIME-Version: 1.0\r\n";
$mailHeader .= "Content-type: text/html; charset=euc-kr\r\n";
$mailResult = mail ($mailTo, $mailSubject,$mailContent, $mailHeader);
if (true == $mailResult) {
                print('<script>
                    alert("정상적으로 접수되었습니다. \n빠른 시일 내에 연락드리도록 하겠습니다.");
                    history.back(-1);
                </script>');
        }
        else {
                print("<script>
                    alert('접수가 되지 않았습니다. 다시 한번 확인 부탁드립니다.');
                    history.back(-1);
                </script>");
        }
?>
</body>
</html>