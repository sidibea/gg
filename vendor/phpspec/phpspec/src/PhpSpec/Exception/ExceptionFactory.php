<?php

/*
 * This file is part of PhpSpec, A php toolset to drive emergent
 * design by specification.
 *
 * (c) Marcello Duarte <marcello.duarte@gmail.com>
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpSpec\Exception;

use PhpSpec\Exception\Wrapper\SubjectException;
use PhpSpec\Formatter\Presenter\Presenter;
use PhpSpec\Util\Instantiator;

/**
 * ExceptionFactory is responsible for creating various exceptions
 */
class ExceptionFactory
{
    /**
     * @var Presenter
     */
    private $presenter;

    /**
     * @param Presenter $presenter
     */
    public function __construct(Presenter $presenter)
    {
        $this->presenter = $presenter;
    }

    /**
     * @param string $classname
     * @param string $method
     * @param array  $arguments
     *
     * @return Fracture\NamedConstructorNotFoundException
     */
    public function namedConstructorNotFound(string $classname, string $method, array $arguments = array()): Fracture\NamedConstructorNotFoundException
    {
        $instantiator = new Instantiator();
        $subject = $instantiator->instantiate($classname);

        $message = sprintf('Named constructor %s not found.', $this->presenter->presentString($classname.'::'.$method));

        return new Fracture\NamedConstructorNotFoundException(
            $message,
            $subject,
            $method,
            $arguments
        );
    }

    /**
     * @param string $classname
     * @param string $method
     * @param array  $arguments
     *
     * @return Fracture\MethodNotFoundException
     */
    public function methodNotFound(string $classname, string $method, array $arguments = array()): Fracture\MethodNotFoundException
    {
        $instantiator = new Instantiator();
        $subject = $instantiator->instantiate($classname);
        $message = sprintf('Method %s not found.', $this->presenter->presentString($classname.'::'.$method));

        return new Fracture\MethodNotFoundException(
            $message,
            $subject,
            $method,
            $arguments
        );
    }

    /**
     * @param string $classname
     * @param string $method
     * @param array  $arguments
     *
     * @return Fracture\MethodNotVisibleException
     */
    public function methodNotVisible(string $classname, string $method, array $arguments = array()): Fracture\MethodNotVisibleException
    {
        $instantiator = new Instantiator();
        $subject = $instantiator->instantiate($classname);
        $message = sprintf('Method %s not visible.', $this->presenter->presentString($classname.'::'.$method));

        return new Fracture\MethodNotVisibleException(
            $message,
            $subject,
            $method,
            $arguments
        );
    }

    /**
     * @param string $classname
     *
     * @return Fracture\ClassNotFoundException
     */
    public function classNotFound(string $classname): Fracture\ClassNotFoundException
    {
        $message = sprintf('Class %s does not exist.', $this->presenter->presentString($classname));

        return new Fracture\ClassNotFoundException($message, $classname);
    }

    /**
     * @param mixed  $subject
     * @param string $property
     *
     * @return Fracture\PropertyNotFoundException
     */
    public function propertyNotFound($subject, $property): Fracture\PropertyNotFoundException
    {
        $message = sprintf('Property %s not found.', $this->presenter->presentString($property));

        return new Fracture\PropertyNotFoundException($message, $subject, $property);
    }

    /**
     * @param string $method
     *
     * @return SubjectException
     */
    public function callingMethodOnNonObject(string $method): SubjectException
    {
        return new SubjectException(sprintf(
            'Call to a member function %s on a non-object.',
            $this->presenter->presentString($method.'()')
        ));
    }

    /**
     * @param string $property
     *
     * @return SubjectException
     */
    public function settingPropertyOnNonObject(string $property): SubjectException
    {
        return new SubjectException(sprintf(
            'Setting property %s on a non-object.',
            $this->presenter->presentString($property)
        ));
    }

    /**
     * @param string $property
     *
     * @return SubjectException
     */
    public function gettingPropertyOnNonObject(string $property): SubjectException
    {
        return new SubjectException(sprintf(
            'Getting property %s on a non-object.',
            $this->presenter->presentString($property)
        ));
    }
}
