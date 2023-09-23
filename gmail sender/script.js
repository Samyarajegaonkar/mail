const form = document.querySelector("form"),
  statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
  e.preventDefault(); //preventing form from sumbmitting
  statusTxt.style.color = "#0D6EFD"
  statusTxt.style.display = "block";

  let xhr = new XMLHttpRequest(); //creating new xml object
  xhr.open("POST", "message.php", true); //sendig post request to message.php fiels
  xhr.onload = () => { //once ajax response in a response variable
    if (xhr.readyState == 4 && xhr.status == 200) {//if ajax response status is 200 & ready status is 4 measn there is runing very well
      let response = xhr.response;//storing ajax response in a response variable
      //console.log(response);
      if(response.indexOf("Email and password field is required!") != -1 || response.indexOf("Enter a valid email address!") || response.indexOf("Sorry, failed to send your message!!")){
        statusTxt.style.color = "red";
      }else{
        form.reset();
        setTimeout(() =>{
          statusTxt.style.display = "none";
        }, 3000);
      }
      statusTxt.innerText = response;
    }
  };

  let formData = new FormData(form);//Creating new formdata obj. this obj is used to send form data

  xhr.send(formData);//sendig form data
};
