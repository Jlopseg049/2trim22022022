<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserEditType;
use App\Security\UserAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class UserController extends AbstractController
{
    #[Route('user/edit/{id}', name: 'editUser')]
        public function editUset(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager, string $dirFoto, int $id): Response
        {
            $user = $entityManager->getRepository(User::class)->find($id);
            $form = $this->createForm(UserEditType::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

            if ($foto = $form['foto']->getData()){
                $filename = bin2hex(random_bytes(length:6)) . '.' . $foto->guessExtension();
                try {
                    $foto->move($dirFoto,$filename);
                } catch (FileException $th) {
                }
                $user->setFoto($filename);
            };

                $user->setUsername($form->get('username')->getData());
                $user->setFoto($form->get('foto')->getData());
                $user->setName($form->get('name')->getData());  
                $user->setAp1($form->get('ap1')->getData());
                $user->setAp2($form->get('ap2')->getData());

              
                $entityManager->persist($user);
                $entityManager->flush();

                return $userAuthenticator->authenticateUser(
                    $user,
                    $authenticator,
                    $request
                );
            }

            return $this->render('usuarios/edit.html.twig', [
                'editUserForm' => $form->createView(),
            ]);
        }
}
