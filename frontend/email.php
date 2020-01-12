<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php';?>

        <div class="container" style = "height: 100%" ><br >
            <form action = "../backend/Cemail.php" method = "post" >
                <label for="sele" class="col-md-4" > Sélectionner Equipe:</label >
                <div style = "flex-direction: row; display: flex; " >
                    <select name = "equipe" class="custom-select mb-6 col-md-4" style = "width: 30%" >
                        <option> </option >
                        <option value = "1" > Nationale 2 Masculine </option >
                        <option value = "3" > Régionale Féminine </option >
                        <option value = "4" > PRÉ NATIONALE MASCULINE </option >
                        <option value = "5" > RÉGIONALE MASCULINE </option >
                        <option value = "6" > RDÉPARTEMENTALE FÉMININE </option >
                        <option value = "7" > M17 GARÇONS </option >
                        <option value = "8" > M17 FILLES </option >
                        <option value = "9" > M15 GARÇONS </option >
                        <option value = "10" > M15 FILLES </option >
                        <option value = "11" > M13 FILLES ET GARÇONS </option >
                        <option value = "12" > ÉCOLE DE VOLLEY </option >
                        <option value = "13" > FSGT 1 </option >
                        <option value = "14" > FSGT 2 </option >
                        <option value = "15" > LOISIRS </option >
                        <option value = "16" > FSGT 2 </option >
                        <option value = "17" > LOISIRS </option >
                    </select>
                </div >
                <div class="form-group" >
                    <label for="tete" > Titre:</label >
                    <input type = "text" class="form-control" placeholder = "Entrer titre du mail" id = "tete" name = "tete" >
                </div >

                <div class="form-group" >
                    <label for="contenue" > Contenue du mail:</label >
                    <input type = "text" class="form-control" placeholder = "Contenue du mail" id = "contenue" name = "contenue" style = "height: 20%" >
                </div >
                <button type = "submit" class="btn btn-warning" > Submit</button >
            </form >
        </div >
        <?php include_once 'footer.php' ?>
    </body>
</html>