function blurInput(input) {
  // inputValue = $(".todolist-item-1").val();
  // $(".todolist-item-1").replaceWith(
  //   `<div class='todolist-item-1' onclick='clickDiv()'>${input}</div>`
  // );
}
// function clickDiv() {
//   inputValue = $(".todolist-item-1").text();
//   $(".todolist-item-1").replaceWith(
//     `<input class='todolist-item-1' type='text' value='${inputValue}' onkeydown='clickInput(event)' onblur='blurInput()'>`
//   );
// }
function clickInput(e, input, className) {
  // console.log("yes!!");
  // console.log(e.key);
  // const inputValue = input.val();
  // console.log(inputValue);
  // const div = document.createElement("div");
  // div.classList.add("todolist-item-1");
  // div.innerHTML = inputValue;
  // if (e.key == "Enter") {
  //   $(".todolist-item-1").replaceWith(
  //     `<div class='todolist-item-1' onclick='clickDiv()'>${inputValue}</div>`
  //   );
  //   //   text.classList.add("text");
  //   //   text.innerHTML = inputValue;
  // }
  // text = $(".todolist-item-1");
  // console.log(text);
  // $(".text")
}

$(document).ready(function () {
  $(".todolist-item-1").on("click", () => {
    let input = $(".todolist-item-1");
    let class_name = "todolist-item-1";
    console.log(input);
    $(".todolist-item-1").replaceWith(
      `<input class='todolist-item-1' type='text' value='${input.text()}' onkeydown='clickInput(event, ${input}, ${class_name})'   />`
    );

    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });

  // $(".todolist-item-2").on("click", () => {
  //   let inputValue = $(".todolist-item-2").text();
  //   console.log(inputValue);
  //   $(".todolist-item-2").replaceWith(
  //     `<input class='todolist-item-2' type='text' value='${inputValue}' onkeydown='clickInput(event)' onblur='blurInput()'>`
  //   );

  //   //html 的event一定要打event，不能打e
  //   //   $(".text").attr("onkeydown", `myFunction(event)`);
  // });
});
