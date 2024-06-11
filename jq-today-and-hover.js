$(document).ready(function () {
  const getUrlString = window.location.href;
  const url = new URL(getUrlString);
  const getYear = url.searchParams.get("year");
  const getMonth = url.searchParams.get("month");
  console.log("getYear: ", getYear);
  console.log("getMonth: ", getMonth);

  const date = new Date();
  let nowYear = date.getFullYear();
  let nowMonth = date.getMonth() + 1;
  let nowDay = date.getDate();
  const urlNowMonth = nowMonth;

  nowYear = date.getFullYear().toString();
  nowMonth = (date.getMonth() + 1).toString().padStart(2, "0");
  nowDay = date.getDate().toString().padStart(2, "0");

  if (getYear == nowYear && getMonth == urlNowMonth) {
    $(".row-solar-date").each(function (e) {
      // console.log("each row-solar");
      const thisObject = $(this);
      // console.log(thisObject.text());
      // console.log(nowDay);
      if (thisObject.text() == nowDay) {
        console.log("jq抓今天日期成功!!");
        thisObject.addClass("today-solor-color");
      }
    });
  }
  // console.log("nowDay: " + nowDay);
  // console.log("nowYear: " + nowYear);
  // console.log("nowMonth: " + nowMonth);
  function re_url() {
    window.location.href = `background-test.php?year=${nowYear}&month=${urlNowMonth}`;
  }

  if (!url.searchParams.get("year") || !url.searchParams.get("month")) {
    re_url();
  } else {
    console.log("url.searchParams.get('year') has value!!");
    // console.log("This script is OK.");
  }
});
