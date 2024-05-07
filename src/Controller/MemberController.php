<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'app_index')]
class MemberController extends AbstractController
{
    public function __invoke()
    {
        $jsonFilePath = $this->getParameter('kernel.project_dir') . '/src/Controller/members.json';
        $jsonData = file_get_contents($jsonFilePath);
        $data = json_decode($jsonData, true);
        return $this->render('pages/member/index.html.twig', ['members' => $data['members']]);
    }
}