<?php

namespace App\Traits;

trait Filterable
{

    protected $validFilterableFields = [];

    protected $filters = [];

    protected function addFilter($field, $value)
    {
        if(!in_array($field, $this->validFilterableFields)) {
            return false;
        }
        $filterMethod = 'filterBy' . camel_case($field);
        if( method_exists( $this, $filterMethod ) ) {
            $this->$filterMethod($value);
        } else {
            $this->filters[$field] = $value;
        }
        return true;
    }

    protected function applyFiltersToQuery($query)
    {
        foreach($this->filters as $field => $value) {
            $query->where($field, $value);
        }
        return $query;
    }
}