const allTarots = [
  //大牌(22張)
  {
    // 0 愚人
    img: "./images/tarot/rws_tarot_00_fool.jpg",
    name: "愚人",
    daily: "https://jasiyu.com/daily-tarot-the-fool/",
    nes: "https://www.nes-tarot.com/tarot-meanings-fool.html",
  },
  {
    // 1 魔術師
    img: "./images/tarot/rws_tarot_01_magician.jpg",
    name: "魔術師",
    daily: "https://jasiyu.com/daily-tarot-the-magician/",
    nes: "https://www.nes-tarot.com/tarot-meanings-magician.html",
  },
  {
    // 2 女祭司
    img: "./images/tarot/rws_tarot_02_high_priestess.jpg",
    name: "女祭司",
    daily: "https://jasiyu.com/daily-tarot-the-high-priestess/",
    nes: "https://www.nes-tarot.com/tarot-meanings-high-priestess.html",
  },
  {
    // 3 女皇
    img: "./images/tarot/rws_tarot_03_empress.jpg",
    name: "皇后",
    daily: "https://jasiyu.com/daily-tarot-the-empress/",
    nes: "https://www.nes-tarot.com/tarot-meanings-empress.html",
  },
  {
    // 4 皇帝
    img: "./images/tarot/rws_tarot_04_emperor.jpg",
    name: "皇帝",
    daily: "https://jasiyu.com/daily-tarot-the-emperor/",
    nes: "https://www.nes-tarot.com/tarot-meanings-emperor.html",
  },
  {
    // 5 教皇
    img: "./images/tarot/rws_tarot_05_hierophant.jpg",
    name: "教皇",
    daily: "https://jasiyu.com/daily-tarot-the-hierophant/",
    nes: "https://www.nes-tarot.com/tarot-meanings-hierophant.html",
  },
  {
    // 6 戀人
    img: "./images/tarot/rws_tarot_06_lovers.jpg",
    name: "皇后",
    daily: "https://jasiyu.com/daily-tarot-the-lovers/",
    nes: "https://www.nes-tarot.com/tarot-meanings-lovers.html",
  },
  {
    // 7 戰車
    img: "./images/tarot/rws_tarot_07_chariot.jpg",
    name: "戰車",
    daily: "https://jasiyu.com/daily-tarot-the-chariot/",
    nes: "https://www.nes-tarot.com/tarot-meanings-chariot.html",
  },
  {
    // 8 力量
    img: "./images/tarot/rws_tarot_08_strength.jpg",
    name: "力量",
    daily: "https://jasiyu.com/daily-tarot-strength/",
    nes: "https://www.nes-tarot.com/tarot-meanings-strength.html",
  },
  {
    // 9 隱者
    img: "./images/tarot/rws_tarot_09_hermit.jpg",
    name: "隱者",
    daily: "https://jasiyu.com/daily-tarot-the-hermit/",
    nes: "https://www.nes-tarot.com/tarot-meanings-hermit.html",
  },
  {
    // 10 命運之輪
    img: "./images/tarot/rws_tarot_10_wheel_of_fortune.jpg",
    name: "命運之輪",
    daily: "https://jasiyu.com/daily-tarot-the-wheel-of-fortune/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wheel-of-fortune.html",
  },
  {
    // 11 正義
    img: "./images/tarot/rws_tarot_11_justice.jpg",
    name: "正義",
    daily: "https://jasiyu.com/daily-tarot-the-justice/",
    nes: "https://www.nes-tarot.com/tarot-meanings-justice.html",
  },
  {
    // 12 吊人
    img: "./images/tarot/rws_tarot_12_hanged_man.jpg",
    name: "吊人",
    daily: "https://jasiyu.com/daily-tarot-the-hanged-man/",
    nes: "https://www.nes-tarot.com/tarot-meanings-hanged-man.html",
  },
  {
    // 13 死神
    img: "./images/tarot/rws_tarot_13_death.jpg",
    name: "死神",
    daily: "https://jasiyu.com/daily-tarot-death/",
    nes: "https://www.nes-tarot.com/tarot-meanings-death.html",
  },
  {
    // 14 節制
    img: "./images/tarot/rws_tarot_14_temperance.jpg",
    name: "節制",
    daily: "https://jasiyu.com/daily-tarot-temperance/",
    nes: "https://www.nes-tarot.com/tarot-meanings-temperance.html",
  },
  {
    // 15 惡魔
    img: "./images/tarot/rws_tarot_15_devil.jpg",
    name: "惡魔",
    daily: "https://jasiyu.com/daily-tarot-the-devil/",
    nes: "https://www.nes-tarot.com/tarot-meanings-devil.html",
  },
  {
    // 16 高塔
    img: "./images/tarot/rws_tarot_16_tower.jpg",
    name: "高塔",
    daily: "https://jasiyu.com/daily-tarot-the-tower/",
    nes: "https://www.nes-tarot.com/tarot-meanings-tower.html",
  },
  {
    // 17 星星
    img: "./images/tarot/rws_tarot_17_star.jpg",
    name: "星星",
    daily: "https://jasiyu.com/daily-tarot-the-star/",
    nes: "https://www.nes-tarot.com/tarot-meanings-star.html",
  },
  {
    // 18 月亮
    img: "./images/tarot/rws_tarot_18_moon.jpg",
    name: "月亮",
    daily: "https://jasiyu.com/daily-tarot-the-moon/",
    nes: "https://www.nes-tarot.com/tarot-meanings-moon.html",
  },
  {
    // 19 太陽
    img: "./images/tarot/rws_tarot_19_sun.jpg",
    name: "太陽",
    daily: "https://jasiyu.com/daily-tarot-the-sun/",
    nes: "https://www.nes-tarot.com/tarot-meanings-sun.html",
  },
  {
    // 20 審判
    img: "./images/tarot/rws_tarot_20_judgement.jpg",
    name: "審判",
    daily: "https://jasiyu.com/daily-tarot-judgement/",
    nes: "https://www.nes-tarot.com/tarot-meanings-judgement.html",
  },
  {
    // 21 世界
    img: "./images/tarot/rws_tarot_21_world.jpg",
    name: "世界",
    daily: "https://jasiyu.com/daily-tarot-the-world/",
    nes: "https://www.nes-tarot.com/tarot-meanings-world.html",
  },

  //權杖(含宮廷)
  {
    //權杖王牌
    img: "./images/tarot/wands01.jpg",
    name: "權杖王牌",
    daily: "https://jasiyu.com/daily-tarot-ace-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-ace.html",
  },
  {
    //權杖2
    img: "./images/tarot/wands02.jpg",
    name: "權杖2",
    daily: "https://jasiyu.com/daily-tarot-two-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-two.html",
  },
  {
    //權杖3
    img: "./images/tarot/wands03.jpg",
    name: "權杖3",
    daily: "https://jasiyu.com/daily-tarot-three-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-three.html",
  },
  {
    //權杖4
    img: "./images/tarot/wands04.jpg",
    name: "權杖4",
    daily: "https://jasiyu.com/daily-tarot-four-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-four.html",
  },
  {
    //權杖5
    img: "./images/tarot/wands05.jpg",
    name: "權杖5",
    daily: "https://jasiyu.com/daily-tarot-five-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-five.html",
  },
  {
    //權杖6
    img: "./images/tarot/wands06.jpg",
    name: "權杖6",
    daily: "https://jasiyu.com/daily-tarot-six-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-six.html",
  },
  {
    //權杖7
    img: "./images/tarot/wands07.jpg",
    name: "權杖7",
    daily: "https://jasiyu.com/daily-tarot-seven-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-seven.html",
  },
  {
    //權杖8
    img: "./images/tarot/wands08.jpg",
    name: "權杖8",
    daily: "https://jasiyu.com/daily-tarot-eight-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-eight.html",
  },
  {
    //權杖9
    img: "./images/tarot/wands09.jpg",
    name: "權杖9",
    daily: "https://jasiyu.com/daily-tarot-nine-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-nine.html",
  },
  {
    //權杖10
    img: "./images/tarot/wands10.jpg",
    name: "權杖10",
    daily: "https://jasiyu.com/daily-tarot-ten-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-wands-ten.html",
  },
  {
    //權杖侍者
    img: "./images/tarot/wands11.jpg",
    name: "權杖侍者",
    daily: "https://jasiyu.com/daily-tarot-page-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-court-wands-page.html",
  },
  {
    //權杖騎士
    img: "./images/tarot/wands12.jpg",
    name: "權杖騎士",
    daily: "https://jasiyu.com/daily-tarot-knight-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-court-wands-knight.html",
  },
  {
    //權杖皇后
    img: "./images/tarot/wands13.jpg",
    name: "權杖皇后",
    daily: "https://jasiyu.com/daily-tarot-knight-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-court-wands-queen.html",
  },
  {
    //權杖國王
    img: "./images/tarot/wands14.jpg",
    name: "權杖國王",
    daily: "https://jasiyu.com/daily-tarot-king-of-wands/",
    nes: "https://www.nes-tarot.com/tarot-meanings-court-wands-king.html",
  },

  //聖杯(含宮廷)
  {
    img: "./images/tarot/cups01.jpg",
    name: "聖杯王牌",
    daily: "https://jasiyu.com/daily-tarot-ace-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-ace.html",
  },
  {
    img: "./images/tarot/cups02.jpg",
    name: "聖杯2",
    daily: "https://jasiyu.com/daily-tarot-two-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-two.html",
  },
  {
    img: "./images/tarot/cups03.jpg",
    name: "聖杯3",
    daily: "https://jasiyu.com/daily-tarot-three-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-three.html",
  },
  {
    img: "./images/tarot/cups04.jpg",
    name: "聖杯4",
    daily: "https://jasiyu.com/daily-tarot-four-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-four.html",
  },
  {
    img: "./images/tarot/cups05.jpg",
    name: "聖杯5",
    daily: "https://jasiyu.com/daily-tarot-five-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-five.html",
  },
  {
    img: "./images/tarot/cups06.jpg",
    name: "聖杯6",
    daily: "https://jasiyu.com/daily-tarot-six-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-six.html",
  },
  {
    img: "./images/tarot/cups07.jpg",
    name: "聖杯7",
    daily: "https://jasiyu.com/daily-tarot-seven-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-seven.html",
  },
  {
    img: "./images/tarot/cups08.jpg",
    name: "聖杯8",
    daily: "https://jasiyu.com/daily-tarot-eight-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-eight.html",
  },
  {
    img: "./images/tarot/cups09.jpg",
    name: "聖杯9",
    daily: "https://jasiyu.com/daily-tarot-nine-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-nine.html",
  },
  {
    img: "./images/tarot/cups10.jpg",
    name: "聖杯10",
    daily: "https://jasiyu.com/daily-tarot-ten-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-cups-ten.html",
  },
  {
    img: "./images/tarot/cups11.jpg",
    name: "聖杯侍者",
    daily: "https://jasiyu.com/daily-tarot-page-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-court-cups-page.html",
  },
  {
    img: "./images/tarot/cups12.jpg",
    name: "聖杯騎士",
    daily: "https://jasiyu.com/daily-tarot-knight-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-court-cups-knight.html",
  },
  {
    img: "./images/tarot/cups13.jpg",
    name: "聖杯皇后",
    daily: "https://jasiyu.com/daily-tarot-king-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-court-cups-king.html",
  },
  {
    img: "./images/tarot/cups14.jpg",
    name: "聖杯國王",
    daily: "https://jasiyu.com/daily-tarot-king-of-cups/",
    nes: "https://www.nes-tarot.com/tarot-meanings-court-cups-king.html",
  },

  //錢幣(含宮廷)
  {
    img: "./images/tarot/pents01.jpg",
    name: "錢幣王牌",
    daily: "https://jasiyu.com/daily-tarot-ace-of-pentacles/",
    nes: "https://www.nes-tarot.com/tarot-meanings-pentacles-ace.html",
  },

  //寶劍(含宮廷)
  {
    img: "./images/tarot/swords01.jpg",
    name: "寶劍王牌",
    daily: "https://jasiyu.com/daily-tarot-ace-of-swords/",
    nes: "https://www.nes-tarot.com/tarot-meanings-swords-ace.html",
  },
];
