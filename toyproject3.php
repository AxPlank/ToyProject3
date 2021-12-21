<?php
// 데이터베이스 호출
$conn = mysqli_connect("localhost", "root", "joongseok03", "toyproject3");

// 어레이 변환 함수
function change_array($id) {
    $id = explode(",", $id);
    array_splice($id, count($id) - 1, 1);
    return $id;
}

// 12운성
$sql = "select * from 12운성";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $unsung_result1 = $unsung_result1."{$row['갑']},";
    $unsung_result2 = $unsung_result2."{$row['을']},";
    $unsung_result3 = $unsung_result3."{$row['병']},";
    $unsung_result4 = $unsung_result4."{$row['정']},";
    $unsung_result5 = $unsung_result5."{$row['무']},";
    $unsung_result6 = $unsung_result6."{$row['기']},";
    $unsung_result7 = $unsung_result7."{$row['경']},";
    $unsung_result8 = $unsung_result8."{$row['신']},";
    $unsung_result9 = $unsung_result9."{$row['임']},";
    $unsung_result10 = $unsung_result10."{$row['계']},";
    $unsung_cond = $unsung_cond."{$row['조건']},";
}
$unsung_result = Array($unsung_result1, $unsung_result2, $unsung_result3, $unsung_result4, $unsung_result5, $unsung_result6, $unsung_result7, $unsung_result8, $unsung_result9, $unsung_result10);
for ($i = 0; $i < count($unsung_result); $i++) {
    $unsung_result[$i] = change_array($unsung_result[$i]);
}
$unsung_cond = change_array($unsung_cond);

// 12신살
$sql = "select * from 12신살";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $sinsal_result1 = $sinsal_result1."{$row['신자진']},";
    $sinsal_result2 = $sinsal_result2."{$row['해묘미']},";
    $sinsal_result3 = $sinsal_result3."{$row['인오술']},";
    $sinsal_result4 = $sinsal_result4."{$row['사유축']},";
}
$sinsal_result1 = change_array($sinsal_result1);
$sinsal_result2 = change_array($sinsal_result2);
$sinsal_result3 = change_array($sinsal_result3);
$sinsal_result4 = change_array($sinsal_result4);

// 귀문관살
$sql = "select * from 귀문관살";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $ghost_cond = $ghost_cond."{$row['조건']},";
}
$ghost_cond = change_array($ghost_cond);

// 홍염살
$sql = "select * from 홍염살";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $hongyeom_cond = $hongyeom_cond."{$row['조건']},";
}
$hongyeom_cond = change_array($hongyeom_cond);

// 양인살
$sql = "select * from 양인살";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $yangin_cond = $yangin_cond."{$row['조건']},";
}
$yangin_cond = change_array($yangin_cond);

// 백호대살
$sql = "select * from 백호대살";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $whitetiger_cond = $whitetiger_cond."{$row['조건']},";
}
$whitetiger_cond = change_array($whitetiger_cond);

// 괴강살
$sql = "select * from 괴강살";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    $goegang_cond = $goegang_cond."{$row['조건']},";
}
$goegang_cond = change_array($goegang_cond);

?>

<html>
    <head>
        <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
        <meta charset="utf-8">
    </head>
    <body>
    <html>
    <head>
        <meta charset='utf-8'>
        <style type="text/css">
            @font-face {
                src: url("XiaolaiMonoSC-Regular.ttf");
                font-family: "Xiafont";
            }
            
            body {
                font-family: "Xiafont";
                background-color: beige
            }

            .blackk { font-size: 50pt; color: black; font-weight: border; text-shadow: 1px 1px 1px black; }

            #explain {
                float: left;
                margin-left: 90px;
                margin-right: 90px;
                margin-top: 90px;
                margin-bottom: 45px;
            }

            #sajutable {
                float: left;
                margin-left: 270px;
                margin-right: 90px;
                margin-top: 90px;
                margin-bottom: 45px;
            }

            #timetable {
                float: left;
                margin-left: 100px;
            }

            table {
               table-layout: fixed; 
            }

            a:link {
                color: black;
            }

            a:visited {
                color: black;
            }

            a:hover {
                color :black;
            }
        </style>
    </head>
    <body>
        <div id="sajutable">
            <!-- 사주팔자 출력 테이블 -->
            <table align="center" border="2" width="600" id="sajutablee">
                <tr height="120">
                    <td width="100"></td>
                    <td align="center" width="120"><b><font size="6"> 시 </font></b></td>
                    <td align="center" width="120"><b><font size="6"> 일 </font></b></td>
                    <td align="center" width="120"><b><font size="6"> 월 </font></b></td>
                    <td align="center" width="120"><b><font size="6"> 년 </font></b></td>
                </tr>
                <tr align="center" height="120">
                    <td><font size="4"><b> 천간 </b></font></td>
                    <td id="time_sky" class="blackk"></td>
                    <td id="day_sky" class="blackk"></td>
                    <td id="month_sky" class="blackk"></td>
                    <td id="year_sky" class="blackk"></td>
                </tr>
                <tr align="center" height="120">
                    <td><font size="4"><b> 지지 </b></font></td>
                    <td id="time_ground" class="blackk"></td>
                    <td id="day_ground" class="blackk"></td>
                    <td id="month_ground" class="blackk"></td>
                    <td id="year_ground" class="blackk"></td>
                </tr>
                <tr align="center" >
                    <td><font size="4"><b> 12운성 </b></font></td>
                    <td id="time_12unsung" class="">  </td>
                    <td id="day_12unsung" class="">  </td>
                    <td id="month_12unsung" class="">  </td>
                    <td id="year_12unsung" class="">  </td>
                </tr>
                <tr align="center" >
                    <td><font size="4"><b> 12신살 </b></font></td>
                    <td id="time_12sal" class="">  </td>
                    <td id="day_12sal" class="">  </td>
                    <td id="month_12sal" class="">  </td>
                    <td id="year_12sal" class="">  </td>
                </tr>
                <tr align="center" >
                    <td><font size="4"><b> 기타 </b></font></td>
                    <td id="time_othersal" class="">  </td>
                    <td id="day_othersal" class="">  </td>
                    <td id="month_othersal" class="">  </td>
                    <td id="year_othersal" class="">  </td>
                </tr>
            </table>
        </div>
        <div id="explain">
            <p align="center">
                <b><br><font size="4"> 1. 년주, 월주, 일주는 "<a href="https://www.sajulink.com/ssMain/cal_2.jsp" target="_blank">여기</a>" 를 참고하여 입력하세요. </br>
                <br><font size="4"> 2. 시주는 아래의 표를 참고하여 입력하세요. </font></br>
                <br><font size="4"> 3. 모두 한자로 입력하세요 </font></br>
                <br><font size="4"> 4. 사주팔자 등록하고 싶을 떄: ID를 입력하고 등록하기 버튼 클락! </font></br>
                <br><font size="4"> 5. 설명 보려면 사진 클릭! </font><a href="explain.html"><img src="meow.gif" width="30" height="30"></img></a> </br></b>

                <!-- 사주팔자 입력, 등록, 검색-->
                <form action="toyproject3_add.php" method="POST" align="center">
                    <br>
                        <b> 년 </b> <input type="text" id="text_year" maxlength="2" name="year"> &nbsp;&nbsp;&nbsp;
                        <b> 월 </b> <input type="text" id="text_month" maxlength="2" name="month"><br>
                    </br>
                    <br>
                        <b> 일 </b> <input type="text" id="text_day" maxlength="2" name="day"> &nbsp;&nbsp;&nbsp;
                        <b> 시 </b> <input type="text" id="text_time" maxlength="2" name="time">
                    </br>
                    <br>
                    <button type="button" id="btn1" onclick="printt()"> 입력 </button> 
                    <button type="button" id="btn2" onclick="clearr()"> 초기화 </button> 
                    <br><br>
                    <b> ID </b> <input type="text" name="add_id" maxlength="20"> &nbsp;&nbsp;&nbsp;
                    <input type="submit" id="add" value="등록">
                </form>
                <br><br>
                <form action="toyproject3_select.php" method="POST">
                    <b> ID </b> <input type="text" name="select_id" maxlength="20"> &nbsp;&nbsp;&nbsp;
                    <input type="submit" id="select" value="로그인"> 
                </form>
            </p>
        </div>
        <div id="timetable">
            <table align="center" border="2">
                <tr align="center" height="35">
                    <td width="60" rowspan="2"> 일간 </td>
                    <td width="120"> 00:00 ~ 01:30 </td>
                    <td width="120"> 01:30 ~ 03:30 </td>
                    <td width="120"> 03:30 ~ 05:30 </td>
                    <td width="120"> 05:30 ~ 07:30 </td>
                    <td width="120"> 07:30 ~ 09:30 </td>
                    <td width="120"> 09:30 ~ 11:30 </td>
                    <td width="120"> 11:30 ~ 13:30 </td>
                    <td width="120"> 13:30 ~ 15:30 </td>
                    <td width="120"> 15:30 ~ 17:30 </td>
                    <td width="120"> 17:30 ~ 19:30 </td>
                    <td width="120"> 19:30 ~ 21:30 </td>
                    <td width="120"> 21:30 ~ 23:30 </td>
                    <td width="120"> 23:30 ~ 24:00 </td>
                </tr>
                <tr align="center" height="35">
                    <td> 朝子 </td>
                    <td> 丑 </td>
                    <td> 寅 </td>
                    <td> 卯 </td>
                    <td> 辰 </td>
                    <td> 巳 </td>
                    <td> 午 </td>
                    <td> 未 </td>
                    <td> 申 </td>
                    <td> 酉 </td>
                    <td> 戌 </td>
                    <td> 亥 </td>
                    <td> 夜亥 </td>
                </tr>
                <tr align="center" height="35">
                    <td> 甲, 己 </td>
                    <td> 甲子 </td>
                    <td> 乙丑 </td>
                    <td> 丙寅 </td>
                    <td> 丁卯 </td>
                    <td> 戊辰 </td>
                    <td> 己巳 </td>
                    <td> 庚午 </td>
                    <td> 辛未 </td>
                    <td> 壬申 </td>
                    <td> 癸酉 </td>
                    <td> 甲戌 </td>
                    <td> 乙亥 </td>
                    <td> 丙子 </td>
                </tr>
                <tr align="center" height="35">
                    <td> 乙, 庚 </td>
                    <td> 丙子 </td>
                    <td> 丁丑 </td>
                    <td> 戊寅 </td>
                    <td> 己卯 </td>
                    <td> 庚辰 </td>
                    <td> 辛巳 </td>
                    <td> 壬午 </td>
                    <td> 癸未 </td>
                    <td> 甲申 </td>
                    <td> 乙酉 </td>
                    <td> 丙戌 </td>
                    <td> 丁亥 </td>
                    <td> 戊子 </td>
                </tr>
                <tr align="center" height="35">
                    <td> 丙, 辛 </td>
                    <td> 戊子 </td>
                    <td> 己丑 </td>
                    <td> 庚寅 </td>
                    <td> 辛卯 </td>
                    <td> 壬辰 </td>
                    <td> 癸巳 </td>
                    <td> 甲午 </td>
                    <td> 乙未 </td>
                    <td> 丙申 </td>
                    <td> 丁酉 </td>
                    <td> 戊戌 </td>
                    <td> 己亥 </td>
                    <td> 庚子 </td>
                </tr>
                <tr align="center" height="35">
                    <td> 丁, 壬 </td>
                    <td> 庚子 </td>
                    <td> 辛丑 </td>
                    <td> 壬寅 </td>
                    <td> 癸卯 </td>
                    <td> 甲辰 </td>
                    <td> 乙巳 </td>
                    <td> 丙午 </td>
                    <td> 丁未 </td>
                    <td> 戊申 </td>
                    <td> 己酉 </td>
                    <td> 庚戌 </td>
                    <td> 辛亥 </td>
                    <td> 壬子 </td>
                </tr>
                <tr align="center" height="35">
                    <td> 戊, 癸 </td>
                    <td> 壬子 </td>
                    <td> 癸丑 </td>
                    <td> 甲寅 </td>
                    <td> 乙卯 </td>
                    <td> 丙辰 </td>
                    <td> 丁巳 </td>
                    <td> 戊午 </td>
                    <td> 己未 </td>
                    <td> 庚申 </td>
                    <td> 辛酉 </td>
                    <td> 壬戌 </td>
                    <td> 癸亥 </td>
                    <td> 甲子 </td>
                </tr>
            </table>
        </div>

        <script type="text/javascript">
            // 테이블 정렬
            var arr_ground = ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];
            var arr_sky = ["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
            
            // 메인함수
            function printt() {
                inputt();
                stylee();
                showw();
            }
            // 테이블에 글자 입력
            function inputt() {
                // 테이블에 년주 입력 
                document.getElementById("year_sky").innerHTML = document.getElementById("text_year").value[0];
                document.getElementById("year_ground").innerHTML = document.getElementById("text_year").value[1];
                // 테이블에 월주 입력
                document.getElementById("month_sky").innerHTML = document.getElementById("text_month").value[0];
                document.getElementById("month_ground").innerHTML = document.getElementById("text_month").value[1];
                // 테이블에 일주 입력
                document.getElementById("day_sky").innerHTML = document.getElementById("text_day").value[0];
                document.getElementById("day_ground").innerHTML = document.getElementById("text_day").value[1];
                // 테이블에 시주 입력
                if (document.getElementById("text_time").value == "") {
                    document.getElementById("time_ground").innerHTML = "";
                    document.getElementById("time_sky").innerHTML = "";
                }
                else {
                    document.getElementById("time_sky").innerHTML = document.getElementById("text_time").value[0];
                    document.getElementById("time_ground").innerHTML = document.getElementById("text_time").value[1];
                }
                // 빈 칸이 있을 경우
                novalue();
            }

            // 빈 칸이 존재할 때 출력
            function novalue() {
                if ((document.getElementById("year_sky").innerHTML == "undefined") || (document.getElementById("month_sky").innerHTML == "undefined") || (document.getElementById("day_sky").innerHTML == "undefined") || (document.getElementById("year_ground").innerHTML == "undefined") || (document.getElementById("month_ground").innerHTML == "undefined") || (document.getElementById("day_ground").innerHTML == "undefined")) {
                    alert("빈 자리가 존재합니다.");
                    document.getElementById("year_sky").innerHTML = "";
                    document.getElementById("month_sky").innerHTML = "";
                    document.getElementById("day_sky").innerHTML = "";
                    document.getElementById("time_sky").innerHTML = "";
                    document.getElementById("year_ground").innerHTML = "";
                    document.getElementById("month_ground").innerHTML = "";
                    document.getElementById("day_ground").innerHTML = "";
                    document.getElementById("time_ground").innerHTML = "";
                }
            }
            
            // 글자별 스타일 지정
            function stylee() {
                // 년주 스타일 지정
                skyy("year_sky");
                groundd("year_ground");
                // 월주 스타일 지정
                skyy("month_sky");
                groundd("month_ground");
                // 일주 스타일 지정
                skyy("day_sky");
                groundd("day_ground");
                //시주 스타일 지정
                skyy("time_sky");
                groundd("time_ground");
            }

            // 천간 스타일지정
            function skyy(id) {
                var sky = document.getElementById(id).innerHTML;
                if ((sky == "壬") || (sky == "癸")) {
                    jQuery('#'+id).css('color', 'black');
                }
                else if ((sky == "甲") || (sky == "乙")) {
                    jQuery('#'+id).css('color', 'green');
                }
                else if ((sky == "丙") || (sky == "丁")) {
                    jQuery('#'+id).css('color', 'red');
                }
                else if ((sky == "戊") || (sky == "己")) {
                    jQuery('#'+id).css('color', '#ffca34ff');
                }
                else if ((sky == "庚") || (sky == "辛")) {
                    jQuery('#'+id).css('color', '#e9e9e9ff');
                }
            }
            
            // 지지 스타일 지정
            function groundd(id) {
                var sky = document.getElementById(id).innerHTML;
                if ((sky == "子") || (sky == "亥")) {
                    jQuery('#'+id).css('color', 'black');
                }
                else if ((sky == "甲") || (sky == "乙")) {
                    jQuery('#'+id).css('color', 'green');
                }
                else if ((sky == "寅") || (sky == "卯")) {
                    jQuery('#'+id).css('color', 'green');
                }
                else if ((sky == "巳") || (sky == "午")) {
                    jQuery('#'+id).css('color', 'red');
                }
                else if ((sky == "申") || (sky == "酉")) {
                    jQuery('#'+id).css('color', '#e9e9e9ff');
                }
                else {
                    jQuery('#'+id).css('color', '#ffca34ff');
                }
            }
            
            // 시즈필지 결과물 출력
            function showw() {
                //12운성 출력
                unsung12("year_ground", "year_12unsung");
                unsung12("month_ground", "month_12unsung");
                unsung12("day_ground", "day_12unsung");
                unsung12("time_ground", "time_12unsung");

                // 12신살 출력
                sal12("year_ground", "year_12sal");
                sal12("month_ground", "month_12sal");
                sal12("day_ground", "day_12sal");
                sal12("time_ground", "time_12sal");

                // 기타신살 출력
                // 기본값
                defaultothersal();
                // 귀문관살
                ghostsal("month_ground", "month_othersal");
                ghostsal("time_ground", "time_othersal");
                //양인살
                yanginsal("year_ground", "year_othersal");
                yanginsal("month_ground", "month_othersal");
                yanginsal("day_ground", "day_othersal");
                yanginsal("time_ground", "time_othersal");
                // 홍염살
                hongyeomsal("year_ground", "year_othersal");
                hongyeomsal("month_ground", "month_othersal");
                hongyeomsal("day_ground", "day_othersal");
                hongyeomsal("time_ground", "time_othersal");
                // 백호대살
                whitetigersal("text_year", "year_othersal");
                whitetigersal("text_month", "month_othersal");
                whitetigersal("text_day", "day_othersal");
                whitetigersal("text_time", "time_othersal");
                // 괴강살
                goegangsal("text_year", "year_othersal");
                goegangsal("text_month", "month_othersal");
                goegangsal("text_time", "time_othersal");
            }

            // 12운성 출력함수
            function unsung12(id1, id2) {
                var char1 = document.getElementById("day_sky").innerHTML;
                var char2 = document.getElementById(id1).innerHTML;
                var result = <?php echo json_encode($unsung_result) ?>;
                var cond = <?php echo json_encode($unsung_cond) ?>;

                for (var i = 0; i < arr_sky.length; i++) {
                    for (var j = 0; j < cond.length; j++) {
                        if ((char1 == arr_sky[i]) && (char2 == cond[j])) {
                            document.getElementById(id2).innerHTML = result[i][j];
                            break;
                        }
                    }
                }
            }
            
            // 12신살 출력함수
            function sal12(id1, id2) {
                // 12신살 조건
                var cond1 = (document.getElementById("year_ground").innerHTML == "申") || (document.getElementById("year_ground").innerHTML == "子") || (document.getElementById("year_ground").innerHTML == "辰");
                var cond2 = (document.getElementById("year_ground").innerHTML == "寅") || (document.getElementById("year_ground").innerHTML == "午") || (document.getElementById("year_ground").innerHTML == "戌");
                var cond3 = (document.getElementById("year_ground").innerHTML == "亥") || (document.getElementById("year_ground").innerHTML == "卯") || (document.getElementById("year_ground").innerHTML == "未");
                var cond4 = (document.getElementById("year_ground").innerHTML == "巳") || (document.getElementById("year_ground").innerHTML == "酉") || (document.getElementById("year_ground").innerHTML == "丑");
                // 12신살 삼합별 순서
                var arr_1 = <?php echo json_encode($sinsal_result1) ?>;
                var arr_2 = <?php echo json_encode($sinsal_result2) ?>;
                var arr_3 = <?php echo json_encode($sinsal_result3) ?>;
                var arr_4 = <?php echo json_encode($sinsal_result4) ?>;
                // 12신살 출력 함수
                for (var i = 0; i < 12; i++) {
                    if (cond1 && (document.getElementById(id1).innerHTML == arr_ground[i])) {
                        document.getElementById(id2).innerHTML = arr_1[i] + "<br>";
                    }
                    if (cond2 && (document.getElementById(id1).innerHTML == arr_ground[i])) {
                        document.getElementById(id2).innerHTML = arr_2[i] + "<br>";
                    }
                    if (cond3 && (document.getElementById(id1).innerHTML == arr_ground[i])) {
                        document.getElementById(id2).innerHTML = arr_3[i] + "<br>";
                    }
                    if (cond4 && (document.getElementById(id1).innerHTML == arr_ground[i])) {
                        document.getElementById(id2).innerHTML = arr_4[i] + "<br>";
                    }
                }
            }

            // 기타 신살 출력함수
            function defaultothersal() {
                document.getElementById("year_othersal").innerHTML = "";
                document.getElementById("month_othersal").innerHTML = "";
                document.getElementById("day_othersal").innerHTML = "";
                document.getElementById("time_othersal").innerHTML = "";
            }
            
            // 귀문관살 출력함수
            function ghostsal(id1, id2) {
                var char1 = document.getElementById("day_ground").innerHTML;
                var char2 = document.getElementById(id1).innerHTML;
                var cond = <?php echo json_encode($ghost_cond) ?> ;

                for (var i = 0; i < cond.length; i++) {
                    if ((char1 + char2 == cond[i]) || (char2 + char1 == cond[i])) {
                        document.getElementById(id2).innerHTML += "귀문관살" + "<br>";
                    }
                }

            }
            
            // 양인살 출력함수
            function yanginsal(id1, id2) {
                var cond = <?php echo json_encode($yangin_cond) ?>;
                var char1 = document.getElementById("day_sky").innerHTML;
                var char2 = document.getElementById(id1).innerHTML;

                for (var i = 0; i < cond.length; i++) {
                    if (char1 + char2 == cond[i]) {
                        document.getElementById(id2).innerHTML += "양인살" + "<br>";
                    }
                }
            }
            
            // 홍염살 출력함수
            function hongyeomsal(id1, id2) {
                var cond = <?php echo json_encode($hongyeom_cond) ?>;
                var char1 = document.getElementById("day_sky").innerHTML;
                var char2 = document.getElementById(id1).innerHTML;

                for (var i = 0; i < cond.length; i++) {
                    if(char1 + char2 == cond[i]) {
                        document.getElementById(id2).innerHTML += "홍염살" + "<br>";
                    }
                }
            }
            
            // 백호대살 출력함수
            function whitetigersal(id1, id2) {
                var cond = <?php echo json_encode($whitetiger_cond) ?>;

                for (var i = 0; i < cond.length; i++) {
                    if (document.getElementById(id1).value == cond[i]) {
                        document.getElementById(id2).innerHTML += "백호대살" + "<br>";
                    }
                }
            }
            
            function goegangsal(id1, id2) {
                var cond = <?php echo json_encode($goegang_cond) ?>;
                for (var i = 0; i < cond.length; i++) {
                    for (var j = 0; j < 2; j++) {
                        if (document.getElementById("text_day").value == cond[i]) {
                            document.getElementById("day_othersal").innerHTML = "괴강살" + "<br>";
                        }
                        if ((document.getElementById("text_day").value == cond[i]) && (document.getElementById(id1).value[1] == cond[j].charAt(1))) {
                            document.getElementById(id2).innerHTML = "괴강살" + "<br>";
                        }
                    }
                }
            }
            
            // 초기화
            function clearr() {
                // 12운성 초기화
                document.getElementById("year_12unsung").innerHTML = "";
                document.getElementById("month_12unsung").innerHTML = "";
                document.getElementById("day_12unsung").innerHTML = "";
                document.getElementById("time_12unsung").innerHTML = "";
                // 12신살 초기화
                document.getElementById("year_12sal").innerHTML = "";
                document.getElementById("month_12sal").innerHTML = "";
                document.getElementById("day_12sal").innerHTML = "";
                document.getElementById("time_12sal").innerHTML = "";
                // 지지 초기화
                document.getElementById("time_ground").innerHTML = "";
                document.getElementById("year_ground").innerHTML = "";
                document.getElementById("day_ground").innerHTML = "";
                document.getElementById("month_ground").innerHTML = "";
                // 천간 초기화
                document.getElementById("year_sky").innerHTML = "";
                document.getElementById("month_sky").innerHTML = "";
                document.getElementById("day_sky").innerHTML = "";
                document.getElementById("time_sky").innerHTML = "";
                // 기타신살 초기화
                document.getElementById("year_othersal").innerHTML = "";
                document.getElementById("month_othersal").innerHTML = "";
                document.getElementById("day_othersal").innerHTML = "";
                document.getElementById("time_othersal").innerHTML = "";
            }   
        </script>
    </body>
</html> 