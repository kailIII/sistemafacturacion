<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller {
    public function indexAction(Request $request) {
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
        ]);
    }

    public function loginAction(Request $request) {
        $helpers = $this->get("app.helpers");
        $jwt_auth = $this->get("app.jwt_auth");

        $json = $request->get("json", null);
        if ($json != null) {
            $params = json_decode($json);
            $cedula = (isset($params->cedula)) ? $params->cedula : null;
            $password = (isset($params->password)) ? $params->password : null;
            $getHash = (isset($params->gethash)) ? $params->gethash : null;
            // $emailContraint = new Assert\Email();
            // $emailContraint->message = "This email is not valid !!";
            // $validate_email = $this->get("validator")->validate($email, $emailContraint);

            $pwd = hash('sha256', $password);

            // return ($helpers->json($cedula));
            
            // if (count($validate_email) == 0 && $password != null) {
            if ($cedula != null && $password != null) {

                // return $helpers->json($cedula);
                // return $helpers->json($getHash);


                if ($getHash == null || $getHash == "false") {
                    $signup = $jwt_auth->signup($cedula, $pwd);
                } else {
                    $signup = $jwt_auth->signup($cedula, $pwd, true);
                }
                return new JsonResponse($signup);
            } else {
                return $helpers->json(array(
                            "status" => "error",
                            "data" => "Logeo no valido!!"
                ));
            }
        } else {
            return $helpers->json(array(
                        "status" => "error",
                        "data" => "Enviar datos correctos !!"
            ));
        }
    }

    public function revisarAction(Request $request) {
        $helpers = $this->get("app.helpers");

        $hash = $request->get("authorization", null);
        $check = $helpers->authCheck($hash);

        var_dump($check);
        die();
        /*
          $em = $this->getDoctrine()->getManager();
          $users = $em->getRepository('BackendBundle:User')->findAll();
         * 


          return $helpers->json($users); */
    }

}
