<?php

namespace App\Form;

use App\Entity\Annonce;
use App\Entity\Commentaire;
use App\Entity\user;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cmnt')
            ->add('UserID', EntityType::class, [
                'class' => user::class,
'choice_label' => 'id',
            ])
            ->add('AnnonceID', EntityType::class, [
                'class' => Annonce::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
