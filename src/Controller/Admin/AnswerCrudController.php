<?php

namespace App\Controller\Admin;

use App\Entity\Answer;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AnswerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Answer::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Answer'),

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
