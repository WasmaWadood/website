document.getElementById('orderForm').addEventListener('submit', function(event) {
    // Prevent form submission
    event.preventDefault();
    
    // Get form fields
    const name = document.getElementById('name').value.trim();
    const contact = document.getElementById('contact').value.trim();
    const email = document.getElementById('email').value.trim();
    const address = document.getElementById('address').value.trim();
    const quantity = document.getElementById('quantity').value;
    const payment = document.getElementById('payment').value;

    // Validation checks
    if (!name || !contact || !email || !address || quantity < 1 || !payment) {
        alert('Please fill out all fields correctly.');
        return;
    }

    // Email validation regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return;
    }

    // Phone number validation regex (example for a 10-digit number)
    const phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(contact)) {
        alert('Please enter a valid 10-digit contact number.');
        return;
    }

    // Form is valid, proceed with form submission
    alert('Form submitted successfully!');
    this.submit();
});
