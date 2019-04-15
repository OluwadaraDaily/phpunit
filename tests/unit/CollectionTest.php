<?php
	class CollectionTest extends \PHPUnit\Framework\TestCase
	// require __DIR__ . "/../app/Support/Collection.php"
	// require '/../app/Support/Collection.php'; 
	{

		public function testEmptyCollectionThatReturnsNoItem()
		{
			//Instantiate the collection class
			$collection = new App\Supports\Collection;

			//Implement a method
			$this->assertEmpty($collection->get());
		}

		public function testCorrectNumberReturned()
		{
			$collection = new App\Supports\Collection([
				'one', 'two', 'three'
			]);

			$this->assertEquals(3, $collection->count());		
		}

		public function testItemsReturnedEqualsItemsPassedIn()
		{
			$collection = new App\Supports\Collection([
				'one', 'two', 'three'
			]);

			$this->assertCount(3, $collection->get());
			
			//Checking if each item equals to the passed value
			$this->assertEquals($collection->get()[0], 'one');
			$this->assertEquals($collection->get()[1], 'two');
			$this->assertEquals($collection->get()[2], 'three');


		}

		public function testCollectorIsInstanceOfIteratorAggregate()
		{
			/*Here we are checking of collector is an instance of an iterator aggregate. We want to be able to iterate through the collector class like as if it was  an array of sorts */

			$collection = new App\Supports\Collection;

			$this->assertInstanceOf(IteratorAggregate::class, $collection);
			/*Iterator Aggregate is an interface that allows us to iterate throught the collection class
			*/
		}

		public function testCollectionCanBeIterated()
		{
			//Create a collection class that has an array
			$collection = new App\Supports\Collection([
				'one', 'two', 'three', 'four'
			]);

			//Create an empty array
			$items = [];

			//Foreach loop to iterate through the collection class
			foreach ($collection as $item) {
				# code...
				//Assigning each element in the collection class to empty array
				$items[] = $item;
			}

			//Checking the array to see if the foreach worked.
			$this->assertCount(4, $items);

			//Checking that each time the getIterator function is called, it returns an ArrayIterator. 
			$this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
		}

		public function testCollectionCanBeMergedWithAnotherCollection()
		{
			$collection1 = new App\Supports\Collection([
				'one', 'two'
			]);

			$collection2 = new App\Supports\Collection([
				 'three', 'four', 'five', 'six'
			]);

			$collection1->merge($collection2);

			$this->assertCount(6, $collection1->get());
			$this->assertEquals(6, $collection1->count());
		}

		// public function testCanAddToExistingCollection()
		// {
		// 	$collection = new App\Supports\Collection;
		// 	$collection->add(['three']);

		// 	$this->assertEquals(3, $collection->count());
		// 	$this->assertCount(3, $collection->get());
		// }

		// public function testReturnsJSON()
		// {
			
		// }
	}