class Password {
  
  constructor() {
    this.length = document.getElementById("password_length").value;
    this.complexity = document.getElementById("password_complexity").value;
    this.passwordInput = document.getElementById("password");
    this.passwordCheckInput = document.getElementById("password_check");
    this.generateButton = document.querySelector('input[type="submit"]');
    
    this.generateButton.addEventListener("click", (event) => {
      event.preventDefault();
      this.generate();
    });
    
    this.passwordCheckInput.addEventListener("keyup", (event) => {
      this.check();
    });
  }

  generate() {
    this.length = document.getElementById("password_length").value;
    this.complexity = document.getElementById("password_complexity").value;

    if (this.length > 32) {
      this.length = 32;
    } else if (this.length < 6) {
      this.length = 6;
    }

    const lowerCaseLetters = "abcdefghijklmnopqrstuvwxyz";
    const upperCaseLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const numbers = "0123456789";
    const symbols = "!@#$%^&*()_+-=[]{};:,.<>?";

    let characters = lowerCaseLetters;
    if (this.complexity === "medium") {
      characters += upperCaseLetters + numbers;
    } else if (this.complexity === "high") {
      characters += upperCaseLetters + numbers + symbols;
    }
  
    let password = "";
    for (let i = 0; i < this.length; i++) {
      password += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    this.passwordInput.value = password;
    this.passwordCheckInput.value = password;
    this.check();
  }

  check() {
    if (this.passwordInput.value !== this.passwordCheckInput.value) {
      document.getElementById("error_mess").innerHTML = "Hesla se neshodují!";
      this.passwordInput.style.backgroundColor = "#fc3d3d";
      this.passwordCheckInput.style.backgroundColor = "#fc3d3d";
    } else {
      document.getElementById("error_mess").innerHTML = "";
      this.passwordInput.style.backgroundColor = "#56f55e";
      this.passwordCheckInput.style.backgroundColor = "#56f55e";
    }
  }
}

const password = new Password();

const view = document.getElementById('view');

view.addEventListener('click', function() {
  const passwordInput = document.getElementById('password');
  const passwordCheckInput = document.getElementById('password_check');
  
  if (passwordInput.type === 'password' || passwordCheckInput === 'password') {
    passwordInput.type = 'text';
    passwordCheckInput.type = 'text';
  } else {
    passwordInput.type = 'password';
    passwordCheckInput.type = 'password';
  }
});