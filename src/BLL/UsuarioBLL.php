<?php

namespace App\BLL;

use App\BLL\BaseBLL;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsuarioBLL extends BaseBLL
{
    protected UserPasswordHasherInterface $encoder;

    // public function __construct(UserPasswordHasherInterface $encoder)
    // {
    //     $this->encoder = $encoder;
    // }

    public function nuevo(string $username, string $email, string $password)
    {
        $usuario = new User();
        $usuario->setUsername($username);
        $usuario->setEmail($email);
        $usuario->setPassword($this->encoder->hashPassword($usuario, $password));
        $usuario->setRoles(['ROLE_USER']);

        return $this->guardaValidando($usuario);
    }

    public function toArray($usuario): array
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