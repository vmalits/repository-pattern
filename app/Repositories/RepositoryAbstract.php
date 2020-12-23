<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;

abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $entity;

    public function __construct()
    {
        $this->entity = $this->resolveEntity();
    }

    abstract public function entity();

    public function resolveEntity()
    {
        return app()->make($this->entity());
    }

    public function all()
    {
        return $this->entity->all();
    }

    public function find(int $id)
    {
        return $this->entity->find($id);
    }

    public function findWhere(string $column, $value)
    {
        return $this->entity->where($column, $value)->get();
    }

    public function findWhereFirst(string $column, $value)
    {
        return $this->entity->where($column, $value)->first();
    }

    public function create(array $data)
    {
        return $this->entity->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->find($id)->update($data);
    }

    public function delete(int $id)
    {
        return $this->find($id)->delete();
    }
}
