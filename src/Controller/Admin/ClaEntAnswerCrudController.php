<?php

namespace App\Controller\Admin;

use App\Entity\ClaEntAnswer;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClaEntAnswerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClaEntAnswer::class;
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

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('PropAnswer'),
            AssociationField::new('PropAnsIsQuestion'),
            /*Champ permettant d'associer la PropAnsIsQuestion dans le Formulaire des Answer*/
        ];
    }
}
