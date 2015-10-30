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


class CertificateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('title',null,array('label'=>'标题'))
            ->add('imageFile','vich_image',array(
                'allow_delete'=>'false',
                'required'=>false
            ))
            ->add('link',null,array('label'=>'链接'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hkgbi\WebBundle\Entity\Certificate',
            'csrf_protection' => false
        ));
    }

    public function getName()
    {
        return 'certificate';
    }

}