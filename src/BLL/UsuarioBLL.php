<?php

use BaseBLL;
use App\Entity\User;

class UsuarioBLL extends BaseBLL
{
    public function nuevo(string $username, string $password)
    {
        $usuario = new User();
        $usuario->setUsername($username);
        $usuario->setPassword($this->encoder->hashPassword($usuario, $password));
        $usuario->setRoles(['ROLE_USER']);

        return $this->guardaValidando($usuario);
    }

    public function toArray(User $usuario): array
    {
        if (is_null($usuario))
            throw new \Exception("No existe el usuario");
        if (!($usuario instanceof User))
            throw new \Exception("La entidad no es un User");

        return [
            'id' => $usuario->getId(),
            'username' => $usuario->getUsername(),
            'roles' => $usuario->getRoles()
        ];
    }
}