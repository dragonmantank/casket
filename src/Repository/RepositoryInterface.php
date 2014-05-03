<?php
/**
 * This file is part of Casket
 *
 * @package Casket
 * @license http://opensource.org/licenses/BSD-3-Clause BSD
 */

namespace Casket\Repository;

/**
 * Interface for Repositories
 *
 * @package Casket
 */
interface RepositoryInterface
{
    /**
     * Removes an object from the storage container
     *
     * @param array $criteria
     */
    public function delete($criteria);

    /**
     * Returns all of the objects in the storage container
     *
     * @return array
     */
    public function fetchAll();

    /**
     * Returns all of the objects that match a series of criteria.
     * The criteria is entered as an array, with the key the column name and the value the value in the DB.
     *
     * @param array $criteria
     * @return array
     */
    public function fetchAllBy($criteria);

    /**
     * Return a single entry, searched on by the identifier column
     *
     * @param scalar $identifier
     * @return object|null
     */
    public function find($identifier);

    /**
     * Return a single entry, searched for by the criteria entered
     * Criteria must in in an array, with the column name the key and the DB value the value
     *
     * @param array $criteria
     * @return object|null
     */
    public function findBy($criteria);

    /**
     * Saves an object to the storage container
     * This will return the new identifier that was generated by the storage container. For example, with databases this
     * will return the insert ID.
     *
     * @param array $data
     * @return int
     */
    public function save($data);
}