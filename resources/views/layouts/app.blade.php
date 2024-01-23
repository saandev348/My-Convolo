<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        .saan-display {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .saan-display form {
            width: 45%;
            margin: auto;
        }

        div#timer {
            text-align: center;
            font-size: 70px;

        }

        span#countdown {
            padding: 0 10px;
            ;
            background: #0d6efd;
            border-radius: 20px;
            color: #fff;
        }

        div#timer span:nth-child(3) {
            color: #0d6efd;

        }
    </style>
</head>

<body>
    @section('header')
        <header>
            <!-- Your dynamic header content goes here -->
            <!-- <h1>My Laravel App Header</h1> -->
        </header>
    @show

    <div class="content">
        @yield('content')
    </div>

    @section('footer')
        <footer>
            <!-- Your dynamic footer content goes here -->
            <!-- <p>&copy; 2024 My Laravel App</p> -->
        </footer>
    @show

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('callMeForm');
            const timerDiv = document.getElementById('timer');
            const countdownSpan = document.getElementById('countdown');
            const callMeButton = document.getElementById('call-me');

            form.addEventListener('submit', async function(event) {
                event.preventDefault(); // Prevent the form from submitting immediately

                // Submit the form data
                await submitFormData();

                // Hide the form and show the timer
                form.style.display = 'none';
                timerDiv.style.display = 'block';

                // Set the initial countdown value
                let countdown = 60;

                // Update the countdown span every second
                const intervalId = setInterval(function() {
                    countdownSpan.textContent = countdown;

                    if (countdown <= 0) {
                        // Show the form again when the timer reaches 0
                        form.style.display = 'block';
                        timerDiv.style.display = 'none';
                        form.reset();
                        // Clear the interval to stop the countdown
                        clearInterval(intervalId);
                    }

                    countdown--;
                }, 1000);
            });

            // Function to submit form data
            async function submitFormData() {
                // Use fetch or any other method to submit your form data
                // For example:
                const response = await fetch('{{ url('index') }}', {
                    method: 'POST',
                    body: new FormData(form),
                });

                // Handle the response if needed
                // For example:
                if (response.ok) {
                    console.log('Form data submitted successfully');
                } else {
                    console.error('Error submitting form data');
                }
            }
        });
    </script>
    {{-- <script>
        form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting immediately
    console.log('Form submit event triggered');
    // Rest of your code
});

    </script> --}}
</body>

</html>
