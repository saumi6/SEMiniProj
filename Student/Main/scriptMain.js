
  var droprightButton = document.getElementById("droprightButton");
  var holidayMessage = document.getElementById("holidayMessage");
  dropleftButton.addEventListener("click", function() {
      holidayMessage.style.display = "block";
      setTimeout(function() {
          holidayMessage.style.display = "none";
      }, 60000); // Display for 1 minute (60,000 milliseconds)
  });


