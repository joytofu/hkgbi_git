<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-9
 * Time: 17:03
 */

namespace hkgbi\WebBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FooterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('title',null)
            ->add('content',null);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hkgbi\WebBundle\Entity\Article',
        ));
    }

    public function getName()
    {
        return 'article';
    }

}