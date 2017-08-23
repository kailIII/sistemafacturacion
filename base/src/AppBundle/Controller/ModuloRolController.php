<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\JsonResponse;
use BackBundle\Entity\Modulo;
use BackBundle\Entity\ModuloRol;
use BackBundle\Entity\Rol;
use BackBundle\Entity\Cargo;
use BackBundle\Entity\CargoPersona;

class ModuloRolController extends Controller {

	public function buscarAction(Request $request) {

		$helpers = $this->get("app.helpers");

		$json = $request->get("json", null);
		$params = json_decode($json);

		$hash = $request->get("authorization", null);
		$authCheck = $helpers->authCheck($hash);

		$data = array();

		if ($authCheck == true) {
			$identity = $helpers->authCheck($hash, true);
			if ($json != null) {
				
				$id_fun = (isset($params->id_fun)) ? $params->id_fun : null;

				$em = $this->getDoctrine()->getManager();

				$cargo_persona = $em->getRepository('BackBundle:CargoPersona')->findOneBy(
					array(
						"per" => $id_fun,
						"carperEstado" => "A"
						)
					);

				$cargo = $em->getRepository('BackBundle:Cargo')->findOneBy(
					array(
						"carId" => $cargo_persona->getCar()->getCarId()
						)
					);

				$modulo = $em->getRepository('BackBundle:Modulo')->findAll();

				$modulo_rol = $em->getRepository('BackBundle:ModuloRol')->findBy(
					array(
						"rol" => $cargo->getRol()->getRolId(),
						"mod" => $modulo
						)
					);

				if (count($modulo_rol) != 0) {
					return $helpers->json($modulo_rol);
					die();
					
				} else {
					$data = array(
						"status" => "error",
						"code" => 400,
						"msg" => "No puede visualizar los modulos"
						);
				}

			} else {
				$data = array(
					"status" => "error",
					"code" => 400,
					"msg" => "Por favor faltan datos"
					);
			}
		} else {
			$data = array(
				"status" => "error",
				"code" => 400,
				"msg" => "Los datos de acceso son incorrectos"
				);
		}
		return $helpers->json($data);
	}
}