<?php

namespace App\Controller\Admin;

use App\Entity\ClaEntProduit;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClaEntProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClaEntProduit::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            MoneyField::new('price')->setCurrency('EUR'), //price correspond à $price dans l'entité product
            TextField::new('PropProduit'), //PropProduit correspond à $PropProduit dans l'entité product

            // Can't get a way to read the property "description" in class "App\Entity\Product".
            //Soit: 
            //Impossible de trouver un moyen de lire la propriété "description" dans la classe "App\Entity\Product".
            //Même raison pour les deux autres.
        ];
    }
    //fin élément rajouté
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
