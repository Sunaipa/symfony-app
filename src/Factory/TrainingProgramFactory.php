<?php

namespace App\Factory;

use App\Entity\TrainingProgram;
use App\Repository\TrainingProgramRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<TrainingProgram>
 *
 * @method static TrainingProgram|Proxy createOne(array $attributes = [])
 * @method static TrainingProgram[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static TrainingProgram|Proxy find(object|array|mixed $criteria)
 * @method static TrainingProgram|Proxy findOrCreate(array $attributes)
 * @method static TrainingProgram|Proxy first(string $sortedField = 'id')
 * @method static TrainingProgram|Proxy last(string $sortedField = 'id')
 * @method static TrainingProgram|Proxy random(array $attributes = [])
 * @method static TrainingProgram|Proxy randomOrCreate(array $attributes = [])
 * @method static TrainingProgram[]|Proxy[] all()
 * @method static TrainingProgram[]|Proxy[] findBy(array $attributes)
 * @method static TrainingProgram[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static TrainingProgram[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static TrainingProgramRepository|RepositoryProxy repository()
 * @method TrainingProgram|Proxy create(array|callable $attributes = [])
 */
final class TrainingProgramFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'label' => self::faker()->text(),
            'duration' => self::faker()->randomNumber(),
            'degree'=>DegreeFactory::random(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(TrainingProgram $trainingProgram): void {})
        ;
    }

    protected static function getClass(): string
    {
        return TrainingProgram::class;
    }
}
