<?php

namespace App\Factory;

use App\Entity\Degree;
use App\Repository\DegreeRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Degree>
 *
 * @method static Degree|Proxy createOne(array $attributes = [])
 * @method static Degree[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Degree|Proxy find(object|array|mixed $criteria)
 * @method static Degree|Proxy findOrCreate(array $attributes)
 * @method static Degree|Proxy first(string $sortedField = 'id')
 * @method static Degree|Proxy last(string $sortedField = 'id')
 * @method static Degree|Proxy random(array $attributes = [])
 * @method static Degree|Proxy randomOrCreate(array $attributes = [])
 * @method static Degree[]|Proxy[] all()
 * @method static Degree[]|Proxy[] findBy(array $attributes)
 * @method static Degree[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Degree[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static DegreeRepository|RepositoryProxy repository()
 * @method Degree|Proxy create(array|callable $attributes = [])
 */
final class DegreeFactory extends ModelFactory
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
            'rncpLevel' => self::faker()->randomNumber(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Degree $degree): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Degree::class;
    }
}
