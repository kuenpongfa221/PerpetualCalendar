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
  let input = e.srcElement;
  let inputValue = input.innerHTML;
  let inputClassName = input.className;
  let jqInput = $(input);
  console.log(jqInput);
  jqInput.replaceWith(
    `<input class=${input.className} type='text' value='${inputValue}' onkeydown='clickInput(event)'>`
  );

  jqInput = $(`.${inputClassName}`);
  // console.log(typeof inputClassName);
  // console.log(inputClassName);
  // console.log(jqInput);
  jqInput.focus();
  jqInput.val("");
  jqInput.val(inputValue);

  jqInput.on("blur", ()=>{
    jqInput.replaceWith(
      `<div class=${jqInput.attr('class')} onclick='clickDiv(event)'>${jqInput.val()}</div>`
    );
  })
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
      `<input class='todolist-item-1' type='text' value='${input.text()}' onkeypress='clickInput(event)'   />`
    );

    $(".todolist-item-1").focus();
    $(".todolist-item-1").val("");
    $(".todolist-item-1").val(input.text());

    $(".todolist-item-1").on("blur", () => {
      input = $(".todolist-item-1");
      $(".todolist-item-1").replaceWith(
        `<div class='todolist-item-1' onclick='clickDiv(event)'>${input.val()}</div>`
      );
    });
    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });


  $(".todolist-item-2").on("click", () => {
    let inputBefore = $(".todolist-item-2");
    inputBefore.replaceWith(
      `<input class='todolist-item-2' type='text' value='${inputBefore.text()}' onkeypress='clickInput(event)'   />`
    );

    console.log(inputBefore);
    inputAfter = $(".todolist-item-2");
    inputAfter.focus();
    inputAfter.val("");
    inputAfter.val(inputBefore.text());

    inputAfter.on("blur", () => {
      inputAfter = $(".todolist-item-2");
      inputAfter.replaceWith(
        `<div class='todolist-item-2' onclick='clickDiv(event)'>${inputAfter.val()}</div>`
      );
    });
    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });


  $(".todolist-item-3").on("click", () => {
    let inputBefore = $(".todolist-item-3");
    inputBefore.replaceWith(
      `<input class='todolist-item-3' type='text' value='${inputBefore.text()}' onkeypress='clickInput(event)'   />`
    );

    console.log(inputBefore);
    inputAfter = $(".todolist-item-3");
    inputAfter.focus();
    inputAfter.val("");
    inputAfter.val(inputBefore.text());

    inputAfter.on("blur", () => {
      inputAfter = $(".todolist-item-3");
      inputAfter.replaceWith(
        `<div class='todolist-item-3' onclick='clickDiv(event)'>${inputAfter.val()}</div>`
      );
    });
    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });


});
