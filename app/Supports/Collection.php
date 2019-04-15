<?php

namespace App\Supports;

use IteratorAggregate;
use ArrayIterator;

class Collection implements IteratorAggregate
{
	//Protected variables
	protected $items = [];

	//Constructor function
	public function __construct(Array $items = [])
	{
		$this->items = $items;
	}

	public function get()
	{
		return 	$this->items;
	}

	public function count(){
		return count($this->items);
	}

	public function add(Array $items)
	{
		$this->items = array_merge($this->items, $items);
	}

	public function merge(Collection $collection)
	{
		/* 	The new collection merged will contain the actual collection (the first one) and the one being passed through the merge function. 
		*/
		// return new Collection(array_merge($this->get(), $collection->get()));

		return $this->add($collection->get());

		//Here, 'this' refers to the collection1
	}

	public function getIterator()
	{
		//This function is required because the IteratorAggregate class requires it 
		return new ArrayIterator($this->items);
	}
}