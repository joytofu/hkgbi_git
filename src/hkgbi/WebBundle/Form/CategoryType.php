<?php


namespace hkgbi\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('module','entity',array(
                'class'=>'hkgbi\WebBundle\Entity\Module',
                'choice_label'=>'name',
                'placeholder'=>'请选择模块'
            ))
            ->add('name','text');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hkgbi\WebBundle\Entity\Category',
        ));
    }

    public function getName()
    {
        return 'category';
    }

}