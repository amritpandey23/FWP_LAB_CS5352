console.log("successful script entry");
const form = document.getElementById("wall");
const result_block = document.getElementById("result-block");
form.addEventListener("submit", function (event) {
  event.preventDefault();
  let txt = form["text"].value;
  txt = txt.replace(/[^a-zA-Z0-9]/g, " ");
  txt = txt.replace(/[\r\n]+/gm, "");
  txt = txt.split(" ");
  let m = new Map();
  for (j in txt) {
    if (j == "" || j == "") {
      delete txt[j];
    }

    if (m.has(txt[j])) {
      console.log(txt[j] + " already in map");
      val = m.get(txt[j]);
      val += 1;
      console.log(val);
      m.set(txt[j], val);
    } else {
      console.log(txt[j] + " not in map");
      m.set(txt[j], 1);
    }
  }

  const body = document.getElementsByTagName("body")[0];
  let table = document.createElement("table");
  table.style.border = "1";
  table.style.borderCollapse = true;
  table.style.width = "100";
  let thead = document.createElement("thead");
  let trow = document.createElement("tr");
  let tbody = document.createElement("tbody");
  let tr = document.createElement("tr");

  for (let [key, value] of m.entries()) {
    tr = document.createElement("tr");
    let td = document.createElement("td");
    td.appendChild(document.createTextNode(key));
    tr.appendChild(td);
    td = document.createElement("td");
    td.appendChild(document.createTextNode(value));
    tr.appendChild(td);
    tbody.appendChild(tr);
  }
  table.appendChild(tbody);
  body.appendChild(table);
});
