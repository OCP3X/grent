<?php

namespace App\Form;

use App\Entity\Righe;
use App\Entity\OffIntervento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityRepository;


class RigheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder          
            ->add('descrizione_anomalia', TextType::class, [
                'label' => 'Anomalia',
                'required'   => false,
            ])
            ->add('descrizione_intervento', TextType::class, [
                'label' => 'Intervento eseguito',
                'required'   => false,
            ])
            ->add('id_meccanico', ChoiceType::class, [
                'label' => 'Operatore',
                'required'   => false,
                'choices'  => [
                    'Scegli il meccanico' => '',
                    'BEPPE' => 'BP',
                    'MARCO' => 'MA',
                    'CRISTIAN' => 'CR',
                    'BRUNO' => 'BR',
                ],
            ])
            ->add('ore', TextType::class, [
                'label' => 'Anomalia',
                'required'   => false,
            ])
            ->add('id_off_intervento', EntityType::class, [
                'class' => OffIntervento::class,
                'required'   => false,
                'choice_label' => 'intervento', // Sostituisci con il campo appropriato
                'label' => 'Intervento da effettuare',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('oi')
                        ->orderBy('oi.ordine', 'ASC'); // Sostituisci con il campo che desideri usare per l'ordinamento
                },
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Righe::class,
        ]);
    }
}
