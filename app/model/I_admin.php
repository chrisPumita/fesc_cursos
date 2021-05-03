<?php

interface I_admin
{
    /*Contrato para implementar la clase ADMIN*/
    public function getListaAdministradores($filtro);
    public function updateAdmin($admin);
    public function deleteAdmin($admin);
}