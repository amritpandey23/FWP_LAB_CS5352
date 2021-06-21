let h1, r1, h2, r2, h3, r3;

h1 = parseInt(prompt("Enter total work hours for EMPLOYEE 1"));
r1 = parseInt(window.prompt("What is hourly wage for EMPLOYEE 1?"));
h2 = parseInt(window.prompt("Enter total work hours for EMPLOYEE 2"));
r2 = parseInt(window.prompt("What is hourly wage for EMPLOYEE 2?"));
h3 = parseInt(window.prompt("Enter total work hours for EMPLOYEE 3"));
r3 = parseInt(window.prompt("What is hourly wage for EMPLOYEE 3?"));

function calculateGrossWage(hour, rate) {
  let pay = 0;
  if (hour > 40) {
    let exthr = hour - 40;
    pay = (exthr * rate * 3) / 2;
    pay += 40 * rate;
    return pay;
  } else {
    pay = hour * rate;
    return pay;
  }
}

const content = document.getElementById("emp");
content.innerHTML =
  "<h2> Employee 1 gross wage: " +
  calculateGrossWage(h1, r1) +
  "</h2>" +
  "<h2> Employee 2 gross wage: " +
  calculateGrossWage(h2, r2) +
  "</h2>" +
  "<h2> Employee 3 gross wage: " +
  calculateGrossWage(h3, r3) +
  "</h2>";
