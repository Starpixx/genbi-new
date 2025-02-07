<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-md p-8">
        <h2 class="text-2xl font-bold text-center text-blue-900 mb-6" id="formTitle">Login</h2>
        
        <form action="#" method="POST" id="authForm">
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-900" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-900" required>
            </div>
            
            <div class="mb-4 hidden" id="nameField">
                <label class="block text-gray-700">Nama Lengkap</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-900">
            </div>
            
            <button type="submit" class="w-full bg-blue-900 text-white py-2 rounded hover:bg-blue-700 transition">Login</button>
        </form>
        
        <p class="text-center text-gray-600 mt-4">
            Belum punya akun? <a href="#" class="text-blue-900 font-bold" id="toggleForm">Daftar</a>
        </p>
    </div>
    
    <script>
        const formTitle = document.getElementById('formTitle');
        const authForm = document.getElementById('authForm');
        const toggleForm = document.getElementById('toggleForm');
        const nameField = document.getElementById('nameField');
        const submitButton = authForm.querySelector('button');
        
        toggleForm.addEventListener('click', (e) => {
            e.preventDefault();
            if (formTitle.textContent === 'Login') {
                formTitle.textContent = 'Register';
                toggleForm.textContent = 'Sudah punya akun? Login';
                nameField.classList.remove('hidden');
                submitButton.textContent = 'Daftar';
            } else {
                formTitle.textContent = 'Login';
                toggleForm.textContent = 'Belum punya akun? Daftar';
                nameField.classList.add('hidden');
                submitButton.textContent = 'Login';
            }
        });
    </script>
</body>
</html>
