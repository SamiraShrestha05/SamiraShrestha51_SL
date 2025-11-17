
        function validateForm() {
            let valid = true;

          
            document.querySelectorAll('.error').forEach(e => e.textContent = "");

    
            const name = document.getElementById('name').value.trim();
            if (name === "" || /[0-9]/.test(name)) {
                document.getElementById('nameErr').textContent = "Name must not be empty and cannot contain numbers.";
                valid = false;
            }

        
            if (document.getElementById('address').value.trim() === "") {
                document.getElementById('addressErr').textContent = "Address cannot be empty.";
                valid = false;
            }

     
            const username = document.getElementById('username').value.trim();
            if (username === "" || /[^A-Za-z0-9_]/.test(username)) {
                document.getElementById('usernameErr').textContent = "Username cannot be empty and may only contain letters, numbers, and underscore.";
                valid = false;
            }

          
            const email = document.getElementById('email').value.trim();
            if (email === "" || !email.includes('@')) {
                document.getElementById('emailErr').textContent = "Email must not be empty and must contain '@'.";
                valid = false;
            }

         
            const pw = document.getElementById('password').value;
            const pwRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/;
            if (!pwRegex.test(pw)) {
                document.getElementById('passwordErr').textContent = "Password must be at least 8 chars, include upper, lower, digit, and special char.";
                valid = false;
            }

         
            const phone = document.getElementById('phone').value.trim();
            if (!/^(98|97|96)[0-9]{8}$/.test(phone)) {
                document.getElementById('phoneErr').textContent = "Phone must start with 98/97/96 and contain only 10 digits.";
                valid = false;
            }

           
            const gender = document.querySelector('input[name="gender"]:checked');
            if (!gender) {
                document.getElementById('genderErr').textContent = "Gender must be selected.";
                valid = false;
            }

     
            if (document.getElementById('course').value === "") {
                document.getElementById('courseErr').textContent = "Please select a course.";
                valid = false;
            }

            return valid;
        }
