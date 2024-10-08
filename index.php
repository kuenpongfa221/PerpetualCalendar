<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>萬年曆</title>
    <link rel="icon" href="./images/title/calendar.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        /*請在這裹撰寫你的CSS*/
        * {
            /* box-sizing: border-box; */
            font-family: '微軟正黑體';
            margin: 0;
            padding: 0;
            /* color: white; */
        }

        body {
            width: 100%;
            height: 80vh;
            background-image: url('./images/star-night.jpg');
            background-size: 100% 100vh;
            overflow-x: hidden;
            transition: 2s;
            /* backdrop-filter: blur(40px); */
        }

        .body-hover {
            backdrop-filter: blur(40px);
        }

        h1 {
            text-align: center;
            color: white;
            font-size: 3rem;
        }

        .body-container {
            width: 100%;
            height: 102%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: relative;

            /* background-color:white; */
            /* background-image: linear-gradient(
                rgba(255, 255, 255, 0.5),
                rgba(255, 255, 255, 0.5)
            );
            border-radius: 10px; */
        }

        #canvas {
            position: absolute;
            z-index: -1;
        }

        .mask-container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.5),
                    rgba(255, 255, 255, 0.5));

        }

        .mask-container-hover {
            box-shadow: 0px 25px 60px rgb(255, 255, 255, .8);

        }

        /* 1. aside-left-container */
        .aside-left-container {
            width: 300px;
            height: 614.22px;
            /* background-color: palegreen; */
        }

        .date-time-container {
            width: 100%;
            height: 20%;
            /* background-color: HotPink; */
            font-size: 2rem;
            /* text-align:center; */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .weather-container {
            width: 100%;
            height: 53%;
            /* background-color: salmon; */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .weather-container>.weather-title {
            width: 100%;
            flex-basis: 17%;
            /* background-color: khaki; */

            font-size: 2rem;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .weather-container>.weather-icon {
            width: 70%;
            border-radius: 35%;
            flex-basis: 53%;
            /* background-color: tomato; */
            background-color: #66849A;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .weather-container>.weather-minT-maxT {
            width: 100%;
            font-size: 1.5rem;
            flex-basis: 15%;
            /* background-color: Thistle; */

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .weather-container>.weather-pop12h {
            width: 100%;
            font-size: 1.5rem;
            flex-basis: 15%;
            /* background-color: lightSeaGreen; */

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .todolist-container {
            width: 100%;
            height: 27%;
            min-height: 300px;
        }

        .todolist-container>.todolist-title {
            width: 100%;
            font-size: 2rem;
        }

        .todolist-container>.todolist-row {
            display: flex;
            width: 100%;
            margin-left: 10px;

            font-size: 1.5rem;
        }

        .todolist-row>.todolist-item-1 {
            width: 80%;
        }

        .todolist-row>.todolist-item-2 {
            width: 80%;
        }

        .todolist-row>.todolist-item-3 {
            width: 80%;
        }

        /* 2. calendar-container */
        .calendar-container {
            width: 700px;
            /* background-color: khaki; */
        }

        .flex-container-calendar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        /* year-month-deadline-container */
        .year-month-deadline-container {
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #264460;
            color: ghostwhite;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .year-month-deadline-container>select {
            width: 80px;
            height: 32px;
            font-size: 1.25rem;
            text-align: center;
            margin-left: 10px;
            border-radius: 10px;
        }

        .year-month-deadline-container>.chinese-year-month {
            font-size: 1.5rem;
            font-weight: bold;
        }



        /* week & item */
        .week {
            width: calc(100%/7);
            height: calc(600px / 12);
            /* background-color: greenyellow; */
        }

        .week-text-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .item {
            /* background-color: dodgerblue; */
            /* color: ghostwhite; */
            color: black;
            border: 1px solid gray;

            flex-basis: calc(100% / 7);
            height: calc(600px / 7);

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            font-weight: bold;
        }

        .item:hover {
            transition: all 0.4s ease;
            transform: scale(1.3);
        }

        .item-weekend {
            /* background-color: maroon; */
            background-color: #264460;
            color: ghostwhite;
            border: 1px solid gray;
            /* color: black; */

            flex-basis: calc(100% / 7);
            height: calc(600px / 7);

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .item-weekend:hover {
            transition: all 0.2s ease;
            transform: scale(1.3);
        }

        .not-this-month-font-color {
            color: gray;
        }

        /* 陽曆row row-solar */
        .row-solar {
            height: 45%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .row-solar-date {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

            /* background-color: khaki;
            border-radius: 100%;
            font-weight:bold; */
        }

        .row-solar-festival {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .today-solor-color {
            color: white;
            text-shadow: 0 0 5px crimson;
            /* text-shadow: 1px 1px rgba(220,220,220,.8),2px 2px rgba(220,220,220,.8),3px 3px rgba(220,220,220,.8),4px 4px rgba(220,220,220,.8),5px 5px rgba(220,220,220,.8); */
            /* background-color: khaki; */
            border-radius: 100%;
            font-weight: bold;
            font-size: 2rem;
            width: 50px;
            height: 50px;
        }

        /* 陰曆row row-lunar */
        .row-lunar {
            height: 55%;
            margin-top: 24px;
        }

        /* 3. calendar-right-container */
        .calendar-right-container {
            width: 80px;
            height: 614.22px;
            /* background-color: LemonChiffon; */
        }

        .flex-container-change {
            width: 70px;
            height: 614.22px;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 101px;
        }

        .flex-container-change>a {
            width: 50px;
            height: 30px;

            color: black;
            text-decoration: none;
            border: 2px solid black;
            background-color: rgb(222, 222, 222);
            border-radius: 5px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* 4. aside-right-container*/
        .aside-right-container {
            width: 400px;
            height: 614.22px;
            /* background-color: palevioletred; */
        }

        .aside-right-content-container {
            width: 90%;
            height: 100%;
            /* border: 2px double khaki; */
            margin: auto;
        }

        .today-fortune {
            /* border: 2px double lawngreen; */
            width: auto;
            height: 57px;
            margin-top: 10px;

            font-size: 2.5rem;

            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .display-card {
            /* border: 2px double lawngreen; */
            width: 100%;
            height: 46%;
            margin-top: 20px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .display-card>.target {
            width: 102px;
            height: 160px;
            display: flex;
            border: 2px solid black;
            margin-top: 10px;
        }

        .display-card>.daily-tarot>a {
            text-decoration: none;
            color: black;
            font-size: 1.25rem;
        }

        .display-card>.daily-tarot>a:hover {
            text-decoration: none;
            color: red;
            font-size: 1.25rem;
        }

        .display-card>.nes-tarot>a {
            text-decoration: none;
            color: black;
            font-size: 1rem;
        }

        .display-card>.nes-tarot>a:hover {
            text-decoration: none;
            color: red;
            font-size: 1rem;
        }

        .tarots {
            /* border: 2px double lawngreen; */
            width: 100%;
            height: 28%;
            margin-top: 20px;

            position: relative;

            /* display: flex;
            justify-content: space-around;
            flex-wrap:wrap; */
        }

        .tarot-image {
            width: 51px;
            height: 80px;

            position: absolute;

            /* 設定子元素在 3D 空間內 */
            transform-style: preserve-3d;
            /* display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap; */
        }

        .tarot-image:hover {
            transition: all 0.5s ease;
            transform: translateY(-10px);
            cursor: pointer;
        }

        .tarot-image>.tarot-image-back {
            /* width: 100%;
            height: 100%; */
            width: 51px;
            height: 82px;
            position: absolute;
            /* background-image:url(./images/tarotBack.jpg); */
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            backface-visibility: hidden;
        }

        .tarot-image-back>img {
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .tarot-image>.tarot-image-front {
            width: 100%;
            height: 100%;
            position: absolute;
            /* background-image: url(./images/tarot/wands01.jpg); */
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            backface-visibility: hidden;
            transform: rotateY(180deg);
        }

        .tarot-image-front>img {
            width: 100%;
            height: 100%;
            /* backface-visibility: hidden;
            transform: rotateY(180deg); */
        }

        .tarot-card-close {
            transform: rotateY(180deg);
        }

        .deal-container {
            /* border: 2px double lawngreen; */
            width: 100%;
            height: calc(614.22px - 74% - 110px);

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .deal {
            width: 75px;
            height: 35px;

            border: 1px solid black;
            border-radius: 10px;
        }

        @media (max-width: 600px) {
            .year-month-deadline-container {
                width: 110%;
            }

            .year-month-deadline-container>.chinese-year-month {
                font-size: 1rem;
                font-weight: bold;
            }

            .flex-container-calendar {
                width: 110%;
            }

            .item {
                min-height: 150px;
            }

            .item-weekend {
                min-height: 150px;
            }

            .row-solar {
                text-align: center;
            }

            .row-lunar {
                height: 55%;
                margin-top: 0px;
                text-align: center
            }

            .today-solor-color {
                width: auto;
                font-size: 1rem;
            }
        }
    </style>


</head>

<body>
    <h1>萬年曆</h1>
    <!-- 測試下拉年份與下拉月份，並即時更新 -->

    <!-- echo "<h1 style='color:white'>" . isset($_GET['year']) . "</h1>";
    if((empty($_GET['year']))){
        header("location:background-test.php?year=2024&month=9");
    } -->

    <script>
        // 測試 下拉選單修改年月
        // 原生javascript

        const date = new Date();
        const nowYear = date.getFullYear();
        const nowMonth = date.getMonth();

        function updateMonth() {
            // let website = `index-test.php?year=2024&month=${months}`;
            // window.location.href(website);
            let monthValue = document.querySelector('#monthsID').value;
            let yearValue = document.querySelector("#yearsID").value;
            //   console.log(yearValue);
            //   console.log(monthValue);
            let website = `?year=${yearValue}&month=${monthValue}`;
            window.location.href = website;
            // console.log(window.location.href);
        }

        function updateYear() {
            let monthValue = document.querySelector('#monthsID').value;
            let yearValue = document.querySelector("#yearsID").value;
            //   console.log(yearValue);
            //   console.log(monthValue);
            let website = `?year=${yearValue}&month=${monthValue}`;

            window.location.href = website;
        }

        //jQuery
        $(document).ready(function() {


            //建立window.location.search以取得URL
            const queryString = window.location.search;
            // console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            // console.log(urlParams);
            // const selectedYear = urlParams.get('year') ? urlParams.get('year') : date.getYear();
            const selectedYear = urlParams.get('year') ? urlParams.get('year') : date.getFullYear();
            // console.log(selectedYear);
            const selectedMonth = urlParams.get('month') ? urlParams.get('month') : (date.getMonth() + 1);
            // console.log(selectedMonth);

            for (let i = 1900; i <= 2100; i++) {
                if (i.toString() == selectedYear) {
                    $('#yearsID').append($("<option value=" + i + " selected>" + i + "</option>"));
                } else {
                    $('#yearsID').append($("<option value=" + i + ">" + i + "</option>"));
                }
                // $('#yearsID').append($("<option value=" + i +">" + i + "</option>"));
            }
            $("#monthsID").val(selectedMonth);
            $("#yearsID").val(selectedYear);

            function clockTimeChange() {
                //建立Date物件以取得現在時間
                const date = new Date();
                const hours = date.getHours();
                const minutes = date.getMinutes();
                const seconds = date.getSeconds();
                $(".clock-text").text(`${hours.toString().padStart(2, "0")}:${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`);
            }

            clockTimeChange();
            setInterval(clockTimeChange, 1000);

            //串接API裡面太長串，拉出來做一個function
            function afterGetAPI(res) {
                const pop12h = res.records.locations[0].location[0].weatherElement[0].time[0].elementValue[0].value;
                const wX = res.records.locations[0].location[0].weatherElement[1].time[0].elementValue[0].value;
                const minT = res.records.locations[0].location[0].weatherElement[2].time[0].elementValue[0].value;
                const maxT = res.records.locations[0].location[0].weatherElement[3].time[0].elementValue[0].value;
                //在if外面設wXImgh才不會被 local variable吃掉!!
                let wXImg;
                // console.log(wX);
                switch (wX) {
                    case '多雲時晴':
                        wXImg = './images/03.svg';
                        break;
                    case '多雲':
                        wXImg = './images/04.svg';
                        break;
                    case '多雲時陰':
                        wXImg = './images/05.svg';
                        break;
                    case '陰時多雲':
                        wXImg = './images/06.svg';
                        break;
                    case '陰天':
                        wXImg = './images/07.svg';
                        break;
                    case '多雲短暫陣雨':
                        wXImg = './images/08.svg';
                        break;
                    case '多雲時陰短暫陣雨':
                        wXImg = './images/09.svg';
                        break;
                    case '陰時多雲短暫陣雨':
                        wXImg = './images/10.svg';
                        break;
                    case '陰短暫陣雨':
                        wXImg = './images/11.svg';
                        break;
                    case '多雲短暫陣雨或雷雨':
                        wXImg = './images/15.svg';
                        break;
                    case '多雲時陰短暫陣雨或雷雨':
                        wXImg = './images/16.svg';
                        break;
                    case '陰時多雲短暫陣雨或雷雨':
                        wXImg = './images/17.svg';
                        break;
                    case '陰短暫陣雨或雷雨':
                        wXImg = './images/18.svg';
                        break;
                    case '多雲午後短暫雷陣雨':
                        wXImg = './images/22.svg';
                        break;
                    default:
                        wXImg = './images/weatherToBeAdd.png';
                        break;
                }
                $(".weather-icon-img").attr("src", wXImg);
                $(".weather-minT-maxT").text(`${minT}度~${maxT}度`);
                $(".weather-pop12h").text(`降雨機率:${pop12h}`);
            }
            //串接API，記得要執行function!!
            function getAPI() {
                const date = new Date();
                //計算現在幾點，調整預報參數
                const hour = date.getHours();
                // console.log(date);
                const todayYear = date.getFullYear();
                const todayMonth = (date.getMonth() + 1).toString().padStart(2, 0);
                const todayDay = date.getDate().toString().padStart(2, 0);
                //   console.log(todayYear, todayMonth, todayDay);

                //今天日期string todayDate
                const todayDate = [todayYear, todayMonth, todayDay].join("-");
                //   console.log(todayDate);

                const tomorrow = date.setDate(todayDay);
                // console.log("tomorrow: " + tomorrow);
                const tomorrowDateObject = new Date(tomorrow);
                // console.log("tomorrowDateObject: " + tomorrowDateObject);
                const tomorrowYear = tomorrowDateObject.getFullYear();
                const tomorrowMonth = (tomorrowDateObject.getMonth() + 1).toString().padStart(2, 0);
                const tomorrowDay = tomorrowDateObject.getDate().toString().padStart(2, "0");

                //明天日期 string tomorrowDate
                const tomorrowDate = [tomorrowYear, tomorrowMonth, tomorrowDay].join("-");
                // console.log(tomorrowDate);

                if (hour >= 11 && hour < 18) {
                    // 時間是 12. ~ 18.
                    $.get(
                        `https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-D0047-071?Authorization=CWA-B536DF1C-1597-4E17-A48C-42342C692BDC&format=JSON&locationName=%E6%B3%B0%E5%B1%B1%E5%8D%80&elementName=MinT,MaxT,PoP12h,Wx&startTime=${todayDate}T18%3A00%3A00&dataTime=${tomorrowDate}T06%3A00%3A00`,

                        function(res, status) {
                            afterGetAPI(res);
                        }
                    );
                } else if (hour >= 18 && hour <= 23) {
                    // 時間是 18. ~ 6.
                    $.get(
                        `https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-D0047-071?Authorization=CWA-B536DF1C-1597-4E17-A48C-42342C692BDC&locationName=%E6%B3%B0%E5%B1%B1%E5%8D%80&elementName=MinT,MaxT,PoP12h,Wx&startTime=${todayDate}T18%3A00%3A00&dataTime=${tomorrowDate}T06%3A00%3A00`,
                        function(res, status) {
                            afterGetAPI(res);
                        }
                    )
                    // } else if(hour == 23){
                } else if (hour < 6) {
                    //在23:25的時候，還是 18:00~06:00
                    // 時間是 0. ~ 6.
                    $.get(
                        `https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-D0047-071?Authorization=CWA-B536DF1C-1597-4E17-A48C-42342C692BDC&locationName=%E6%B3%B0%E5%B1%B1%E5%8D%80&elementName=MinT,MaxT,PoP12h,Wx&startTime=${tomorrowDate}T00%3A00%3A00&dataTime=${tomorrowDate}T06%3A00%3A00`,
                        function(res, status) {
                            console.log("ajax 是成功的");
                            console.log("tomorrow Date: " + tomorrowDate);

                            afterGetAPI(res);
                        }
                    )
                } else {
                    // 時間是 6. ~ 18.
                    $.get(
                        `https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-D0047-071?Authorization=CWA-B536DF1C-1597-4E17-A48C-42342C692BDC&locationName=%E6%B3%B0%E5%B1%B1%E5%8D%80&elementName=MinT,MaxT,PoP12h,Wx&startTime=${todayDate}T06%3A00%3A00&dataTime=${todayDate}T18%3A00%3A00`,

                        function(res, status) {
                            afterGetAPI(res);
                        }
                    );
                }
            }
            getAPI();

        })
    </script>



    <?php
    /*請在這裹撰寫你的萬年曆程式碼*/
    $month = $_GET['month'] ?? date('m');
    $year = $_GET['year'] ?? date('Y');
    $firstDay = strtotime(date("$year-$month-1"));
    $firstWeekStartDay = date("w", $firstDay);
    $lastDay = date('t', $firstDay);

    // 今年今月，讓now可以跳回來
    $nowYear = date('Y');
    $nowMonth = date('n');
    $nowDay = date('d');
    //測試今天日期
    // $nowDayTest = strval(intval(date('d')) + 1);
    // echo $nowDayTest;

    //去年與明年
    $lastYear = $year - 1;
    $tomorrowYear = $year + 1;

    // echo "firstDay : $firstDay";
    // echo "<br>";
    // echo "firstWeekStartDay : $firstWeekStartDay";
    // echo "<br>";
    // echo "lastDay : $lastDay";

    //嘗試用陣列存紀念日
    $anniversarys = [
        "1" => [
            "1" => "元旦",
            "6" => "獸醫師節",
            "11" => "司法節",
            "15" => "藥師節",
            "19" => "消防日",
            "23" => "自由日"
        ],
        "2" => [
            "19" => "炬光節",
            "22" => "營養師節",
            "28" => "和平紀念日",
        ],
        "3" => [
            "1" => "兵役節",
            "5" => "童子軍節",
            "8" => "婦女節",
            "12" => "植樹節",
            "17" => "國醫節",
            "20" => "郵政節",
            "21" => "氣象節",
            "25" => "美術節",
            "29" => "青年節"
        ],
        "4" => [
            "1" => "主計節",
            "4" => "兒童節",
            "5" => "音樂節",
            "28" => "工殤日",
        ],
        "5" => [
            "1" => "勞動節",
            "4" => "文藝節",
            "5" => "舞蹈節",
            "12" => "護士節",
        ],
        "6" => [
            "3" => "禁煙節",
            "5" => "環境日",
            "6" => "工程師節",
            "9" => "鐵路節",
            "15" => "警察節",
            "30" => "會計師節"
        ],
        "7" => [
            "1" => "漁民節",
            "7" => "合作節",
            '11' => '航海節',
        ],
        "8" => [
            "8" => "父親節",
        ],
        "9" => [
            "1" => "記者節",
            "3" => "軍人節",
            "28" => "教師節",
        ],
        "10" => [
            "7" => "勤永生日",
            "10" => "國慶日",
            "20" => "廚師節",
            "21" => "華僑節",
            "31" => "榮民節"
        ],
        "11" => [
            "1" => "商人節",
            "11" => "工業節",
            "21" => "防空節"
        ],
        "12" => [
            "10" => "人權節",
            "18" => "移民節",
            "27" => "建築師節",
            "28" => "電信節",
        ]
    ];
    //用陣列存陽曆，放假日
    $solarDayOff = [
        '1-1' => '元旦',
        '2-28' => '和平紀念日',
        '10-10' => '國慶日',
    ];
    $lunarDayOff = [
        '臘月三十' => "除夕",
        '正月初一' => "春節",
        '五月初五' => "端午節",
        '八月十五' => "中秋節",
    ];

    //先將每一天存起來
    $days = [];
    for ($i = 0; $i < 42; $i++) {
        $diff = $i - $firstWeekStartDay;
        $days[] = date("Y-m-d", strtotime("$diff days", $firstDay));
    }

    if ($month - 1 < 1) {
        $prev_month = 12;
        $prev_year = $year - 1;
    } else {
        $prev_month = $month - 1;
        $prev_year = $year;
    }

    if ($month + 1 > 12) {
        $next_month = 1;
        $next_year = $year + 1;
    } else {
        $next_month = $month + 1;
        $next_year = $year;
    }

    ?>
    <!-- <a href="">上一個月</a>
    <span><?= $year; ?>年<?= $month; ?>月</span>
    <a href="">下一個月</a> -->

    <?php
    // 測試echo: test echo
    include_once 'lunarCalendar.php';
    $lunar = new Lunar();
    $lunarMonth = $lunar->convertSolarToLunar(2018, 5, 18);
    // print_r($lunarMonth);
    // echo "<br>";
    // echo $lunar->getLunarMonthDays(2022, 12);
    // echo (count($lunar->getLunarYearMonths(2022)));
    // 測試now的功能(回到今天)
    // echo "<a href='index-test.php?year=$nowYear&month=$nowMonth' class=''>Now</a>";
    ?>

    <?php
    //測試距離結訓倒數幾日
    $lastTrainingDay = strtotime(date('Y-9-11'));
    $today = strtotime(date('Y-m-d'));
    // $today = strtotime(date('Y-9-10'));
    $diff = (($lastTrainingDay - $today) / (60 * 60 * 24));
    // echo "距離結訓剩下 $diff 天";
    ?>

    <?php
    // echo "<div class='body-container'>";
    echo "<div class='container'>";
    echo "<canvas id='canvas'></canvas>";
    // echo "<div class='mask-container'>";
    echo "<div class='row mask-container'>";
    // 1. aside-left-container : 要包date-time-container、weather-container、todolist-container
    // echo "<div class='aside-left-container'>";
    echo "<div class='col-12 col-md-3'>";
    echo "<div class='date-time-container'>";
    echo "<div class='date-row'>";
    echo "<div class='date-row-data'>$nowYear/$nowMonth/$nowDay</div>";
    // date-row的div
    echo "</div>";

    echo "<div class='time-row'>";
    echo "<div class='clock-text'></div>";
    // time-row的div
    echo "</div>";
    //date-time-container 的 div
    echo "</div>";

    echo "<div class='weather-container'>";
    echo "<div class='weather-title'>";
    echo "今日天氣";
    // weather-title的div
    echo "</div>";
    echo "<div class='weather-icon'>";
    //用jq將圖片塞進來
    echo "<img class='weather-icon-img' src='' title='' />";
    // weather-icon的div
    echo "</div>";
    echo "<div class='weather-minT-maxT'>";
    //用jq將文字資料塞進來
    // weather-minT-maxT的div
    echo "</div>";
    echo "<div class='weather-pop12h'>";
    //用jq將文字資料塞進來
    // weather-pop12h的div
    echo "</div>";
    //weather-container的div
    echo "</div>";


    echo "<div class='todolist-container'>";
    echo "<h3 class='todolist-title'>&ensp;今日待辦事項:</h3>";
    echo "<div class='todolist-row'>1. <div class='todolist-item-1' contenteditable></div></div>";
    echo "<div class='todolist-row'>2. <div class='todolist-item-2' contenteditable>練習sql</div></div>";
    echo "<div class='todolist-row'>3. <div class='todolist-item-3' contenteditable>學習ps</div></div>";
    //todolist-container的div
    echo "</div>";
    // aside-left-container 的 div
    echo "</div>";

    // 2. calendar-container
    // echo "<div class='calendar-container'>";
    echo "<div class='col-10 col-md-7'>";

    // echo "<div class='flex-container-change'>";
    //     echo "<a href='index-test.php?year=$lastYear&month=$month' class=''>去年</a>";
    //     echo "&ensp;&ensp;&ensp;&ensp;&ensp;";
    //     echo "<a href='index-test.php?year=$prev_year&month=$prev_month' class=''>上一個月</a>";
    //     echo "&ensp;&ensp;&ensp;&ensp;$year 年 $month 月</span>&ensp;&ensp;&ensp;&ensp;";
    //     echo "<a href='index-test.php?year=$next_year&month=$next_month' class=''>下一個月</a>";
    //     echo "&ensp;&ensp;&ensp;&ensp;&ensp;";
    //     echo "<a href='index-test.php?year=$tomorrowYear&month=$month' class=''>明年</a>";
    // echo "</div>";

    //上方顯示年月以及結訓倒數幾天
    echo "<div class='year-month-deadline-container'>";
    echo '<select name="years" id="yearsID" onchange="updateYear()"></select>';
    echo "<div class='chinese-year-month'>年</div>";
    echo '<select name="months" id="monthsID" onchange="updateMonth()">';
    echo '<option value="1">1</option>';
    echo '<option value="2">2</option>';
    echo '<option value="3">3</option>';
    echo '<option value="4">4</option>';
    echo '<option value="5">5</option>';
    echo '<option value="6">6</option>';
    echo '<option value="7">7</option>';
    echo '<option value="8">8</option>';
    echo '<option value="9">9</option>';
    echo '<option value="10">10</option>';
    echo '<option value="11">11</option>';
    echo '<option value="12">12</option>';
    echo '</select>';
    echo "<div class='chinese-year-month'>月&ensp;&ensp;</div>";
    echo "<div class='chinese-year-month'>距離結訓剩下 $diff 天</div>";
    echo "</div>";

    echo "<div class='flex-container-calendar'>";
    echo "<div class='week week-text-center'>日</div>";
    echo "<div class='week week-text-center'>一</div>";
    echo "<div class='week week-text-center'>二</div>";
    echo "<div class='week week-text-center'>三</div>";
    echo "<div class='week week-text-center'>四</div>";
    echo "<div class='week week-text-center'>五</div>";
    echo "<div class='week week-text-center'>六</div>";

    foreach ($days as $day) {

        //format是日子，dayMonth是月份，dayYear是年分
        $format = explode('-', $day)[2];
        $dayMonth = explode('-', $day)[1];
        $dayYear = explode('-', $day)[0];
        $w = date('w', strtotime($day));

        // 判斷是不是 紀念日、陽曆假日、陰曆假日
        $isAnniversary = false;
        $isSolarDayOff = false;
        $isLunarDayOff = false;

        //將月份改為 string，後面的陣列會用到這個string
        $monthString = date('n', $firstDay);
        //陽曆轉陰曆
        $lunarDate = $lunar->convertSolarToLunar($dayYear, $dayMonth, $format);

        //該年陰曆有沒有閏月，(因為有閏月的話，12月在index 13，沒有就在 index 12)
        $lunarExistLeapMonth = count($lunar->getLunarYearMonths($dayYear - 1));

        if ($dayMonth == "1" && $format == "1") {
            if ($dayMonth != $month) {
                echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>元旦</div></div>" .
                    "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            } else {
                echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>元旦</div></div>" .
                    "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            }

            $isSolarDayOff = true;
        }
        if ($dayMonth == "2" && $format == "28") {
            if ($dayMonth != $month) {
                echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>和平紀念日</div></div>" .
                    "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            } else {
                echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>和平紀念日</div></div>" .
                    "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            }

            $isSolarDayOff = true;
        }
        if ($dayMonth == "10" && $format == "10") {
            if ($dayMonth != $month) {
                echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>國慶日</div></div>" .
                    "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            } else {
                echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>國慶日</div></div>" .
                    "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            }

            $isSolarDayOff = true;
        }

        if ($lunarExistLeapMonth == 12) {
            //找農曆12月到底是29天還是30天，要找除夕
            $lunarDecemberTotalDays = $lunar->getLunarMonthDays($dayYear - 1, 12);
            if ($lunarDecemberTotalDays == 29) {
                if ($lunarDate[1] == '臘月' && $lunarDate[2] == '廿九') {
                    if ($dayMonth != $month) {
                        echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>除夕</div></div>" .
                            "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    } else {
                        echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>除夕</div></div>" .
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    }

                    $isLunarDayOff = true;
                }
            } else if ($lunarDecemberTotalDays == 30) {
                if ($lunarDate[1] == '臘月' && $lunarDate[2] == '三十') {
                    if ($dayMonth != $month) {
                        echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>除夕</div></div>" .
                            "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    } else {
                        echo "<div class='item-weekend'><div class='row-solar'>$format 除夕</div>" .
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                        echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>除夕</div></div>" .
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    }

                    $isLunarDayOff = true;
                }
            }
        } else if ($lunarExistLeapMonth == 13) {
            $lunarDecemberTotalDays = $lunar->getLunarMonthDays($dayYear - 1, 13);
            if ($lunarDecemberTotalDays == 29) {
                if ($lunarDate[1] == '臘月' && $lunarDate[2] == '廿九') {
                    if ($dayMonth != $month) {
                        echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>除夕</div></div>" .
                            "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    } else {
                        echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>除夕</div></div>" .
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    }
                    $isLunarDayOff = true;
                }
            } else if ($lunarDecemberTotalDays == 30) {
                if ($lunarDate[1] == '臘月' && $lunarDate[2] == '三十') {
                    if ($dayMonth != $month) {
                        echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>除夕</div></div>" .
                            "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    } else {
                        echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>除夕</div></div>" .
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    }
                    $isLunarDayOff = true;
                }
            }
        }


        if ($lunarDate[1] == '正月' && $lunarDate[2] == '初一') {
            if ($dayMonth != $month) {
                echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>春節</div></div>" .
                    "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            } else {
                echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>春節</div></div>" .
                    "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            }

            $isLunarDayOff = true;
        }

        if ($lunarDate[1] == '五月' && $lunarDate[2] == '初五') {
            if ($dayMonth != $month) {
                echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>端午節</div></div>" .
                    "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            } else {
                echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>端午節</div></div>" .
                    "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            }

            $isLunarDayOff = true;
        }

        if ($lunarDate[1] == '八月' && $lunarDate[2] == '十五') {
            if ($dayMonth != $month) {
                echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>中秋節</div></div>" .
                    "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            } else {
                echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>中秋節</div></div>" .
                    "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                    "</div>";
            }

            $isLunarDayOff = true;
        }

        if ((!$isSolarDayOff) && (!$isLunarDayOff)) {
            foreach ($anniversarys[$monthString] as $anniversaryDate => $anniversaryName) {
                if ($anniversaryDate == $format && $month == $dayMonth) {
                    if ($w == 0 || $w == 6) {
                        if ($dayMonth != $month) {
                            echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>$anniversaryName</div></div>" .
                                "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                                "</div>";
                        } else {
                            echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>$anniversaryName</div></div>" .
                                "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                                "</div>";
                        }
                    } else {
                        if ($dayMonth != $month) {
                            echo "<div class='item not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>$anniversaryName</div></div>" .
                                "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                                "</div>";
                        } else {
                            echo "<div class='item'><div class='row-solar'><div class='row-solar-date'>$format</div><div class='row-solar-festival'>$anniversaryName</div></div>" .
                                "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                                "</div>";
                        }
                    }

                    $isAnniversary = true;
                }
            }
            if (!$isAnniversary) {
                if ($w == 0 || $w == 6) {
                    if ($dayMonth != $month) {
                        echo "<div class='item-weekend not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div></div>" .
                            "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    } else {
                        echo "<div class='item-weekend'><div class='row-solar'><div class='row-solar-date'>$format</div></div>" .
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    }
                } else {
                    if ($dayMonth != $month) {
                        echo "<div class='item not-this-month-font-color'><div class='row-solar'><div class='row-solar-date'>$format</div></div>" .
                            "<div class='row-lunar not-this-month-font-color'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    } else {
                        echo "<div class='item'><div class='row-solar'><div class='row-solar-date'>$format</div></div>" .
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                    }
                }
            }
            $isAnniversary = false;
        }
    }
    // flex-container-calendar 的 div
    echo "</div>";
    //calendar-container 的 div
    echo "</div>";

    // 3. calendar-right-container
    // echo "<div class='calendar-right-container'>";
    echo "<div class='col-2 col-md-2'>";
    echo "<div class='flex-container-change'>";
    echo "<a href='index.php?year=$lastYear&month=$month' class=''>年⬆</a>";
    echo "<a href='index.php?year=$tomorrowYear&month=$month' class=''>年⬇</a>";
    echo "&ensp;&ensp;&ensp;&ensp;&ensp;";
    echo "<a href='index.php?year=$prev_year&month=$prev_month' class=''>月⬆</a>";
    echo "<a href='index.php?year=$next_year&month=$next_month' class=''>月⬇</a>";
    echo "&ensp;&ensp;&ensp;&ensp;&ensp;";
    echo "<a href='index.php?year=$nowYear&month=$nowMonth' class=''>今日</a>";

    echo "</div>";
    echo "</div>";


    // mask-container的div
    echo "</div>";
    //body-container 的 div
    echo "</div>";
    ?>

    <script src='jq-blur-background.js'></script>
    <script src="jq-today-and-hover.js"></script>
    <script src="jq-text-to-input.js"></script>
    <script src="jq-all-tarot-cards.js"></script>
    <script src="jq-today-fortune-tarot.js"></script>
    <script src="jq-deal-cards.js"></script>
    <script src="meteor-script.js"></script>
</body>

</html>