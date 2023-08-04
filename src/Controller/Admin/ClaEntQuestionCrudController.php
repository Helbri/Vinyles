<?php

namespace App\Controller\Admin;

use App\Entity\ClaEntQuestion;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClaEntQuestionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClaEntQuestion::class;
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
            TextField::new('PropQuest'),
            // ArrayField::new('chpClaEntQAnswers'),
        ];
    }
}
