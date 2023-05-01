<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/table.css">
    <title>Etudiant</title>

</head>

<body>
    <header>
        <h1>Etudiant APP</h1>
        <button id="addStudent">Ajouter une Etudiant</button>
    </header>
    <main>
        <div id="modal" class="hide">
            <form id="addStudentForm" action="" method="POST" class="hide">
                <label class="close" for="">x</label>
                <label for="matricule">
                    Matricule
                    <input type="text" name="matricule" id="matricule">
                </label>
                <label for="nom">
                    Nom
                    <input type="text" name="nom" id="nom">
                </label>
                <label for="telephone">
                    Téléphone
                    <input type="tel" name="telephone" id="telephone">
                </label>
                <button type="submit">Enregistrer</button>
            </form>
        </div>

        <section>
            <h1>LISTE ETUDIANTS</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>GLO300</td>
                            <td>Salim Sama</td>
                            <td>+237639029346</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>GLO301</td>
                            <td>mabom loic</td>
                            <td>+237639638493</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>GLO302</td>
                            <td>mafock carmelle</td>
                            <td>+237639027346</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>GLO303</td>
                            <td>banana kong</td>
                            <td>-+237634929346</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="./js/index.js"></script>
</body>

</html>