<?php
declare(strict_types=1);

namespace App\Presentation\Web\Form;

use App\Application\CommandBus\Command\RegisterUserCommand;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataMapperInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType implements DataMapperInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label'    => false,
                'required' => false,
                'attr'     => [
                    'placeholder' => 'Username',
                    'autofocus'   => true,
                    'required'    => false
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr'  => [
                    'placeholder' => 'Email',
                ],
            ])
            ->add('phone', TextType::class, [
                'label'  => false,
                'mapped' => false,
                'attr'   => [
                    'placeholder' => 'Phone',
                ],
            ])
            ->add('password', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'label'       => false,
                'mapped'      => false,
                'attr' => [
                    'placeholder' => 'Password',
                ]])
            ->setDataMapper($this)
            /*->add('password', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'label'       => false,
                'mapped'      => false,
                'attr' => [
                  'placeholder' => 'Password',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min'        => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max'        => 4096,
                    ]),
                ],
            ])*/

            /* ->add('agreeTerms', CheckboxType::class, [
                 'mapped'      => false,
                 'constraints' => [
                     new IsTrue([
                         'message' => 'You should agree to our terms!11111.',
                     ]),
                 ],
             ])*/
        ;
    }

    public function mapDataToForms($viewData, iterable $forms): void
    {
        $forms = iterator_to_array($forms);
        $forms['username']->setData($viewData ? $viewData->getUsername() : '');
        $forms['phone']->setData($viewData ? $viewData->getPhone() : '');
        $forms['email']->setData($viewData ? $viewData->getEmail() : '');
        $forms['password']->setData('');
    }

    public function mapFormsToData(iterable $forms, &$viewData)
    {
        $forms = iterator_to_array($forms);

        $viewData = RegisterUserCommand::createFromArray([
                'username' => $forms['username']->getData() ?: null,
                'phone'    => $forms['phone']->getData(),
                'email'    => $forms['email']->getData(),
                'password' => $forms['password']->getData()
            ]
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RegisterUserCommand::class,
            'empty_data' => null,
        ]);
    }
}
