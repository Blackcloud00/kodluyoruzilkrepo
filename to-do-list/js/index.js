const target = window.document.getElementsByTagName('h1')[0]

const flickerLetter = letter => `<span style="animation: text-flicker-in-glow ${Math.random() * 4}s linear both ">${letter}</span>`
const colorLetter = letter => `<span style="color: hsla(${Math.random() * 360}, 100%, 80%, 1);">${letter}</span>`;
const flickerAndColorText = text =>
    text
        .split('')
        .map(flickerLetter)
        .map(colorLetter)
        .join('');
const neonGlory = target => target.innerHTML = flickerAndColorText(target.textContent);


neonGlory(target);
target.onclick = ({target}) => neonGlory(target);

var panelDiv = document.querySelector("#panel");
var ekleBtn = document.querySelector("#ekle");
var delBtn = document.querySelector("#sil");
const addinp = document.getElementById("add-list");
const che = document.querySelectorAll(".che");


ekleBtn.onclick = function () {
    if (addinp.value.length > 1) {
        var ul = document.createElement("ul");
        ul.classList = "list-group";
        var li = document.createElement("li");
        li.classList = "list-group-item";
        ulLi = ul.appendChild(li);
        var input = document.createElement("input");
        input.classList = "form-check-input me-1 che";

        input.type = "checkbox";
        li.textContent = addinp.value;
        var inpUlLi = ulLi.appendChild(input);
        panelDiv.appendChild(ul);
    }
}

function sil() {
    const che = document.getElementsByClassName("che");
    for (let i = 0; i < che.length; i++) {
        if (che[i].checked == true) {
            che[i].parentNode.parentNode.remove();
        }
    }
}

