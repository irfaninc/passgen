<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    {{ $slot }}


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-0 border-top py-2">
                <!-- Desc -->
                <div class="col-md-12 col-12 text-center">
                    <span>© <span id="copyright">
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>
                        </span>Developed by mi. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>



    @livewireScripts
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('passwordCopied', password => {
            const input = document.getElementById('textInput');
            input.select(); // Select the text in the input
            input.setSelectionRange(0, 99999); // Ensures all text is selected, especially on mobile
    
            try {
                document.execCommand('copy'); // Attempt to copy the selected text
                Swal.fire("Copied!", "Password copied to clipboard!", "success"); // Using SweetAlert 3
            } catch (err) {
                console.error('Error copying text: ', err);
                Swal.fire("Oops!", "Failed to copy password.", "error"); // Using SweetAlert 3
            }
        });

        Livewire.on('passwordCopyError', () => {
            Swal.fire("Oops!", "No password to copy.", "warning"); // Alert for empty password
        });
    </script>

</body>

</html>