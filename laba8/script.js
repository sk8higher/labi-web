// 1
let mainPhoto = document.getElementById("mainPhoto");

let firstPhoto = document.getElementById("first");
let secondPhoto = document.getElementById("second");
let thirdPhoto = document.getElementById("third");
let fourthPhoto = document.getElementById("fourth");

firstPhoto.addEventListener("click", function (event) {
  mainPhoto.src = firstPhoto.src;
});

secondPhoto.addEventListener("click", function (event) {
  mainPhoto.src = secondPhoto.src;
});

thirdPhoto.addEventListener("click", function (event) {
  mainPhoto.src = thirdPhoto.src;
});

fourthPhoto.addEventListener("click", function (event) {
  mainPhoto.src = fourthPhoto.src;
});

// 2
const list = document.getElementById("list");
const items = document.getElementsByTagName("li");

list.addEventListener("click", function (event) {
  if (event.target.id == "list") return;
  if (!event.ctrlKey) {
    Array.from(items).forEach((el) => (el.style.backgroundColor = "white"));
  }
  event.target.style.backgroundColor = "lime";
});

// 3
function runOnKeys(func, ...codes) {
  let pressed = new Set();

  document.addEventListener("keydown", function (event) {
    pressed.add(event.code);

    for (let code of codes) {
      if (!pressed.has(code)) {
        return;
      }
    }

    pressed.clear();

    func();
  });

  document.addEventListener("keyup", function (event) {
    pressed.delete(event.code);
  });
}

runOnKeys(() => alert("Привет!"), "KeyQ", "KeyW");

// 4
let formEl = document.forms.mainform;

formEl.addEventListener("submit", (event) => {
  event.preventDefault();

  let formData = new FormData(formEl);
  let initial = formData.get("deposit");
  let interest = formData.get("proc") / 100;
  let years = formData.get("srok");

  let result = Math.round(initial * (1 + interest * years));

  let prevEl = document.getElementById("prev");
  let resultEl = document.getElementById("result");

  prevEl.innerText = `${initial}`;
  resultEl.innerText = `${result}`;
});
