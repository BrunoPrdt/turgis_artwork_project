<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\Form;

use App\Entity\Egg;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EggType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', TextType::class,[
                'required' =>false,
            ])
            ->add('title', TextType::class,[
                'required' =>false,
            ])
            ->add('description', TextType::class,[
                'required' =>false,
            ])
            ->add('img', TextType::class,[
                'required' =>false,
            ])
            ->add('category', TextType::class,[
                'required' =>false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Egg::class,
        ]);
    }
}
