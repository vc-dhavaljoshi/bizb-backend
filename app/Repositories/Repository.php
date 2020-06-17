<?php

namespace App\Repositories;

/**
 * Class Repository.
 */
class Repository
{
    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->query()->get();
    }

    /**
     * @param $limit
     *
     * @return mixed
     */
    public function getPaginate($limit)
    {
        return $this->query()->paginate($limit);
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->query()->count();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function find($id)
    {
        return $this->query()->find($id);
    }

    /**
     * @return mixed
     */
    public function query()
    {
        return call_user_func(static::MODEL.'::query');
    }

    /**
     * @param $filePath
     *
     * @return bool
     */
    public function deleteFile($filePath)
    {
        try {
            if (is_file($filePath)) {
                unlink($filePath);

                return true;
            }
        } catch (\Exception $ex) {
            Log::error($ex);
        }
    }
}
