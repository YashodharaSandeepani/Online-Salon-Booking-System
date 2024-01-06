
 // Function to validate the form
function validateForm(event) {
    // Prevent form submission
    event.preventDefault();

    // Get the input values
    var cardNumber = document.getElementById('cardNumber').value;
    var cvv = document.getElementById('cvv').value;

    // Regular expressions for card number and CVV validation
    var cardNumberPattern = /^\d{12,19}$/;
    var cvvPattern = /^\d{3,4}$/;

    // Perform validation
    if (!cardNumberPattern.test(cardNumber)) {
        alert("Invalid card number");
        return;
    }

    if (!cvvPattern.test(cvv)) {
        alert("Invalid CVV");
        return;
    }

    // If validation passes, submit the form
    event.target.submit();
}
