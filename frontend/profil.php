
<?php
session_start();
function statutToString()
{
    if ($_SESSION["Status"] == 0) {
        return 'Non-licencié';
    } else if ($_SESSION["Status"] == 1)  {
        return 'Licencié';
    }
    else if ($_SESSION["Status"] == 2){
        return 'Administrateur';
    }
}

//if ($_SESSION['login'] = "ok")
//    $html = '<div>';
//    $html .= '<p>Prenom</p>';
//    $html .= '<p>' . $_SESSION["Prenom"] . '</p>';
//    $html .= '</div>';
//    $html .= '<div>';
//    $html .= '<p>E-mail</p>';
//    $html .= '<p>' . $_SESSION["Email"] . '</p>';
//    $html .= '</div>';
//    $html .= '<div>';
//    $html .= '<p>Statut</p>';
//    $html .= '<p>' . statutToString() . '</p>';
//    $html .= '</div>';
//    echo $html;
function profil(){
    echo'
        <table class="table" style="width: 100%">
            <thead class="thead-dark">
            <tr>
                <th>Prenom</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>'.$_SESSION["Prenom"].' </td>
                </tr>
                </tbody>
                <thead class="thead-dark">
                <tr>
                    <th>Nom</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> '. $_SESSION["Nom"] .' </td>
                </tr>
                </tbody>
                <thead class="thead-dark">
                <tr>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>' . $_SESSION["Email"]. '</td>
                </tr>
                </tbody>
                <thead class="thead-dark">
                <tr>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>';
    echo statutToString() . ' </td>
                </tr>
                </tbody>
                <thead class="thead-dark">
                <tr>
                    <th> Date de naissance </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>' . $_SESSION["DateN"]. ' </td>
                </tr>
                </tbody>
                </table>
';
}

?>
