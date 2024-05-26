$(document).ready(function () {
  const displayCard = $(".display-card");
  const tarots = $(".tarots");
  displayCard.append(`
    <div class="target"></div>
  `);

  let top = 0;
  let left = 0;
  let count = 1;
  for (let i = 0; i < 15; i++) {
    tarots.append(`
    <div class='tarot-image'>
        <img src='./images/tarotBack.jpg' alt='tarot'/>
    </div>
    `);
  }

  $(".tarot-image").each(function (index) {
    console.log(index);
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
});
