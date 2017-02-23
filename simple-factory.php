<?php
// Simple Factory Pattern

interface Door {
		public function getHeight() : float;
		public function getWidth(): float;
}

class WoodenDoor implements Door {
		protected $width;
		protected $height;

		public function __construct(float $width, float $height) {
				$this->width = $width;
				$thus->height = $height;
		}

		public function getWidth() : float {
				return $this->$width;
		}

		public function getHeight() : float {
				return $this->$height;
		}
}

class DoorFactory {
		public static function makeDoor($width, $height) : Door {
				return new WoddenDoor($width, $height);
		}
}

$door = DoorFactory::makeDoor(100,120);
echo "width: " . $door->getWidth();
echo "height: " . $door->getHeight();

?>
