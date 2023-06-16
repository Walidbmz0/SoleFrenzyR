<?php

namespace App\Controller\Admin;


use App\Entity\Brand;
use App\Entity\Category;
use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setEntityLabelInPlural('Produits')
        ->setEntityLabelInSingular('Produit')

        ->setPageTitle("index","SoleFrenzy - Administration des produits")
        ->setPaginatorPageSize(20)
        ;
            
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
            ->hideOnForm(),
            AssociationField::new('Brand')->autocomplete(),
            AssociationField::new('Category')->autocomplete(),
            TextField::new('name'),
            TextField::new('description'),
            TextField::new('attachmentFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            ImageField::new('attachment')->setBasePath('/uploads/attachments')->onlyOnIndex(),
            MoneyField::new('price')->setCurrency('EUR'),
            DateField::new('CreatedAt')->hideOnForm()
            ->hideOnIndex(),
            TextField::new('size'),
            TextField::new('color'),
            
            
        ];
    }
    
}
