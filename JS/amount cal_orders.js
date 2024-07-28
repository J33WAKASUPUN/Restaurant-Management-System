


function calculateTotalAmount() {
    // Get the values of the "amount" and "quantity" fields
    var amount = parseFloat(document.getElementById("amount").value);
    var quantity = parseFloat(document.getElementById("quantity").value);

    // Calculate the total amount
    var totalAmount = amount * quantity;

    // Set the value of the "total_amount" field to the calculated total
    document.getElementById("totalamount").value = totalAmount;
}
