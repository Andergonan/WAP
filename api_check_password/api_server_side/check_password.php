<html>
    <script>
    document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault();

    var password = document.querySelector("input[name='password']").value;

    if (password.length < 8) {
        alert("Error: Heslo musí mít alespoň 8 znaků.");
    } else if (!/[A-Z]/.test(password)) {
        alert("Error: Heslo musí obsahovat alespoň jedno velké písmeno.");
    } else if (!/[a-z]/.test(password)) {
        alert("Error: Heslo musí obsahovat alespoň jedno malé písmeno.");
    } else if (!/[0-9]/.test(password)) {
        alert("Error: Heslo musí obsahovat alespoň jedno číslo.");
    } else {
        alert("Success: Heslo je validní.");
    }
    });
    </script>
</html>