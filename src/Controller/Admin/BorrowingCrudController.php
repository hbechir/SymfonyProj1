<?php

namespace App\Controller\Admin;

use App\Entity\Borrowing;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;



class BorrowingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Borrowing::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        $crud = Crud::new();
        return $crud
            ->setPaginatorPageSize(10)
            ->setPaginatorRangeSize(4);
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            IdField::new('id')->hideOnForm(),
            AssociationField::new('student'),
            AssociationField::new('book'),
            DateField::new('dateBorrowed'),
            BooleanField::new('bookReturned'),
        ];
    }
    
    
}
