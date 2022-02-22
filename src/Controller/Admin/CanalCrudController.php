<?php

namespace App\Controller\Admin;

use App\Entity\Canal;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

class CanalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Canal::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('Author'),
            TextField::new('Nombre'),
            TextEditorField::new('Descripcion'),
            MoneyField::new('Precio')
                ->setCurrency('EUR')
                ->setCustomOption('storedAsCents', false)
        ];
    }
    
}
