<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-9
 * Time: 17:03
 */

namespace hkgbi\WebBundle\Form;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use hkgbi\WebBundle\Entity\Module;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ValueType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('product','entity',array(
                'class'=>'hkgbi\WebBundle\Entity\Product',
                'choice_label'=>'name',
                'placeholder'=>'请选择基金'))
            ->add('value_date','date',array('label'=>'成立日期','widget'=>'choice','format'=>'yyyy-MM-dd','years'=>range(2015,2015,1)))
            ->add('value',null,array('label'=>'最新净值'))
            ->add('hs300',null,array('label'=>'沪深300指数'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hkgbi\WebBundle\Entity\Value',
            'csrf_protection' => false
        ));
    }

    public function getName()
    {
        return 'value';
    }

}