 let count = 2;

  function addInput() {
    const container = document.getElementById("input-container");
    const newInput = document.createElement("input");
    newInput.type = "text";
    newInput.name = "input" + count;
    container.appendChild(document.createElement("br")); // للسطر الجديد
    container.appendChild(newInput);
    count++;
  }