<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
        }

        .container{
            width: 80%;
            height: 600px;
            background-color: khaki;
            margin: auto;
        }

        .flex-container-change{
            height: 20px;

            display:flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .flex-container-calendar{
            height: 600px;

            display:flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }
        .week{
            width: calc(100%/7);
            height: 70px;
            background-color: greenyellow;
        }
        .week-text-center{
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .item{
            background-color: dodgerblue;
            color: ghostwhite;

            flex-basis: calc(100% / 7);
            height: 100px;
        }
        .item-weekend{
            background-color: maroon;
            color: ghostwhite;

            flex-basis: calc(100% / 7);
            height: 100px;
        }

        .row-solar{
            height: 20%;
        }
        .row-lunar{
            height: 80%;
        }
    </style>
</head>
<body>
    <h1>萬年曆</h1>
    
    <?php
        $month = $_GET['month'] ?? date('m');
        $year = $_GET['year'] ?? date('Y');
        $firstDay = strtotime(date("$year-$month-1"));
        $firstWeekStartDay = date("w", $firstDay);
        $lastDay = date('t', $firstDay);

        echo "firstDay : $firstDay";
        echo "<br>";
        echo "firstWeekStartDay : $firstWeekStartDay";
        echo "<br>";
        echo "lastDay : $lastDay";

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
                "26" => "廣播電視節",
                "29" => "青年節"
            ],
            "4" => [
                "1" => "主計節",
                "4" => "兒童節",
                "5" => "音樂節",
                "7" => "言論自由日",
                "28" => "工殤日",
            ],
            "5" => [
                "1" => "勞動節", 
                "4" => "文藝節", 
                "5" => "舞蹈節",
                "12" => "護士節",
                "15" => "兒童安全日",
            ],
            "6" => [
                "3" => "禁煙節", 
                "5" => "環境日",
                "6" => "工程師節",
                "8" => "世界海洋日",
                "9" => "鐵路節",
                "15" => "警察節",
                "23" => "公共服務日",
                "30" => "會計師節"
            ],
            "7" => [
                "1" => "漁民節",
                "7" => "合作節",
                '11' => '航海節',
                '15' => '解嚴紀念日',
            ],
            "8" => [
                "8" => "父親節",
                "27" => "鄭成功誕辰紀念日",
            ],
            "9" => [
                "1" => "記者節",
                "3" => "軍人節",
                "8" => "物理治療師節",
                "9" => "國民體育日",
                "21" => "國家防央日",
                "28" => "教師節",
            ],
            "10" => [
                "10" => "國慶日",
                "20" => "廚師節",
                "21" => "華僑節",
                "25" => "臺灣光復節",
                "27" => "職能治療師節",
                "31" => "榮民節"
            ],
            "11" => [
                "1" => "商人節",
                "11" => "工業節",
                "12" => "國父誕辰紀念日",
                "21" => "防空節"
            ],
            "12" => [
                "10" => "人權節",
                "18" => "移民節",
                "25" => "行憲紀念日",
                "27" => "建築師節",
                "28" => "電信節",
            ]
        ];
        //先將每一天存起來
        $days = [];
        for($i = 0; $i < 42; $i++){
            $diff = $i - $firstWeekStartDay;
            $days[] = date("Y-m-d", strtotime("$diff days", $firstDay));
        }

        if($month - 1 < 1){
            $prev_month = 12;
            $prev_year = $year - 1;
        }else{
            $prev_month = $month - 1;
            $prev_year = $year;
        }

        if($month + 1 > 12){
            $next_month = 1;
            $next_year = $year + 1;
        }else{
            $next_month = $month + 1;
            $next_year = $year;
        }
    ?>

    <!-- <a href="">上一個月</a>
    <span><?=$year;?>年<?=$month;?>月</span>
    <a href="">下一個月</a> -->

    <?php
        include_once 'lunarCalendar.php';
        $lunar = new Lunar();
        $lunarMonth = $lunar -> convertSolarToLunar(2018, 5, 18);
        print_r($lunarMonth);
    ?>


    <?php

        echo "<div class='container'>";
        
            echo "<div class='flex-container-change'>";
                echo "<a href='flex-box-test.php?year=$prev_year&month=$prev_month' class=''>上一個月</a>";
                echo "&ensp;&ensp;&ensp;&ensp;$year 年 $month 月</span>&ensp;&ensp;&ensp;&ensp;";
                echo "<a href='flex-box-test.php?year=$next_year&month=$next_month' class=''>下一個月</a>";
            echo "</div>";

            echo "<div class='flex-container-calendar'>";
                echo "<div class='week week-text-center'>日</div>";
                echo "<div class='week week-text-center'>一</div>";
                echo "<div class='week week-text-center'>二</div>";
                echo "<div class='week week-text-center'>三</div>";
                echo "<div class='week week-text-center'>四</div>";
                echo "<div class='week week-text-center'>五</div>";
                echo "<div class='week week-text-center'>六</div>";

            foreach($days as $day){
                $format = explode('-', $day)[2];
                $dayMonth = explode('-', $day)[1];
                $dayYear = explode('-', $day)[0];
                $w = date('w', strtotime($day));
                $isAnniversary = false;
                $monthString = date('n', $firstDay);
                $lunarDate = $lunar -> convertSolarToLunar($dayYear, $dayMonth, $format);
                
                foreach($anniversarys[$monthString] as $anniversaryDate => $anniversaryName){
                    if($anniversaryDate == $format && $month == $dayMonth){
                        if($w == 0 || $w == 6){
                            echo "<div class='item-weekend'><div class='row-solar'>$format $anniversaryName</div>" . 
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                        }else{
                            echo "<div class='item'><div class='row-solar'>$format $anniversaryName</div>" . 
                            "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                            "</div>";
                        }

                        $isAnniversary = true;
                    }
                }
                if(!$isAnniversary){
                    if($w == 0 || $w == 6){
                        echo "<div class='item-weekend'><div class='row-solar'>$format</div>" . 
                             "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                             "</div>";
                    }else{
                        echo "<div class='item'><div class='row-solar'>$format</div>" . 
                        "<div class='row-lunar'>" . $lunarDate[1] . $lunarDate[2] . "</div>" .
                        "</div>";
                    }
                }
                $isAnniversary = false;
                
            }
            echo "</div>";
        echo "</div>";
    ?>
</body>
</html>