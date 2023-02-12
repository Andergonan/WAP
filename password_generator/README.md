# Password Generator

- *jedná se o JS webobou aplikaci, která na základě požadavků klienta generuje a validuje heslo.*

## Dev docs 

- třída `Password`, obsahuje funkce `generate()` & `check()`
- funkce `generate()` generuje hesla na základě požadvků klienta
    - pokud je hodnota `lenght` nižší, jak 6, je automaticky vygenerováno heslo o 6 znacích
    - když je hodnota `lenght` vyšší jak 32, je vygenerováno heslo o 32 znacích
- funkce `check()` porovnává heslo v poli `password` a `password_check`
    - pokud se heslo v poli `password_check` neshoduje s heslem v poli `password`, tak je označeno jako nevalidní
        - pole změní své pozadí na červené a uživateli se zobrazí chybové hlášení
    - pokud jsou hesla shodná, pole mají zelený background

*ukázka kódu - kontrola povolené délky `lenght`*
```
    if (this.length > 32) {
      this.length = 32;
    } else if (this.length < 6) {
      this.length = 6;
    }
```

*ukázka kódu - funkce `check()`*
```
  check() {
    if (this.passwordInput.value !== this.passwordCheckInput.value) {
      document.getElementById("error_mess").innerHTML = "Hesla se neshodují!"; //  ERROR
      this.passwordInput.style.backgroundColor = "#fc3d3d"; // red
      this.passwordCheckInput.style.backgroundColor = "#fc3d3d"; // red
    } else {
      document.getElementById("error_mess").innerHTML = ""; // OK
      this.passwordInput.style.backgroundColor = "#56f55e"; // green
      this.passwordCheckInput.style.backgroundColor = "#56f55e"; // green
    }
  }

```


- [keyup event](https://developer.mozilla.org/en-US/docs/Web/API/Element/keyup_event)
- [charAt()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/charAt)
- [Math.floor()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/floor)
- [preventDefault()](https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault)