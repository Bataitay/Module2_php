<?php
require_once 'xuli_Registration.php';
require_once "../Login/db/userMsql.php";

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style>
  * {
    box-sizing: border-box;
  }

  body {
    background-color: #f1f1f1;
  }

  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 30%;
    min-width: 300px;
  }

  h1 {
    text-align: center;
  }

  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  }

  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
    display: none;
  }

  button {
    background-color: #04AA6D;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
  }

  button:hover {
    opacity: 0.8;
  }

  #prevBtn {
    background-color: #bbbbbb;
  }

  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  .step.active {
    opacity: 1;
  }

  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #04AA6D;
  }
  #regForm  #showpass {
    margin-left: -170px;
  }
  #regForm  .showpass {
    margin-left: -170px;
  }
  
</style>

<body>

  <form id="regForm" method="POST" action="">
    <h1>Register:</h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">Contact Info:
      <p><input type="email" placeholder="E-mail..." oninput="this.className = ''" id="email" name="email"></p>
      <span id="message2"></span>
      <p><input placeholder="password..." oninput="this.className = ''" name="password" type="password" id="password"></p>
      <span id="message1"></span>
      <p><input placeholder="confirm_password..." oninput="this.className = ''" name="confirm_password" type="password" id="confirm_password"></p>
      <span id="message"></span>
    </div>
    <!-- <input id="showpass" type="checkbox" onclick="myFunction()"><span class="showpass">Show Password</span> -->
    <div class="tab">Contact User:
      <p><input placeholder="Username..." oninput="this.className = ''" name="name"></p>
      <p><input type="number" placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
      <p><input type="date" placeholder="dd/nn/yyyy" oninput="this.className = ''" name="birthday"></p>
    </div>
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      
    </div>
  </form>
  
  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
    $('#confirm_password').on('keyup', function() {
      if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Kh???p').css('color', 'green');
      } else
        $('#message').html('Ch??a kh???p m???t kh???u').css('color', 'red');
        return false;
    });

    $('#password').on('keyup', function() {
      if ($('#password').val().length <= 8) {
        $('#message1').html('m???t kh???u y???u...').css('color', 'red');
      } else {
        $('#message1').html('m???t kh???u M???nh...').css('color', 'green');
      }
    });
    // $(function() {
    //   $('#regForm').button(function() {
    //     if ($('[name = password]').val() != $('[name = confirm_password]').val()) {
    //       alert('m???t kh???u kh??ng kh???p');
    //       return false;
    //     }
    //     return true;
    //   });
    // });
    // $('#email').on('keyup', function() {
    //   let numbers = /[0-9]/g;
    //   let lowerCaseLetters = /[a-z]/g;
    //   if ($('#email').val().match(numbers) && $('#email').val().match(lowerCaseLetters)) {
    //     $('#message2').html('xin l???i, email ch??? ???????c s??? d???ng ch??? c??i t??? (a-z), s???(0-9), v?? d???u ch???m (.)').css('color', 'red');
    //   }
    // })
//     function myFunction() {
//   var x = document.getElementById("showpass");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// }
  </script>

</body>

</html>