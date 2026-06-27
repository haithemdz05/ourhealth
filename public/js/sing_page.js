const patientPage = document.getElementById("patient");
  const doctorPage = document.getElementById("doctor");
  const text1 = document.getElementById("text1");
  const text2 = document.getElementById("text2");
  const code = document.getElementById("code");
  const fb = document.getElementsByClassName("fp");

  function switch_log(id) {
    if (id === "doctor") {
      text1.innerHTML = "Sign in with the email and password";
      text2.innerHTML = "";
      code.placeholder = "* Email";
      doctorPage.style.backgroundColor = "#4a4a4a";
      doctorPage.style.color = "#fff";
      patientPage.style.backgroundColor = "#1079e3";
      patientPage.style.color = "#ffffff";
     
      fb[1].style.display = "none";
    } else if (id === "patient") {
      text1.innerHTML = "Sign in with the card number on the card";
      text2.innerHTML = "Here you will find your health information and the latest updates.";
      code.placeholder = "* Card number";
      patientPage.style.backgroundColor = "#4a4a4a";
      patientPage.style.color = "#fff";
      doctorPage.style.backgroundColor = "#1079e3";
      doctorPage.style.color = "#ffffff";

      fb[1].style.display = "block";
    }
  }
  function setUserType(type) {
    document.getElementById('user_type').value = type;
}