// Form submission
document.getElementById("paymentForm").addEventListener("submit", function (e) {
  e.preventDefault();

  try {
      
      const formData = {
          paymentMethod: document.querySelector('input[name="paymentMethod"]:checked')?.value,
          cardNumber: document.getElementById("card-number").value.replace(/[\s-]/g, '').trim(),
          cvv: document.getElementById("cvv").value.trim(),
          expiryMonth: document.getElementById("expiry-month").value,
          expiryYear: document.getElementById("expiry-year").value,
          email: document.getElementById("email").value.replace(/[^a-zA-Z0-9@._-]/g, '').trim(),
          firstName: document.getElementById("first-name").value.replace(/[^a-zA-Z\s]/g, '').trim(),
          lastName: document.getElementById("last-name").value.replace(/[^a-zA-Z\s]/g, '').trim(),
          address1: document.getElementById("address1").value.trim(),
          address2: document.getElementById("address2").value.trim(),
          city: document.getElementById("city").value.replace(/[^a-zA-Z\s]/g, '').trim(),
          state: document.getElementById("state").value,
          zipCode: document.getElementById("zip-code").value.replace(/\D/g, '').trim(),
          saveInfo: document.getElementById("saveInfo").checked,
          newsletter: document.getElementById("newsletter").checked,
          promotions: document.getElementById("promotions").checked,
          terms: document.getElementById("terms").checked,
          privacy: document.getElementById("privacy").checked
      };

      console.log('Sending data:', formData); // Debug log

      
      fetch("../api/process_payment.php", {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
          },
          body: JSON.stringify(formData)
      })
      .then(response => {
          console.log('Raw response:', response); // Debug log
          if (!response.ok) { // Check if response is not OK (status code 200-299)
              throw new Error(`HTTP error! status: ${response.status}`);
          }
          return response.json(); // Parse JSON response
      })
      .then(data => {
          console.log('Response data:', data); // Debug log
          if (data.success) {
              alert(data.message);
              window.location.href = "../html/home.php"; // Redirect on success
          } else {
              throw new Error(data.message);
          }
      })
      .catch(error => {
          alert(error.message);
          console.error("Error:", error);
      });

  } catch (error) {
      alert(error.message);
      console.error("Validation error:", error);
  }
});


document.getElementById("card-number").addEventListener("input", function(e) {
  let value = e.target.value.replace(/\D/g, '');
  value = value.replace(/(\d{4})/g, '$1 ').trim();
  e.target.value = value.substring(0, 19); // Limit to 19 characters (16 digits + spaces)
});

document.getElementById("cvv").addEventListener("input", function(e) {
  e.target.value = e.target.value.replace(/\D/g, '').substring(0, 4); // Limit to 4 digits
});

document.getElementById("first-name").addEventListener("input", function(e) {
  e.target.value = e.target.value.replace(/[^a-zA-Z\s]/g, ''); // Allow only letters and spaces
});

document.getElementById("last-name").addEventListener("input", function(e) {
  e.target.value = e.target.value.replace(/[^a-zA-Z\s]/g, ''); // Allow only letters and spaces
});

document.getElementById("city").addEventListener("input", function(e) {
  e.target.value = e.target.value.replace(/[^a-zA-Z\s]/g, ''); // Allow only letters and spaces
});

document.getElementById("zip-code").addEventListener("input", function(e) {
  e.target.value = e.target.value.replace(/\D/g, '').substring(0, 6); // Limit to 6 digits
});


window.addEventListener('load', function() {
  try {
      const savedPreferences = localStorage.getItem('userPreferences');
      if (savedPreferences) {
          const preferences = JSON.parse(savedPreferences);
          
          Object.keys(preferences).forEach(key => {
              const element = document.getElementById(key);
              if (element) {
                  if (element.type === 'checkbox') {
                      element.checked = preferences[key]; 
                  } else {
                      element.value = preferences[key]; // Restore input value
                  }
              }
          });
      }
  } catch (error) {
      console.error("Error loading preferences:", error);
  }
});
