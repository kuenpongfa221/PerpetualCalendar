// function blurInput(e) {
//   let input = e.srcElement;
//   let inputValue = e.srcElement.value;
//   let inputClass = input.className;
//   // console.log(e);
//   // console.log(inputValue);
//   $(input).replaceWith(
//     `<div class=${inputClass} onclick='clickDiv(event)'>${inputValue}</div>`
//   );
// }
function clickDiv(e) {
  // console.log(e);
  let input = e.target;
  let inputValue = input.innerHTML;
  console.log(inputValue);
  $(input).replaceWith(
    // `<input class='todolist-item-1' type='text' value='${inputValue}' onkeydown='clickInput(event)' onblur='blurInput()'>`
    `<input class=${input.className} type='text' value='${inputValue}' onkeydown='clickInput(event)'>`
  );

  $(".todolist-item-1").on("click", () => {
    let input = $(".todolist-item-1");
    $(".todolist-item-1").replaceWith(
      // `<input class='todolist-item-1' type='text' value='${input.text()}' onkeydown='clickInput(event, ${input}, ${class_name})'   />`
      `<input class='todolist-item-1' type='text' value='${input.text()}' onkeypress='clickInput(event)'   />`
    );

    $(".todolist-item-1").focus();
    $(".todolist-item-1").val("");
    $(".todolist-item-1").val(input.text());

    $(".todolist-item-1").on("blur", () => {
      input = $(".todolist-item-1");
      // console.log(e);
      // console.log(inputValue);
      $(".todolist-item-1").replaceWith(
        `<div class='todolist-item-1' onclick='clickDiv(event)'>${input.val()}</div>`
      );
    });
    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });
}
function clickInput(e) {
  // console.log("yes!!");
  console.log(e);
  // console.log(e.key);
  // console.log(e.srcElement);
  let input = e.srcElement;
  let input_class_name = input.className;
  // console.log(input);
  // console.log(input_class_name);
  // console.log(input.value);

  if (e.key == "Enter") {
    console.log(123);
    console.log($(input));
    console.log(input);
    $(input).replaceWith(
      `<div class=${input.className} onclick='clickDiv(event)'>${input.value}</div>`
    );
  }
}

$(document).ready(function () {
  $(".todolist-item-1").on("click", () => {
    let input = $(".todolist-item-1");
    $(".todolist-item-1").replaceWith(
      // `<input class='todolist-item-1' type='text' value='${input.text()}' onkeydown='clickInput(event, ${input}, ${class_name})'   />`
      `<input class='todolist-item-1' type='text' value='${input.text()}' onkeypress='clickInput(event)'   />`
    );

    $(".todolist-item-1").focus();
    $(".todolist-item-1").val("");
    $(".todolist-item-1").val(input.text());

    $(".todolist-item-1").on("blur", () => {
      input = $(".todolist-item-1");
      // console.log(e);
      // console.log(inputValue);
      $(".todolist-item-1").replaceWith(
        `<div class='todolist-item-1' onclick='clickDiv(event)'>${input.val()}</div>`
      );
    });
    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });


  // $(".todolist-item-2").on("click", () => {
  //   let input = $(".todolist-item-2");
  //   $(".todolist-item-2").replaceWith(
  //     // `<input class='todolist-item-1' type='text' value='${input.text()}' onkeydown='clickInput(event, ${input}, ${class_name})'   />`
  //     `<input class='todolist-item-2' type='text' value='${input.text()}' onkeydown='clickInput(event)' onblur='blurInput(event)'   />`
  //   );

  //   $(".todolist-item-2").focus();
  //   $(".todolist-item-2").val("");
  //   $(".todolist-item-2").val(input.text());

  //   //html 的event一定要打event，不能打e
  //   //   $(".text").attr("onkeydown", `myFunction(event)`);
  // });


});
