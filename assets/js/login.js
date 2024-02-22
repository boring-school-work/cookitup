document.getElementById("loginForm").addEventListener("submit", function(event) {
    var password = document.getElementById("password").value;
    if (!isValidPassword(password)) {
        event.preventDefault();
        alert("Password must be at least 8 characters long, contain a number and a symbol.");
    }
});

function isValidPassword(password) {
    return /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-zA-Z]).{8,}$/.test(password);
}