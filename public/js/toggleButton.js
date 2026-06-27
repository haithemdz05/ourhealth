   document.getElementById("toggleButton").addEventListener("click", function () {
        const list = document.getElementById("hiddenList");
        const bottomElement = document.getElementById("port4");
        if (list.classList.contains("hidden")) {
            list.classList.remove("hidden");
            bottomElement.style.marginTop = "150px";
        } else {
            list.classList.add("hidden");
            bottomElement.style.marginTop = "20px"; 
        }
    });