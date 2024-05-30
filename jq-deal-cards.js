$(document).ready(function(){
    const dealBtn = $(".deal");
    const tarots = $(".tarots");

    let tarotImage = $(".tarot-image");
    const displayCard = $(".display-card");
    

    dealBtn.on('click', function(e){
        // console.log(dealBtn);
        tarotImage.remove();
        $(".daily-tarot").remove();
        $(".nes-tarot").remove();

        for (let i = 0; i < 10; i++) {
            tarots.append(`
            <div class='tarot-image'>
              <div class='tarot-image-front'></div>
              <div class='tarot-image-back'>
                <img src='./images/tarotBack.jpg' alt='tarot'/>
              </div>
            </div>
            `);
        }
            //按下「重新發牌」後，讓所有tarotImage覆蓋在「重新發牌」按鈕上
            tarotImage = $(".tarot-image");
            tarotImage.css("top", "150px");
            tarotImage.css("left", "150px");

            let topBefore = -150;
            let leftBefore = -150;
            let delayTime = 0.5;

            tarotImage.each(function(e){
                let thisObject = $(this);
                thisObject.css("transition", "all 0.5s ease");
                thisObject.css("transition-delay", `${delayTime}s`);
                
                delayTime += 0.5;
            });

            //先取第一張牌從「重新發牌」到他原先的位置(distanceX, distanceY);
            tarotImage.each(function(e){
                // console.log("success tarotImage each");
                let thisObject = $(this);
                // console.log(thisObject);
                // console.log("distanceX: " + distanceX + " distanceY: " + distanceY);
                // thisObject.css("transition", "all 10s ease");
                // thisObject.css("transition-delay", "2s");
                // thisObject.css("transform", `translate(${distanceX}px, ${distanceY}px)`);
                setTimeout(function() {
                    thisObject.css("transform", `translate(${leftBefore}px, ${topBefore}px)`);
                    thisObject.attr("data-left", `${leftBefore}`);
                    thisObject.attr("data-top", `${topBefore}`);
                    leftBefore += 72;

                    if(leftBefore == 210){
                        leftBefore = -150;
                        topBefore += 88;
                    }

                }, 100);

                setTimeout(() => {
                    //CSS
                    thisObject.css("transition", "all 0.5s ease");
                }, 200);

            });
            // tarotImage.hide();

            $(".tarot-image").on("click", function () {

                try{
                //   console.log("try success");
                //   console.log(prevTarot);
                  prevTarot.card.remove();
                  $(".daily-tarot").remove();
                  $(".nes-tarot").remove();
                  prevTarot.card.css("transform-origin", "top right");       
                  prevTarot.card.css(
                    "transform",
                    `translate(-${prevTarot.distanceX}px, -${prevTarot.distanceY}px) scale(0.5)`
                  );
                }catch(e){
                  console.log(e);
                }
                
          
                // if(canFlip){
                const thisObject = $(this);
                const thisObjectLeft = parseInt(thisObject.attr('data-left'));
                const thisObjectTop = parseInt(thisObject.attr('data-top'));
                // console.log("left: " + thisObject.attr('data-left'));
                // console.log("top: " + thisObject.attr('data-top'));
                // console.log(thisObject);
                const target = $(".target");
                console.log("target: " + target);
            

                // 獲取目標物體的位置
                const targetPosition = target.position();
                console.log(targetPosition);
                const thisObjectPosition = this.getBoundingClientRect();
                // console.log(this.getBoundingClientRect());
                // 計算目標物體位置相對於點擊物體的距離
                const distanceX = targetPosition.left - 51 - thisObjectPosition.left + thisObjectLeft;
                const distanceY = targetPosition.top - 23 - thisObjectPosition.top + thisObjectTop;
                // console.log("distanceX: " + distanceX + "  distanceY: " + distanceY);
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
                    distanceY: distanceY
                };
                // console.log(prevTarot);
          
              //if(canflip)的大括號
              // }
          
            });
    });


    
});