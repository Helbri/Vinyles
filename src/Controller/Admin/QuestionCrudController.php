<?php

namespace App\Controller\Admin;

use App\Entity\Question;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class QuestionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Question::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Question'),

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
