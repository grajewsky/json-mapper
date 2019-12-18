<?php
namespace JsonMapper\Core;

use Psr\Container\ContainerInterface;
use JsonMapper\Exceptions\ContainerNotFoundException;
use JsonMapper\Exceptions\ContainerElementNotFoundException;

final class Container implements ContainerInterface 
{
    /** 
     * @var self
     */
    private static $instance;

    /** 
     * @var array
     */
    private $instances = [];

    /** 
     * @param string $abstract
     * @param mixed $concrete
     * 
     * @return void
     */
    public function set(string $abstract, $concrete = null): void 
    {
        if ($concrete == null) {
            $concrete = $abstract;
        }
        $this->instances[$abstract] = $abstract;
    }
    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     *
     * @return mixed Entry.
     */
    public function get($id) 
    {
        if ($this->has($id)) {
            return $this->instances[$id];
        }

        throw new ContainerElementNotFoundException();
    }

    /**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
     * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return bool
     */
    public function has($id) 
    {
        return array_key_exists($id, $this->instances);
    }


    public static function instance(): self 
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

