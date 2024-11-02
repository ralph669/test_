<?php

namespace App\Controller;

use App\Entity\Alumno;
use App\Form\AlumnoType;
use App\Repository\AlumnoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AlumnoController extends AbstractController
{
    #[Route('/alumno', name: 'app_alumno')]
    public function index(Request $request, EntityManagerInterface $entityManagerInterface, AlumnoRepository $alumnoRepository): Response
    {

        $alumno = new Alumno();
        $form = $this->createForm(AlumnoType::class, $alumno);

        $form ->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            //    $data = $form->getData();
                $archivo = $form['foto']->getData();
                $destino = $this->getParameter('kernel.project_dir').'/public/img';
                $archivo->move($destino, $archivo->getClientOriginalName());
                $alumno->setFoto($archivo->getClientOriginalName());

            $entityManagerInterface->persist($alumno);
            $entityManagerInterface->flush();

            return $this->redirectToRoute('app_alumno');
        }

        return $this->render('alumno/index.html.twig', [
            'form' => $form,
            'alumnos' => $alumnoRepository->findAll()

        ]);
    }
}
