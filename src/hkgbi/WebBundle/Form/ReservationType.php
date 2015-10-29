<?php


namespace hkgbi\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('fund_name',null,array('label'=>'基金名称'))
            ->add('department','choice',array('label'=>'请选择服务分部','choices'=>array(
                '广州分部'=>'广州分部',
                '天河分部'=>'天河分部',
                '南海分部'=>'南海分部',
                '顺德分部'=>'顺德分部',
                '肇庆分部'=>'肇庆分部',
                '成都一部'=>'成都一部',
                '成都二部'=>'成都二部')))
            ->add('name',null,array('label'=>'姓名'))
            ->add('cellphone','text',array('label'=>'手机号码'))
            ->add('email',null,array('label'=>'电子邮箱'))
            ->add('company',null,array('label'=>'单位名称'))
            ->add('fax',null,array('label'=>'传真','required'=>false))
            ->add('remark','textarea',array('label'=>'备注','required'=>false));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hkgbi\WebBundle\Entity\Reservation',
            'csrf_protection' => false
        ));
    }

    public function getName()
    {
        return 'reservation';
    }

}