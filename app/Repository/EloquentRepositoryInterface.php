<?php

namespace App\Repository;


use Illuminate\Database\Eloquent\Model;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface EloquentRepositoryInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function destroy($id);

    public function find($id);

}
