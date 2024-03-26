<?php

namespace App\Controller\Admin;

use App\Entity\Webuser;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Action, Actions, Crud, KeyValueStore};
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, EmailField, TextField};
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use Symfony\Component\Form\Extension\Core\Type\{PasswordType, RepeatedType};
use Symfony\Component\Form\{FormBuilderInterface, FormEvent, FormEvents};
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;




class WebuserCrudController extends AbstractCrudController
{

    public function __construct(
        public UserPasswordHasherInterface $userPasswordHasher
    ) {}


    public static function getEntityFqcn(): string
    {
        return Webuser::class;
    }
/*
    public function configureActions(Actions $actions): Actions
    {


        $viewSummary = Action::new('viewSummary')
        ->linkToRoute('task_report'
        
        , function (Webuser $wu): array {
            return [
                'tipo' => 'unico',
                'id_other_webuser' => $wu->getIdWu(),
            ];
        }
        
       );



        return $actions
            ->add(Crud::PAGE_EDIT, Action::INDEX)
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->add(Crud::PAGE_EDIT, Action::DETAIL)
            ->add(Crud::PAGE_INDEX, $viewSummary)
            ;
    }
    */

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            IdField::new('id_wu')->hideOnForm(),
            EmailField::new('email'),
            TextField::new('username'),
            ArrayField::new('roles'),
        ];

        $password = TextField::new('password')
            ->setFormType(RepeatedType::class)
            ->setFormTypeOptions([
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => '(Repeat)'],
                'mapped' => false,
            ])
            ->setRequired($pageName === Crud::PAGE_NEW)
            ->onlyOnForms()
            ;
        $fields[] = $password;

        return $fields;
    }
   



    public function createNewFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createNewFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    public function createEditFormBuilder(EntityDto $entityDto, KeyValueStore $formOptions, AdminContext $context): FormBuilderInterface
    {
        $formBuilder = parent::createEditFormBuilder($entityDto, $formOptions, $context);
        return $this->addPasswordEventListener($formBuilder);
    }

    private function addPasswordEventListener(FormBuilderInterface $formBuilder): FormBuilderInterface
    {
        return $formBuilder->addEventListener(FormEvents::POST_SUBMIT, $this->hashPassword());
    }


    private function hashPassword() {
        return function($event) {
            $form = $event->getForm();
            if (!$form->isValid()) {
                return;
            }
            $password = $form->get('password')->getData();
            if ($password === null) {
                return;
            }

            $hash = $this->userPasswordHasher->hashPassword($form->getData(), $password);
            $form->getData()->setPassword($hash);
        };
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

    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            // adds the CSS and JS assets associated to the given Webpack Encore entry
            // it's equivalent to adding these inside the <head> element:
            // {{ encore_entry_link_tags('...') }} and {{ encore_entry_script_tags('...') }}
            //->addWebpackEncoreEntry('admin-app')

            // it's equivalent to adding this inside the <head> element:
            // <link rel="stylesheet" href="{{ asset('...') }}">
            //->addCssFile('/areagrape/css/stile_areaadmin.css')
            //->addCssFile('https://example.org/css/admin2.css')

            // it's equivalent to adding this inside the <head> element:
            // <script src="{{ asset('...') }}"></script>
            //->addJsFile('build/admin.js')
            //->addJsFile('https://example.org/js/admin2.js')

            // use these generic methods to add any code before </head> or </body>
            // the contents are included "as is" in the rendered page (without escaping them)
            //->addHtmlContentToHead('<link rel="dns-prefetch" href="https://assets.example.com">')
            //->addHtmlContentToBody('<script> ... </script>')
            //->addHtmlContentToBody('<!-- generated at '.time().' -->')
        ;
    }



}


/*

class WebuserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Webuser::class;
    }

    ////////////////////////
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    ////////////////
}

*/