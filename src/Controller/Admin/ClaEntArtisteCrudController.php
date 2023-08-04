<?php

namespace App\Controller\Admin;

use App\Entity\ClaEntArtiste;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClaEntArtisteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClaEntArtiste::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('PropArtiste'),
            CollectionField::new('PropTestAvecClaEntStyle'),
            /*Champ permettant d'associer la PropTestAvecClaEntStyle dans le Formulaire des Style*/
        ];
    }



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
