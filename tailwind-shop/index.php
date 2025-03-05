<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Connexion</title>
    <link rel="stylesheet" href="src/output.css">
</head>

<body>
    <main class="h-screen bg-slate-800 m-auto">
        <div class="flex items-center flex-col text-white mb-10">
            <div>
                <h1>Connexion</h1>
            </div>
            <div>
                <span>Vous n'avez pas de compte ? <a href="register.php">Inscription</a></span>
            </div>
        </div>
        <div class="w-1/2 m-auto text-white">
            <form action="userConnect.php" method="post" class="flex flex-col gap-3 bg-slate-500 p-4 rounded-md justify-center items-center">
                E-mail :
                <input class="input validator" type="email" name="email" required placeholder="mail@site.com" />
                <div class="validator-hint">Entrez une adresse mail valide</div>
                Password :
                <input type="password" class="input validator" required placeholder="Mot de passe" name="password" />
                <button type="submit" class="btn btn-primary">Connexion</button>
            </form>
        </div>
    </main>
</body>

</html>