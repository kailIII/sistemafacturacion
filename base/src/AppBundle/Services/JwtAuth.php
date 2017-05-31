<?php

namespace AppBundle\Services;

use Firebase\JWT\JWT;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class JwtAuth {

    public $manager;
    public $key;

    public function __construct($manager) {
        $this->manager = $manager;
        $this->key = "Sbe_facturacion";
    }

    public function signup($cedula, $password, $getHash = NULL) {
        $key = $this->key;

        $user = $this->manager->getRepository('DataBundle:AccesoUsuario')->findOneBy(
                array(
                    "accNombreusuario" => $cedula,
                    "accClaveusuario" => $password
                )
        );
        // return $user;
        $signup = false;
        if (is_object($user)) {
            $signup = true;
        }
        if ($signup == true) {
            
            // var_dump(date_timestamp_get(new \DateTime(date('Y-m-d H:i:s'))));


// var_dump(new \DateTime(date('Y-m-d H:i:s')));
            // var_dump(new \DateTime(date('Y-m-d H:i:s') + (1 * 2 * 60 * 60)));
            // var_dump(date_timestamp_get(new \DateTime(date('Y-m-d H:i:s')))+ (1 * 2 * 60 * 60));
            // var_dump(time());

            $token = array(
                "sub" => $user->getEmp()->getEmpId(),
                "aperUsuario" => $user->getAccNombreusuario(),
                "perNombre" => $user->getEmp()->getEmpNombre(),
                "perApellido" => $user->getEmp()->getEmpApellido(),
                "aperClave" => $user->getAccClaveusuario(),
                // "iat" => time(),
                // "exp" => time()+ (1 * 2 * 60 * 60)
                "iat" => date_timestamp_get(new \DateTime(date('Y-m-d H:i:s'))),
                "exp" => date_timestamp_get(new \DateTime(date('Y-m-d H:i:s')))+ (1 * 1 * 60 * 60)
            );
            $jwt = JWT::encode($token, $key, 'HS256');
            $decoded = JWT::decode($jwt, $key, array('HS256'));
            // return $helpers->json($getHash);
                // return $jwt;
            
            if ($getHash != null) {
                return $jwt;
            } else {
                return $decoded;
            }
        } else {
            return array("status" => "error", "data" => "Login failed !!");
        }
    }

    public function checkToken($jwt, $getIdentity = false) {
        $key = $this->key;
        $auth = false;
        try {
            $decoded = JWT::decode($jwt, $key, array('HS256'));
        } catch (\UnexpectedValueException $e) {
            $auth = false;
        } catch (\DomainException $e) {
            $auth = false;
        }

        if (isset($decoded->sub)) {
            $auth = true;
        } else {
            $auth = false;
        }

        if ($getIdentity == true) {
            return $decoded;
        } else {
            return $auth;
        }
    }
    
    public function cedula($cedula){
        
    }

}
