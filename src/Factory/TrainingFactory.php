<?php

namespace App\Factory;

use App\Entity\Training;
use App\Repository\TrainingRepository;
use Proxies\__CG__\App\Entity\TrainingCenter;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Training>
 *
 * @method static Training|Proxy createOne(array $attributes = [])
 * @method static Training[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Training|Proxy find(object|array|mixed $criteria)
 * @method static Training|Proxy findOrCreate(array $attributes)
 * @method static Training|Proxy first(string $sortedField = 'id')
 * @method static Training|Proxy last(string $sortedField = 'id')
 * @method static Training|Proxy random(array $attributes = [])
 * @method static Training|Proxy randomOrCreate(array $attributes = [])
 * @method static Training[]|Proxy[] all()
 * @method static Training[]|Proxy[] findBy(array $attributes)
 * @method static Training[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Training[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static TrainingRepository|RepositoryProxy repository()
 * @method Training|Proxy create(array|callable $attributes = [])
 */
final class TrainingFactory extends ModelFactory
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
            'startDate' => self::faker()->datetime(),
            'endDate' => self::faker()->datetime(),
            'trainingProgram'=>TrainingProgramFactory::random(),
            'trainingCenter'=>TrainingCenterFactory::random()

        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Training $training): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Training::class;
    }
}
