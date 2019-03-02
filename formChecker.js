// Validate the input from customerFrontend.html

function validateForm() {
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let apples = document.getElementById("apples").value;
  let oranges = document.getElementById("oranges").value;
  let bananas = document.getElementById("bananas").value;
  let shipping = document.forms['shop'].elements['shipping'];

  // Check quantities are not all 0 or negative.
  if (apples | oranges | bananas < 0)
  {
    alert("Can't have negative numbers!");
    return false;
  }

  if (apples + oranges + bananas == 0) {
    alert("You didn't buy anything.");
    return false;
  }

  // Check for valid email format.
  if (!validateEmail(email)) {
    alert("Invalid email!");
    return false;
  }

  // Make sure password isn't blank.
  if (!password) {
    alert("Password is blank!");
    return false;
  }

  // Check shipping options.
  let picked;
  for (let i = 0; i < 3; i++) {
    if (shipping[i].checked) {
      picked = shipping[i].value;
    }
  }

  if (!picked) {
    alert("Pick shipping method!");
    return false;
  }

}

function validateEmail(email) {
  let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}
