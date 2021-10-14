<?php
declare(strict_types=1);


namespace App\Presentation\Web\Form;


use App\Application\CommandBus\Command\AuthenticateUserCommand;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataMapperInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class LoginFormType
 * @package App\Presentation\Web\Form
 */
class LoginFormType extends AbstractType implements DataMapperInterface
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label'    => false,
                'required' => false,
                'attr'     => [
                    'placeholder' => 'Email',
                ],
            ])
            ->add('phone', TextType::class, [
                'label'    => false,
                'required' => false,
                'attr'     => [
                    'placeholder' => 'Phone',
                ],
            ])
            ->add('password', PasswordType::class, [
                'label'  => false,
                'mapped' => false,
                'attr'   => [
                    'placeholder' => 'Password',
                ]])
            ->setDataMapper($this);
    }

    /**
     * @param mixed $viewData
     * @param iterable $forms
     */
    public function mapDataToForms($viewData, iterable $forms): void
    {
        $forms = iterator_to_array($forms);
        $forms['phone']->setData($viewData ? $viewData->getPhone() : '');
        $forms['email']->setData($viewData ? $viewData->getEmail() : '');
        $forms['password']->setData('');
    }

    /**
     * @param iterable $forms
     * @param mixed $viewData
     */
    public function mapFormsToData(iterable $forms, &$viewData): void
    {
        $forms = iterator_to_array($forms);

        $viewData = AuthenticateUserCommand::createFromArray([
                'phone'    => $forms['phone']->getData(),
                'email'    => $forms['email']->getData(),
                'password' => $forms['password']->getData()
            ]
        );
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AuthenticateUserCommand::class,
            'empty_data' => null,
        ]);
    }
}