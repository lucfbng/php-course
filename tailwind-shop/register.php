<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Inscription</title>
    <link rel="stylesheet" href="src/output.css">
</head>

<body>
    <main class="h-screen bg-slate-800 m-auto">
        <div class="flex items-center flex-col text-white mb-10">
            <div>
                <h1>Inscription</h1>
            </div>
            <div>
                <span>Vous avez déjà un compte ? <a href="index.php">Connexion</a></span>
            </div>
        </div>
        <div class="w-1/2 m-auto text-white">
            <form action="addUser.php" method="post" class="flex flex-col gap-3 bg-slate-500 p-4 rounded-md justify-center items-center">
                E-mail :
                <input type="text" name="email" placeholder="E-mail">
                Password :
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Inscription</button>
            </form>
        </div>
    </main>
</body>

</html>