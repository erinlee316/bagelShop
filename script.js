function submitOrder() {
  // Retrieve form data
  var bagelType = document.getElementById("bagel-type").value;
  var quantity = document.getElementById("quantity").value;
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;

  // Create a message with the order details
  var message = "Thank you for your order! I have received the following details:\n\n" +
      "Name: " + name + "\n" +
      "Email: " + email + "\n" +
      "Bagel Type: " + bagelType + "\n" +
      "Quantity: " + quantity + "\n\n" +
      "I will contact you shortly with further details. If you have any questions, feel free to contact me.";

  // Display the message in a pop-up
  alert(message);

  // Optionally, you can reset the form after submission
  document.getElementById("orderForm").reset();
}