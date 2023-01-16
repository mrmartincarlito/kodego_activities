<?php
include_once ("../builder/IBase.php");

/**
 * These are commonly used when doing CRUD
 * 
 */
class BaseController implements IBase
{
    private $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * Select all
     *
     * @return void
     */
    public function index()
    {
        return $this->object->get();
    }

    /**
     * Insert
     *
     * @param [type] $data
     * @return void
     */
    public function store($data)
    {
        return $data->save();
    }

    /**
     * Select only 1 where id = id
     *
     * @param [type] $id
     * @return void
     */
    public function show($id)
    {
        return $this->object->byId($id);
    }

    /**
     * Update a record
     *
     * @param [type] $id
     * @param [type] $data
     * @return void
     */
    public function update($id, $data)
    {
        $current = $this->object->byId($id);

        foreach ($data as $key => $value)
        {
            $current->{$key} = $value;
        }

        $current->save();
        
        return $current;
    }

    /**
     * Delete a record
     *
     * @param [type] $id
     * @return void
     */
    public function destroy($id)
    {
        $current = $this->object->byId($id);
        return $current->delete();
    }
}