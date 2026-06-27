   let count = 2;

document.getElementById("add-chronic").addEventListener("click", function() {
  const container1 = document.getElementById("input-container1");

  const newInput = document.createElement("input");
  newInput.type = "text";
  newInput.name = "chronic" + count;
  newInput.placeholder = "chronic disease";

  container1.appendChild(document.createElement("br"));
  container1.appendChild(newInput);

  count++;
});
let count5 = 2;
document.getElementById("add-genetic").addEventListener("click", function() {
  const container1 = document.getElementById("input-container5");

  const newInput = document.createElement("input");
  newInput.type = "text";
  newInput.name = "genetic"+count5;
  newInput.placeholder = "Genetic disease";

  container1.appendChild(document.createElement("br"));
  container1.appendChild(newInput);

  count5++;
});
let count1 = 2;

document.getElementById("add-button").addEventListener("click", function() {
  const container2 = document.getElementById("input-container2");

  const newInput = document.createElement("input");
  newInput.type = "text";
  newInput.name = "Desease" + count1;
  newInput.placeholder = "Desease ";

  container2.appendChild(document.createElement("br"));
  container2.appendChild(newInput);

  count1++;
});
let count3 = 2;

document.getElementById("add-medication").addEventListener("click", function() {
  const container2 = document.getElementById("input-container3");

  const newInput = document.createElement("input");
  newInput.type = "text";
  newInput.name = "medication" + count3;
  newInput.placeholder = "medication ";

  container2.appendChild(document.createElement("br"));
  container2.appendChild(newInput);

  count3++;
});
let count4 = 2;

document.getElementById("add-surgery").addEventListener("click", function() {
  const container2 = document.getElementById("input-container4");

  const newInput = document.createElement("input");
  const date = document.createElement("input");
  newInput.type = "text";
  date.type = "date";
  newInput.name = "surgery" + count4;
  date.name = "date" + count4;
  newInput.placeholder = "surgery ";
  container2.appendChild(document.createElement("br"));
  container2.appendChild(newInput);
  container2.appendChild(date);

  count4++;
});