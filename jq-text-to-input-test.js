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
const items = {
  item1: "",
  item2: "",
  item3: "",
};

if (localStorage.todolistItems) {
  const data = JSON.parse(localStorage.todolistItems);
  items.item1 = data.item1;
  items.item2 = data.item2;
  items.item3 = data.item3;
}

function clickDiv(e) {
  console.log(e);
  let input = e.srcElement;
  let inputValue = input.innerHTML;
  let inputClassName = input.className;
  let thisItem = inputClassName.split("-")[2];
  console.log(thisItem);
  let jqInput = $(input);
  // console.log(jqInput);
  jqInput.replaceWith(
    `<input class=${input.className} type='text' value='${inputValue}' onkeydown='clickInput${thisItem}(event)'>`
  );

  jqInput = $(`.${inputClassName}`);
  // console.log(typeof inputClassName);
  // console.log(inputClassName);
  // console.log(jqInput);
  jqInput.focus();
  jqInput.val("");
  jqInput.val(inputValue);

  jqInput.on("blur", () => {
    //存入localStorage
    // items.item1 = jqInput.val();
    // localStorage.todolistItems = JSON.stringify(items);
    jqInput.replaceWith(
      `<div class=${jqInput.attr(
        "class"
      )} onclick='clickDiv(event)'>${jqInput.val()}</div>`
    );
  });
}
function clickInput1(e) {
  // console.log("yes!!");
  console.log(e);
  // console.log(e.key);
  // console.log(e.srcElement);
  let input = e.srcElement;
  // let input_class_name = input.className;
  // console.log(input);
  // console.log(input_class_name);
  // console.log(input.value);

  if (e.key == "Enter") {
    console.log($(input));
    console.log(input);
    items.item1 = input.value;
    localStorage.todolistItems = JSON.stringify(items);
    $(input).replaceWith(
      `<div class=${input.className} onclick='clickDiv(event)'>${input.value}</div>`
    );
  }
}

function clickInput2(e) {
  // console.log("yes!!");
  console.log(e);
  // console.log(e.key);
  // console.log(e.srcElement);
  let input = e.srcElement;
  // let input_class_name = input.className;
  // console.log(input);
  // console.log(input_class_name);
  // console.log(input.value);

  if (e.key == "Enter") {
    console.log($(input));
    console.log(input);
    items.item2 = input.value;
    localStorage.todolistItems = JSON.stringify(items);
    $(input).replaceWith(
      `<div class=${input.className} onclick='clickDiv(event)'>${input.value}</div>`
    );
  }
}

function clickInput3(e) {
  // console.log("yes!!");
  console.log(e);
  // console.log(e.key);
  // console.log(e.srcElement);
  let input = e.srcElement;
  // let input_class_name = input.className;
  // console.log(input);
  // console.log(input_class_name);
  // console.log(input.value);

  if (e.key == "Enter") {
    console.log($(input));
    console.log(input);
    items.item3 = input.value;
    localStorage.todolistItems = JSON.stringify(items);
    $(input).replaceWith(
      `<div class=${input.className} onclick='clickDiv(event)'>${input.value}</div>`
    );
  }
}

$(document).ready(function () {
  // console.log(items.item1);
  //用localStorage為items賦值
  $(".todolist-item-1").text(`${items.item1}`);
  $(".todolist-item-2").text(`${items.item2}`);
  $(".todolist-item-3").text(`${items.item3}`);

  $(".todolist-item-1").on("click", () => {
    let input = $(".todolist-item-1");
    $(".todolist-item-1").replaceWith(
      `<input class='todolist-item-1' type='text' value='${items.item1}' onkeypress='clickInput1(event)'   />`
    );

    $(".todolist-item-1").focus();
    $(".todolist-item-1").val("");
    $(".todolist-item-1").val(items.item1);

    $(".todolist-item-1").on("blur", () => {
      input = $(".todolist-item-1");
      items.item1 = input.val();
      localStorage.todolistItems = JSON.stringify(items);
      $(".todolist-item-1").replaceWith(
        `<div class='todolist-item-1' onclick='clickDiv(event)'>${items.item1}</div>`
      );
    });
    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });

  $(".todolist-item-2").on("click", () => {
    let inputBefore = $(".todolist-item-2");
    inputBefore.replaceWith(
      `<input class='todolist-item-2' type='text' value='${items.item2}' onkeypress='clickInput2(event)'   />`
    );

    console.log(inputBefore);
    inputAfter = $(".todolist-item-2");
    inputAfter.focus();
    inputAfter.val("");
    inputAfter.val(items.item2);

    inputAfter.on("blur", () => {
      inputAfter = $(".todolist-item-2");
      items.item2 = inputAfter.val();
      localStorage.todolistItems = JSON.stringify(items);
      inputAfter.replaceWith(
        `<div class='todolist-item-2' onclick='clickDiv(event)'>${items.item2}</div>`
      );
    });
    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });

  $(".todolist-item-3").on("click", () => {
    let inputBefore = $(".todolist-item-3");
    inputBefore.replaceWith(
      `<input class='todolist-item-3' type='text' value='${items.item3}' onkeypress='clickInput3(event)'   />`
    );

    console.log(inputBefore);
    inputAfter = $(".todolist-item-3");
    inputAfter.focus();
    inputAfter.val("");
    inputAfter.val(items.item3);

    inputAfter.on("blur", () => {
      inputAfter = $(".todolist-item-3");
      items.item3 = inputAfter.val();
      localStorage.todolistItems = JSON.stringify(items);
      inputAfter.replaceWith(
        `<div class='todolist-item-3' onclick='clickDiv(event)'>${items.item3}</div>`
      );
    });
    //html 的event一定要打event，不能打e
    //   $(".text").attr("onkeydown", `myFunction(event)`);
  });
});
