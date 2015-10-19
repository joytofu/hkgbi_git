<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-9-22
 * Time: 15:23
 */

namespace hkgbi\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;


class BannerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('imageFile','vich_image',array(
                'allow_delete'=>'false',
                'required'=>false
            ))
            ->add('content',null);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hkgbi\WebBundle\Entity\Banner',
        ));
    }

    public function getName()
    {
        return 'banner';
    }

}