<?php

function login()
{

    return '<div class="modal fade" id = "connexion" >
        <div class="modal-dialog modal-lg" >
            <div class="modal-content" >
                <div class="modal-header" >
                    <h4 class="modal-title" > Connexion</h4 >
                    <button type = "button" class="close" data - dismiss = "modal" >&times;</button >
                </div >
                <!--Modal body-->
                <div class="modal-body" >
                    <div class="container" style = "height: 100%" ><br >
                        <form action = "../backend/Clogin.php" method = "post" >
                            <div class="form-group" >
                                <label for="email" > Email address:</label >
                                <input type = "email" class="form-control" placeholder = "Enter email" id = "email" name = "Email" >
                            </div >
                            <div class="form-group" >
                                <label for="pwd" > Password:</label >
                                <input type = "password" class="form-control" placeholder = "Enter password" id = "pwd" name = "Mdp" >
                            </div >
                            <button type = "submit" name = "formconnexion" class="btn btn-primary" > Submit</button >
                        </form >
                    </div >
                </div >
    
                <!--Modal footer-->
                <div class="modal-footer" >
                    <button type = "button" class="btn btn-secondary" data - dismiss = "modal" > Close</button >
                </div >
    
            </div >
        </div >
    </div >';
}