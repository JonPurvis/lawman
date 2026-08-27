<?php

declare(strict_types=1);

namespace JonPurvis\Lawman\PHPStan;

use Pest\Expectation;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\MethodsClassReflectionExtension;
use PHPStan\Reflection\ReflectionProvider;

/** @internal */
final readonly class ExpectationMethodsClassReflectionExtension implements MethodsClassReflectionExtension
{
    public function __construct(private ReflectionProvider $reflectionProvider) {}

    public function hasMethod(ClassReflection $classReflection, string $methodName): bool
    {
        if ($classReflection->getName() !== Expectation::class && ! $classReflection->isSubclassOf(Expectation::class)) {
            return false;
        }

        return $this->expectationMethods()->hasNativeMethod($methodName);
    }

    public function getMethod(ClassReflection $classReflection, string $methodName): MethodReflection
    {
        return $this->expectationMethods()->getNativeMethod($methodName);
    }

    private function expectationMethods(): ClassReflection
    {
        return $this->reflectionProvider->getClass(ExpectationMethods::class);
    }
}
