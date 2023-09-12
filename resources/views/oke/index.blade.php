<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        /* CSS internal dimulai di sini */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.hdqwalls.com%2Fwallpapers%2Fanime-stairs-to-home-4k-b4.jpg&f=1&nofb=1&ipt=0b8f68f689ebe91ee0e398fc228867f157bd302d4834bab6e90174a8efdb8152&ipo=images');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        header {
            background-color: #000000a2;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 36px;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            padding: 50px;
            text-align: center;
            max-width: 500px;
            margin: auto;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #3498db;
        }

        .login-btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #000000a2;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        /* CSS internal berakhir di sini */
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Rumah Mewah</h1>
    </header>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="text" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button class="login-btn" type="submit">Masuk</button>
        </form>
    </div>
    <footer>
        &copy; Pilih Rumah Terbaik Anda Hanya Disini.
    </footer>
</body>
</html>
