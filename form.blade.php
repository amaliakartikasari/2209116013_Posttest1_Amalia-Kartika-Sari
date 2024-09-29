<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenalan Yuk</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            background-color: pink;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Kenalan Yuk</h1>
        <form id="kenalanForm" action="{{ route('kenalan.submit') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit" style="background-color: pink;">Kirim</button>
        </form>
    </div>

    <script>
        function validateForm() {
            const name = document.getElementById('name').value;

            // Validasi jika nama bukan string
            if (!isNaN(name) || name.trim() === "") {
                alert("Nama harus berupa string yang valid.");
                return false; // Mencegah pengiriman form jika nama tidak valid
            }

            // Jika validasi berhasil, lanjutkan pengiriman form
            alert("Pesan berhasil dikirim!");
            return true;
        }
    </script>

    <!-- Link to Bootstrap JS (if needed) -->
    <script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
