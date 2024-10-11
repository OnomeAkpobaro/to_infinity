document.getElementById("rsvpForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from submitting

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const attendance = document.getElementById("email").value;

    if (name && email) {
        alert('Thank you for your RSVP, ${name}! You have selected: ${attendance}');
        // here, add actual submission or save data to server
    } else {
        alert("Please fill in all the fields.");
    }
});