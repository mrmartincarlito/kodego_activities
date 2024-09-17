<?php

/**
 * Interface of a CRUD
 */
interface IBase
{
    function index();

    function store($data);

    function show($id);

    function update($id, $data);

    function destroy($id);
}