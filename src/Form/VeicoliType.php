<?php

namespace App\Form;

use App\Entity\Veicoli;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VeicoliType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numParco')
            ->add('descrizion')
            ->add('targa')
            ->add('idTipoVeicolo')
            ->add('idGruppoVeicolo')
            ->add('immatricolazione')
            ->add('numposti')
            ->add('dc')
            ->add('dm')
            ->add('descrizione2')
            ->add('ordine')
            ->add('proprieta')
            ->add('fittizio')
            ->add('termiche')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Veicoli::class,
        ]);
    }
}
