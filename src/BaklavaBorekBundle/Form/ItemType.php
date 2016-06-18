<?php
/**
 * Created by PhpStorm.
 * User: udogan
 * Date: 18.06.2016
 * Time: 00:22
 */

namespace BaklavaBorekBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("quantity", 'integer', array(
                "label" => false
            ))
            ->add("measurement", 'entity', array(
                "class" => 'BaklavaBorekBundle:Measurement',
                "label" => false
            ))
            ->add("product", 'entity', array(
                "class" => 'BaklavaBorekBundle:Product',
                "label" => false
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BaklavaBorekBundle\Entity\Item'
        ));
    }
}