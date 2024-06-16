// import { allTarots } from "./jq-all-tarot-cards";

// $.getScript("jq-all-tarot-cards.js", function (data) {
//   alert("Script loaded but not necessarily executed.");
//   console.log(data);
// });

$(document).ready(function () {
  const displayCard = $(".display-card");
  const tarots = $(".tarots");

  //為tarots新增目標框框
  displayCard.append(`
      <div class="target"></div>
    `);

  let top = 0;
  let left = 0;
  let count = 1;
  // 新增每一張tarot(背面)
  // 目前第20行的image會讓版面跑掉，必要的時候先刪掉測試一下
  for (let i = 0; i < 10; i++) {
    tarots.append(`
      <div class='tarot-image'>
        <div class='tarot-image-front'></div>
        <div class='tarot-image-back'>
          <img src='./images/tarotBack.jpg' alt='tarot'/>
        </div>
      </div>
      `);

    // tarots.append(`
    // <div class='tarot-image tarot-card-close'>
    //   <div class='tarot-image-front'></div>
    //   <div class='tarot-image-back'></div>
    // </div>
    // `);
  }

  //設定每一張tarot的位置
  $(".tarot-image").each(function (index) {
    // console.log(index);
    $(this).css("top", `${top}px`);
    $(this).css("left", `${left}px`);
    $(this).css("transition", "all 0.5s ease");

    left += 72;
    if (count % 5 == 0) {
      top += 88;
      left = 0;
    }
    count++;
  });

  // 控制只能抽一張
  // let canFlip = true;

  let prevTarot = {
    card: "",
    distanceX: "",
    distanceY: "",
  };
  //按一下塔羅牌會移動到目標位置，並且settimeout再翻牌
  $(".tarot-image").on("click", function () {
    try {
      console.log("try success");
      console.log(prevTarot);
      prevTarot.card.remove();
      $(".daily-tarot").remove();
      $(".nes-tarot").remove();
      prevTarot.card.css("transform-origin", "top right");
      prevTarot.card.css(
        "transform",
        `translate(-${prevTarot.distanceX}px, -${prevTarot.distanceY}px) scale(0.5)`
      );
    } catch (e) {
      console.log(e);
    }

    // if(canFlip){
    const thisObject = $(this);
    // console.log(thisObject);
    const target = $(".target");
    // console.log("target: " + target);

    // 獲取目標物體的位置
    const targetPosition = target.position();
    console.log(targetPosition);
    const thisObjectPosition = this.getBoundingClientRect();
    console.log(
      "this.getBoundingClientRect() left: " + this.getBoundingClientRect().left
    );
    console.log(
      "this.getBoundingClientRect() top: " + this.getBoundingClientRect().top
    );
    // 計算目標物體位置相對於點擊物體的距離
    // const distanceX = targetPosition.left - 51 - thisObjectPosition.left;
    // const distanceY = targetPosition.top - 23 - thisObjectPosition.top;
    // const distanceX = targetPosition.left - thisObjectPosition.left + 169;
    // const distanceY = targetPosition.top - thisObjectPosition.top + 41;
    const distanceX = targetPosition.left - thisObjectPosition.left + 121;
    const distanceY = targetPosition.top - thisObjectPosition.top + 43;
    console.log("distanceX: " + distanceX + "  distanceY: " + distanceY);
    //移動到目標位置
    thisObject.css("transform", `translate(${distanceX}px, ${distanceY}px)`);
    // thisObject.css("top", `${targetPosition.top - 10}px`);
    // thisObject.css("left", `${targetPosition.left}px`);

    //給予thisObject正面的牌
    // thisObject.children(".tarot-image-front").append(`
    //   <img src='./images/tarot/wands01.jpg' />
    // `);
    const randomCardIndex = Math.floor(Math.random() * 78);
    // const randomCardIndex = 21;
    thisObject.children(".tarot-image-front").append(`
        <img src='${allTarots[randomCardIndex].img}' />
        `);

    setTimeout(() => {
      // thisObject.removeClass("tarot-card-close");
      thisObject.css("transform-origin", "top right");
      thisObject.css(
        "transform",
        `translate(${distanceX}px, ${distanceY}px) rotateY(180deg) scale(2)`
      );
    }, 400);

    setTimeout(() => {
      displayCard.append(`
            <div class='daily-tarot'><a href='${allTarots[randomCardIndex].daily}' target='_blank'>${allTarots[randomCardIndex].name}</a></div>
          `);
      displayCard.append(`
            <div class='nes-tarot'><a href='${allTarots[randomCardIndex].nes}' target='_blank'>更多牌義</div>
          `);
    }, 600);

    // canFlip = false;
    prevTarot = {
      card: $(this),
      distanceX: distanceX,
      distanceY: distanceY,
    };
    // console.log(prevTarot);

    //if(canflip)的大括號
    // }
  });
});
