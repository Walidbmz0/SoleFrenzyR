<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Brand;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Transporter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;



class DashboardController extends AbstractDashboardController
{   
    // #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SoleFrenzy - Administration')
            ->renderContentMaximized();
            
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa-users', User::class);
        yield MenuItem::linkToCrud('Catégories', 'fa-list', Category::class);
        yield MenuItem::linkToCrud('Marques', 'fa-list', Brand::class);
        yield MenuItem::linkToCrud('Produits', 'fa-list', Product::class);
        yield MenuItem::linkToCrud('Transporteurs', 'fa-list', Transporter::class);

    }
}
