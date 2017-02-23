<?php
	interface Door {
		public function getDescription();
	}

	class WoodenDoor implements Door {
		public function getDescription() {
			echo 'I am a wooden door';
		}
	}

	class IronDoor implements Door {
		public function getDescription() {
			echo 'I am an iron door';
		}
	}

	interface DoorFittingExpert {
		public function getDescription();
	}

	class Welder implements DoorFittingExpert {
		public function getDescription() {
			echo 'I can fit only iron doors';
		}
	}
	
	class Carpenter implements DoorFittingExpert {
		public function getDescription() {
			echo 'I can fit only wooden doors';
		}
	}

	// Abstract Factory
	interface DoorFactory {
		public function makeDoor() : Door;
		public function makeFittingExpert() : DoorFittingExpert;
	}

	
	class WoodenDoorFactory implements DoorFactory {
		public function makeDoor() : Door {
			return new WoodenDoor();
		}

		public function makeFittingExpert() : DoorFittingExpert {
			return new Carpenter();
		}
	}
	
	class IronDoorFactory implements DoorFactory {
		public function makeDoor() : Door {
			return new IronDoor();
		}

		public function makeFittingExpert() : DoorFittingExpert {
			return new Welder();
		}
	}

	// Use
	$woddenFactory = new WoodenDoorFactory();
	$door = $woodenFactory->makeDoor();
	$expert = $woodenFactory->makeFittingExpert();

	$door->getDescription(); // Output: I am a wooden door
	$expert->getDescription(); // Output: I can only fit wooden doors
	
	$ironFactory = new IronDoorFactory();
	$door = $ironFactory->makeDoor();
	$expert = $ironFactory->makeFittingExpert();

	$door->getDescription(); // Output: I am an iron door
	$expert->getDescription(); // Output: I can only fit iron doors
?>
