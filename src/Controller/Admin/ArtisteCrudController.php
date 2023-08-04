<?php

namespace App\Controller\Admin;

use App\Entity\Artiste;
use App\Entity\Style;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ArtisteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Artiste::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Nom'),

        ];
    }
    // public function configureFields(string $pageName)
    // {
    //     return [
    //         TextField::new('nom'),

    //     ];
    // }
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
