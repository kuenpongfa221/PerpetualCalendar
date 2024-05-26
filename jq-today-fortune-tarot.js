$(document).ready(function () {
  const displayCard = $(".display-card");
  const tarots = $(".tarots");
  displayCard.append(`
    <div class="target"></div>
  `);

  for (let i = 0; i < 15; i++) {
    tarots.append(`
    <div class='tarot-image'>
        <img src='./images/tarotBack.jpg' alt='tarot'/>
    </div>
  `);
  }
});
