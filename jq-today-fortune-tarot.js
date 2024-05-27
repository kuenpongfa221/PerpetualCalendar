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
  for (let i = 0; i < 15; i++) {
    tarots.append(`
    <div class='tarot-image'>
      <div class='tarot-image-front'></div>
      <div class='tarot-image-back'>
        <img src='./images/tarotBack.jpg' alt='tarot'/>
      </div>
    </div>
    `);
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

  //按一下塔羅牌會移動到目標位置，並且settimeout再翻牌
  $(".tarot-image").on("click", function(){
    const thisObject = $(this);
    // console.log(thisObject);
    const target = $('.target');

    // 獲取目標物體的位置
    const targetPosition = target.position();
    console.log(targetPosition);
    const thisObjectPosition = this.getBoundingClientRect();
    console.log(this.getBoundingClientRect());
    // 計算目標物體位置相對於點擊物體的距離
    const distanceX = targetPosition.left - thisObjectPosition.left;
    const distanceY = targetPosition.top - thisObjectPosition.top - 10;
    console.log("distanceX: " + distanceX + "  distanceY: " + distanceY);
    //移動到目標位置
    thisObject.css("transform", `translate(${distanceX}px, ${distanceY}px)`);
    
    //給予thisObject正面的牌
    // thisObject.children('.tarot-image-front').append(`
    //   <img src='./images/tarot/wands01.jpg' />
    // `);
    
  })
});
