<?php

namespace App\Controller\Admin;

use App\Entity\Style;
use App\Entity\Answer;
use App\Entity\Artiste;
use App\Entity\Product;
use App\Entity\Question;
use App\Entity\ClaEntAnswer;
use App\Entity\ClaEntQuestion;
use App\Entity\ClaEntProduit;
use App\Entity\ClaEntArtiste;
use App\Entity\ClaEntStyle;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\ProductCrudController;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    /**
     * Summary of index
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(): Response
    {
        // return parent::index();

        // Changer des éléments au dessous pour faire apparaître les menus

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ProductCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    /**
     * Summary of configureDashboard
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard
     */
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Vinyles');
    }

    /**
     * Summary of configureMenuItems
     * @return iterable
     */
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud(
            'Produit',
            // 'fas fa-list', recherche avec "list"
            'fab fa-product-hunt', //recherche avec "product" dans Font Awesome Gallery
            // 'fas fa-p',
            Product::class
        );
        yield MenuItem::linkToCrud(
            'Artiste',
            // 'fas fa-list',
            'fas fa-users', //recherche avec "users" dans F A G
            Artiste::class
        );
        yield MenuItem::linkToCrud(
            'Style',
            // 'fas fa-list', 
            'fas fa-music', //recherche avec "music" dans F A G
            Style::class
        );
        yield MenuItem::linkToCrud(
            'Question',
            // 'fas fa-list', 
            'fas fa-question', //recherche avec "question" dans F A G
            Question::class
        );
        yield MenuItem::linkToCrud(
            'Answer',
            // 'fas fa-list', 
            'fab fa-wordpress', //recherche avec "music" dans F A G
            Answer::class
        );
        yield MenuItem::linkToCrud(
            'NClaEntQuestion',
            // 'fas fa-list', 
            'fas fa-question', //recherche avec "question" dans F A G
            ClaEntQuestion::class
        );
        yield MenuItem::linkToCrud(
            'NClaEntAnswer',
            // 'fas fa-list', 
            'fab fa-wordpress', //recherche avec "music" dans F A G
            ClaEntAnswer::class
        );
        yield MenuItem::linkToCrud(
            'NClaEntProduit',
            // 'fas fa-list', recherche avec "list"
            'fab fa-product-hunt', //recherche avec "product" dans Font Awesome Gallery
            // 'fas fa-p',
            ClaEntProduit::class
        );
        yield MenuItem::linkToCrud(
            'NClaEntArtiste',
            // 'fas fa-list',
            'fas fa-users', //recherche avec "users" dans F A G
            ClaEntArtiste::class
        );
        yield MenuItem::linkToCrud(
            'NClaEntStyle',
            // 'fas fa-list', 
            'fas fa-music', //recherche avec "music" dans F A G
            ClaEntStyle::class
        );

        // Explication de la ligne de commande de cette ligne de code par recopiage et écriture de commmentaires sur la ligne copiée. yield MenuItem::linkToCrud('Etiquette pour le lien du menu', 'icon qui va s'afficher', Entitée que je veux gérer::class); 
    }
}
