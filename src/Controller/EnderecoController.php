<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Endereco;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class EnderecoController extends AbstractController
{
    /**
     * @Route("/endereco", name="endereco")
     */
    public function index()
    {
    	$endereco = $this->getDoctrine()
	        ->getRepository(Endereco::class)
	        ->findAll();

        return $this->render('endereco/index.html.twig', [
            'controller_name' => 'EnderecoController',
            'enderecos' => $endereco,
        ]);
    }

    public function new()
    {
    	return $this->render('endereco/new.html.twig');
    }

    public function store(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $submittedToken = $request->request->get('token');
    	$endereco = new Endereco();

        if($this->isCsrfTokenValid('form_endereco', $submittedToken))
        {
            // Update
            if($request->get('id') > 0)
            {
                $endereco = $this->getDoctrine()
                    ->getRepository(Endereco::class)
                    ->find($request->get('id'));
            }

            $endereco->setQuadra($request->get('quadra'));
            $endereco->setNumero($request->get('numero'));
            $endereco->setObservacao($request->get('observacao'));

            $entityManager->persist($endereco);
            $entityManager->flush();
        }

        return $this->redirectToRoute('endereco_index');
    }

    public function show($id): Response
    {
        $endereco = $this->getDoctrine()
            ->getRepository(Endereco::class)
            ->find($id);

        return $this->render('endereco/show.html.twig', [
            'endereco' => $endereco,
        ]);
    }

    public function edit($id): Response
    {
        $endereco = $this->getDoctrine()
            ->getRepository(Endereco::class)
            ->find($id);

        return $this->render('endereco/edit.html.twig', [
            'endereco' => $endereco
        ]);
    }

    public function delete(Request $request): Response
    {
        $endereco = $this->getDoctrine()
            ->getRepository(Endereco::class)
            ->find($request->get('id'));

        if ($this->isCsrfTokenValid('delete'.$endereco->getId(), $request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($endereco);
            $entityManager->flush();
        }

        return $this->redirectToRoute('endereco_index');
    }
}
