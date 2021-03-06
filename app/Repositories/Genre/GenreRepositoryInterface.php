<?php


namespace App\Repositories\Genre;


interface GenreRepositoryInterface
{
    /**
     * Checks for the presence of a $name in the table and, if found, returns an id record.
     * Otherwise, it creates an entry with the $name and returns its id.
     *
     * @param $name
     * @return int
     */
    public function create($name);

    /**
     * return all genres
     *
     * @return array
     */
    public function getAll();
}
