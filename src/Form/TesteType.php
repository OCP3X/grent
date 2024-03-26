<?php

namespace App\Form;

use App\Entity\Teste;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TesteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tipodoc', ChoiceType::class, [
                'choices'  => [
                    'OLI' => 'OLI',
                    'OLE' => 'OLE',
                ],
            ])
            ->add('numero_doc', IntegerType::class,[
                'required' => false,
            ])
            ->add('data_doc', DateType::class, [ 
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'js-datepicker'],
                'format' => 'dd/MM/yyyy',
                ])
            ->add('id_veicolo')
            ->add('tipo_intervento', ChoiceType::class, [
                'label'=>'Manutenzione',
                'choices'  => [
                    'Programmata' => 'Programmata',
                    'Straordinaria' => 'Straordinaria',
                ],
            ])
            ->add('km_attuali', IntegerType::class,[
                'label' => 'KM Attuali',
                'required' => false,
            ])

        ;
/*

 ->add('date_entree', DateType::class, [ 
        'widget' => 'single_text',
                  'html5' => false,
                  'attr' => ['class' => 'js-datepicker'],
        ])



            ->add('state')        ->add('data_creazione')
            ->add('data_modifica')
            ->add('utente_creazione')
            ->add('utente_modifica')
*/
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Teste::class,
        ]);
    }
}
