<?php
declare(strict_types=1);

namespace App\Presentation\Web\Controller;

use App\Application\CommandBus\Command\AuthenticateUserCommand;
use App\Presentation\Web\Form\LoginFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends MainController
{
    /**
     * @Route("/login", name="app_login", methods={"GET", "POST"})
     */
    public function login(Request $request): Response
    {
        ////////////////////////////////////////////////////////////////////////////////////////
        $form = $this->createForm(LoginFormType::class);

        return $this->render('security/login.html.twig', [
            'loginForm' => $form->createView(),
        ]);

        $form->handleRequest($request);

        //dd($form->getErrors());
        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password

            //  $command = new RegisterUserCommand($form->getData());
            $this->commandBus->handle($form->getData());


//                        $user->setPassword(
//                            $passwordEncoder->encodePassword(
//                                $user,
//                                $form->get('password')->getData()
//                            )
//                        );
//
//                        $entityManager = $this->getDoctrine()->getManager();
//                        $entityManager->persist($user);
//                        $entityManager->flush();
//
//            // do anything else you need here, like send an email
//
//            return $guardHandler->authenticateUserAndHandleSuccess(
//                $user,
//                $request,
//                $authenticator,
//                'main' // firewall name in security.yaml
//            );
        }

        //dd($form->getErrors());


        // get the login error if there is one
   //     $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
     //   $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'loginForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
}
