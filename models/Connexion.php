<?php
    function get_user_cookie($id)
    {
        global $bdd;
        
        $employe = $bdd->prepare("SELECT * FROM employe WHERE IdEmploye=:id");
        $employe->bindValue(':id',$id,PDO::PARAM_INT);
        $employe->execute();
        return $employe->fetch();
    }

    function get_Utilisateur($params)
    {
        global $bdd;
        
        $employe = $bdd->prepare("SELECT IdEmploye, LoginEmploye,MdpEmploye,rang_salarie FROM employe WHERE LoginEmploye=:LoginEmploye AND MdpEmploye=:MdpEmploye");
        $employe->bindValue(':LoginEmploye', $params['LoginEmploye'],PDO::PARAM_STR);
        $employe->bindValue(':MdpEmploye', sha1($params['MdpEmploye']),PDO::PARAM_STR); 
        $employe->execute();
        return $employe->fetch();
    }




